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

<div>
<?php
include __DIR__ . './function.php';
?>
</div>


  
</body>
</html>

