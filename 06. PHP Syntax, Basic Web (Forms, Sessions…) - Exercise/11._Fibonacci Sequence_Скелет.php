<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>
</head>
<body style="background-color: chocolate">
<?php
if (isset($_GET['num'])){
    $numValue = intval($_GET['num']);
    $firstFibonacciNumber = 0;
    $secondFibonacciNumber = 1;
    echo 1 . "\r\n";
    for ($i = 2; $i <= $numValue; $i++) {
        $currNumber = $firstFibonacciNumber + $secondFibonacciNumber;
        echo $currNumber;
        $firstFibonacciNumber = $secondFibonacciNumber;
        $secondFibonacciNumber = $currNumber;
        echo "\r\n";
    }
} else { ?>
    <form>
        N: <input type="text" name="num" />
        <input type="submit" />
    </form>
<?php } ?>
</body>
<footer>
    <form action="index.php">
        <input type="submit" value="Back" />
    </form>
</footer>
</html>