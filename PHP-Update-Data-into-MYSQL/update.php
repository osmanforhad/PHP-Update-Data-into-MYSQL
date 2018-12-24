<?php
include_once ('./config.php');
//Update Query
$data = "UPDATE userinfo SET uName='$_POST[username]',fName='$_POST[fathername]' WHERE id=$_POST[id]";
//Execute The Query
if (!mysqli_query($con, $data)) {
    echo "Information Not Update";
   
} else {
    echo "Information Update Succesfully";
}
 header("refresh:2; url=index.php");
?>
