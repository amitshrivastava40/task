<?php
    
    $con = new mysqli("localhost","root","","student_db");
    
    $sid = $_REQUEST["sid"];
    
    $query = "delete from student where sid='$sid'";
    
    $con->query($query);
    
    echo "Deleted";
?>
