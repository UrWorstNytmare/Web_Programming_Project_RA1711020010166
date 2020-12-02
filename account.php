<?php include('php/server.php') ?>
<!DOCTYPE html>
<html lang="en-US">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/main_style.css">
	<link rel="stylesheet" type="text/css" href="css/account.css">
  <link rel="stylesheet" type="text/css" href="css/error.css">
  <script src="js/form.js"></script>
<head>
	<title>BlazingGlaze.com - An Art Gallery - Account</title>
<style>
	.navbar a {
  				float: left;
  				padding: 9px;
  				color: white;
  				text-decoration: none;
  				font-size: 19px;
  				width: 20%;
  				text-align: center;
	}
	@media screen and (max-width: 900px) {
  	.navbar a {
    		float: none;
   			display: block;
    		width: 100%;
    		text-align: center;
  	}
</style>
</head>
<body>
	<div class="logo"><h1>Blazing Glaze</h1></div>
	<div class="navbar" id="rcorner">
		<a href="home.html"> <i class="fa fa-fw fa-home"></i> Home </a>
		<a href="gallery.html"> <i class="fa fa-fw fa-image"></i> Gallery </a>
		<a href="popular_artists.html"><i class="fa fa-fw fa-users"></i> Popular Artists </a>
		<a href="learn.html"><i class="fa fa-fw fa-leanpub"></i> Learn </a>
		<a class="active" href="account.php"> <i class="fa fa-fw fa-user"></i> Account </a>
	</div>
	<br>
	<div class="side">
		<div class="login">
  		<form name="loginForm" onsubmit="return validateloginForm()" method="post" action="">
      <h2 align="center"> Login Here </h2>
      <?php include('php/errors.php'); ?>
      <div class="row">
          <input type="text" name="loginname" placeholder="Username" minlength="4" maxlength="20" >
          <div class="error" id="loginnameErr"></div>
      </div>
    	<div class="row">
        <input id="login-password-field" type="password" name="loginpassword" placeholder="Password" minlength="8" maxlength="20">
        <div class="error" id="loginpassErr"></div>
        <input type="checkbox" onclick="myFunction1()" style="margin-top: 10px;"> Show Password
    </div>
       		<input type="checkbox" name="remember_me" id="remember_me" style="margin-right: 10px">Remember me
    	<div class="row">
          <input type="submit" class="btn" name="login_user" value="Login">
      </div>
  			</form>
		</div>
		<div class="register">
			<form name="registerForm" onsubmit="return validateForm()" method="post" action="account.php">
    <h2 align="center"> Sign up Now!</h2>
    <?php include('php/reg_error.php'); ?>
    <div class="row">
        <input type="text" name="name" minlength="4" maxlength="20" placeholder="Username" value="<?php echo $username; ?>">
        <div class="error" id="nameErr"></div>
    </div>
    <div class="row">
        <input type="text" name="email" placeholder="Email Address" value="<?php echo $email; ?>"> 
        <div class="error" id="emailErr"></div>
    </div>
    <div class="row">
        <input id="password-field" type="password" name="password" placeholder="Password" minlength="8" maxlength="20">
        <div class="error" id="passErr"></div>
        <input type="checkbox" onclick="myFunction()" style="margin-top: 10px;"> Show Password
    </div>
    <div class="row">
        <input type="text" name="mobile" maxlength="10" placeholder="Mobile Number">
        <div class="error" id="mobileErr"></div>
    </div>
    <div class="row">
        <label>Birthday</label>
         <input type="date" min="1920-01-01" max="2005-12-31" id="birthday" name="birthday">
        <div class="error" id="birthErr"></div>
    </div>
    <div class="row">
        <label>Skill Level</label>
        <select name="skilllvl">
            <option>Select</option>
            <option>Beginner</option>
            <option>Intermediate</option>
            <option>Advance</option>
            <option>Professional</option>
        </select>
        <div class="error" id="skillErr"></div>
    </div>
    <div class="row">
        <label>Gender</label>
        <div class="form-inline">
            <label><input type="radio" name="gender" value="male"> Male</label>
            <label><input type="radio" name="gender" value="female"> Female</label>
            <label><input type="radio" name="gender" value="other"> Other</label>
        </div>
        <div class="error" id="genderErr"></div>
    </div>
        <input type="checkbox" name="remember_me" id="remember_me" required="" style="margin-right: 10px">
        I agree to the <a href="TOS.html">Terms of Services</a> 
    <div class="row">
        <input type="submit" class="btn" name="reg_user" value="Submit">
    </div>
    <br>
  			</form>
		</div>
	</div>
	<br><br>
	
	<hr>
	<footer align="center">&copy; Copyright 2020 Blazing Glaze </footer>
</body>
</html>