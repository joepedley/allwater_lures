<?php 
include("../includes/function_lib.php");

//intercept and store what user typed in as username and password
$username=rm_injections($_POST['uname']);
$userpass=rm_injections($_POST['upass']);

//run a query and select any row that has thatn username and password:

$res=run_query("SELECT * FROM user_table WHERE username='$username' and password='$userpass'");
$res->data_seek(0);
//if it found suck a row...
if($row=$res->fetch_assoc()){
//do good things to log the user in.
session_start();
//store a key/value pair of our choice
$_SESSION['logged_in']=true;
//store any value of our chouce
$_SESSION['username']=$row['username'];
$_SESSION['privilege']=$row['privilege'];
//redirect to view all dogfood page
header('Location:../all_lures.php');
//otherwise send them back to the login triggering an error
}else{
	header('Location:lure_login.php');}
?>