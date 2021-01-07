<?php 

session_start();

$name = $_SESSION['name'];

?>

<body>
    <p>Hello <?php echo htmlspecialchars($name); ?></p>
</body>
</html>