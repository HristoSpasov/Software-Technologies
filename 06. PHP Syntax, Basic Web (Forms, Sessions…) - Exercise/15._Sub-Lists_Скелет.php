<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>
</head>
<body style="background-color: chocolate">
<ul>
    <?php
    if (isset($_GET['num1']) && isset($_GET['num2'])){
    $firstValue = intval($_GET['num1']);
    $secondValue = intval($_GET['num2']);
    for ($i = 1; $i <= $firstValue; $i++) { ?>
    <li>List<?php echo " $i" ?>
        <ul>
            <?php for ($j = 1; $j <= $secondValue; $j++) { ?>
                <li>Element<?php echo " $i.$j" ?></li>
            <?php } ?>
        </ul>
    </li>
        <?php } ?>
</ul>
<?php } else { ?>
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