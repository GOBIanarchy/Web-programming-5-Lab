<?php

$con = mysqli_connect('localhost', 'alfred', 'root', 'crudoperation');

if(!$con){
    die(mysqli_error($con));
}

?>