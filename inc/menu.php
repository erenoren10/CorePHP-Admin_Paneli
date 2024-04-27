

<div class="sidebar" id="sidebar">
<div class="sidebar-inner slimscroll">
<div id="sidebar-menu" class="sidebar-menu">
<ul>
<li class="active">
<a href="./"><img src="assets/img/icons/dashboard.svg" alt="img"><span> ANASAYFA</span> </a>
</li>

<li class="active">
<a href="../" target="_blank"><img src="assets/img/icons/return1.svg" alt="img"><span> Siteye Dön</span></a>

</li>

<?php
if($izinler["urun_durum"]==0){
?>
<li class="submenu">
<a href="javascript:void(0);"><img src="assets/img/icons/product.svg" alt="img"><span> Ürün Yönetimi</span> <span class="menu-arrow"></span></a>
<ul>
    
    <?php
if($izinler["urun_durum"]==0){
?>
<li><a href="urun-listele">Ürün Listele</a></li>
<?php }?>    <?php
if($izinler["kategori_durum"]==0){
?>
<li><a href="kategori-listele">Kategori Listele</a></li>
<?php }?>
<li><a href="urun-yorum-listele">Ürün Yorumları Listele</a></li>

</ul>
</li>
<?php }?>

   <?php
if($izinler["siparis_durum"]==0){
?>
<li >
<a href="siparisler"><img src="assets/img/icons/sales1.svg" alt="img"><span> Siparişler</span></a>

</li>
<?php }?>

<li class="submenu">
<a href="javascript:void(0);"><img src="assets/img/icons/purchase1.svg" alt="img"><span> İçerik Yönetimi</span> <span class="menu-arrow"></span></a>
<ul>
    <?php
if($izinler["hizmet_durum"]==0){
?>
<li><a href="hizmet-listele">Hizmet Listele</a></li>
<?php } if($izinler["haber_durum"]==0){ ?>
<li><a href="haber-listele">Haber Listele</a></li>
<?php } if($izinler["istatik_durum"]==0){ ?>
<li><a href="istatik-listele">İstatik Listele</a></li>
<?php } if($izinler["sayfa_durum"]==0){ ?>
<li><a href="sayfa-listele">Sayfa Listele</a></li>
<?php } if($izinler["ref_durum"]==0){ ?>
<li><a href="referans-listele">Referans Listele</a></li>
<?php } if($izinler["slider_durum"]==0){ ?>
<li><a href="slider-listele">Slider Listele</a></li>
<?php } if($izinler["galeri_durum"]==0){ ?>
<li><a href="galeri-listele">Galeri Listele</a></li>
<?php } if($izinler["video_durum"]==0){ ?>
<li><a href="video-listele">Video Listele</a></li>
<?php } if($izinler["ekip_durum"]==0){ ?>
<li><a href="ekibimiz-listele">Ekibimiz Listele</a></li>
<?php } if($izinler["yorum_durum"]==0){ ?>
<li><a href="yorum-listele">Yorum Listele</a></li>
<?php } if($izinler["sss_durum"]==0){ ?>
<li><a href="sss-listele">S.S.S Listele</a></li>
<?php } if($izinler["banka_durum"]==0){ ?>
<li><a href="banka-listele">Banka Listele</a></li>
<?php } if($izinler["proje_kategori_durum"]==0){ ?>
<li><a href="proje-kategori-listele">Proje Kategori Listele</a></li>
<?php } if($izinler["proje_durum"]==0){ ?>
<li><a href="proje-listele">Proje Listele</a></li>
<?php } if($izinler["katalog_durum"]==0){ ?>
<li><a href="katalog-listele">Katalog Listele</a></li>
<?php }  ?>

</ul>
</li>

<?php
if($izinler["musteri_durum"]==0){
?>
<li >
<a href="uyeler"><img src="assets/img/icons/users1.svg" alt="img"><span> Müşteriler</span></a>

</li> 
<?php }?>
<?php
if($izinler["onecikan_durum"]==0){
?>
<li>
<a href="one-cikan"><i data-feather="layers"></i><span> Öne Çıkanları Seç</span> </a>
</li>
<?php }?>
<?php
if($izinler["banner_durum"]==0){
?>
<li>
<a href="beadcrumb-duzenle"><i data-feather="file"></i><span> Banner Düzenle</span> </a>
</li>

<?php }?>

<li >
<a href="iletisimden-gelenler"><i data-feather="award"></i><span> İletişimden Gelenler </span> </a>

</li>
<?php
if($izinler["destek_durum"]==0){
?>
<li >
<a href="destek-gelenler"><i data-feather="help-circle"></i><span> Destekden Gelenler </span> </a>

</li>
<?php }?>

<li >
<a href="modul-yonetimi"><i data-feather="menu"></i><span> Modül Yönetimi  </span> </a>

</li>

<li class="submenu">
<a href="javascript:void(0);"><img src="assets/img/icons/users1.svg" alt="img"><span> Yönetici Ayarları</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="yonetici-ekle">Yönetici Ekle </a></li>
<li><a href="yonetici-listele">Yönetici Listele</a></li>
</ul>
</li>
<li class="submenu">
<a href="javascript:void(0);"><img src="assets/img/icons/settings.svg" alt="img"><span> Ayarlar</span> <span class="menu-arrow"></span></a>
<ul>
    <li><a href="iletisim-bilgileri">İletişim Bilgileri </a></li>
<li><a href="genel-ayarlar">Genel Ayarlar</a></li>
<li><a href="smtp-ayar">Email Ayarları</a></li>
<li><a href="sosyal-medya">Sosyal Medya</a></li>

<?php
if($izinler["paytr_durum"]==0){
?>
 <li><a href="paytr-ayar">PAYTR Ayar</a></li>
<?php }?>
</ul>
</li>

<li class="active">
<a href="include/cikis.php"><i class="si-logout"></i><span> Çıkış Yap</span> </a>
</li>

</ul>
</div>
</div>
</div>