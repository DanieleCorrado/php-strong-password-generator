<?php 

  // Generatore password
  function generate_password($strength, $repetition, $character) {
      $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
      $numbs = '0123456789';
      $simbs = '!"$%&/()=?^*_-:.;,><}{[]';
      
      if((in_array("characters", $character)) && (in_array("numbers", $character)) && (in_array("simbols", $character))) {
        $permitted_chars = $chars . $numbs . $simbs;
      } else if ((in_array("characters", $character)) && (in_array("numbers", $character))){
        $permitted_chars = $chars . $numbs;
      } else if ((in_array("characters", $character)) && (in_array("simbols", $character))) {
        $permitted_chars = $chars . $simbs;
      } else if ((in_array("numbers", $character)) && (in_array("simbols", $character))) {
        $permitted_chars = $numbs . $simbs;
      } else if (in_array("characters", $character)) {
        $permitted_chars = $chars;
      } else if (in_array("numbers", $character)){
        $permitted_chars = $numbs;
      } else if (in_array("simbols", $character)) {
        $permitted_chars = $simbs;
      }

      $permitted_chars_length = strlen($permitted_chars);
      $random_string = '';

      for($i = 0; $i < $strength; $i++) {
        $random_character = $permitted_chars[mt_rand(0, $permitted_chars_length - 1)];
        if ($repetition === 'no') {
          if (!($random_string[$i-1] === $random_character)) {
            $random_string .= $random_character;
          } else {
            $i--;
          }
        } else {
          $random_string .= $random_character;
        }
      }
      session_start();
      $_SESSION['password'] = $random_string;
  }

?>