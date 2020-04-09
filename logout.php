
 <!DOCTYPE html>

<html>
<body>
<?php


 include 'check.php';



session_start();
unset($_SESSION["name"]);
unset($_SESSION["password"]);
header('location:index.php');
?>

</body>
</html>