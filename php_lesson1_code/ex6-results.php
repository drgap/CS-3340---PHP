<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ex 6-Includes Results</title>
    <link rel="stylesheet" href="site.css">
    <?php
        include "ex6-code.php";
    ?>
</head>
<body>
<h2>Ex 6 - Includes Results</h2>
<?php
if(!array_key_exists("sports", $_POST)) {
    echo("--> You didn't select any sports.");
}
else {
    display_sports();
}
?>
</body>
</html>