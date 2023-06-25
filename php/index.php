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
      <input type="number" name="lenght">
    </div>
    <div id="optionText" class="d-flex justify-content-between">
      <label for="character-repetition">Consenti ripetizioni di uno o più caratteri: </label>
      <div id="optionSelection" class="">
        <label for="yes">SI </label>
        <input type="radio" name="repetition" value="yes">
        <label for="no">NO </label>
        <input type="radio" name="repetition" value="no">
        <div id="psw-option" class="d-flex flex-column">
          <div id="char">
            <input type="checkbox" name="character[]" value="characters">
            <label for="characters">Caratteri </label>
          </div>
          <div id="numb">
            <input type="checkbox" name="character[]" value="numbers">
            <label for="numbers">Numeri </label>
          </div>
          <div id="simb">
            <input type="checkbox" name="character[]" value="simbols">
            <label for="simbols">Simboli </label>          
          </div>
        </div>
        
      </div>
    </div>
    <input class="sendButton" type="submit" value="INVIA">
  </form>

</div>

<?php
if($_GET != [] || $_GET["length"] != "") {
  include __DIR__ . '/function.php';
  echo generate_password($_GET["lenght"], $_GET["repetition"], $_GET['character']);
  header('Location: ./password.php');
}
?>
  
</body>
</html>

