<?php
$config =  require 'config.php';

// get page main URL
App::bind('url', $config['url']);
//var_dump($config);die;

// get settings from config file to pass to PDO
App::bind('db-settings', $config['database']);

// Make a $query object that uses a PDO
// (created through Connection::make() method)*
// to make queries in controller files
App::bind('query', new QueryBuilder(
    Connection::make(App::use('db-settings'))
));
$query = App::use('query');
//var_dump($query); die;

// * Connection::make() uses DB settings stored
// in the config.php['database'] array to create
// the instance of PDO

function view($page, $data = []) {
    extract($data);
    return require "views/en/$page.view.php";
}