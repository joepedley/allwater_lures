onload=init;

function init(){
	document.getElementsByTagName('form')[0].onsubmit=function(){return validate1();};
}

function validate1(){
	var ok_to_submit=true;
	//check name. If it's blank
	if(document.getElementById('name').value==""){
		ok_to_submit=false;
		alert("Please fill in a name");
		}
	//check price
		if(document.getElementById('comment').value==""){
		ok_to_submit=false;
		alert("Please fill in a comment");
		}
	//check discription
		if(document.getElementById('lure').value==""){
			ok_to_submit=false;
			alert("Please fill in a lure");
		}
	//check thumbnail
		if(document.getElementById('type').value==""){
			ok_to_submit=false;
			alert("Please fill in a type of fishing.");
		}
	
	
	
	return ok_to_submit;
}// JavaScript Document