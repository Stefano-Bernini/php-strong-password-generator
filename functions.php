<?php
    if(isset($_GET['psw-length']) && $_GET['psw-length'] != '' ){
        function randomPasswordGen() {
            $pswLength = $_GET['psw-length'];

            $allowedChar = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
            $pass = [];
            $charLength = strlen($allowedChar) -1;
            for ($i = 0; $i < $pswLength; $i++) {
                $n = rand(0, $charLength);
                $pass[] = $allowedChar[$n];
            }
            return implode($pass);
        }
   
    }
?>