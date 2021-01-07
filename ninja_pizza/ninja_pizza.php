<?php 
// Source : youtube : The Net Ninja : PHP + MySQL tutorial, episodes 23 and following
include('db_connect.php');

// Query for all pizzas 
$sql = 'SELECT title, ingredients, id FROM pizzas ORDER BY created_at';

// Make query & get results
$result = mysqli_query($conn, $sql);

// Fetch the resulting rows as an array 
$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Clean after yourself 
mysqli_free_result($result);
mysqli_close($conn);

// Output result
//print_r($pizzas);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ninja Pizza</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<?php include('header.php'); ?>

<div class="container">
    <div class="row">
        <div class="col"><h1>Ninja Pizza</h1></div>
    </div>
    <div class="row">
        <?php foreach($pizzas as $pizza): ?>
            <div class="col">
                <div class="card">
                    <h6><?php echo htmlspecialchars($pizza['title']);?></h6>
                    <ul>
                        <?php $ingredients = explode(',', $pizza['ingredients']);
                        foreach($ingredients as $ing): ?>
                            <li> <?php echo htmlspecialchars($ing); ?></li>
                        <?php endforeach; ;?>
                    </ul>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>