
<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Ürün Yorum Detay</h4>
</div>
</div>

<?php
if($_GET['islem']=='duzenle'){
    
    $guncelle = $db->query("select * from urun_yorum where id='{$_GET['id']}'")->fetch(PDO::FETCH_ASSOC);
    $urun = $db->query("select * from urunler where id='{$guncelle["urun_id"]}'")->fetch(PDO::FETCH_ASSOC);
    $uye = $db->query("select * from uyeler where id='{$guncelle["uye"]}'")->fetch(PDO::FETCH_ASSOC);
}
?>

<form method="post" action="include/fonksiyonlar.php" enctype="multipart/form-data">
<div class="card">
<div class="card-body">
<div class="row">

<div class="col-lg-12 col-sm-12 col-12">
<div class="form-group">
<label>Ürün Yorum Adı</label>
<input type="text" name="adsoyad" value="<?=$uye["adsoyad"]?>">
</div>
</div>

<div class="col-lg-12 col-sm-12 col-12">
<div class="form-group">
<label>Ürün Adı</label>
<input type="text" name="adi" value="<?=$urun["adi"]?>">
</div>
</div>



<div class="col-lg-12 col-sm-12 col-12">
<div class="form-group">
<label>Ürün Yorum Durum </label>
<select class="select" name="durum">
<option value="0" <?php if($guncelle["durum"]==0){ echo "selected";}?>>Sitede Göster</option>
<option value="1" <?php if($guncelle["durum"]==1){ echo "selected";}?>>Sitede Gizle</option>
</select>
</div>
</div>

<div class="col-lg-12">
<div class="form-group">
<label>Yorum ön Açıklama</label>
<textarea class="form-control" name="onaciklama"> <?=$guncelle["yorum"]?></textarea>
</div>
</div>
         

<br><br><br><br>

<div class="col-lg-12">
    <?php if($_GET['islem']=='duzenle'){?>
<button class="btn btn-submit me-2" type="submit" name="urun-yorum-guncelle">Yorum Güncelle</button>
<input type="hidden" name="id" value="<?=$guncelle["id"]?>">
    <input type="hidden" name="link" value="../urun-yorum-ekle?islem=duzenle&id=<?=$guncelle["id"]?>">

<?php } else {?>
    <input type="hidden" name="link" value="../<?=$seo?>">

<button class="btn btn-submit me-2" type="submit" name="yorum-ekle">Yorum Ekle</button>

<?php }?>
</div>
</div>
</div>
</div>
</form>
</div>
</div>