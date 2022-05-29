<?php
if (isset($_POST['submit'])){
    // start session
    session_start();

    // assigning post values as session variables 
    $_SESSION['name'] = htmlentities($_POST['name']);
    $_SESSION['email'] = htmlentities($_POST['email']);

    // redirect to page2.php 
    header('location: page2.php');


}
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
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <input type="text" name = "name" placeholder = "Enter Name">
        <br>
        <input type="text" name = "email" placeholder = "Enter Email">
        <br>
        <input type="submit" name = "submit" value = "submit">
    </form>
</body>
</html>