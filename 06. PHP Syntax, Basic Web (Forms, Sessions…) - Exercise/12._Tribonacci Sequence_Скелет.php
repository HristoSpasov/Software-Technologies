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
            $firstNumber = 1;
            $secondNumber = 1;
            $thirdNumber = 2;
            if ($numValue == 1) {
                echo 1;
                echo "\r\n";
            } elseif ($numValue == 2) {
                echo 1;
                echo "\r\n";
                echo 1;
                echo "\r\n";
            }
            else {
                echo 1;
                echo "\r\n";
                echo 1;
                echo "\r\n";
                echo 2;
                echo "\r\n";
                $a = 1;
                $b = 1;
                $c = 2;
                $d = 0;
                for ($i = 3; $i < $numValue; $i++) {
                    $d = $a + $b + $c;
                    echo $d;
                    $a = $b;
                    $b = $c;
                    $c = $d;
                    echo "\r\n";
                }
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