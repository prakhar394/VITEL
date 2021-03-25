function validation()
{
	var u_email = document.getElementById('email').value;
	var u_pass = document.getElementById('pass').value;
	if(u_email == ""){
		document.getElementById('u_email').innerHTML="* Pls fill your Email first";
		return false;
	}
	if(u_email.indexOf('@')<=0){
		document.getElementById('u_email').innerHTML=" * @ at Inappropriate Position in Email";
		return false;
	}
	if(u_pass == ""){
		document.getElementById('u_pass').innerHTML="* Pls enter your password";
		return false;
	}
	if(u_pass.length <8){
		document.getElementById('u_pass').innerHTML=" * password must be atleast 8 characters";
		return false;
	}
}
function sign_validation(){
	var f_name = document.getElementById('name').value;
	var sign_email = document.getElementById('s_email').value;
	var sign_no = document.getElementById('s_no').value;
	var sign_pass1 = document.getElementById('sign_pass').value;
	var sign_pass2 = document.getElementById('re_pass').value;
	if(f_name == ""){
		document.getElementById('f_name').innerHTML="* Pls fill your Name first";
		return false;
	}
	if(sign_email == ""){
		document.getElementById('sign_email').innerHTML="* Pls fill your Email first";
		return false;
	}
	if(sign_email.indexOf('@')<=0){
		document.getElementById('sign_email').innerHTML=" * @ at Inappropriate Position in Email";
		return false;
	}
	if(sign_no == ""){
		document.getElementById('sign_no').innerHTML="* Pls enter your Phone Number";
		return false;
	}
	if(sign_no.length != 10){
		document.getElementById('sign_no').innerHTML="* Mobile no. must be 10 digit";
	}
	if(sign_pass1 == ""){
		document.getElementById('sign_pass1').innerHTML="* Pls enter your password";
		return false;
	}
	if(sign_pass1 <8){
		document.getElementById('sign_pass1').innerHTML=" * password must be atleast 8 characters";
		return false;
	}
	if(sign_pass2 == ""){
		document.getElementById('sign_pass2').innerHTML="* Pls enter your password";
		return false;
	}
	if(sign_pass2 <8){
		document.getElementById('sign_pass2').innerHTML=" * password must be atleast 8 characters";
		return false;
	}
	if(sign_pass2 != sign_pass1){
		document.getElementById('sign_pass2').innerHTML=" * retyped password does not match above password";
		return false;
	}
}