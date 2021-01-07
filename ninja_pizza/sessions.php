<?php 

// Sessions
if(isset($_POST['submit'])){

    session_start();

    $_SESSION['name'] = $_POST['name'];

   // echo $_SESSION['name'];
   header('Location: ninja_pizza.php');
}


?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
        <input type="text" name="name">
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>