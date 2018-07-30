<?php
  $firstNumber = 100;
  $secondNumber = 94;
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 3/3</title>
  </head>
  <body>
    <p>
    <?php
      while ($firstNumber >= 10) {
        echo $firstNumber * $secondNumber;
        $firstNumber--;
      }
    ?>
    </p>
  </body>
</html>
