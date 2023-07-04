<?php include('dbconn.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="reg1.css">
  <title>form register</title>
</head>
<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="user.php" method = "POST">
                    <h2>Register</h2>
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
                    <button type ="submit" name = "register2">Selesai</button>
                    </a>
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>