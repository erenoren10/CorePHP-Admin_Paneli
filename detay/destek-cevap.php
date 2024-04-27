
<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Destek Detay</h4>
</div>
</div>

<?php

    
    $guncelle = $db->query("select * from destek where id='{$_GET['id']}'")->fetch(PDO::FETCH_ASSOC);
    $urun = $db->query("select * from urunler where id='{$guncelle["urun_id"]}'")->fetch(PDO::FETCH_ASSOC);
    $uye = $db->query("select * from uyeler where id='{$guncelle["uye"]}'")->fetch(PDO::FETCH_ASSOC);

?>

<form method="post" action="include/fonksiyonlar.php" enctype="multipart/form-data">
<div class="card">
<div class="card-body">
<div class="row">

<div class="col-lg-12 col-sm-12 col-12">
<div class="form-group">
<label>Üye Adı</label>
<input type="text" name="adsoyad" value="<?=$uye["adsoyad"]?>">
</div>
</div>

<div class="col-lg-12 col-sm-12 col-12">
<div class="form-group">
<label>Destek Konu </label>
<input type="text" name="konu" value="<?=$guncelle["konu"]?>">
</div>
</div>




<div class="col-lg-12">
<div class="form-group">
<label>Mesaj</label>
<textarea class="form-control" name="mesaj"> <?=$guncelle["mesaj"]?></textarea>
</div>
</div>


<div class="col-lg-12">
<div class="form-group">
<label>Cevap Mesajı</label>
<textarea class="form-control" name="cevap"> <?=$guncelle["cevap"]?></textarea>
</div>
</div>
         

<br><br><br><br>

<div class="col-lg-12">
     <input type="hidden" name="id" value="<?=$_GET["id"]?>">
    <input type="hidden" name="link" value="../<?=$seo?>">

<button class="btn btn-submit me-2" type="submit" name="destek-cevapla?id=<?=$_GET["id"]?>">Destek Cevapla</button>

</div>
</div>
</div>
</div>
</form>
</div>
</div>