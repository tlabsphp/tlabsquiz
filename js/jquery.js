function btn_close(){
	window.location="../dashboard.php";
	
}
function show1(){
    $("#btn_tech").click(function(){
        $("#display_tech").show();
    });
}

function show(){
    $("#btn_que").click(function(){
        $("#display_que").show();
    });
	
}
function validateEmail(field){
		var emailid=document.getElementById(field).value;
		atpos = emailid.indexOf("@");
		dotpos = emailid.lastIndexOf(".");
		if(atpos < 1 || (dotpos-atpos < 2 )){
			error="Please Correct Email id";
			document.getElementById(field).focus();
			return false;
		}
		return true;
}
function validate_all(){
	
	function updatelength(field, output){
		curr_length = document.getElementById(field).value.length;
		field_mlen = document.getElementById(field).maxLength;
		document.getElementById(output).innerHTML = curr_length+'/'+field_mlen;
		return 1;
	}
	
	
}
// ******* AJAX CODE FOR TECHNOLOGY CONTENT ********************

function showUser(str) {
  if (str=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  } 
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
  alert(str);
  xmlhttp.open("GET","exam.php?q="+str,true);
  xmlhttp.send();
}
