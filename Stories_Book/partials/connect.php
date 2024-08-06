<?php
$con = new mysqli('localhost', 'root','', 'stories' );
if(!$con){
    die(mysqli_error($con));
}

?>