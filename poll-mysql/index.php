<?php
//complete code for htdocs/poll/index.php
error_reporting( E_ALL );
ini_set( "display_errors", 1 );
//load model
include_once "models/Page_Data.class.php";
$pageData = new Page_Data();
$pageData->title = "PHP/MySQL site poll example";

// database credentials
$dbInfo = "mysql:host=localhost;dbname=playground";
$dbUser = "root";
$dbPassword = "";

try {
    // try a db connection
    $db = new PDO( $dbInfo, $dbUser, $dbPassword);
    $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pageData->content = "<h1>We're connected</h1>";
} catch ( Exception $e ) {
    $pageData->content = "<h1>Connection failed!</h1><p>$e</p>";
}

$pageData->content = include_once "controllers/poll.php";
//load view so model data will be merged with the page template
$page = include_once "views/page.php";
//output generated page
echo $page;