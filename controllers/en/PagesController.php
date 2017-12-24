<?php
/**
 * Created by PhpStorm.
 * User: Stefan Tatic
 * Date: 12/24/2017
 * Time: 6:31 PM
 */

class PagesController
{
    public static function home()
    {
        require 'views/en/index.view.php';
    }

    public static function bio()
    {
        require 'views/en/bio.view.php';
    }

    public static function shows()
    {
        require 'views/en/shows.view.php';
    }

    public static function news()
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

        require 'views/en/news.view.php';

    }

    public static function article()
    {
        $article = App::use('query')->selectRow('news2', Request::articleId(), News::class)[0];

        require 'views/en/article.view.php';

    }

    public static function photos()
    {

    }

    public static function videos()
    {
        require 'views/en/videos.view.php';
    }

    public static function contact()
    {
        require 'views/en/contact.view.php';
    }

    public static function search()
    {
        $searchQuery = $_REQUEST;

        $searchResults = App::use('query')->search($searchQuery['search'], 'news2', News::class);

        require 'views/en/search.view.php';

    }
}