<?php
  session_start();
  if (isset($_SESSION['login'])) {
    header("Location: dashboard.php");
    exit();
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username"><br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password"><br>
        <input type="submit" name="" id="" value="login"><br>
    </form>
</body>
</html>

<?php
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    if ($username == "waiyankokoll" && $password == "1203") {
        $_SESSION['login'] = true;
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");

    }else {
        echo "Invalid username or password";
    }
  }


?>