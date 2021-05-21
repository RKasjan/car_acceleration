<?php

if(isset($_POST['make']))
{
    $make = $_POST ['make'];
    $model = $_POST ['model'];
    $torque = $_POST ['torque'];
    $power = $_POST ['power'];
    $acceleration = $_POST ['acceleration'];
    $max_speed = $_POST ['max_speed'];
   
  try {
        include "conn.php";
        header('Location: ../add-your-car.html'); 
       
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO acceleration (make, model, power, torque, acceleration, max_speed) 
                VALUES ('$make', '$model', '$power', '$torque', '$acceleration', '$max_speed')";
  $conn->exec($sql);
    $conn = null;
  }
  catch(PDOException $err) {
    echo "ERROR: Unable to connect: " . $err->getMessage();
  }

}

?>
