<?php
session_start();
include ("conecting.php");

    
    $name=$_POST['name'];
    $phone_no=$_POST['phone_no'];
    $car_model=$_POST['car_model'];
    $location=$_POST['location'];
    $conn=new mysqli('localhost','root','','document');
    if($conn->connect_error)
    {
        die('connection failed :'.$conn->connect_error);
    }else
    {
        $stmt = $conn->prepare("insert into document(name, phone_no, car_model, location) values(?,?,?,?)");
        $stmt->bind_param("siss",$name, $phone_no, $car_model, $location);
        $stmt->execute();
        echo "succesfull" ;
        $stmt->close();
        $conn->close();
    }
    ?>