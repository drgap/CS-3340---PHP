<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ex 5-Functions Results</title>
    <link rel="stylesheet" href="site.css">
</head>
<body>
<h2>Ex 5 - Functions Results</h2>
<?php
function sports_message($sports) {
    $msg = "You like this sport: $sports[0]";
    return $msg;
}
function make_paragraph($msg) {
    $msg = "<p>$msg</p>";
    return $msg;
}
function sports_message2() {
    global $sports;
    $msg = "You like this sport: $sports[0]";
    return $msg;
}
?>
<?php
if(!array_key_exists("sports", $_POST)) {
    echo("--> You didn't select any sports.");
}
else {
    $sports = $_POST['sports'];
    $msg = sports_message($sports);
    $msg = make_paragraph($msg);
    echo $msg;
}
?>
</body>
</html>