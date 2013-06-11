<?php

function run_query($query){
	//Opening connection to the server.
	
	$mysqli=new mysqli("localhost","root","","lure_db");
	
	//Making error verification.
	
	if($mysqli->connect_errno){
		die("Problem connecting to server or database. ".$mysqli->connect_error);
	}
	
	//Storing data in an array.
	
	$res=$mysqli->query($query)or die('Query bad. '.$mysqli->error);
	
	//Closes connection.
	
	mysqli_close($mysqli);
	
	//send the $res info back to where the function was called
	
	return $res;
}//closes function

////// a function we'll run on user input to prevent nasty security breaches

 function rm_injections($userstring){
	 
 //Prepare an empty string. If it gets returned below, it won't give them security clearance.
 
   $cleanstring = '';
   
    if (isset($userstring)) {
		
       //trim space from left or right:
	   
       $userstring = trim($userstring);
	   
       //replace the empty string with the value the user typed if it contains non-quote characters (We're now confident it's clean):
	   
       if (preg_match('/^[a-zA-Z0-9^$.*+\[\]{,}]{1,24}$/u', $userstring)){ 
	   
         $cleanstring = $userstring;
       } 
   }
    //return the clean string (or the original empty string if it was dangerous).
    return $cleanstring;
 }

?>