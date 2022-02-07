<!DOCTYPE html>
<html>

<head>


<title>ASK BLOOD DONAtION</title>


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

<form method="POST" form action="donor.php">

  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="username"><b>username</b></label> 
    <input type="text" placeholder="Enter username" name="username" required>
<br>
 <label for="phoneNo"><b>Phone no   </b></label> 
    <input type="text" placeholder="Enter Phone no" name="phoneNo" required>

<br>
 <label for="dateOfDonation"><b>date Of Donation   </b></label> 
    <input type="date" placeholder="Enter date Of Donation" name="dateOfDonation" >
<br>
  <label for="currentcity"><b>current city</b></label> 
    <input type="text" placeholder="Enter current city" name="city" required>
<br>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
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

    <!-- <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label> -->

 
    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

     <button type="submit" class="signupbtn" name="signupbtn">Sign Up</button>

  <button type="button" class="cancelbtn">Cancel</button>

    <div class="container signin">
    <p>Already have an account? <a href="signindexdonor.php">Sign in</a>.</p>
    </div>

  
  </div>

</form>
</div>
</body>

</html>