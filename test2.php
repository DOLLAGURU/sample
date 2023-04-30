<?php
extract($_POST);
if (isset($save)) {
    $answ = $num1 + $num1;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If statement</title>
</head>

<body>
    <form action="" method="POST">
        <p>Number 1<input type="text" name="num" value="<?php echo @$num; ?>" /></p>
        <p>Number 2<input type="text" name="num1" value="<?php echo @$num1; ?>" /></p>
        <p><input type="text" name="answ" value="<?php echo @$answ; ?>" /></p>
        <input type="submit" name="save">
    </form>
</body>

</html>