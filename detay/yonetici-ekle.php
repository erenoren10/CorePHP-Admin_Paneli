
<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Yönetici Ekle</h4>
</div>
</div>

<?php
if($_GET['islem']=='duzenle'){
    
    $guncelle = $db->query("select * from yonetici where id='{$_GET['id']}'")->fetch(PDO::FETCH_ASSOC);
}
?>

<form method="post" action="include/fonksiyonlar.php" enctype="multipart/form-data">
<div class="card">
<div class="card-body">
<div class="row">

<div class="col-lg-12 col-sm-12 col-12">
<div class="form-group">
<label>Yönetici Adı</label>
<input type="text" name="ad_soyad" value="<?=$guncelle["ad_soyad"]?>">
</div>
</div>

<div class="col-lg-12 col-sm-12 col-12">
<div class="form-group">
<label>Yönetici Eposta</label>
<input type="text" name="eposta" value="<?=$guncelle["eposta"]?>">
</div>
</div>


<div class="col-lg-12 col-sm-12 col-12">
<div class="form-group">
<label>Yönetici Şifre</label>
<input type="text" name="sifre" value="<?=$guncelle["sifre"]?>">
</div>
</div>





<br><br><br><br>

<div class="col-lg-12">
    <?php if($_GET['islem']=='duzenle'){?>
<button class="btn btn-submit me-2" type="submit" name="yonetici-guncelle">Yönetici Güncelle</button>
<input type="hidden" name="id" value="<?=$guncelle["id"]?>">
    <input type="hidden" name="link" value="../yonetici-ekle?islem=duzenle&id=<?=$guncelle["id"]?>">

<?php } else {?>
    <input type="hidden" name="link" value="../<?=$seo?>">

<button class="btn btn-submit me-2" type="submit" name="yonetici-ekle">Yönetici Ekle</button>

<?php }?>
</div>
</div>
</div>
</div>
</form>
</div>
</div>