<?php

$name = filter_input(INPUT_POST, 'name');
$surname = filter_input(INPUT_POST, 'surname');
$email = filter_input(INPUT_POST, 'email');
$number = filter_input(INPUT_POST, 'number');
$company = filter_input(INPUT_POST, 'company');
if (!empty($name)){
    if (!empty($surname))
    if (!empty($email)){
$host = "localhost";
$dbusername ="root";
$dbpassword = "";
$dbname = "registration";

//connection

$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
    die('Connect Error('.mysqli_connect_errno().')'
    .mysqli_connect_error());
}
else{
    $sql = "INSERT INTO account (name, surname, email, number, company)
    values ('$name', '$surname','$email', '$number', '$company')";
    if($conn->query($sql)){
        echo "New record is inserted successfully";
        
    }
    else{
        echo "Error:".$sql."<br>".$conn->error;
    }
    $conn->close();
}
    }
    else{
        echo "password should not be happy";
        die();
    }
}
else{
    echo "name should not be empty";
    die();
} 
?>
<html><body><a href="index.html"> HOME </a></body></html>