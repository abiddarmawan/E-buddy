//================================= REGISTER ========================

var nama_depan = document.forms['form']['nama_depan'];
var nama_belakang = document.forms['form']['nama_belakang'];
var email = document.forms['form']['email'];
var password = document.forms['form']['password'];
var ulang_password = document.forms['form']['ulang_password'];

var depan_error = document.getElementById("depan_error");
var belakang_error = document.getElementById("belakang_error");
var email_error = document.getElementById("email_error");
var password_error = document.getElementById("password_error");
var ulang_password_error = document.getElementById('ulang_password_error');


nama_depan.addEventListener('textInput', nama_depan_Verify);
nama_belakang.addEventListener('textInput', nama_belakang_Verify);
email.addEventListener('textInput', email_Verify);
password.addEventListener('textInput', pass_Verify);
ulang_password.addEventListener('textInput',ulang_pass_Verify);

function validasi(){
    
    if(nama_depan.value.length <= 1){
        nama_depan.style.border = "1px solid red";
        depan_error.style.display = "block";
        nama_depan.focus();
        return false;
    }
    if(nama_belakang.value.length <= 1){
        nama_belakang.style.border = "1px solid red";
        belakang_error.style.display = "block";
        nama_belakang.focus();
        return false;
    }

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

    if(password.value != ulang_password.value){
        ulang_password.style.border = "1px solid red";
        ulang_password_error.style.display = "block";
        ulang_password.focus();
        return false;
    }
}

function nama_depan_Verify(){
	if (nama_depan.value.length >= 1) {
		nama_depan.style.border = "1px solid green";
		depan_error.style.display = "none";
		return true;
	}
}
function nama_belakang_Verify(){
	if (nama_belakang.value.length >= 1) {
		nama_belakang.style.border = "1px solid green";
		belakang_error.style.display = "none";
		return true;
	}
}

function email_Verify(){
	if (email.value.length >= 8) {
		email.style.border = "1px solid green";
		email_error.style.display = "none";
		return true;
	}
}
function pass_Verify(){
	if (password.value.length >= 5) {
		password.style.border = "1px solid green";
		password_error.style.display = "none";
		return true;
	}
}

function ulang_pass_Verify(){
	if (ulang_password.value == password.value) {
		ulang_password.style.border = "1px solid green";
		ulang_password_error.style.display = "none";
		return true;
	}
}