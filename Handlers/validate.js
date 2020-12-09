var name = document.getElementById("name");
var emailOne = document.getElementById("emailOne");
var recepient = document.getElementById("recepient");
var  message = document.getElementById("message");
var refere = document.getElementById("refere");
var code = document.getElementById("code");
var form = document.getElementById("form");
var inputs = document.getElementsByTagName('input');
var x = document.forms["Iform"]["name"].value;
form.onsubmit = ()=>{
    if(x.length < 1){
        document.getElementById("name").style.border = "2px solid red";   
    }else {
        //failed
    }
    if(x.length > 1){
        document.getElementById("name").style.border = "2px solid green";   
    }
}