<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>
</head>
<body style="background-color: chocolate">
    <?php
        if (isset($_GET['num1']) && isset($_GET['num2'])) {
            $firstNumberValue = intval($_GET['num1']);
            $secondNumberValue = intval($_GET['num2']);
            $productResult = $firstNumberValue * $secondNumberValue;

            echo $productResult;
        } else { ?>
             <form>
                 N: <input type="text" name="num1" />
                 M: <input type="text" name="num2" />
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