<!DOCTYPE html>
<html>
    <head>
        <title>İletişim</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"
    </head>
        <body>
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
        </div>
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
    </body>
</html>
<!--
<?php
echo "HOŞGELDİNİZ "."<b>".$_GET["adsoyad"]."<b>";
?>
-->