<?php 
include('dbconn.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="index.css">
  <title>form login</title>
</head>
<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="web-login.php" method ="POST">
                    <h2>Login</h2>
                    <div class="inputbox">
                        <ion-icon name="username-outline"></ion-icon>
                        <input type="username" name = "username" required>
                        <label for="">Username</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name = "password" required>
                        <label for="">Password</label>
                    </div>
                    <div class="forget">
                        <label for=""><input type="checkbox">Remember Me  <a href="#">Forget Password</a></label>
                      
                    </div>
                    <button type = "submit" name = "login">Log in</button>
                    <div class="register">
                        <p>Don't have a account</p>
                        <a href="file:///C:/xampp/htdocs/pweb/plan%20b/Register.html" target="_self">Register</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>