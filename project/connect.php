<?php
$user = $_POST['user'];
$email = $_POST['email'];
$password = $_POST['password'];
$password2 = $_POST['password2'];
//db connection
$connection = new mysqli('localhost', 'root', '', 'login_details');
if ($connection->connect_error) {
    die('connection failed : ' . $connection->connect_error);
} else {
    $stmt = $connection->prepare('insert into logindetails(user, email, passowrd, passowrd2') value('?,?,?,?'));
    $stmt->bind_param("ssss", $user, $email, $password, $password2);
    $stmt->execute();
    $stmt->store_result($user, $email, $password, $password2);
    echo " Successfully Signed In";
    $stmt->close();
    $connection->close();
}
?>