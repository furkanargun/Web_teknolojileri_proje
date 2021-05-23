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
                <a href="hakkinda.html" class="navbar-brand">Furkan Argün</a>
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
                        <li class="nav-item px-4 dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="denizli.html" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Şehrim</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="denizli.html">Denizli <img src="png/rooster.png" class="img-fluid logo2" alt="" /></a></li>
                                <li><a class="dropdown-item" href="mirasimiz.html">Mirasımız</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="takimlar.html">Takımlar <img src="png/denizlispor.png" class="img-fluid logo2" alt=""> <img src="png/denizli-basket.png" class="img-fluid logo2" alt=""></a></li>
                            </ul>
                        </li>
                        <li class="nav-item px-4">
                            <a href="iletişim.html" class="nav-link text-white">İletişim</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-3 col-sm-0 col-0">
                    
                 </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12" style="margin:0 auto">
                <form>
                <label>Adı : </label> 
                <?php
                if(isset($_POST["ad"]))
                    echo $_POST["ad"];
                else
                echo "Hata var";
                ?><br><br>
                
                <label>Soyadı : </label> 
                <?php
                if(isset($_POST["soyad"]))
                    echo $_POST["soyad"];
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

                <label>Konu : </label> 
                <?php
                if(isset($_POST["konu"]))
                    echo $_POST["konu"];
                else
                echo "Hata var";
                ?><br><br>

                <label>Mesajınız : </label> 
                <?php
                if(isset($_POST["mesaj"]))
                    echo $_POST["mesaj"];
                else
                echo "Hata var";
                ?><br><br>
            </form>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-3 col-sm-0 col-0">
                    
                </div>
            </div>
            
        </div>
       
        <script src="js/bootstrap.js"></script>
    </body>
</html>