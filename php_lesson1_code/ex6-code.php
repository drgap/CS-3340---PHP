<?php
function display_sports() {
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