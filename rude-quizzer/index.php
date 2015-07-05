<?php
//code listing for ch3/index.php
error_reporting( E_ALL );
ini_set( "display_errors", 1 );
include_once "classes/Page_Data.class.php";
$pageData = new Page_Data();
$pageData->title = "Building and processing HTML forms with PHP";
$pageData->content = include_once "views/navigation.php";
//changes begin here
//$pageData->content .= "<div>...and a form here</div>";
$navigationIsClicked = isset($_GET['page']);
if ( $navigationIsClicked ) {
    $fileToLoad = $_GET['page'];
} else {
    $fileToLoad = "search";
}
$pageData->content .=include_once "views/$fileToLoad.php";
//dynamic style
$pageData->embeddedStyle =  "
<style>
/*this selector will target the quiz form only*/
form[action='index.php?page=quiz']{
    position:relative;
    margin: 30px 10px;
}
/*select only <p> and <select> inside the quiz form*/
form[action='index.php?page=quiz'] p,
form[action='index.php?page=quiz'] select{
    display:inline-block;  
}
</style>";

$page = include_once "templates/page.php";
echo $page;