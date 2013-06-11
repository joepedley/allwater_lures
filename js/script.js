onload=init;

function init(){
	document.getElementsByTagName('form')[0].onsubmit=function(){return validate1();};
}

function validate1(){
	var ok_to_submit=true;
	
	//check name. If it's blank
	if(document.getElementById('newname').value==""){
		ok_to_submit=false;
		alert("Please fill in a name");
		}
	//check price
		if(document.getElementById('newprice').value==""){
		ok_to_submit=false;
		alert("Please fill in a price");
		}
	//check discription
		if(document.getElementById('newdis').value==""){
			ok_to_submit=false;
			alert("Please fill in a discription");
		}
	//check thumbnail
		if(document.getElementById('thumbnail').value==""){
			ok_to_submit=false;
			alert("Please upload a thumbnail.");
		}
	
	
	
	return ok_to_submit;
}