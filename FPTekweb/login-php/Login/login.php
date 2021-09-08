<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <form action="phpLogin.php" method="POST"><?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <section>
            <div class="container">
                <h2>Login Form</h2>
                <div class="row100">
                    <div class="col">
                        <div class="inputBox">
                            <input type="text" name="user" required>
                            <span class="text">Username</span>
                            <span class="line"></span>
                        </div>
                    </div>
                    <div class="col">
                        <div class="inputBox">
                            <input type="password" name="pass" required>
                            <span class="text">Password</span>
                            <span class="line"></span>
                        </div>
                    </div>
                </div>

                

                <div class="row100">
                    <div class="col">
                        <input type="submit" value="SUBMIT" name="submit">
                    </div>
                </div>
            </div>
        
        </section>
    </form>
</body>
</html>