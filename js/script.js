function validation(){

var name = document.getElementById('name');
var email = document.getElementById('email');
var mobile = document.getElementById('phone')
var msg = document.getElementById('msg');
if (name.value.length == 0) {
document.getElementById('error_msg').innerText = "* All fields are mandatory *"; // This segment displays the validation rule for all fields
name.focus();
return false;
}
	
	

      
  


  }
