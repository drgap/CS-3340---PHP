<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ex 1-Post Self, Validated</title>
    <link rel="stylesheet" href="site.css">
    <?php
        include "ex1-code-validated.php";
    ?>
</head>
<body>
<a href="outline.php">Back to menu</a>
<h2>Ex 1 - Post Self, Validated</h2>
<p>Example of page posting back to itself and data validated</p>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
<!--<form action="" method="POST">-->
    <!-- Can't get server-side includes to work
    <!--    z<div w3-include-html="ex1-html.html"></div>-->
    <!--    z<include src="./ex1-html.html"></include>-->
    <!--# zinclude file="ex1-html.html" -->
    <!--# zinclude virtual="ex1-html.html" -->
    <?php
        display_sports_choices();
    ?>
    <input type="submit" name="btn_submit">
    <?php
        if($_POST) {
            display_sports_selections();
        }
    ?>

</form>

</body>
</html>