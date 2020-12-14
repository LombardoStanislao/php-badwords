<?php
  $badword = $_GET["word"];

  $text = "Star Wars focuses on the journey of Luke Skywalker (Hamill), who along with the wizened Jedi Master Obi-Wan Kenobi (Guinness), smuggler Han Solo (Ford), and his Wookiee companion Chewbacca (Mayhew), attempts to free Princess Leia (Fisher) from the clutches of the tyrannical Galactic Empire.";

  $text_lenght = strlen($text);

  $text_replaced = str_replace($badword, "***", $text);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php-badword</title>
  </head>
  <body>
    <h1>
      La parola censurata è la seguente: <?php echo $badword; ?>
    </h1>

    <h3>
      Il testo è lungo: <?php echo $text_lenght; ?> caratteri
    </h3>

    <h2>Testo:</h2>

    <p><?php echo $text_replaced; ?></p>

  </body>
</html>
