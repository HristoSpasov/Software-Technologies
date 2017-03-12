<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>
</head>
<body style="background-color: chocolate">
    <?php
        $resultFactorial = 1;
        if (isset($_GET['num'])){
            $numValue = intval($_GET['num']);
            for ($i = 2; $i <= $numValue; $i++){
                $resultFactorial *= $i;
            }
            echo $resultFactorial;
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