<?php
$color = "white";
if(count($_GET) != 0){
    $color = "green";
}

if(count($_POST) != 0){
    $color = "yellow";
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="background-color: <?=$color?>;">
    <form action="./uzd6.php" method="get">
        <input type="hidden" name="get">
        <button type="submit">submit get</button>
    </form>
    <form action="./uzd6.php" method="post">
        <button type="submit" name="post">submit post</button>
    </form>
</body>

</html>