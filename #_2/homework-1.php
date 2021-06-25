<?php
$employ = [
    'name' => 'jones',
    'position' => 'manager',
    'salary' => 1400,
    'currency' => 'gel'
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

    <?php foreach ($employ as $key => $value) {
        echo "<h5> $key: $value </h5>";
    }
    ?>

</body>

</html>