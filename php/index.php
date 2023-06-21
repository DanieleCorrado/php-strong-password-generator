<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/index.css">
  <title>Password generator</title>

</head>
<body>

<div class="center">

  <h1>Strong Password Generator</h1>
  <h2>Genera una password sicura</h2>

</div>

<div id="generator">

  <form>
    <div class="d-flex justify-content-between">
      <label for="pswLength">Lunghezza password: </label>
      <input type="number" name=lenght>
    </div>
    <input class="sendButton" type="submit" value="INVIA">
  </form>

</div>

<?php
if($_GET != [] || $_GET["pswLength"] != "") {
  include __DIR__ . './function.php';
  echo generate_password($_GET["lenght"]);
  header('Location: ./password.php');
}
?>
  
</body>
</html>

