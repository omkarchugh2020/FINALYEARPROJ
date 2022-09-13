<?php
require("../assets/database/sql.php");

if(isset($_POST['email']))
{
    $email = secure($_POST['email']);
    $sql = "SELECT count(*) as `count` FROM `lawyer_user` WHERE `email`='$email'";
    $result = $mysqli->query($sql);
    $row = $result->fetch_assoc();
    
    if($row['count']==0)
    {
        echo "unique";
    }
    else {
        echo "exists";
    }
}
?>