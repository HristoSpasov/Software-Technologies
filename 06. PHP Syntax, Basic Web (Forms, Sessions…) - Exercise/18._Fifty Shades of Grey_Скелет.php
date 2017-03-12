<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>
    <style>
        div {
            display: inline-block;
            margin: 5px;
            width: 20px;
            height: 20px;
        }
    </style>
</head>
<body style="background-color: chocolate;">
<?php
$currShade = 0;
for ($row = 0; $row < 5; $row++) {
    for ($col = 0; $col < 10; $col++) {
        echo "<div style=\"background-color: rgb($currShade, $currShade, $currShade);\"></div>";
        $currShade += 5;
    }
    echo '<br>';
    $currShade ++;
}
?>
</body>
<footer>
    <form action="index.php">
        <input type="submit"; value="Back" />
    </form>
</footer>
</html>