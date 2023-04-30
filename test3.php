<?php

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$sum = $num1 + $num2;

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form input</title>
</head>

<body>
    <form action="" method="post">
        <p>Number 1: <input type="text" name="num1"></p>
        <p>Number 2: <input type="text" name="num2"></p>
        <p>Result: <input type="text" name="result" value="<?php echo @$sum; ?>"></p>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>

</html>