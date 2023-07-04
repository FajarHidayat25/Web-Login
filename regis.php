<?php include('dbconn.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="reg.css">
  <title>form register</title>
</head>
<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="regis.php" method = "POST">
                    <h2>Register</h2>
                    <div class="inputbox">
                        <ion-icon name="email-outline"></ion-icon>
                        <input type="email" name = "email" required>
                        <label for="">Email adress</label>
                    </div>
                    <a href="file:///C:/xampp/htdocs/pweb/plan%20b/user.html
                    " target="_self">
                    <button type = "submit" name = "register1">Lanjut</button>
                    </a>
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>