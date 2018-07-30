<?php
    
    $con = new mysqli("localhost","root","","Employee");
    
    $name = $_REQUEST["name"];
    $address = $_REQUEST["address"];
    
    $query = "insert into tblEmployee(name,address)values('$name','$address')";
    
    $con->query($query);
    
    echo "Inserted"
?>
