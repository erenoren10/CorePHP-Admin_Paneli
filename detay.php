<?php
include("include/baglan.php");
include("include/fonksiyonlar.php");
ob_start();
session_start();
oturumkontrolana();
$seo =$_GET["seo"];

if($seo=='genel-ayarlar'){
    $adi ="Genel Ayarlar";
}else if($seo=='kategori-ekle'){
    $adi ="Kategori Ekle";
}else if($seo=='kategori-listele'){
    $adi ="Kategori Listele";
}else if($seo=='urun-ekle'){
    $adi ="Ürün Ekle";
}else if($seo=='urun-listele'){
    $adi ="Ürün Listele";
}else if($seo=='smtp-ayar'){
    $adi ="SMTP Ayarları";
}else if($seo=='paytr-ayar'){
    $adi ="PAYTR Ayarları";
}else if($seo=='sayfa-ekle'){
    $adi ="Sayfa Ekle";
}else if($seo=='sayfa-listele'){
    $adi ="Sayfa Listele";
}else if($seo=='haber-ekle'){
    $adi ="Haber Ekle";
}else if($seo=='haber-listele'){
    $adi ="Haber Listele";
}else if($seo=='hizmet-ekle'){
    $adi ="Hizmet Ekle";
}else if($seo=='hizmet-listele'){
    $adi ="Hizmet Listele";
}else if($seo=='referans-ekle'){
    $adi ="Referans Ekle";
}else if($seo=='referans-listele'){
    $adi ="Referans Listele";
}else if($seo=='slider-ekle'){
    $adi ="Slider Ekle";
}else if($seo=='slider-listele'){
    $adi ="Slider Listele";
}else if($seo=='galeri-ekle'){
    $adi ="Galeri Ekle";
}else if($seo=='galeri-listele'){
    $adi ="Galeri Listele";
}else if($seo=='video-ekle'){
    $adi ="Video Ekle";
}else if($seo=='video-listele'){
    $adi ="Video Listele";
}else if($seo=='ekibimiz-ekle'){
    $adi ="Ekibimiz Ekle";
}else if($seo=='ekibimiz-listele'){
    $adi ="Ekibimiz Listele";
}else if($seo=='yorum-ekle'){
    $adi ="Yorum Ekle";
}else if($seo=='yorum-listele'){
    $adi ="Yorum Listele";
}else if($seo=='sss-ekle'){
    $adi ="S.S.S Ekle";
}else if($seo=='sss-listele'){
    $adi ="S.S.S Listele";
}else if($seo=='sosyal-medya'){
    $adi ="Sosyal Medya Ayarları";
}else if($seo=='iletisim-bilgileri'){
    $adi ="İletişim Bilgileri";
}else if($seo=='istatik-ekle'){
    $adi ="İstatik Ekle";
}else if($seo=='istatik-listele'){
    $adi ="İstatik Listele";
}else if($seo=='one-cikan'){
    $adi ="Öne Çıkan Ürünler";
}else if($seo=='siparis-detay'){
    $adi ="Sipariş-detay";
}else if($seo=='siparisler'){
    $adi ="Siparişler";
}else if($seo=='uyeler'){
    $adi ="Müşteriler";
}else if($seo=='uye-detay'){
    $adi ="Müşteri Detay";
}else if($seo=='beadcrumb-duzenle'){
    $adi ="Beadcrumb Düzenle";
}else if($seo=='yonetici-ekle'){
    $adi ="Yönetici Ekle";
}else if($seo=='yonetici-listele'){
    $adi ="Yönetici Listele";
}else if($seo=='iletisimden-gelenler'){
    $adi ="İletişimden Gelenler";
}else if($seo=='urun-yorum-listele'){
    $adi ="Ürün Yorumları Listele";
}else if($seo=='urun-yorum-ekle'){
    $adi ="Ürün Yorumları Ekle";
}else if($seo=='modul-yonetimi'){
    $adi ="Modül Yönetimi";
}else if($seo=='destek-cevap'){
    $adi ="Destek Cevapla ";
}else if($seo=='destek-gelenler'){
    $adi ="Destekden Gelenler ";
}else if($seo=='banka-ekle'){
    $adi ="Banka Ekle";
}else if($seo=='banka-listele'){
    $adi ="Banka Listele";
}else if($seo=='proje-kategori-ekle'){
    $adi ="Proje Kategori Ekle";
}else if($seo=='proje-kategori-listele'){
    $adi ="Proje Kategori Listele";
}else if($seo=='proje-ekle'){
    $adi ="Proje Ekle";
}else if($seo=='proje-listele'){
    $adi ="Proje Listele";
}else if($seo=='katalog-ekle'){
    $adi ="Katalog Ekle";
}else if($seo=='katalog-listele'){
    $adi ="Katalog Listele";
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<meta name="description" content="<?=$des?>">
<meta name="keywords" content="<?=$keyword?>">
<meta name="author" content="<?=$author?>">
<meta name="robots" content="noindex, nofollow">
<title><?=$adi?> - <?=$title?> - Admin Paneli</title>

<link rel="shortcut icon" type="image/x-icon" href="../resimler/<?=$favicon?>">

<link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">
<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/css/animate.css">
  <script type="text/javascript" src="sweetalert2.all.min.js"></script>
<link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>


<div class="main-wrapper">


<?php
include("inc/header.php");
include("inc/menu.php");

include("detay/".$seo.".php");
?>







</div>


         <script src="ckeditor-2/ckeditor.js"></script>

<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/js/feather.min.js"></script>
	<link rel="stylesheet" href="assets/uploadfive/uploadifive.css" type="text/css">
    	<script src="assets/uploadfive/jquery.uploadifive.min.js" type="text/javascript"></script>
    		<script type="text/javascript">
	    $(document).ready(function(){

	      	var date = new Date();
	        var date_time = date.getTime();
	        $('.upload .icon span').uploadifive({
	            'auto'             : true,
	            'queueID'  : 'queue',
	            'fileSizeLimit' : '15360KB',
	            'fileExt'     : '*.jpg;*.jpeg;*.JPG;*.JPEG;*.png;*.PNG;*.svg;*.gif',
	            'width' : 25,
	            'buttonText' : " ",
	            'formData'         : {'timestamp' : date_time,'token' : 'sayim'+date_time+'sayim'},
	            'uploadScript'     : 'assets/uploadfive/uploadifive.php',
	            'removeCompleted' : true,
	            'onUploadComplete' : function(file, data) {
	                if(data == '2'){
	                    alert('Lütfen Geçerli Fortmatta Yükleme Yapınız.');
	                }else if(data == '3'){
	                    alert('İşlem Başarısız.(Dosya Boyutu İle Alakalı Olabilir.)');
	                }else{
	                    var id = $(this).attr('data-id');
	                    $('input[name="img'+id+'"]').val(data);
	                    $('#url').val('<?php echo $site; ?>resimler/'+data);
	                    $('.uploaddis[data-id="'+id+'"] .yuklendi img').attr('src','../../resimler/'+data);
	                    $('.uploaddis[data-id="'+id+'"]').removeClass('aktif');
	                    $('.uploaddis[data-id="'+id+'"]').addClass('pasif');
	                }
	            }
	        });

	        $('.upload1 .icon span').uploadifive({
	            'auto'             : true,
	            'queueID'  : 'queue',
	            'fileSizeLimit' : '15360KB',
	            'fileExt'     : '*.jpg;*.jpeg;*.JPG;*.JPEG;*.png;*.PNG;*.svg;*.gif',
	            'width' : 25,
	            'buttonText' : " ",
	            'formData'         : {'timestamp' : date_time,'token' : 'sayim'+date_time+'sayim'},
	            'uploadScript'     : 'assets/uploadfive/uploadifive.php',
	            'removeCompleted' : true,
	            'onUploadComplete' : function(file, data) {
	                if(data == '2'){
	                    alert('Lütfen Geçerli Fortmatta Yükleme Yapınız.');
	                }else if(data == '3'){
	                    alert('İşlem Başarısız.(Dosya Boyutu İle Alakalı Olabilir.)');
	                }else{
	                    var say = $('#resimler .col-md-3').length;
	                    $('#resimler').append('\
	                    	<div class="col-md-3" data-resim-dis-id="'+say+'">\
				                    <div class="uploaddis pasif" style="float:left;">\
				        			  <div class="yuklendi">\
				        				  <img src="../../resimler/'+data+'" width="100%">\
				        				  <div class="icon" data-resim-sil-id="'+say+'"><span class="fa fa-trash"></span></div>\
				        				  <input type="hidden" name="img[]" value="'+data+'" required="">\
				        			  </div>\
				        			</div>\
				                </div>\
				        ');

	                }
	            }
	        });
	        $(document).on('click','[data-resim-sil-id]', function(){
	        	$('[data-resim-dis-id="'+$(this).attr('data-resim-sil-id')+'"]').remove();
	        });

	        $('.yuklendi .icon').click(function(){
	            var id = $(this).attr('data-id');
	            $('.uploaddis[data-id="'+id+'"]').removeClass('pasif');
	            $('.uploaddis[data-id="'+id+'"]').addClass('aktif');
	            $('input[name="img'+id+'"]').val('');
	            $('.uploaddis[data-id="'+id+'"] .yuklendi img').attr('src','');
	        });
	      });
	    </script>
<script src="assets/js/jquery.slimscroll.min.js"></script>
<script src="assets/plugins/sweetalert/sweetalert2.all.min.js"></script>
<script src="assets/plugins/sweetalert/sweetalerts.min.js"></script>
<script src="assets/js/jquery.dataTables.min.js"></script>
<script src="assets/js/dataTables.bootstrap4.min.js"></script>

<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/plugins/select2/js/select2.min.js"></script>
<script src="assets/plugins/apexchart/apexcharts.min.js"></script>
<script src="assets/plugins/apexchart/chart-data.js"></script>

<script src="assets/js/script.js"></script>
</body>
</html>