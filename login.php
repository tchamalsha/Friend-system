<html>
    <head>
        <title>Student Application </title>
    </head>
    <body>
        <h1>My Friend System</h1>
        
        <form name="form1" action="<?php $_SERVER['PHP_SELF'];?>" method="post">
            <fieldset><legend>Login Page</legend>
                <lable>Email</lable><input type="Email" name="txtEmail"><br>
                <lable>Password</lable><input type="password" name="txtPassword"><br>
                <input type="submit" name="submit" value="Login"><input type="button" name="clear" value="clear">
            </fieldset>
        </form>
        <?php
            

            if (isset($_REQUEST['submit'])){
                $email=$_REQUEST['txtEmail'];
                $password=$_REQUEST['txtPassword'];

                $conn=new mysqli('localhost','root',"",'society');
                $sql2="SELECT * from friends";
                $result2=$conn->query($sql2);
                if($result2->num_rows>0){
                    while($row=$result2->fetch_array()){
                        $E=$row['Email'];
                        $P=$row['Pword'];
                        if($E==$email && $P==$password){
                            echo "success";
                            break;
                        }
                        
                    }
                }
                
            }
    
        ?>
        
    </body>
</html>
