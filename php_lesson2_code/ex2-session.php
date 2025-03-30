<?php
    session_start();
// Session can get stuck when testing. Uncomment, run, comment back
//  session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ex 2-Session</title>
    <link rel="stylesheet" href="site.css">
    <?php
//        include "ex1-code.php";
    ?>
</head>
<body>
<a href="outline.php">Back to menu</a>
<h2>Ex 2 - Session</h2>
<p>Example of page posting back to itself and using Session to sum the numbers entered.
    Also provides a way to start the sum over by using the Reset checkbox</p>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <!-- Input -->
    <label for="val">Enter a number</label>
    <input type="text" id="val" name="val">
    <input type="submit" name="btn_submit">
    <input type="checkbox" name="reset" value="reset"/>
    <label for="reset">Reset</label>

    <!-- Display, on postback -->
    <?php
        //debugPrint("Initial");
        if (isset($_SESSION['sum'])) {
            if (isset($_POST['reset'])) { // reset session
                session_unset();
                //debugPrint("Session destroyed");
                $_SESSION['sum'] = 0.0; // re-initialize session
                //debugPrint("Session re-created");
            }
            else { // Add posted val and display sum
                if (isset($_POST['val'])) {
                    $_SESSION['sum'] += (float)(htmlspecialchars($_POST['val']));
                }
                echo '<p>sum=' . $_SESSION['sum'] . '</p>';
            }
        }
        else {  // "first" time on page, initialize session
            $_SESSION['sum'] = 0.0;
            //debugPrint("Session created, initial");
        }
    ?>

</form>

<?php
function debugPrint($msg) {
    // Unfortunately, isset return 1 or 0, for true or false, so coded to provide strings
    $isSumInSession = isset($_SESSION['sum']) ? "true" : "false";
    $isResetPosted = isset($_POST['reset']) ? "true" : "false";
    $isValPosted = isset($_POST['val']) ? "true" : "false";

    $msg2 =
        '<p><b>' . $msg . '</b><br>' .
        '$isSumInSession=' . $isSumInSession . '<br>' .
        '$isResetPosted=' . $isResetPosted . '<br>' .
        '$isValPosted=' . $isValPosted ;

    // Interesting to note that the textbox is always posted, even when no entry.
    if ($isValPosted == "true") {
        $valPosted = $_POST['val'];
        $msg2 .=
        ', valPosted=' . $valPosted .
        '<br></p>';
    }
    else {
        $msg2 .= '<br></p>';
    }
    echo $msg2;
}
?>

</body>
</html>