<?php
    include("kayit.php");
    session_start();
    ob_start();
    
    if(($_POST["username"]==$user) and ($_POST["password"]==$pass)){
        $_SESSION["login"] = "true";
        $_SESSION["user"] = $user;
        $_SESSION["pass"] = $pass;
        echo "HoşGeldiniz $user <br>";
        echo "Anasayfaya yönlendiriliyorsunuz.";
        header("Refresh: 2; url=hakkinda.html");
    }
    else{
        echo "Kullancı Adı veya Şifre Yanlış.<br>";
        echo "Giriş sayfasına yönlendiriliyorsunuz.";
        header("Refresh: 2; url=index.html");
    }
    ob_end_flush();
?>