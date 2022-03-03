<?php
    include 'helper.php'; 

    $friendEmail = $_REQUEST['email'];
    $userEmail = "mala@gmail.com";

    echo $friendEmail;
    $addSql = "INSERT INTO friends (User_Email,Friend_Email) VALUES ('$userEmail','$friendEmail')";

    $result = update($addSql);


    if ($result){
        header('Location : ../friendlist.php');
    }else{
        echo "fail";
    }

?>