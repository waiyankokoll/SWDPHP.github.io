<?php
  session_start();
  if (!isset($_SESSION['login'])) {
    header("Location: index.php");
    exit();
  }
  $theme = isset($_COOKIE['theme']) ? $_COOKIE['theme'] : "light";
  $bg = $theme == 'dark' ? '#222' : '#fff';
  $color = $theme == 'dark' ? '#fff' : '#222';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: <?php echo $bg; ?>; color: <?php echo $color; ?>;">
    <h1>Welcome ,Dashboard</h1><?php echo $_SESSION['username'] ?>!  |
    <a href="logout.php">Logout</a> |
    <a href="set_theme.php">Switch Theme</a>
    <?php
      $students = [
        ["name" => "Alice", "grade" => 85],
        ["name" => "Bob", "grade" => 67],
        ["name" => "charlie", "grade" => 45],
        ["name" => "Diana", "grade" => 92],
        ["name" => "Evan", "grade" => 30],

      ]
    ?>
    <table border="1" cellspacing="0" cellpadding="5">
    <tr>
        <th>Name</th>
        <th>Grade</th>
        <th>Pass & fail</th>
    </tr>
    <?php foreach($students as $student): ?>
    
        <tr>
            <td><?= $student['name'] ?></td>
            <td><?= $student['grade'] ?></td>
            <td><?php if ($student['grade'] < 50) {
              echo "fail";
            }else {
              echo "pass";
            } ?></td>

        </tr>
    <?php endforeach; ?>;
</table>
</body>
</html>