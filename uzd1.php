<?php
$color = "black";
if (isset($_GET['color'])) {
    $color = "red";
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body * {
        color: purple;
    }
</style>

<body style="background-color: <?= $color ?>;">
    <h1>hi</h1>
    <a href="./uzd1.php">pirmas</a>
    <a href="./uzd1.php?color=1">antras</a>
</body>

</html>