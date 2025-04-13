<!DOCTYPE html>
<html lang="en">
<head>
    <title>Database Select</title>
    <link rel="stylesheet" href="site.css">
</head>
<?php
    include "Team.php";
?>
<body>
    <h2>Database Select</h2>
    <h3>Use PDO to Fetch Team Objects</h3>
    <?php
        try {
            $conn = build_connection(); // Create connection
            //check_connection_status($conn);
            $stmt = $conn->query("SELECT * FROM teams"); // Set query
            $stmt->setFetchMode(PDO::FETCH_INTO, new Team); // Fetch objects
            // Loop over objects
            foreach($stmt as $team) {
                echo $team->getTeam().'<br />';
            }
            $conn=null;
            $stmt = null;
        }
        catch (PDOException $e) {
            echo "Connection failed via PDO!!!"."<br>";
            echo $e->getMessage();
        }
    ?>

    <h3>Use PDO to Fetch Associative Array</h3>
    <?php
    try {
        $conn = build_connection();
        //check_connection_status($conn);
        $stmt = $conn->query("SELECT * FROM teams"); // Set query
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC); // Fetch objects into associative array
        // Loop over objects
        foreach($result as $team) {
            echo "Team Name: " . $team["Name"] . ", " .
                 "Team ID: ". $team["TeamID"] . ", " .
                 "Coach: " . $team["CoachFirstName"] . " " . $team["CoachLastName"] . '<br />';
        }
        $conn=null;
        $stmt = null;
    }
    catch (PDOException $e) {
        echo "Connection failed via PDO!!!"."<br>";
        echo $e->getMessage();
    }
    ?>
</body>
<?php
function build_connection() {
    $servername = "localhost"; // Server name
    $username = "root"; // Default username
    $password = ""; // Default password (usually empty for Wamp)
    $dbname = "league"; // Your database name
    $dns = "mysql:host=$servername;dbname=$dbname";
    $conn = new PDO($dns, $username, $password); // Create connection
    return $conn;
}
// Debug code
function check_connection_status($conn) {
    $attributes = array(
        "AUTOCOMMIT", "CASE", "ERRMODE", "CASE", "CLIENT_VERSION", "CONNECTION_STATUS",
        "ORACLE_NULLS", "PERSISTENT", "PREFETCH", "SERVER_INFO", "SERVER_VERSION",
        "TIMEOUT"
    );
    echo "<ol>" . PHP_EOL;
        foreach ($attributes as $val) {
            try {
                $msg = "PDO::ATTR_$val: ";
                $status = $conn->getAttribute(constant("PDO::ATTR_$val")) . "\n";
                echo build_li($msg, $status);
            }
            catch (PDOException $e) {
                echo build_li($msg, "<i>Not Supported</i>");
            }
        }
    echo "</ol>" . PHP_EOL;
}
function build_li($msg, $result) {
    $li = "<li class='monofont'>";
    $li .= $msg . " = " . $result;
    $li .= "</li>";
    return $li;
}
?>
