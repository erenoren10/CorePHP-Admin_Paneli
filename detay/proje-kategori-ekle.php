
<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Proje Kategori Ekle</h4>
</div>
</div>

<?php
if($_GET['islem']=='duzenle'){
    
    $guncelle = $db->query("select * from proje_kategori where id='{$_GET['id']}'")->fetch(PDO::FETCH_ASSOC);
}
?>

<form method="post" action="include/fonksiyonlar.php" enctype="multipart/form-data">
<div class="card">
<div class="card-body">
<div class="row">
<div class="col-lg-6 col-sm-6 col-12">
<div class="form-group">
<label>Proje Kategori Sırası</label>
<input type="text" name="sira" value="<?=$guncelle["sira"]?>">
</div>
</div>
<div class="col-lg-6 col-sm-6 col-12">
<div class="form-group">
<label>Proje Kategori Adı</label>
<input type="text" name="adi" value="<?=$guncelle["adi"]?>">
</div>
</div>

<div class="col-lg-6 col-sm-6 col-12">
<div class="form-group">
<label>Proje Kategori Konum </label>
<select class="select" name="kategori">
<option value="0" <?php if($guncelle["kategori"]==0){ echo "selected";}?>>Ana Kategori</option>
<?php
$c=$db->query("select * from proje_kategori order by id desc")->fetchAll(PDO::FETCH_ASSOC);
foreach($c as $g){
?>
<option value="<?=$g["id"]?>" <?php if($g["id"]==$guncelle["kategori"]){ echo "selected";}?>><?=$g["adi"]?></option>
<?php }?>
</select>
</div>
</div>

<div class="col-lg-6 col-sm-6 col-12">
<div class="form-group">
<label>Proje Kategori Durum </label>
<select class="select" name="durum">
<option value="0" <?php if($guncelle["durum"]==0){ echo "selected";}?>>Sitede Göster</option>
<option value="1" <?php if($guncelle["durum"]==1){ echo "selected";}?>>Sitede Gizle</option>
</select>
</div>
</div>

<div class="col-lg-12">
<div class="form-group">
<label>Proje Kategori Açıklama</label>
<textarea class="form-control" name="aciklama"> <?=$guncelle["aciklama"]?></textarea>
</div>
</div>
<div class="col-lg-12">
<div class="form-group">
<label>Proje Kategori Resim</label>
<div class="image-upload">
<input type="file" name="resim">
<div class="image-uploads">
    <?php if($_GET['islem']=='duzenle'){?>
<img src="../resimler/<?=$guncelle["resim"]?>" alt="img" width="50">
<h4>Buradan Resmi Değiştirebilirsiniz</h4>
<?php } else {?>
<img src="assets/img/icons/upload.svg" alt="img">
<h4>Buradan Resim Ekleyebilirsiniz </h4>
<?php }?>
</div>
</div>
</div>
</div>
<div class="col-lg-12">
    <?php if($_GET['islem']=='duzenle'){?>
<button class="btn btn-submit me-2" type="submit" name="proje-kategori-guncelle">Proje Kategori Güncelle</button>
<input type="hidden" name="id" value="<?=$guncelle["id"]?>">
    <input type="hidden" name="link" value="../proje-ekle?islem=duzenle&id=<?=$guncelle["id"]?>">

<?php } else {?>
    <input type="hidden" name="link" value="../<?=$seo?>">

<button class="btn btn-submit me-2" type="submit" name="proje-kategori-ekle">Proje Kategori Ekle</button>

<?php }?>
</div>
</div>
</div>
</div>
</form>
</div>
</div>