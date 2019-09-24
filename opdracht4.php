<?php
/**
 * Created by IntelliJ IDEA.
 * User: Christopher
 * Date: 9/23/2019
 * Time: 9:59 AM
 */

?>

<!DOCTYPE html>
<html>
<head>
    <title>opdracht4</title>
</head>
<body>

<form action="" method="post">
<input type = "text" name="boodschap">
    <input type="submit" name="submit" value="Verstuur">
</form>

<?php session_start(); ?>
<ul>
    <?php
    if (!empty($_POST['submit'])) {

        $_SESSION['boodschappen'][] = $_POST['boodschap'];

        foreach ($_SESSION['boodschappen'] as $boodschap) {
            echo "<li>".$boodschap."</li>";
        }
    } else {
        $_SESSION['boodschappen'] = [];
    }
    ?>
</body>
</html>


