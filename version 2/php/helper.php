<?php
    include 'sqlConnection.php';

    //fuction to go back
    function goBack(){
        $loaction = $_SERVER('HTTP_REFERER');
        header("Location: $location");
    }

    //fuction to execute sql
    function execute($query){
        global $connection;
        $resultArray=$connection->query($query);
        $result=$resultArray->fetch_array();
        return $result;

    }

    //function to update sql
    function update($query){
        global $connection;
        $result=$connection->query($query);
        return $result;

    }

    //function to get signed email
    function setSignedEmail($email){
        session_start();
        $_SESSION['signed_email']=$email;

    }

    //function to get sined email
    function getSignedEmail(){
        $signedEmail=$_SESSION['signed_email'];
        return $signedEmail;
    }

?>