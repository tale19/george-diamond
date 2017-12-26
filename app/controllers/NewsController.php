<?php
/**
 * Created by PhpStorm.
 * User: Stefan Tatic
 * Date: 12/24/2017
 * Time: 10:49 PM
 */

namespace App\Controllers;
use App\Core\App;
use App\Core\Request;
use App\Models\News;

class NewsController
{
    public function news()
    {
        $pageNumber = Request::newsPageNumber();

        // set the maximum number of news to be rendered to a page
        $newsDisplayLimit = 5;
        // determine the number of news in the DB
        $newsCount = count(App::use('query')->selectAll('news2'));


        // last displayable page (based on display limit)
        if ($newsCount % $newsDisplayLimit > 0) {
            $lastPage = floor($newsCount / $newsDisplayLimit) + 1 ;
        } elseif ($newsCount % $newsDisplayLimit == 0) {
            $lastPage = floor($newsCount / $newsDisplayLimit);
        }

        // *** IF PAGE COUNT IS OMMITED OR ZERO, REDIRECT TO THE FIRST PAGE ***
        if ($pageNumber == 0 || $pageNumber == '') {
            header('Location: ' . App::use('url') . 'news/1');
        }

        // *** IF LARGER NUMBER THAN PAGE COUNT IS GIVEN, REDIRECT TO THE LAST PAGE ***
        if ($pageNumber > $lastPage) {
            header('Location: ' . App::use('url') . 'news/' . $lastPage);
        }

        // *** FETCH THE NEWS TO BE DISPLAYED ON EACH PAGE ***
        $displayedNews = App::use('query')->selectDescending(
            'news2', // $tableName
            News::class, //$intoClass
            ($pageNumber * $newsDisplayLimit) - $newsDisplayLimit, // $start
            $newsDisplayLimit // $limit
        );

        return view('news', compact('displayedNews', 'pageNumber', 'lastPage'));

    }

    public function article()
    {
        $article = App::use('query')->selectRow('news2', Request::articleId(), News::class)[0];

        return view('article', compact('article'));

    }

    public function search()
    {
        $searchQuery = $_GET;
//        var_dump($searchQuery); die;
        if (! isset($searchQuery['q'])) {
            throw new Exception("Search parameter not set.");
        } else {
            $searchResults = App::use('query')->search($searchQuery['q'], 'news2', News::class);
//            var_dump($searchResults);die;
            return view('search', compact('searchResults'));
        }

    }
}