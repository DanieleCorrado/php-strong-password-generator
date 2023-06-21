<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="index.css">
  <title>Password generator</title>

</head>
<body>

<form>
  <label for="pswLength">Lunghezza password: </label>
  <input type="number" name=lenght>
  <input type="submit" value="GENERATE">
</form>


<?php 

  if($_GET != [] || $_GET["pswLength"] != "") {
    echo generate_password($_GET["lenght"]);
  } else {
    echo "inserisci la lunghezza";
  }

  
  function generate_password($strength) {
      $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
      $permitted_chars_length = strlen($permitted_chars);
      $random_string = '';
      for($i = 0; $i < $strength; $i++) {
          $random_character = $permitted_chars[mt_rand(0, $permitted_chars_length - 1)];
          $random_string .= $random_character;
      }
      echo $random_string;
  }

?>
  
</body>
</html>

