<?php
//complete code listing for controllers/poll.php
include_once "models/Poll.class.php";

$poll = new Poll( $db );
//check if form was submitted
$isPollSubmitted = isset( $_POST['user-input'] );
//if it was just submitted...
if ( $isPollSubmitted ) {
    //get input received from form
    $input = $_POST['user-input'];
     
    //...update model
    $poll->updatePoll( $input, $db );
}
//no changes here
$pollData = $poll->getPollData($db);
$pollAsHTML = include_once "views/poll-html.php";
return $pollAsHTML;