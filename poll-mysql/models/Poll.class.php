<?php
//complete code for models/Poll.class.php
//beginning of class definition
class Poll {
	private $db;

	public function __constructor ($dbconnection) {
		//store the received conection in the $this->db property
		$this->db = $dbconnection;
	}
     
    public function getPollData($db) {

        $sql = "SELECT poll_question, yes, no FROM poll WHERE poll_id = 1";

		//Use the PDO connection to create a PDOStatement object
		$statement = $db->prepare($sql);
    	//$statement = $this->db->prepare($sql);
    	//tell MySQL to execute the statement
    	$statement->execute();
	    //retrieve the first row of data from the table
	    $pollData = $statement->fetchObject();
	    //make poll data available to the caller
	    return $pollData;
    }

    // Update db table according to form input
    public function updatePoll ( $input, $db ) {  
    	if ( $input === "yes" ) {
        	$updateSQL = "UPDATE poll SET yes = yes+1 WHERE poll_id = 1";
    	} else if ( $input === "no" ) {
        	$updateSQL = "UPDATE poll SET no = no+1 WHERE poll_id = 1";
    	} 
    	$updateStatement = $db->prepare($updateSQL); 
    	//$updateStatement = $this->db->prepare($updateSQL);
    	$updateStatement->execute();
	}
}