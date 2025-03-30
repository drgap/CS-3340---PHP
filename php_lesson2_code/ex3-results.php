<?php
session_start();
// Session can get stuck when testing. Uncomment, run, comment back
//  session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ex 3-Results</title>
    <link rel="stylesheet" href="site.css">
</head>
<body>
<a href="outline.php">Back to menu</a>
<h2>Ex 3 - Results</h2>
<?php
    $sum = $_SESSION['sum']; // Pull sum from session and display
    echo "<p>sum=$sum</p>";
    $vals = $_SESSION['vals']; // Pull vals from session and display
    $msg = "vals=";
    foreach($vals as $val){
        $msg .= $val.", ";
    }
    $msg = substr($msg, 0, -2);
    echo "<p>$msg</p>";
?>
</body>
</html>