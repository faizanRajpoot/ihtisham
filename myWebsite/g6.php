<?php
 
if(isset($_POST['signupbtn'])){
    if(!empty($_POST['city'])){
       // if(!isset($_POST['bloodgroup'])){
         
        $a=mysqli_connect('localhost','khaula123','12345','blooddonation');
        if($a){

            $b=mysqli_real_escape_string($a,$_POST['city']);
            $c=mysqli_real_escape_string($a,$_POST['bloodgroup']);
            echo'<h3>here are donors who are capable of donation right now </h3>';
            
            $sqlquery = "select username,phoneNo from blood
            where  DATEDIFF(GETDATE(),DATEofDonation)> 112 AND city='$b' AND bloodgroup='$c';" ;
            $result=mysqli_query($a,$sqlquery);
           
            if($result){
                
               while($row = mysqli_fetch_array($result))
                {
                  
                    echo   "name:  ".$row['username']  ;
                    echo "<\t>";  
                    echo  "phonenum:  ". $row['phonenum'] ;
                    echo "<br>";  
           }
               
        }
        else{
            echo"failed to find data";
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