<?php
$mysqli = new mysqli("localhost","root","","ghatteLawyer");


function secure($strToSecure)   
{
    global $mysqli;
    $strToSecure = mysqli_real_escape_string($mysqli, $strToSecure);
    $strToSecure = strip_tags($strToSecure);
    return $strToSecure;
}


?>