<?php
    if (isset($_GET['message'])) {
      $message = $_GET['message'];
      $messagel = strtoupper($message);
      $messages = strtolower($message);
      $messagen;
      for($i=0;$i < strlen($message);$i++){
          $messagen .= substr($messagel,$i,1) .  substr($messages,$i,1);
      }
    
      echo $messagen;
    }else{
      echo "Please input the word in English!!!!\n";
    }
?>
