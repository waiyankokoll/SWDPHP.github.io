<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="login_form.php" method="post">
        <label for="username">Username: </label>
        <input type="text" name="username" id="username">
        <br>
        <label for="password">Password: </label>
        <input type="number" name="password" id="password">
        <br>
        <input type="submit" name="" id="" value="Login">

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = htmlspecialchars($_POST["username"]);
        $password = htmlspecialchars($_POST["password"]);


        if ($username == "waiyankokoll" && $password == "1203") {
            session_start();
            $_SESSION['login'] = true;
            $_SESSION['username'] = $username;
            header("Location: profile.php");
            exit();

        }else {
            echo "Login failed";
        };
    };
    ?>
        
    </form>
</body>
</html>