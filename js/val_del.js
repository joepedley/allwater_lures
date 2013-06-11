onload=init;

function init(){
	document.getElementsByTagName('input')[3].onclick=function(){return val();};
}

function val(){
	var r=confirm("Are you sure you want to delete this lure?");
 if (r==true)
   {
   	ok_to_submit=true;
   }
 else
   {
   	ok_to_submit=false;
   }
   return ok_to_submit; 
}