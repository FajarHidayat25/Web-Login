<?php 
session_start();
$db = mysqli_connect('localhost','root','','clothing');

if(isset($_POST['register1'])){
    $_SESSION['email'] = $_POST['email'];
    header("location: user.php");
}

if(isset($_POST['register2'])){
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];
    $username = $_SESSION['username'];
    $password = $_SESSION['password'];
    $email = $_SESSION['email'];
    $query = "INSERT INTO regis(username,password,email) 
    VALUES('$username', '$password', '$email')";
    mysqli_query($db, $query);

    header("location: web-login.php");
}

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "SELECT * FROM regis WHERE
    username = '$username' AND
    password = '$password'";
    $result = mysqli_query($db, $query);
    $row = mysqli_fetch_array($result);
    if(mysqli_num_rows($result)==1){
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        die("Berhasil Login Username = ". $_SESSION['username']." PASSWORD : ". $_SESSION['password']);
    }
}
?>