<?php

    include 'helper.php';
   
    if(isset ($_REQUEST['submitSignup'])){
        $name = $_REQUEST['txtName'];
        $email= $_REQUEST['email'];
        $contact=$_REQUEST['number'];
        $password=$_REQUEST['password'];
        echo $name;
        echo $email;
        echo $contact;
        echo $password;

        $sqlInsert="INSERT INTO users (Name,Email,Contact,Password) VALUES ('$name','$email',$contact,'$password')";

        $result=update($sqlInsert);
        if($result){
            echo "done";
            header('Location:../profile.php');
        }else{
            echo "not";
        }
    }



   if(isset ($_REQUEST['submitLogin'])){
    $logEmail= $_REQUEST['loginEmail'];
    $logPassword=$_REQUEST['loginPassword'];
    
    
    $sqlSelect="SELECT * FROM users where Email=\"$logEmail\"";

    $user=execute($sqlSelect);
    
    if($logPassword=$user['Password']){
        header('Location:../profile.php');
    }else{
        echo 'not';
    }
   }


   
?>


