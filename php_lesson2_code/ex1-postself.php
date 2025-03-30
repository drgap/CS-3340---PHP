<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ex 1-Post Self</title>
    <link rel="stylesheet" href="site.css">
    <?php
        include "ex1-code.php";
    ?>
</head>
<body>
<a href="outline.php">Back to menu</a>
<h2>Ex 1 - Post Self</h2>
<p>Example of page posting back to itself</p>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
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
        else {
            echo "<p><span class='error'>First time on page</span></p>";
        }
    ?>
    <hr>
    XSS, copy in URL or text field
    <ol>
        <li class="lipadding monofont">
            /"&gt;&lt;script&gt;document.body.style.backgroundColor = "red";alert("XSS Attack")&lt;/script&gt;&lt;p "
        </li>
        <li class="lipadding monofont">
            /"&gt;&lt;p style="background:yellow"&gt;XSS Example&lt;/p&gt;&lt;p "
        </li>
    </ol>

</form>

</body>
</html>