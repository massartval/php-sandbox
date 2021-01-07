<?php
if(isset($_POST['submit'])) {
    $ville = $_POST['ville'];
    $haut = $_POST['haut'];
    $bas = $_POST['bas'];

    $sql_insert = "INSERT INTO meteo (ville, haut, bas) VALUES ('$ville', '$haut', '$bas')";
    $data_insert = $pdo->query($sql_insert);
    $data_insert->closeCursor();
}

?>

<form action="" method="post">
    <label for="ville">Ville</label>
    <input type="text" name="ville" placeholder="nom de la ville">
    <label for="haut">T° max</label>
    <input type="number" name="haut" placeholder="T° max">
    <label for="bas">T° min</label>
    <input type="number" name="bas" placeholder="T° min">
    <input type="submit" name="submit" value="submit">
</form>
