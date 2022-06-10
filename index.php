<?php

require_once __DIR__ . '/database.php';


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>


  <?php foreach($database as $album): ?>
    <img src="<?php echo $album['poster'] ?>" alt="">
    <h2><?php echo $album['title'] ?></h2>
    <p><?php echo $album['author'] ?></p>
    <p> <?php echo $album['year'] ?></p>

  <?php endforeach; ?>



  
</body>
</html>