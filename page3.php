<?php
    session_start();
    $name = isset($_SESSION['name'])? $_SESSION['name'] : 'Guest';
    $email = $_SESSION['email'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Sessions</title>
</head>
<body>
    <h5>Hello <?php echo $name; ?> <br> <a href="page1.php">Home</a> </h5>
    
</body>
</html>