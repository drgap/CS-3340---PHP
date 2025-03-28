
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ex 1-PHP Post Example</title>
    <?php
        date_default_timezone_set('America/New_York');
        $curr_date = date("l, m.d.Y, h:i:s");
    ?>
    <link rel="stylesheet" href="site.css">
</head>
<body>

<h2>Ex 1 - PHP Post Example</h2>
<p>
    <?php
        echo $curr_date;
    ?>
</p>
<?php
//    echo "<p>$curr_date</p>";
//    echo "<p>" . $curr_date . "</p>";
//?>
<form action="ex1-results.php" method="POST">
    <p>Name: <input type="text" name="name"></p>
    <p>E-mail: <input type="text" name="email"></p>
    <input type="submit">
</form>

</body>
</html>