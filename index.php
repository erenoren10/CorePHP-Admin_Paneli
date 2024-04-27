<?php
include("include/baglan.php");
include("include/fonksiyonlar.php");

ob_start();
session_start();
oturumkontrolana();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<meta name="description" content="<?=$des?>">
<meta name="keywords" content="<?=$keyword?>">
<meta name="author" content="<?=$author?>">
<meta name="robots" content="noindex, nofollow">
<title><?=$title?> - Admin Paneli</title>

<link rel="shortcut icon" type="image/x-icon" href="../<?=$favicon?>">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/css/animate.css">

<link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
  <script type="text/javascript" src="sweetalert2.all.min.js"></script>
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>


<div class="main-wrapper">

<?php
include("inc/header.php");
include("inc/menu.php");
?>


<?php
$cek=$db->query("select * from order_details")->fetchAll(PDO::FETCH_ASSOC);
$siparisfiyat=0;
foreach($cek as $goster){
    $siparisfiyat+=$goster["fiyat"];
}

	$cek=$db->query("select *  from uyeler");

		$musterisay=$cek->rowCount();
		
		$cek=$db->query("select * from orders");

		$siparissay=$cek->rowCount();

?>

<div class="page-wrapper">
<div class="content">
<div class="row">
    
    <?php if($izinler["siparis_durum"]==0){?>
<div class="col-lg-3 col-sm-6 col-12">
<div class="dash-widget dash1">
<div class="dash-widgetimg">
<span><img src="assets/img/icons/dash2.svg" alt="img"></span>
</div>
<div class="dash-widgetcontent">
<h5><span class="counters" data-count="<?=$siparisfiyat?>">0</span>₺</h5>
<h6>Toplam Satış</h6>
</div>
</div>
</div>
<?php }?>
<?php if($izinler["musteri_durum"]==0){?>

<div class="col-lg-3 col-sm-6 col-12 d-flex">
<div class="dash-count">
<div class="dash-counts">
<h4><?=$musterisay?></h4>
<h5>Müşteri</h5>
</div>
<div class="dash-imgs">
<i data-feather="user"></i>
</div>
</div>
</div>

<?php }?>
<?php if($izinler["siparis_durum"]==0){?>
<div class="col-lg-3 col-sm-6 col-12 d-flex">
<div class="dash-count das2">
<div class="dash-counts">
<h4><?=$siparissay?></h4>
<h5>Toplam Sipariş</h5>
</div>
<div class="dash-imgs">
<i data-feather="file-text"></i>
</div>
</div>
</div>
<?php }?>
</div>

<?php if($izinler["destek_durum"]==0){?>
<div class="card mb-0">
<div class="card-body">
<h4 class="card-title">Destek Sisteminden Gelenler</h4>
<div class="table-responsive dataview">
<table class="table datatable ">
<thead>
<tr>
<th>Id</th>
<th>Ad Soyad</th>

<th>Konu</th>

<th>Mesaj</th>
<th>Tarih</th>
</tr>
</thead>
<tbody>
    <?php
    $cek = $db->query("select * from destek order by id desc")->fetchAll(PDO::FETCH_ASSOC);
    foreach($cek as $goster){
        $uye = $db->query("select * from uyeler where id='{$goster["uye"]}'")->fetch(PDO::FETCH_ASSOC);
    ?>
<tr>
<td><?=$goster["id"]?></td>
<td><a href="destek-cevap?id=<?=$goster["id"]?>"><?=$uye["adsoyad"]?></a></td>

<td><?=$goster["konu"]?></td>
<td><?=$goster["mesaj"]?></td>
<td><?=$goster["tarih"]?></td>
</tr>
<?php }?>
</tbody>
</table>
</div>
</div>
</div>

<br><br>
<?php }?>
<div class="card mb-0">
<div class="card-body">
<h4 class="card-title">İletişimden Gelenler</h4>
<div class="table-responsive dataview">
<table class="table datatable ">
<thead>
<tr>
<th>Id</th>
<th>Ad Soyad</th>
<th>Email</th>
<th>Konu</th>
<th>Telefon </th>
<th>Mesaj</th>
<th>Tarih</th>
</tr>
</thead>
<tbody>
    <?php
    $cek = $db->query("select * from iletisimler order by id desc")->fetchAll(PDO::FETCH_ASSOC);
    foreach($cek as $goster){
    ?>
<tr>
<td><?=$goster["id"]?></td>
<td><a href="javascript:void(0);"><?=$goster["adsoyad"]?></a></td>
<td class="productimgname">
<?=$goster["email"]?>
</td>
<td><?=$goster["konu"]?></td>
<td><?=$goster["telefon"]?></td>
<td><?=$goster["mesaj"]?></td>
<td><?=$goster["tarih"]?></td>
</tr>
<?php }?>
</tbody>
</table>
</div>
</div>
</div>

<br><br>
<div class="card mb-0">
<div class="card-body">
<h4 class="card-title">Son Girişler</h4>
<div class="table-responsive dataview">
<table class="table datatable ">
<thead>
<tr>
<th>Id</th>
<th>Ad Soyad</th>
<th>Email</th>
<th>İlk Giriş</th>
<th>Son Giriş</th>
<th>Ip</th>
</tr>
</thead>
<tbody>
    <?php
    $cek = $db->query("select * from yonetici order by id desc")->fetchAll(PDO::FETCH_ASSOC);
    foreach($cek as $goster){
    ?>
<tr>
<td><?=$goster["id"]?></td>
<td><a href="javascript:void(0);"><?=$goster["ad_soyad"]?></a></td>

<td><?=$goster["eposta"]?></td>

<td><?=$goster["ilk_giris"]?></td>
<td><?=$goster["son_giris"]?></td>
<td><?=$goster["ip"]?></td>

</tr>
<?php }?>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>


</div>


<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/js/feather.min.js"></script>

<script src="assets/js/jquery.slimscroll.min.js"></script>

<script src="assets/js/jquery.dataTables.min.js"></script>
<script src="assets/js/dataTables.bootstrap4.min.js"></script>

<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/plugins/apexchart/apexcharts.min.js"></script>
<script src="assets/plugins/apexchart/chart-data.js"></script>

<script src="assets/js/script.js"></script>
</body>
</html>