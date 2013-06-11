<?php

include("../includes/function_lib.php");
 
//PROCESS ADD A NEW LURE

//Validate what user typed (we'll do that on the form page jusing JS)

//make a var to store the highest id in use in our table.

$highest_ID=0;

//run a query to get that number

$results=run_query("select id from lure_table order by id desc limit 1");

$results->data_seek(0);
	
	//loop through the data in the aray we made above, and choose things to display.Each time it runs what in {}, $row advances to the next row from out table.
	
	while($row=$results->fetch_assoc()){
		$highest_ID=$row['id'];
	}//CLOSES WHILE LOOP

//add 1 to the highest id and store it as $id

$id=$highest_ID+1;

//store what the user typed in, for use in the query

$price=$_POST['newprice'];
$name=$_POST['newname'];
$dis=$_POST['newdis'];

//make a var to store the images name

$thumb='img'.$id.$_FILES['newthumb']['name'];

$img='img'.$id.$_FILES['newimg']['name'];

//move the uploaded file to a place and name of my choice

move_uploaded_file($_FILES['newthumb']['tmp_name'],"../img/$thumb");

move_uploaded_file($_FILES['newimg']['tmp_name'],"../img/$img");

//run an INSERT query, using the user's input at the values of a new row.

run_query("
		INSERT INTO lure_table
		VALUES 
		($id, \"$name\", $price, \"$dis\", \"$img\", \"$thumb\");
");

//redirect the user to the page where they can see if it worked.

header('Location:../all_lures.php');

?>