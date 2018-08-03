<?php
	
    $con=new mysqli("localhost","root","","iosdb");
  
    $data=file_get_contents('php://input');
    
    $dt = json_decode($data);
  
    $emp_name = $dt->emp_name;
    $emp_add  = $dt->emp_add;
    $emp_mob  =  $dt->emp_mob;

    
    define('UPLOAD_DIR', 'images/');
    
    $img = $dt->emp_img;
    
    $img = str_replace('data:image/png;base64,', '', $img);
    $img = str_replace(' ', '+', $img);
    $data = base64_decode($img);
    $file = UPLOAD_DIR . uniqid() . '.png';
    $success = file_put_contents($file, $data);
    
  $query = "insert into tblemp(emp_name,emp_add,emp_mob,emp_img)values('$emp_name','$emp_add','$emp_mob','$file')";
  $con->query($query);
  
    echo "success";
    
  /*   $qu = "select * from tblemp";
    
     $rows = $con->query($qu);

    while($row = $rows->fetch_assoc())
     {
        $pp[]  = $row;
        
     }
    
    echo json_encode($pp);
   */
    
?>

