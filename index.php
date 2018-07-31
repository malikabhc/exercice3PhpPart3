<?php
  $firstNumber = 100;
  $secondNumber = rand(1,100);
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
        echo $firstNumber * $secondNumber . ' ';
        $firstNumber--;
      }

/*Autre possibilité la boucle for
      for ($firstNumber = 100; $firstNumber >= 10; $firstNumber--) {
        echo $firstNumber * $secondNumber . ' ';
      }
*/
    ?>
    </p>
  </body>
</html>
