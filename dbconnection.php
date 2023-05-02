<?php

    $dbcon = mysqli_connect('localhost','root','sairam', 'courierdb');

    if($dbcon==false)
    {
        echo "Database is not Connected!";
    }
   
?>