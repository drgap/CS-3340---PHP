<?php
    if(isset($_POST['btn_results'])){ // Redirect if results button pressed
        header("Location: ex3-results.php");
        die();
    }
    session_start();
    //print_r($_SESSION);
    //var_dump($_SESSION);
    // Session can get stuck when testing. Uncomment, run, comment back
    //  session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ex 3-Session</title>
    <link rel="stylesheet" href="site.css">
</head>
<body>
<a href="outline.php">Back to menu</a>
<h2>Ex 3 - Session</h2>
<p>Example of page posting back to itself and using Session to sum the numbers entered
    as well keep all the numbers entered (not used until Results page). Provides
    Reset and a button to redirect to a Results page.
</p>


<form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <!-- Input -->
    <label for="val">Enter a number</label>
    <input type="text" id="val" name="val">
    <input type="submit" name="btn_submit">
    <input type="checkbox" name="reset" value="reset"/>
    <label for="reset">Reset</label>
    <input type="submit" name="btn_results", value="Results">

    <?php
        //debugPrint("Initial");
        if (isset($_SESSION['sum'])) {
            if (isset($_POST['reset'])) { // reset session
                session_unset();
                //debugPrint("Session destroyed");
                $_SESSION['sum'] = 0.0; // re-initialize session
                $_SESSION['vals'] = array();
                //debugPrint("Session re-created");
            }
            else { // Add posted val, remember val in array, and display sum
                if (isset($_POST['val'])) { // add val to sum
                    $_SESSION['sum'] += (float)(htmlspecialchars($_POST['val']));
                    if (is_array($_SESSION['vals'])) { // prob could have checked if vals array empty?
                        $vals = $_SESSION['vals']; // Get vals array from session
                        array_push($vals, $_POST['val']); // push current val into vals array
                    }
                    else { // not an array?
                        $vals = array(htmlspecialchars($_POST['val'])); // put current val in vals array
                    }
                    $_SESSION['vals'] = $vals; // put vals array back into session
                    echo '<p>sum=' . $_SESSION['sum'] . '</p>'; // display sum
                }
            }
        }
        else { // "first" time on page, initialize session
            $_SESSION['sum'] = 0.0;
            $_SESSION['vals'] = array();
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