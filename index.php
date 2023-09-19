<?php
require_once __DIR__ . '/Classes/Movies.php';

$mymovie = new Movies('Spiderman', '1999', 'Action', 'English');
$mymovie2 = new Movies('Via col vento', '1955', 'Drama', 'Italian');
var_dump($mymovie);
var_dump($mymovie2);
?>


<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" defer></script>
  <title>PHP OOP 1</title>
</head>

<body>

  <?php
  $mymovie->getMovieInfo();
  echo '<br>';
  $mymovie2->getMovieInfo();
  echo '<br>';
  ?>

</body>

</html>