<!DOCTYPE html>

<html>

<head>

<title>ASK BLOOD DONATION</title>

<link rel="stylesheet" href="signin.css">
</head>

<body>

<form method="POST" action="signinreceiver.php">

  <div class="imgcontainer">
    <img src="download.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>
<br>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit" class="loginbtn" name="loginbtn">Log In</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

 <div class="container signup">
    <p>do not have an account? <a href="receiver sign up.php">Sign up</a>.</p>
    </div>


  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>

</form>




</body>

</html>