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
            for ($i = $numValue; $i >= 1; $i--) {
                $currCounter = 0;
                $currNum = $i;
                for ($j = $numValue; $j >= 1; $j--) {
                    if ($i % $j == 0) {
                        $currCounter++;
                    }
                }
                if ($currCounter == 2 && $i != 2){
                    echo $i;
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