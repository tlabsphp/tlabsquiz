function btn_close(){
	window.location="../dashboard.php";
	
}
function show1(){
    $("#btn_tech").click(function(){
        $("#display_tech").show();
    });
};

function show(){
    $("#btn_que").click(function(){
        $("#display_que").show();
    });
	
};
function aclick(){
	alert(document.loginid.name);
}

function prepage(){
	alert("hi");
	
}
function validation(){
	 var x = document.forms["myForm"]["fname"].value;
    if (x == null || x == "") {
        alert("Name must be filled out");
        return false;
    }

	
}
// ******* AJAX CODE FOR DIV CONTENT ********************
function createRequestObject() 
{
	var returnObj = false;
	
    if(window.XMLHttpRequest) {
        returnObj = new XMLHttpRequest();
    } else if(window.ActiveXObject) {
		try {
			returnObj = new ActiveXObject("Msxml2.XMLHTTP");

			} catch (e) {
			try {
			returnObj = new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch (e) {}
			}
			
    }
	return returnObj;
}

var http = createRequestObject();
var target;

// This is the function to call, give it the script file you want to run and
// the div you want it to output to.
function sendRequest(scriptFile, targetElement)
{	
	target = targetElement;
	try{
	http.open('get', scriptFile, true);
	}
	catch (e){
	document.getElementById(target).innerHTML = e;
	return;
	}
	http.onreadystatechange = handleResponse;
	http.send();	
}

function handleResponse()
{	
	if(http.readyState == 4) {		
	try{
		var strResponse = http.responseText;
		document.getElementById(target).innerHTML = strResponse;
		} catch (e){
		document.getElementById(target).innerHTML = e;
		}	
	}
}
