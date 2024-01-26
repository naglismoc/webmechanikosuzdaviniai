<?php
session_start();

$letters = "ABCDEFGHIJKLMNOPRSTUXYWZ";
$rnd = rand(3, 10);
$color = "black";

if (!isset($_SESSION['cbCount'])) {
    $_SESSION['cbCount'] = $rnd;
}

$cbChecked = 0;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['cb'])) {
        $cbChecked = count($_POST['cb']);
    }
    $color = "white";
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
    <?php if ($_SERVER['REQUEST_METHOD'] == 'GET') { ?>
        <form action="" method="post">
            <?php for ($i = 0; $i < $rnd; $i++) { ?>
                <input type="checkbox" name="cb[]" id="cb<?= $i ?>">
                <label for="cb<?= $i ?>"><?= $letters[$i] ?></label> <br>
            <?php } ?>
            <button type="submit">siusti</button>
        </form>
    <?php } else { ?>
        <h1>Pažymėta buvo <?= $cbChecked . " / " . $_SESSION['cbCount'] ?></h1>
    <?php
        unset($_SESSION['cbCount']);
    } ?>
</body>

</html>