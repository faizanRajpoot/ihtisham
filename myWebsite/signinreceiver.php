<?php
session_start();

if(isset($_POST['loginbtn'])){
    if(!empty($_POST['uname'])){
        if(!empty($_POST['psw'])){
            
        $a=mysqli_connect('localhost','khaula123','12345','khaula1');
        if($a){
            echo'<h3>connected to database</h3>';
            $b=mysqli_real_escape_string($a,$_POST['uname']);
            $d=mysqli_real_escape_string($a,$_POST['psw']);
           
            $sqlquery= "SELECT * FROM receiverr1 WHERE username = '$b' and password ='$d'";
            $result=mysqli_query($a,$sqlquery);
            $count = mysqli_num_rows($result);
      
            // If result matched $myusername and $mypassword, table row must be 1 row 
            if($count == 1) {
              
                header("location: receiver urgen.php");
            }else {
               $error = "Your Login Name or Password is invalid";
            }
        }
        else{
            echo 'failed to connect to database :'.mysqli_connect_error();
        }
    }
}
    else{
        echo"we cannot save empty value";
    }
}
else{
    echo'invalid';
}




?>