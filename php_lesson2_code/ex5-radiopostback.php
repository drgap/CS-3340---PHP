<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ex 5-Postback on RadioButton</title>
    <link rel="stylesheet" href="site.css">
</head>
<body>
<a href="outline.php">Back to menu</a>
<h2>Ex 5-Postback on RadioButton</h2>
<form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <p>Pick your favorite sport:</p>
    <p>
        <?php
            echo buildRadioButton('Baseball');
            echo buildRadioButton('Basketball');
            echo buildRadioButton('Football');
            echo buildRadioButton('Soccer');
        ?>
    </p>
    <input type="submit" >
</form>

<?php
?>
<?php
if(!array_key_exists("sports", $_POST)) { // Doesn't post back unless one is selected
    echo("--> You didn't select any sports.");
}
else {
    $sports = $_POST['sports'];
    $msg = "<p>You like this sport: <span class='yellow'>$sports[0]</span></p>";
    echo $msg;
}
?>
<?php // Heleper methods
function buildRadioButton($sport) {
    $rad = "<input type='radio' name='sports[]' onclick='this.form.submit();' value='$sport' ";
    $rad .= setCheckedAttribute($sport);
    $rad .= "/>" . PHP_EOL;
    $label = "<label>$sport</label>" . PHP_EOL;
    return $rad . $label;
}
function setCheckedAttribute($sport) {
    $msg = "";
    if(isset($_POST['sports'])) {
        $sports = $_POST['sports'];
        if ($sports[0] == $sport) {
            $msg = "Checked ";
        }
    }
    return $msg;
}
?>
</body>
</html>