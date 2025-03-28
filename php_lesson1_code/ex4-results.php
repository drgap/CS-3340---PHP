<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ex 4-Checkbox Results</title>
    <link rel="stylesheet" href="site.css">
</head>
<body>
<h2>Ex 4 - Checkbox Results</h2>
<?php
if(!array_key_exists("sports", $_POST)) {
    echo("--> You didn't select any sports.");
}
else {
    $sports = $_POST['sports'];
    $n = count($sports);
    $msg = "<p>";
    if($n == 1) {
        $msg .= "You like this sport: ";
    }
    else {
        $msg .= "You like these sports: ";
    }
    for($i=0; $i<$n; $i++) {
        //$msg .= $sports[$i] . ", ";
        $msg = "$msg $sports[$i], ";
    }
    $msg = substr($msg, 0, -2);
    $msg .= "</p>";
    echo $msg;
}
?>
</body>
</html>