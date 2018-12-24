<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Update Record into Mysql Database</title>
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
        include_once ('./config.php');
        //Select Query
        $data = "SELECT * FROM userinfo";
        //Execute The Query
        $reocords = mysqli_query($con, $data);
        ?>
        <table>
            <tr>
                <th>Name</th>
                <th>Father Name</th>
            </tr>
            <?php
            while ($row = mysqli_fetch_array($reocords)) {
                echo "<tr><form action='update.php' method='post'>";
                echo "<td><input type='text' name='username'  value='" . $row['uName'] . "'></td>";
                echo "<td><input type='text' name='fathername'  value='" . $row['fName'] . "'></td>";
                echo "<td><input type='hidden' name='id' value='".$row['id']."'></td>";
                echo "<td><input type='submit' value='Update'>";
                echo "</form></tr>";
            }
            ?>
        </table>
    </body>
</html>

