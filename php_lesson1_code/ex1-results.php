<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ex 1-PHP POST Results</title>
    <?php
        date_default_timezone_set('America/New_York');
        $curr_date = date("l, m.d.Y, h:i:s");
    ?>
    <link rel="stylesheet" href="site.css">
</head>
<body>
<h2>Ex 1 - PHP POST Results</h2>
<p>
    The values you entered on: <?php echo $curr_date; ?>
</p>
<p>Welcome <span class="keyword"><?php echo $_POST["name"]; ?></span>,
Your email address is: <span class="keyword"><?php echo $_POST["email"]; ?></span>.</p>

</body>
</html>