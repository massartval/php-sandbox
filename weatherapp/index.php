<!-- PDO connection -->
<?php require_once('sql_connect.php'); ?>

<!-- SQL request -->
<?php 
// write the SQL statement
$sql = 'SELECT * FROM meteo';

// execute the query using the 'query()'method of the PDO object
$data = $pdo->query($sql);

// format the data into an array using the 'setFetchMode()' method. Facultative ?
// $data->setFetchMode(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WeatherApp</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>VILLE</th>
                <th>T° MAX</th>
                <th>T° MIN</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $data->fetch()): ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['ville']) ?></td>
                    <td><?php echo htmlspecialchars($row['haut']); ?></td>
                    <td><?php echo htmlspecialchars($row['bas']); ?></td>
                </tr>
            <?php endwhile; 
            $data->closeCursor();?>
        </tbody>
    </table>

<!-- Another method -->

    <?php 
    /*
    // $data_rows is a facultative array that allows to directly print the whole data; however the "while ... fetch()" method is cleaner and doesn't require the intermediate array
    $data_rows = $data->fetchAll(PDO::FETCH_ASSOC);
    var_dump($data_rows);
    */
    ?>
    <!--
        <table>
            <thead>
                <tr>
                    <th>VILLE</th>
                    <th>T° MAX</th>
                    <th>T° MIN</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($data_rows as $row): ?> 
                <tr>
                    <td><?php echo htmlspecialchars($row['ville']) ?></td>
                    <td><?php echo htmlspecialchars($row['haut']); ?></td>
                    <td><?php echo htmlspecialchars($row['bas']); ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
-->

<?php include('sql_insert.php'); ?>

</body>
</html>