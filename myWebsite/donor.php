<?php

if(isset($_POST['signupbtn'])){
    if(!empty($_POST['username'])){
            if(!empty($_POST['city'])){
               if(!empty($_POST['bloodgroup'])){
                if(!empty($_POST['psw'])){ 
        $a=mysqli_connect('localhost','khaula123','12345','blooddonation');
        if($a){
            echo'<h3>connected to database</h3>';
            $b=mysqli_real_escape_string($a,$_POST['username']);
            $f=mysqli_real_escape_string($a,$_POST['city']);
            $h=mysqli_real_escape_string($a,$_POST['bloodgroup']);
            $i=mysqli_real_escape_string($a,$_POST['psw']);
            $k=mysqli_real_escape_string($a,$_POST['dateOfDonation']);
            $l=mysqli_real_escape_string($a,$_POST['phoneNo']);
            $sqlquery="insert into blood(username,city,bloodgroup,password,dateOfDonation,phoneNo)
             values('$b','$f','$h','$i','$k','$l')";
            $result=mysqli_query($a,$sqlquery);
            if($result){
                
                header("location: welcomedonor.php");
            }
            else{
                echo"failed to save data";
            }
        }
        else{
            echo 'failed to connect to database :'.mysqli_connect_error();
        }
    }
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