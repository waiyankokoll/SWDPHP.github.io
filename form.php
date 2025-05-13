<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css ">
</head>
<body class="">
    <header class="hero-container">
        <div class="container">
            <div class="row">
                <div class="col-12 offset-md-3 col-md-6 form offset-lg-4 col-lg-4">
                    <form action="form.php" method="post" class="mt-3">
                        <div class="mb-2">
                            <label for="name" class="form-label fw-bold mb-0">Name</label>
                            <input type="text" name="name" id="name" class="form-control form-input mt-0">
                        </div>
                        <div class="mb-2">
                            <label for="Age" class="form-label fw-bold mb-0">Age</label>
                            <input type="text" name="age" id="Age" class="form-control form-input mt-0">
                        </div>
                        <div class="mb-3">
                            <label for="city" class="form-label fw-bold mb-0">City</label>
                            <input type="text" name="city" id="city" class="form-control form-input mt-0">
                        </div>
                        <button type="submit" class="mb-3 btn text-center fw-bold">Submit</button>
                    </form>
                    

                </div>
            </div>
            
        </div>
     </header>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>

<?php
if (isset($_GET['name'])){
    $name = $_GET['name'];
    echo "Name : $name";
    echo "<br>";
}

?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $age =  $_POST["age"];
    $city = $_POST["city"];
    echo "Name: $name<br>";
    echo "Age: $age<br>";
    echo "City: $city<br>";
}else {
    echo "No data submitted";
}

session_start
?>