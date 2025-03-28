<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ex 3-Formatting Results</title>
    <link rel="stylesheet" href="site.css">
</head>
<body>
<?php
//    $val1 = $_POST["val1"];
//    $val2 = $_POST["val2"];
//    $product = $val1 * $val2;

$val1 = doubleval($_POST["val1"]);
$val2 = doubleval($_POST["val2"]);
$vals = array($val1, $val2);
$msg = "";
$i = 0;
foreach ($vals as $val) {
    $msg .= sprintf("Value %d=%.2f, raw=%s\n", ++$i, $val, $val);
}
//$msg = sprintf("<p>data: %s</p>", $vals_string);
//$msg .= sprintf("n: %d<br>", $n);
//$msg .= sprintf("sample avg: %.2f<br>", $avg);
//$vals[] = $val1 * $val2; // Add a value to array
//
//$product = $val1 * $val2;
//var_dump($product);

?>
<h2>Ex 3 - Formatting Results</h2>
<textarea rows="10" cols="50"><?php echo $msg;?>
</textarea>
<table class="stats_table">
    <tr>
        <th>Value</th>
        <th>Raw</th>
    </tr>
    <tr>
        <td><?php echo sprintf("%.2f", $val1); ?></td>
        <td><?php echo $val1 ?></td>
    </tr>
    <tr>
        <td><?php echo sprintf("%.2f", $val2); ?></td>
        <td><?php echo $val2 ?></td>
    </tr>
</table>

</body>
</html>