<?php
    
    $con = new mysqli("localhost","root","","TestDB1");
    
    //$Employee_name = $_REQUEST["Employee_name"];
    //$Employee_add = $_REQUEST["Employee_add"];
    
    //$query = "insert into mytable(Employee_name,Employee_add)values('$Employee_name','$Employee_add')";
    
    $query = "select * from mytable";
    
    $rows = $con->query($query);
    
    while ($row = $rows->fetch_assoc()) {
        
        $pp[] = $row;
    }
    
    echo json_encode($pp);
    
?>

