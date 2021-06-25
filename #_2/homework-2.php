<?php

if (isset($_GET['name']) && isset($_GET['lastName'])){
    $text = "Username: {$_GET['name']}, Lastname: {$_GET['lastname']}";
    file_put_contents('file.txt', $text);
}

$person = [
    'name' => $_GET['name'],
    'lastname' => $_GET['lastname'],
];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form method="GET">
        <input type="text" name="name">
        <input type="text" name="lastname">
        <button>send</button>
    </form>
    <?php foreach ($person as $key => $value){
        echo "<h1>{$key}: {$value}</h1>";
    }?>

</body>

</html>