<?php
if (isset($_POST['name']) || isset($_POST['age'])) {
    if(preg_match("/[^A-Za-z'-]/",$_POST['name'])){
        die("Invalid name. Name should be alphabet");
    }
    echo "Hello " . $_POST['name'] . "<br/>";
    echo "Your age is " . $_POST['age'] . " years";
    exit();
}

?>
<html>

<body>
    <form action="<?php $_PHP_SELF ?>" method="POST">
        Name: <input types="text" name="name" />
        Age: <input type="text" name="age" />
        <input type="submit">
    </form>
</body>

</html>