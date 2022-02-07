<!DOCTYPE html>

<html>

<head>

<title>ASK BLOOD DONATION</title>

<link rel="stylesheet" href="signin1.css">
</head>

<body>
<style>
body {
  background-image: url('images.jpg');
}
</style>
<div id="wrapper">
<nav id="navigation">
    <ul id="nav">
            <li><a href="index.php">Home Page</a></li>
            <li><a href="donor sign up.php">donor</a></li>
            <li><a href="receiver urgen.php">receiver</a></li>
            <li><a href="first page.php">AboutUs</a></li>

    </ul>
    </nav>
    </div>
    <div id="wrapper">
  
<form method="POST" action="signindonor.php">


  <div class="imgcontainer">
    <img src="download.png" alt="Avatar" class="avatar">
    
    
  </div>

  <div class="container">
    <label for="uname"><b>mobile No.</b></label> 
    <input type="text" placeholder="Enter Username" name="uname" required>
<br>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
    <br>
    <button type="submit" class="loginbtn" name="loginbtn">Log In</button>
    <!-- <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label> -->
  </div>

 <div class="container signup">
    <p>do not have an account? <a href="donor sign up.php">Sign up</a>.</p>
    </div>


  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>

  </div>

</form>
</div>



</body>

</html>