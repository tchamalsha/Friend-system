<html>
    <head>
        <title>Friend add </title>
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

        $select2="SELECT * from friends WHERE ProName not in (select * from $pname) AND ProName != '$pname' ";
        $friends=$conn->query($select2);
        
        ?>
        <form>
            <fieldset>
                <table border=2>
                    <?php
                     while($row=$friends->fetch_array()){

                        //getting mutual friends
                        $name=$row['ProName'];
                        $select3="SELECT * FROM $name";
                        $result4=$conn->query($select3);
                        $i=0;
                        while($row1=$result3->fetch_array()){
                            while($row2=$result4->fetch_array()){
                                if($row1['Friends']==$row2['Friends'])
                                {
                                    $i++;
                                }
                            }
                        }
                         echo "<tr>
                                    <td>".$name."</td>
                                    <td>".$i." mutual friends</td>
                                    <td><a href=addfriend.php?profilename=$name&accountname=$pname>Add friend</a></td> 
                                </tr>";
                                 
                     }
                    
                    ?>
                </table>
            </fieldset>
        </form>
        <a href="friendlist.php">Friend list</a>
        <?php 
            
               
        ?>
    </body>
</html>