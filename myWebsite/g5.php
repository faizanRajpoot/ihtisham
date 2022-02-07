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
<form method="POST" form action="g5.php">

  <div class="container">

 <label for="cnic"><b> </b>phone number</label>
    <input type="text" placeholder="Enter phone number " name="CNIC" required>
<br>
<br>
 <label for="dateOfDonation"><b>date Of Donation   </b></label> 
    <input type="date" placeholder="Enter date Of Donation" name="dateOfDonation" >
<br>
            <br>
            <button type="submit" class="signupbtn" name="signupbtn">submit</button>
  </div>
</form>
</div>
</body>
</html>


<?php
 
if(isset($_POST['signupbtn'])){
    if(!empty($_POST['CNIC'])){
       // if(!isset($_POST['bloodgroup'])){
         
        $a=mysqli_connect('localhost','khaula123','12345','blooddonation');
        if($a){

            $b=mysqli_real_escape_string($a,$_POST['CNIC']);
           $c=mysqli_real_escape_string($a,$_POST['dateOfDonation']);
            
            $sqlquery = "UPDATE blood 
            SET 
            dateOfDonation = '$c'
            WHERE
                phoneNo = '$b'" ;
            $result=mysqli_query($a,$sqlquery);
           
            if($result){
                echo'<span style="color:black;text-align:center;"><h1> data is updated</h1>';
               
        }
        else{
            echo"failed to update data";
        }
    }
        else{
            echo 'failed to connect to database :'.mysqli_connect_error();
        }
  //  }
}
    else{
        echo"we cannot save empty value";
    }
}
else{
    echo'invalid';
}

?>