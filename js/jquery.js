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
		$("#display_tech").hide();
    });
	
}
function display(tagID){
	document.getElementById("sel_tech").style.display='none';
	techid=document.getElementById("tech_id").value;
	loadque(techid,tagID);
}
var current=-1;

function show_next_que(count){ //this is used to show the next question
	var next=(current+1)%count;
	if(current!==-1){
		
	}
}
function loadque(techid,tagID){
	if(techid==""){	//check the techid is null or not
		document.getElementById(tagID).innerHTML="";
		return;
	}
	if (window.XMLHttpRequest) { //create the XMLHttpRequest object, according browser
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
	} else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	// create pairs index=value with data that must be sent to server
	var the_data='tid='+techid;
	xmlhttp.open("POST","exam.php",true);
	 // adds  a header to tell the PHP script to recognize the data as is sent via POST
	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xmlhttp.send(the_data); //calls the send() method with datas as parameter
	
	// Check request status
  // If the response is received completely, will be transferred to the HTML tag with tagID
	
	xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
			document.getElementById(tagID).innerHTML=xmlhttp.responseText;
		}
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
