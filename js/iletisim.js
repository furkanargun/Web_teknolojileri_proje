function adKontrol(){
    var x=document.getElementById("ad").nodeValue;
    var harf=x.length;
    
    if (harf<6){
        document.getElementById("sonuc").innerHTML="Adınız ve soyadınız en az 6 karakter olmalı şusn "+harf+" karakter";
    }
}