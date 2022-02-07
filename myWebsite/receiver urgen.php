<!DOCTYPE html>
<html>

<head>

<title>ASK BLOOD DONATION</title>

<link rel="stylesheet" type="text/css" href="signin1.css">
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
<form method="POST" form action="receiver urgent1.php">

  <div class="container">
  <h1>enter city and blood group to find  donors</h3>
 <label for="currentcity"><b>current city</b></label>
    <input type="text" placeholder="Enter current city" name="city" required>
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
            <button type="submit" class="signupbtn" name="signupbtn">find donor</button>
  </div>

</form>

<form method="POST" form action="g1.php">

  <div class="container">
<h1>enter city to find all donors  in this city</h3>
 <label for="currentcity"><b> city</b></label>
    <input type="text" placeholder="Enter  city" name="city" required>
<br>
            <br>
            <button type="submit" class="signupbtn" name="signupbtn">find donor</button>
  </div>

</form>

<form method="POST" form action="g3.php">

  <div class="container">
<h1>enter blood group to find all donors of that blood group</h3>
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
            <button type="submit" class="signupbtn" name="signupbtn">find donor</button>
  </div>

</form>
</div>
</body>

</html>