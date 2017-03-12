<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>
</head>
<body style="background-color: chocolate">
    <?php
        $negativeNumberCounter = 0;
        $hasZero = false;
        if (isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['num3'])) {
            $firstNumberValue = intval($_GET['num1']);
            $secondNumberValue = intval($_GET['num2']);
            $thirdNumberValue = intval($_GET['num3']);
            $numberArray = array($firstNumberValue, $secondNumberValue, $thirdNumberValue);
            for ($i = 0; $i < sizeof($numberArray); $i++){
                if ($numberArray[$i] < 0) {
                    $negativeNumberCounter++;
                }
                if ($numberArray[$i] == 0) {
                    $hasZero = true;
                }
            }
            if ($negativeNumberCounter % 2 == 0 || $hasZero == true) {
                echo "Positive";
            } else {
                echo "Negative";
            }
        } else { ?>
            <form>
                X: <input type="text" name="num1" />
		        Y: <input type="text" name="num2" />
                Z: <input type="text" name="num3" />
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