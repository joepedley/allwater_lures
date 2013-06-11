<?php

include("../includes/function_lib.php");
 
//PROCESS DELETE A  LURE

//run an DELETE query, using the user's input to know what to delete.

  if(isset($_POST['delete']) && isset($_POST['del_id'])){
       $id = $_POST['del_id'];  
       $query = "DELETE FROM lure_table WHERE id='$id'"; 
       $result = run_query($query);
    }
	
//redirect the user to the page where they can see if it worked.

header('Location:../all_lures.php');

?>