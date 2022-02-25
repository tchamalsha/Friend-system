<?php
    $connection = new mysqli('localhost','bookbae',"",'reachme');
   
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

        $result=$connection->query($sqlInsert);
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

    $userArray=$connection->query($sqlSelect);

    $user=$userArray->fetch_array();
    
    if($logPassword=$user['Password']){
        header('Location:../profile.php');
    }else{
        echo 'not';
    }
   }


   
?>


