<?php 

  // Generatore password
  function generate_password($strength, $repetition) {
      $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
      $permitted_chars_length = strlen($permitted_chars);
      $random_string = '';
      for($i = 0; $i < $strength; $i++) {
        $random_character = $permitted_chars[mt_rand(0, $permitted_chars_length - 1)];
        if ($repetition === 'no') {
          if (!str_contains($random_string, $random_character)) {
            $random_string .= $random_character;
          }
        } else {
          $random_string .= $random_character;
        }
      }
      
      session_start();
      $_SESSION['password'] = $random_string;
  }

?>