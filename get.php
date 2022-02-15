<?php 
    $say = "Hello" . htmlspecialchars($_GET['name']); //supaya urlnya tidak bisa di rubah
?>
<html>
    <body>
        <h1><?= $say ?></h1>
    </body>
</html>