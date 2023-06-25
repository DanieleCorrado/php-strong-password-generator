<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/index.css">
  <link rel="stylesheet" href="../css/password.css">

  <title>Password</title>
</head>
<body>


<div class="center">

  <h1>La password generata è:</h1>

  <div id="password">
    <p>
      <?php
        session_start();
        echo $_SESSION['password'];
      ?>
  </p>
  
  </div>

</div>
  
</body>
</html>

