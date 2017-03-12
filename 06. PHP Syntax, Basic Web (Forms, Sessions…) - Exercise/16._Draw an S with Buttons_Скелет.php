<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>
</head>
<body style="background-color: chocolate">
<?php
for ($i = 0; $i < 9; $i++) {
    if ($i == 0 || $i == 4 || $i == 8){
        for ($j = 0; $j < 5; $j++) { ?>
            <button style="background-color: blue">1</button>
 <?php  }
    } elseif ($i > 0 && $i < 4) {
        for ($j = 0; $j < 5; $j++) {
            if ($j == 0){ ?>
                <button style="background-color: blue">1</button>
     <?php } else { ?>
                <button>0</button>
     <?php }
        }
     } else {
        for ($j = 0; $j < 5; $j++) {
            if ($j == 4){ ?>
                <button style="background-color: blue">1</button>
     <?php } else { ?>
            <button>0</button>
     <?php }
    }
  } ?>
  <br>
<?php } ?>
</body>
<footer>
    <form action="index.php">
        <input type="submit" value="Back" />
    </form>
</footer>
</html>