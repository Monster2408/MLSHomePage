<?php
session_start();
?>
<html>
<body>
    <?php
    if(!$_SESSION['login']){
        echo "error";

        $continue_url = 'http://mlserver.xyz/google/login.html'; // ログアウト後に戻ってくる画面のURL
        header('Location: https://www.google.com/accounts/Logout?continue=https://appengine.google.com/_ah/logout?continue=' . $continue_url);
        
    } else {
        echo "ok";
    }
    ?>
</body>
</html>