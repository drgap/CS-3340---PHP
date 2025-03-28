<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ex 2-Numbers Results</title>
    <link rel="stylesheet" href="site.css">
</head>
<body>
<?php
//    $val1 = $_POST["val1"];
//    $val2 = $_POST["val2"];
//    $product = $val1 * $val2;

$val1 = doubleval($_POST["val1"]);
var_dump($val1);
$val2 = doubleval($_POST["val2"]);
var_dump($val2);
$product = $val1 * $val2;
var_dump($product);

?>
<h2>Ex 2 - Numbers Results</h2>
<p>
    The product is: <?php echo $val1; ?> * <?php echo $val2; ?> = <?php echo $product; ?>
</p>

</body>
</html>