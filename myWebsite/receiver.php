<?php

if(isset($_POST['signupbtn'])){
    if(!empty($_POST['username'])){
        if(!empty($_POST['email'])){
            if(!empty($_POST['city'])){
                if(!empty($_POST['psw'])){
               if(isset($_POST['bloodgroup'])){

        $a=mysqli_connect('localhost','khaula123','12345','khaula1');
        if($a){
            echo'<h3>connected to database</h3>';
            $b=mysqli_real_escape_string($a,$_POST['username']);
            $d=mysqli_real_escape_string($a,$_POST['email']);
            $f=mysqli_real_escape_string($a,$_POST['city']);
            $h=mysqli_real_escape_string($a,$_POST['bloodgroup']);
            $i=mysqli_real_escape_string($a,$_POST['psw']);
            $sqlquery="insert into receiverr1(username,email,city,bloodgroup,password) values('$b','$d','$f','$h','$i')";
            $result=mysqli_query($a,$sqlquery);
            if($result){
                header("location: receiver urgen.php");
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
    }
    else{
        echo"we cannot save empty value";
    }
}
else{
    echo'invalid';
}




?>