<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>
</head>
<body style="background-color: chocolate">
    <?php
        if (isset($_GET['num'])){
            $n = intval($_GET['num']);
            echo $n * 2;
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