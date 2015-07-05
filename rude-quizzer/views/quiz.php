<?php
//add a new variable and an if statement
$quizIsSubmitted = isset( $_POST['quiz-submitted'] );
if ( $quizIsSubmitted ){
    $answer = $_POST['answer'];
    $output = showQuizResponse( $answer );
    // POST inspection code
    // $output .= "<pre>";
    // $output .= print_r($_POST, true);
    // $output .= "<pre>";
} else {
    $output = include_once "views/quiz-form.php";
}
//keep the return statement as it was
return $output;
//declare a new function
function showQuizResponse( $answer ){
    $response = "<p>You selected <b>$answer</b>";
    if ( $answer != "astana" ) {
    	$response .= "
    	<br> You are terrible at geography ..";
    } else {
    	$response .= "
    	<br> Congrats .. but dont be overconfident";
    }

    $response .= "</p>";
    $response .= "<p>
        <a href='index.php?page=quiz'>Try quiz again?</a>
    </p>";
    return $response;
}