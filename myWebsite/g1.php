<!DOCTYPE html>
<html>
<head>

<title>ASK BLOOD DONATION</title>

<link rel="stylesheet" type="text/css" href="signin1.css">
</head>

<body>
<style>
body {
  background-image: url('images2.jpg');
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
    <!-- <div id="wrapper">

</div> -->
</body>
</html>




<?php
 
if(isset($_POST['signupbtn'])){
    if(!empty($_POST['city'])){
       // if(!isset($_POST['bloodgroup'])){
         
        $a=mysqli_connect('localhost','khaula123','12345','blooddonation');
        if($a){

            $b=mysqli_real_escape_string($a,$_POST['city']);
            echo'<h3>here are all donors from : </h3>';
          echo '<span style="font-size:200%">'.$b.'</span>';
          echo'<br>';
            $sqlquery = "select * from blood where city='$b' " ;
            $result=mysqli_query($a,$sqlquery);
           
            if($result){
               while($row = mysqli_fetch_array($result)){
                  
                echo   'name:  '.$row['username']  ;
                echo '.......';   
                echo  "phone Number:  ". $row['phoneNo'] ;
                echo '.......';  
                echo  "blood group:  ". $row['bloodgroup'] ;
                echo "<br>"; 
                echo "<br>";  
       }
        }
        else{
            echo"data not found";
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