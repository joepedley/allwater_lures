<?php

//validate errors and stuff



//store what the user typed on the article_add form in vars

$comName=$_POST['comName'];

$comment=$_POST['comment'];

$comLure=$_POST['comLure'];

$comType=$_POST['comType'];

//reuseable var for file path

$fileDir="../xml/";

//create a new document object in PHP's mind

$doc=new DOMDocument();

//create the root elememt called article

$root=$doc->createElement('body');

//attach that element to the XML hierarchy

$doc->appendChild($root);

//create the headlene child element

$username=$doc->createElement('username');

//attach that as a child 

$root->appendChild($username);

//create the text value for inside the headline

$uname=$doc->createTextNode($comName);

//attach the text node inside the headline tag

$username->appendChild($uname);



///////////////////////////////////////////////////////




//create the body child element

$combody=$doc->createElement('comment');

//attach that as a child 

$root->appendChild($combody);

//create the text value for inside the body

$comtext=$doc->createTextNode($comment);

//attach the text node inside the body tag

$combody->appendChild($comtext);


///////////////////////////////////////////////////////////////////////




$type=$doc->createElement('comType');

//attach that as a child 

$root->appendChild($type);

//create the text value for inside the body

$typetext=$doc->createTextNode($comType);

//attach the text node inside the body tag

$type->appendChild($typetext);



//////////////////////////////////////////////////////////////////////////////////



$lure=$doc->createElement('comLure');

//attach that as a child 

$root->appendChild($lure);

//create the text value for inside the body

$luretext=$doc->createTextNode($comLure);

//attach the text node inside the body tag

$lure->appendChild($luretext);



//////////////////////////////////////////////////////////////////////////////////



//store an id number that is the current date and time

$id=date('YmdHis');

//use that id as the value of an id attribute for the article tag

$root->setAttribute('id',$id);

//concat a long, unique filename for the new file

$filename=$fileDir.'comment'.$id.'.xml';

//save the document

$doc->save($filename);


header('Location:lure_articles.php');
?>