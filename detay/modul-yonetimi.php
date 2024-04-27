
<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Modül Yönetimi </h4>
</div>
</div>

<?php

    
    $guncelle = $db->query("select * from izinler where id='1'")->fetch(PDO::FETCH_ASSOC);

?>

<form method="post" action="include/fonksiyonlar.php" enctype="multipart/form-data">
<div class="card">
<div class="card-body">
<div class="row">





<div class="col-lg-6 col-sm-6 col-12">
<div class="form-group">
<label>Ürün Durum </label>
<select class="select" name="urun_durum">
<option value="0" <?php if($guncelle["urun_durum"]==0){ echo "selected";}?>>Sitede Göster</option>
<option value="1" <?php if($guncelle["urun_durum"]==1){ echo "selected";}?>>Sitede Gizle</option>
</select>
</div>
</div>



<div class="col-lg-6 col-sm-6 col-12">
<div class="form-group">
<label>Ürün Kategori Durum </label>
<select class="select" name="kategori_durum">
<option value="0" <?php if($guncelle["kategori_durum"]==0){ echo "selected";}?>>Sitede Göster</option>
<option value="1" <?php if($guncelle["kategori_durum"]==1){ echo "selected";}?>>Sitede Gizle</option>
</select>
</div>
</div>


<div class="col-lg-6 col-sm-6 col-12">
<div class="form-group">
<label>İstatik  Durum </label>
<select class="select" name="istatik_durum">
<option value="0" <?php if($guncelle["istatik_durum"]==0){ echo "selected";}?>>Sitede Göster</option>
<option value="1" <?php if($guncelle["istatik_durum"]==1){ echo "selected";}?>>Sitede Gizle</option>
</select>
</div>
</div>

<div class="col-lg-6 col-sm-6 col-12">
<div class="form-group">
<label>Referans  Durum </label>
<select class="select" name="ref_durum">
<option value="0" <?php if($guncelle["ref_durum"]==0){ echo "selected";}?>>Sitede Göster</option>
<option value="1" <?php if($guncelle["ref_durum"]==1){ echo "selected";}?>>Sitede Gizle</option>
</select>
</div>
</div>

<div class="col-lg-6 col-sm-6 col-12">
<div class="form-group">
<label>Hizmet  Durum </label>
<select class="select" name="hizmet_durum">
<option value="0" <?php if($guncelle["hizmet_durum"]==0){ echo "selected";}?>>Sitede Göster</option>
<option value="1" <?php if($guncelle["hizmet_durum"]==1){ echo "selected";}?>>Sitede Gizle</option>
</select>
</div>
</div>

<div class="col-lg-6 col-sm-6 col-12">
<div class="form-group">
<label>Haber  Durum </label>
<select class="select" name="haber_durum">
<option value="0" <?php if($guncelle["haber_durum"]==0){ echo "selected";}?>>Sitede Göster</option>
<option value="1" <?php if($guncelle["haber_durum"]==1){ echo "selected";}?>>Sitede Gizle</option>
</select>
</div>
</div>

<div class="col-lg-6 col-sm-6 col-12">
<div class="form-group">
<label>Sayfa  Durum </label>
<select class="select" name="sayfa_durum">
<option value="0" <?php if($guncelle["sayfa_durum"]==0){ echo "selected";}?>>Sitede Göster</option>
<option value="1" <?php if($guncelle["sayfa_durum"]==1){ echo "selected";}?>>Sitede Gizle</option>
</select>
</div>
</div>


<div class="col-lg-6 col-sm-6 col-12">
<div class="form-group">
<label>Sayfa  Durum </label>
<select class="select" name="sayfa_durum">
<option value="0" <?php if($guncelle["sayfa_durum"]==0){ echo "selected";}?>>Sitede Göster</option>
<option value="1" <?php if($guncelle["sayfa_durum"]==1){ echo "selected";}?>>Sitede Gizle</option>
</select>
</div>
</div>

<div class="col-lg-6 col-sm-6 col-12">
<div class="form-group">
<label>Slider  Durum </label>
<select class="select" name="slider_durum">
<option value="0" <?php if($guncelle["slider_durum"]==0){ echo "selected";}?>>Sitede Göster</option>
<option value="1" <?php if($guncelle["slider_durum"]==1){ echo "selected";}?>>Sitede Gizle</option>
</select>
</div>
</div>

<div class="col-lg-6 col-sm-6 col-12">
<div class="form-group">
<label>SSS  Durum </label>
<select class="select" name="sss_durum">
<option value="0" <?php if($guncelle["sss_durum"]==0){ echo "selected";}?>>Sitede Göster</option>
<option value="1" <?php if($guncelle["sss_durum"]==1){ echo "selected";}?>>Sitede Gizle</option>
</select>
</div>
</div>

<div class="col-lg-6 col-sm-6 col-12">
<div class="form-group">
<label>Galeri  Durum </label>
<select class="select" name="galeri_durum">
<option value="0" <?php if($guncelle["galeri_durum"]==0){ echo "selected";}?>>Sitede Göster</option>
<option value="1" <?php if($guncelle["galeri_durum"]==1){ echo "selected";}?>>Sitede Gizle</option>
</select>
</div>
</div>

<div class="col-lg-6 col-sm-6 col-12">
<div class="form-group">
<label>Video  Durum </label>
<select class="select" name="video_durum">
<option value="0" <?php if($guncelle["video_durum"]==0){ echo "selected";}?>>Sitede Göster</option>
<option value="1" <?php if($guncelle["video_durum"]==1){ echo "selected";}?>>Sitede Gizle</option>
</select>
</div>
</div>

<div class="col-lg-6 col-sm-6 col-12">
<div class="form-group">
<label>Ekip Durum </label>
<select class="select" name="ekip_durum">
<option value="0" <?php if($guncelle["ekip_durum"]==0){ echo "selected";}?>>Sitede Göster</option>
<option value="1" <?php if($guncelle["ekip_durum"]==1){ echo "selected";}?>>Sitede Gizle</option>
</select>
</div>
</div>

<div class="col-lg-6 col-sm-6 col-12">
<div class="form-group">
<label>Yorum Durum </label>
<select class="select" name="yorum_durum">
<option value="0" <?php if($guncelle["yorum_durum"]==0){ echo "selected";}?>>Sitede Göster</option>
<option value="1" <?php if($guncelle["yorum_durum"]==1){ echo "selected";}?>>Sitede Gizle</option>
</select>
</div>
</div>


<div class="col-lg-6 col-sm-6 col-12">
<div class="form-group">
<label>İletişim Durum </label>
<select class="select" name="iletisim_durum">
<option value="0" <?php if($guncelle["iletisim_durum"]==0){ echo "selected";}?>>Sitede Göster</option>
<option value="1" <?php if($guncelle["iletisim_durum"]==1){ echo "selected";}?>>Sitede Gizle</option>
</select>
</div>
</div>

<div class="col-lg-6 col-sm-6 col-12">
<div class="form-group">
<label>Sipariş Durum </label>
<select class="select" name="siparis_durum">
<option value="0" <?php if($guncelle["siparis_durum"]==0){ echo "selected";}?>>Sitede Göster</option>
<option value="1" <?php if($guncelle["siparis_durum"]==1){ echo "selected";}?>>Sitede Gizle</option>
</select>
</div>
</div>

<div class="col-lg-6 col-sm-6 col-12">
<div class="form-group">
<label>Müşteri Durum </label>
<select class="select" name="musteri_durum">
<option value="0" <?php if($guncelle["musteri_durum"]==0){ echo "selected";}?>>Sitede Göster</option>
<option value="1" <?php if($guncelle["musteri_durum"]==1){ echo "selected";}?>>Sitede Gizle</option>
</select>
</div>
</div>

<div class="col-lg-6 col-sm-6 col-12">
<div class="form-group">
<label>Destek Durum </label>
<select class="select" name="destek_durum">
<option value="0" <?php if($guncelle["destek_durum"]==0){ echo "selected";}?>>Sitede Göster</option>
<option value="1" <?php if($guncelle["destek_durum"]==1){ echo "selected";}?>>Sitede Gizle</option>
</select>
</div>
</div>

<div class="col-lg-6 col-sm-6 col-12">
<div class="form-group">
<label>Öne Çıkan Durum </label>
<select class="select" name="onecikan_durum">
<option value="0" <?php if($guncelle["onecikan_durum"]==0){ echo "selected";}?>>Sitede Göster</option>
<option value="1" <?php if($guncelle["onecikan_durum"]==1){ echo "selected";}?>>Sitede Gizle</option>
</select>
</div>
</div>


<div class="col-lg-6 col-sm-6 col-12">
<div class="form-group">
<label>Banner Durum </label>
<select class="select" name="banner_durum">
<option value="0" <?php if($guncelle["banner_durum"]==0){ echo "selected";}?>>Sitede Göster</option>
<option value="1" <?php if($guncelle["banner_durum"]==1){ echo "selected";}?>>Sitede Gizle</option>
</select>
</div>
</div>

<div class="col-lg-6 col-sm-6 col-12">
<div class="form-group">
<label>Paytr Durum </label>
<select class="select" name="paytr_durum">
<option value="0" <?php if($guncelle["paytr_durum"]==0){ echo "selected";}?>>Sitede Göster</option>
<option value="1" <?php if($guncelle["paytr_durum"]==1){ echo "selected";}?>>Sitede Gizle</option>
</select>
</div>
</div>



<div class="col-lg-6 col-sm-6 col-12">
<div class="form-group">
<label>Banka Durum </label>
<select class="select" name="banka_durum">
<option value="0" <?php if($guncelle["banka_durum"]==0){ echo "selected";}?>>Sitede Göster</option>
<option value="1" <?php if($guncelle["banka_durum"]==1){ echo "selected";}?>>Sitede Gizle</option>
</select>
</div>
</div>



                      
                                 

<br><br><br><br>

<div class="col-lg-12">

    <input type="hidden" name="link" value="../<?=$seo?>">

<button class="btn btn-submit me-2" type="submit" name="modul-guncelle">Güncelle</button>


</div>
</div>
</div>
</div>
</form>
</div>
</div>