
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
	function validate(){
		var uname = document.forms['frm']['username'];
		var email = document.forms['frm']['email'];
		var pass = document.forms['frm']['pwd'];
		var repass = document.forms['frm']['repwd'];
		if (uname.value == "") {
			window.alert("Please enter your username."); 
        	uname.focus(); 
			return false;
		}
		if (email.value == "") {
			window.alert("Please enter your E-mail."); 
       		email.focus();  
			return false;
		}
		if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(email.value)) {
			return true;
		}else{
			window.alert("Enter valid email"); 
            email.focus(); 
            return false;
		}
		if (pass.value == "") {
			window.alert("Please enter your Password."); 
            pass.focus(); 
			return false;
		}
		var x = pass.value;
		if(x.match(/[a-z]/g) && x.match(/[A-Z]/g) && x.match(/[0-9]/g) && x.match(/[^a-zA-Z\d]/g) && x.length >= 8){
			
			return true;
		}else{
			window.alert("Password contain simple letter,capital,digit and specil char must 8 digit"); 
            pass.focus(); 
            return false;
		}
		if (repass.value == "") {
			window.alert("Please enter your Retype password");
			repass.focus();
			return false;
		}else if (pass.value != repass.value) {
			window.alert("Password does not match");
			repass.focus();
			return false;
		}

		return true;
	}
</script>
</head>
<body>
<form name="frm" action="" onsubmit="return validate()" method="post">
	<table width="100%" , height="100%">
	<tr><td>Username:</td><td>  <input type="text" name="username"></td></tr>
	<tr><td>E-mail:  </td><td> <input type="text" name="email"></td></tr>
	<tr><td>Password:</td><td>  <input type="password" name="pwd"></td></tr>
	<tr><td>Retype Password:</td><td> <input type="password" name="repwd"></td></tr>
	</table>
	<center>
	<input type="submit" name="btn" value="submit">
	</center>
</form>


</body>
</html>

