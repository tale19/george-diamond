<?php
/**
 * Created by PhpStorm.
 * User: Stefan Tatic
 * Date: 12/24/2017
 * Time: 6:31 PM
 */

namespace App\Controllers;

class PagesController
{
    public function home()
    {
        return view('index');
    }

    public function bio()
    {
        return view('bio');
    }

    public function shows()
    {
        return view('shows');
    }

    public function photos()
    {

    }

    public function videos()
    {
        return view('videos');
    }

    public function contact()
    {
        return view('contact');
    }

}