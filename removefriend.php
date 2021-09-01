<?php
$conn=new mysqli('localhost','root',"",'society');

if (isset($_REQUEST["profilename"]) && isset($_REQUEST["accountname"])){
    $name=$_REQUEST['profilename'];
    $pname=$_REQUEST["accountname"];
    $remove="DELETE FROM $pname WHERE Friends='$name'";
    $result5=$conn->query($remove);
    header('Location:friendlist.php');
    
}else{
    echo "error...";
}



?>