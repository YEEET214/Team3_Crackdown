<?php
   if (array_key_exists($user, $users)) {
      if ($users[$_POST['uname']] != null && $_POST['pwd'] != null) {
         $_SESSION['valid'] = true;
         $_SESSION['timeout'] = time();
         $_SESSION['uname'] = $_POST['uname'];
         $msg = "You have entered correct username and password";
      } else { 
         $msg = "You have entered wrong Password"; 
      }
   } else {
      $msg = "You have entered wrong user name";
   }
?>