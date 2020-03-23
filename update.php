<?php
    require_once('conn.php');

    $queryUpdate = "UPDATE `employees` SET `Department` = 'Data Analytics' WHERE `Department` = 'Data';";
    if(mysqli_query($conn,$queryUpdate)){
        echo "update success!";
    }else{
        echo "update failed";
    }
?>