<html>
    <head>
        <title>sign up </title>
    </head>
    <body>
        <h1>My Friend System</h1>
        
        <form name="form1" action="<?php $_SERVER['PHP_SELF'];?>" method="post">
            <fieldset><legend>Registration Page</legend>
                <lable>Email</lable><input type="Email" name="txtEmail"><br>
                <lable>Profile Name</lable><input type="text" name="txtProfile"><br>
                <lable>Password</lable><input type="password" name="txtPassword"><br>
                <lable>Confirm Password</lable><input type="password" name="txtCity"><br>
                <input type="submit" name="submit" value="Register"><input type="button" name="clear" value="clear">
            </fieldset>
        </form>
        <?php
            $conn=new mysqli('localhost','root',"",'society');

            if (isset($_REQUEST['submit'])){
                $email=$_REQUEST['txtEmail'];
                $profile=$_REQUEST['txtProfile'];
                $password=$_REQUEST['txtPassword'];

                $sql="INSERT INTO friends (ProName,Email,Pword) values ('$profile','$email','$password')";

                $result=$conn->query($sql);

                if ($result)
                {
                    echo "<br><br>Registration Success";
                }else{
                    echo "error...";
                }
            }
    
        ?>
        
    </body>
</html>