//validation LOGIN

var email = document.forms['form']['email'];
var password = document.forms['form']['password'];

var email_error = document.getElementById("email_error");
var password_error = document.getElementById("password_error");

email.addEventListener('textInput', email_Verify);
password.addEventListener('textInput', pass_Verify);

function validasi(){
    if(email.value.length < 9){
        email.style.border = "1px solid red";
        email_error.style.display = "block";
        email.focus();
        return false;
    }
    if(password.value.length < 9){
        password.style.border = "1px solid red";
        password_error.style.display = "block";
        password.focus();
        return false;
    }
}

function email_Verify(){
	if (email.value.length >= 8) {
		email.style.border = "1px solid silver";
		email_error.style.display = "none";
		return true;
	}
}
function pass_Verify(){
	if (password.value.length >= 5) {
		password.style.border = "1px solid silver";
		pass_error.style.display = "none";
		return true;
	}
}


