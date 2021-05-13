<!DOCTYPE html>
<html>
    <head>
        <title>İletişim</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
        <body>
        <!--navbar-expand-lg tam ekranda menü tuşunu kaldırmak için-->
        <nav class="navbar navbar-dark bg-dark navbar-expand-lg text-white">
            <!---fluid boşuksuz-->
            <div class="container">
  
                <a class="navbar-brand" href="#">
                    <img src="png/rooster.png" class="img-fluid logo" alt="" />
                </a>
                <a href="index.html" class="navbar-brand">Furkan Argün</a>
                <!--açılır kapanır buton-->
                <button
                    class="navbar-toggler ms-auto"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbar-menu"
                    aria-controls="navbar-menu"
                    aria-expanded="false"
                    aria-label="Toggle-navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!--Açılıp kapanma butonu içeriği / id ile eşleştiriyoruz-->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <!--liste menü oluşturup linleri oluşturuyoruz ms-auto soldan boşluk bırakım menüyü sağ tarafa kaydırıyor mx orta-auto sağdan-->
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item px-4">
                            <a href="sehrim.html" class="nav-link text-white">Şehrim</a>
                        </li>
                        <li class="nav-item px-4">
                            <a href="iletişim.html" class="nav-link text-white">İletişim</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="/index.html">Denizli</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-items d-flex justify-content-between w-100">
                        <div class="navbar-nav">
                            <a class="nav-link" aria-current="page" href="index.html">Hakkında</a>
                            <a class="nav-link" href="sehrim.html">Şehrim</a>
                            <a class="nav-link" href="#">Mirasımız</a>
                            <a class="nav-link" href="iletişim.html" tabindex="-1" aria-disabled="true">İletişim</a>
                        </div>
                        <a class="nav-link justify-content-end" href="#">Giriş</a>
                    </div>
                </div>
            </div>
        </nav>
        -->
        <!--
        <div class="container" style="background-color:rgb(0, 0, 0);text-align: center;">
            <div class "row">
                <div class="btn-group" style="background-color:rgb(15, 201, 62)" > 
                    <a href="index.html"><button type="button" class="btn">HAKKINDA</button></a>
                    <a href="iletişim.html"><button type="button" class="btn">İLETİŞİM</button></a>
                    <a href="sehrim.html"><button type="button" class="btn">ŞEHRİM</button></a>
                    <button type="button" class="btn">MİRASIMIZ</button>
                    <button type="button" class="btn">BİZE ULAŞIN</button>
                </div>
            </div>
        </div>-->
        <form>
            <label>Adı Soyadı : </label> 
            <?php
            if(isset($_POST["adsoyad"]))
                echo $_POST["adsoyad"];
            else
            echo "Hata var";
            ?><br><br>

            <label>E posta : </label> 
            <?php
             if(isset($_POST["email"]))
            echo $_POST["email"];
            else
            echo "Hata var";
            ?><br><br>

            <label>Telefon : </label> 
            <?php
             if(isset($_POST["tel"]))
            echo $_POST["tel"];
            else
            echo "Hata var";
            ?><br><br>

            <label>Cinsiyet : 
            </label><?php
             if(isset($_POST["cinsiyet"]))
                if($_POST["cinsiyet"]=="e") echo "Erkek";
                else echo "Kadın";
            else
            echo "Hata var";
            ?><br><br>

            <label>Bulunduğu İl : </label>
            <?php
             if(isset($_POST["il"]))
            echo $_POST["il"];
            else
            echo "Hata var";
            ?><br><br>
        </form>
        <script src="js/bootstrap.js"></script>
    </body>
</html>
<!--
<?php
echo "HOŞGELDİNİZ "."<b>".$_GET["adsoyad"]."<b>";
?>
-->