<?php
function display_sports_choices() {
    echo
    '<p>
        <label for="name" >Name</label>
        <input type="text" name="name" id="name">
    </p>
    <p>
        <label for="sports" id="labelListBox">Pick your favorite sports</label>
        <select name="sports[]" size="5" id="sports" multiple>
            <option value="Baseball">Baseball</option>
            <option value="Basketball">Basketball</option>
            <option value="Football">Football</option>
            <option value="Soccer">Soccer</option>
        </select>
    </p>';
}
function display_sports_selections() {
    $msg = "";
    if (isset($_POST['sports'])) {
        $sports = $_POST['sports'];
        $n = count($sports);
        $msg = "<p>Great " . htmlspecialchars($_POST['name']) . ", ";
        if ($n == 1) {
            $msg .= "you like this sport: ";
        } else {
            $msg .= "you like these sports: ";
        }
        for ($i = 0; $i < $n; $i++) {
            //$msg .= $sports[$i] . ", ";
            $msg = "$msg $sports[$i], ";
        }
        $msg = substr($msg, 0, -2);
        $msg .= "</p>";
    }
    else {
        $msg = "<p>You didn't select any sports</p>";
    }
    echo $msg;
}
?>