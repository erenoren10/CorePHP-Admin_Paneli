<?php
$seo =$_GET['seo'];

if($seo=='iletisim'){
	$adi ="İletişim";
	$desc = $des;
}else if($seo=='hizmetler'){
	$adi ="Hizmetler";
	$desc = $des;
}else if($seo=='kayit-ol'){
	$adi ="kayit-ol";
	$desc = $des;
}else if($seo=='blog'){
	$adi ="Blog";
	$desc = $des;
}else if($seo=='ekibimiz'){
	$adi ="Ekibimiz";
	$desc = $des;
}else if($seo=='urunler'){
	$adi ="Ürünler";
	$desc = $des;
}else if($seo=='projeler'){
	$adi ="Projeler";
	$desc = $des;
}else if($seo=='arama'){
	$adi =$_GET["arama"];
	$desc = $des;
}else if($seo=='referanslar'){
	$adi ="Referanslar";
	$desc = $des;
}else if($seo=='sss'){
	$adi ="S.S.S";
	$desc = $des;
}else if($ekibimiz = $db->query("select * from ekibimiz where seo='$seo' and tur='ekibimiz'")->fetch(PDO::FETCH_ASSOC)){
	$adi =$ekibimiz["adi"];
	$id = $ekibimiz["id"];
	$desc = $ekibimiz["onaciklama"];
}else if($haberler = $db->query("select * from haberler where seo='$seo' and tur='haberler'")->fetch(PDO::FETCH_ASSOC)){
	$adi =$haberler["adi"];
	$id = $haberler["id"];
	$desc = $haberler["onaciklama"];
}else if($sayfalar = $db->query("select * from sayfalar where seo='$seo' and tur='sayfalar'")->fetch(PDO::FETCH_ASSOC)){
	$adi =$sayfalar["adi"];
	$id = $sayfalar["id"];
	$desc = $sayfalar["onaciklama"];
}else if($hizmetler = $db->query("select * from hizmetler where seo='$seo' and tur='hizmetler'")->fetch(PDO::FETCH_ASSOC)){
	$adi =$hizmetler["adi"];
	$id = $hizmetler["id"];
	$desc = $hizmetler["onaciklama"];
}else if($proje_kategori = $db->query("select * from proje_kategori where seo='$seo' and tur='proje_kategori'")->fetch(PDO::FETCH_ASSOC)){
	$adi =$proje_kategori["adi"];
	$id = $proje_kategori["id"];
	$desc = $proje_kategori["onaciklama"];
}else if($projeler = $db->query("select * from projeler where seo='$seo' and tur='projeler'")->fetch(PDO::FETCH_ASSOC)){
	$adi =$projeler["adi"];
	$id = $projeler["id"];
	$desc = $projeler["onaciklama"];
}else if($urun_kategori = $db->query("select * from urun_kategori where seo='$seo' and tur='urun_kategori' and kategori!='0'")->fetch(PDO::FETCH_ASSOC)){
	$adi =$urun_kategori["adi"];
	$id = $urun_kategori["id"];
	$desc = $urun_kategori["onaciklama"];
}else if($urun_kategori1 = $db->query("select * from urun_kategori where seo='$seo' and tur='urun_kategori' and kategori='0'")->fetch(PDO::FETCH_ASSOC)){
	$adi =$urun_kategori1["adi"];
	$id = $urun_kategori1["id"];
	$desc = $urun_kategori1["onaciklama"];
}else if($urunler = $db->query("select * from urunler where seo='$seo' and tur='urunler'")->fetch(PDO::FETCH_ASSOC)){
	$adi =$urunler["adi"];
	$id = $urunler["id"];
	$desc = $urunler["onaciklama"];
}else if($seo=='galeri'){
	$adi ="Galeri";
	$desc = $des;
}else if($seo=='video'){
	$adi ="Video";
	$desc = $des;
}else if($seo=='banka-hesaplari'){
	$adi ="Banka Hesapları";
	$desc = $des;
}else if($seo=='kataloglar'){
	$adi ="Kataloglar";
	$desc = $des;
}else {
	$adi ="404";
	$desc = $des;	
}
?>