<?php
    
    $con = new mysqli("localhost","root","","student_db");
    
    $sid = $_REQUEST["sid"];
    $sname = $_REQUEST["sname"];
    $sage = $_REQUEST["sage"];
    
    $query = "update student set sname='$sname',sage='$sage' where sid='$sid'";
    
    echo $con->query($query);
    
    echo "updated";
?>
