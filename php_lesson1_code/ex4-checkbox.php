<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ex4-Checkboxes</title>
    <link rel="stylesheet" href="site.css">
</head>
<body>

<h2>Ex 4 - Checkboxes</h2>
<form action="ex4-results.php" method="POST">
    <p>Pick your favorite sports:</p>
    <p>
        <input type="checkbox" name="sports[]" id="c1" value="Baseball"/>
        <label for="">Baseball</label>
        <input type="checkbox" name="sports[]" id="c2" value="Basketball"/>
        <label for="">Basketball</label>
        <input type="checkbox" name="sports[]" id="c3" value="Football"/>
        <label for="">Football</label>
        <input type="checkbox" name="sports[]" id="c4" value="Soccer"/>
        <label for="">Soccer</label>
    </p>
    <input type="submit" >
</form>

</body>
</html>