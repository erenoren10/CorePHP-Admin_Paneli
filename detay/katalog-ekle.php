
<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Katalog Ekle</h4>
</div>
</div>

<?php
if($_GET['islem']=='duzenle'){
    
    $guncelle = $db->query("select * from katalog where id='{$_GET['id']}'")->fetch(PDO::FETCH_ASSOC);
}
?>

<form method="post" action="include/fonksiyonlar.php" enctype="multipart/form-data">
<div class="card">
<div class="card-body">
<div class="row">
<div class="col-lg-6 col-sm-6 col-12">
<div class="form-group">
<label>Katalog Sırası</label>
<input type="text" name="sira" value="<?=$guncelle["sira"]?>">
</div>
</div>
<div class="col-lg-6 col-sm-6 col-12">
<div class="form-group">
<label>Katalog Adı</label>
<input type="text" name="adi" value="<?=$guncelle["adi"]?>">
</div>
</div>



<div class="col-lg-12 col-sm-12 col-12">
<div class="form-group">
<label>Katalog Durum </label>
<select class="select" name="durum">
<option value="0" <?php if($guncelle["durum"]==0){ echo "selected";}?>>Sitede Göster</option>
<option value="1" <?php if($guncelle["durum"]==1){ echo "selected";}?>>Sitede Gizle</option>
</select>
</div>
</div>

<div class="col-lg-12">
<div class="form-group">
<label>Katalog Linki</label>
<textarea class="form-control" name="linki"><?=$guncelle["linki"]?></textarea>
</div>
</div>
<div class="col-lg-12">
<div class="form-group">
<label> Katalog Kapak</label>
<div class="image-upload">
<input type="file" name="resim">
<div class="image-uploads">
    <?php if($_GET['islem']=='duzenle'){?>
<img src="../resimler/<?=$guncelle["resim"]?>" alt="img" width="50">
<h4>Buradan Katalog Değiştirebilirsiniz</h4>
<?php } else {?>
<img src="assets/img/icons/upload.svg" alt="img">
<h4>Buradan Katalog Ekleyebilirsiniz </h4>
<?php }?>
</div>
</div>
</div>
</div>


<div class="col-lg-12">
<div class="form-group">
<label> Katalog Dosya</label>
<div class="image-upload">
<input type="file" name="pdf">
<div class="image-uploads">
    <?php if($_GET['islem']=='duzenle'){?>
<img src="../resimler/<?=$guncelle["pdf"]?>" alt="img" width="50">
<h4>Buradan Katalog Değiştirebilirsiniz</h4>
<?php } else {?>
<img src="assets/img/icons/upload.svg" alt="img">
<h4>Buradan Katalog Ekleyebilirsiniz </h4>
<?php }?>
</div>
</div>
</div>
</div>

<div class="col-lg-12">

<textarea  class="ckeditor" name="aciklama"  rows="10"><?=$guncelle['aciklama']?></textarea>

</div>

                     
                                 

<br><br><br><br>

<div class="col-lg-12">
    <?php if($_GET['islem']=='duzenle'){?>
<button class="btn btn-submit me-2" type="submit" name="katalog-guncelle">Katalog Güncelle</button>
<input type="hidden" name="id" value="<?=$guncelle["id"]?>">
    <input type="hidden" name="link" value="../katalog-ekle?islem=duzenle&id=<?=$guncelle["id"]?>">

<?php } else {?>
    <input type="hidden" name="link" value="../<?=$seo?>">

<button class="btn btn-submit me-2" type="submit" name="katalog-ekle">Katalog Ekle</button>

<?php }?>
</div>
</div>
</div>
</div>
</form>
</div>
</div>