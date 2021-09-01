<?php
$conn=new mysqli('localhost','root',"",'society');

if (isset($_REQUEST["profilename"]) && isset($_REQUEST["accountname"])){
    $name=$_REQUEST['profilename'];
    $pname=$_REQUEST["accountname"];
    $add="INSERT INTO $pname VALUES('$name')";
    $result5=$conn->query($add);
    header('Location:friendadd.php');
    
}else{
    echo "error...";
}



?>