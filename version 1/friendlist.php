<html>
    <head>
        <title>friend list </title>
    </head>
    <body>
        <h1>My Friend System</h1>
        <?php
        $conn=new mysqli('localhost','root',"",'society');

        session_start();
        $pname=$_SESSION['p_name'];
        $email=$_SESSION['e_mail'];

        echo "<h3>This is ".$pname."'s Friend list<h3>";

        $select="SELECT * from $pname";
        $result3=$conn->query($select);

        $numberOF_friends=$result3->num_rows;
        echo "<h3>Total number of freinds are ".$numberOF_friends."</h3>";

        $select2="SELECT ProName FROM freinds";

        ?>
        <form name="form1" action="addfriend.php" method="get">
            <fieldset>
                <table border=2>
                    <?php
                         while($row=$result3->fetch_array()){
                            $name=$row['Friends'];
                             echo "<tr>
                                        <td>".$row['Friends']."</td>
                                        <td><a href=removefriend.php?profilename=$name&accountname=$pname>Unfriend</a></td>
                                    </tr>";
                                    
                         }
                       
                    ?>
                </table>
            </fieldset>
        </form>
        <a href="friendadd.php">Add Friends</a>
        <a href="index.php">Log out</a>
    </body>
</html>