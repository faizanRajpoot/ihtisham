<!DOCTYPE html>
<html>

<head>

<title>ASK BLOOD DONATION</title>

<link rel="stylesheet" href="signin.css">
</head>

<body>

<form method="POST" form action="receiver.php">

  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="email"><b>Email   </b></label>
    <input type="text" placeholder="Enter Email" name="email" required>
<br>

    <label for="username"><b>username</b></label>
    <input type="text" placeholder="Enter username" name="username" required>
<br>

 <label for="currentcity"><b>current city</b></label>
    <input type="text" placeholder="Enter current city" name="city" required>
<br>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
<br>
    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
<br>
 <br>
    <label for="bloodgroup"><b>BLOOD GROUP</b></label>
            <select name="bloodgroup"  required>
                    <option disabled selected value="1">Choose an option</option>
                    <option value="A">A</option>
                    <option value="A+">A+</option>
                    <option value="B">B</option>
                    <option value="B+">B+</option>
                    <option value="O">O-</option>
                    <option value="O-">O</option>
                    
            </select>
            <br>
 <br>

    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>

 
    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

     <button type="submit" class="signupbtn" name="signupbtn">Sign Up</button>

  <button type="button" class="cancelbtn">Cancel</button>

    <div class="container signin">
    <p>Already have an account? <a href="signindexreceiver.php">Sign in</a>.</p>
    </div>

  
  </div>

</form>

</body>

</html>