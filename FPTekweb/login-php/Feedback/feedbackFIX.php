<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Feedback glass</title>
    <link rel="stylesheet" href="feedbackFIX.css">
</head>

<body>
    <form action="logged.php" method="POST" class="form-php"><?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <section>


            <div class="container">
                <h2>Feedback Form</h2>
                <div class="row100">
                    <div class="col">
                        <div class="inputBox">
                            <input type="text" name="name1" required>
                            <span class="text">First Name</span>
                            <span class="line"></span>
                        </div>
                    </div>
                    <div class="col">
                        <div class="inputBox">
                            <input type="text" name="name2" required>
                            <span class="text">Last Name</span>
                            <span class="line"></span>
                        </div>
                    </div>
                </div>

                <div class="row100">
                    <div class="col">
                        <div class="inputBox">
                            <input type="text" name="email" required>
                            <span class="text">Email</span>
                            <span class="line"></span>
                        </div>
                    </div>
                    <div class="col">
                        <div class="inputBox">
                            <input type="number" name="mobile" required>
                            <span class="text">Mobile</span>
                            <span class="line"></span>
                        </div>
                    </div>
                </div>

                <div class="row100">
                    <div class="col">
                        <div class="inputBox textarea">
                            <textarea name="comment" required></textarea>
                            <span class="text"> Comment</span>
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
