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