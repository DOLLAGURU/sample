<?php
if (isset($_POST['submit'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $sum = $num1 + $num2;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form manipulation</title>
</head>

<body>
    <form action="" method="POST">
        Number one: <input type="text" name="num1" value="<?php echo $_POST['num1']; ?>"><br />
        Number two: <input type="text" name="num2" value="<?php echo $_POST['num2']; ?>"><br />
        Result: <input type="text" name="sum" value="<?php echo @$sum; ?>">
        <input type="submit" name="submit" value="Submit">

    </form>
</body>

</html>