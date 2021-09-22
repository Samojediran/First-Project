<?php
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$password = $_POST['password'];

//database connection
$conn = new mysqli("localhost", "root", "","test2");
if ($conn -> connect_error){
    die("Connection Failed : " .$conn -> connect_error);
}else{
    $stmt = $conn -> prepare("insert into register(firstName, lastName, email, password)
    value(?, ?, ?, ?)");
    $stmt ->bind_param("ssss",$firstName, $lastName, $email, $password);
    $stmt -> execute();
    echo "Registration Successful....";
    echo "<a href='nlog.html'>login</a>";
    $stmt -> close();
    $conn -> close();
};





?>