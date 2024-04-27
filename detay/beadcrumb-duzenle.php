
<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Beadcrumb Düzenle</h4>
</div>
</div>

<?php

    
    $guncelle = $db->query("select * from beadcrumb where id='1'")->fetch(PDO::FETCH_ASSOC);

?>

<form method="post" action="include/fonksiyonlar.php" enctype="multipart/form-data">
<div class="card">
<div class="card-body">
<div class="row">

<div class="col-lg-12 col-sm-12 col-12">
<div class="form-group">
<label>Başlık</label>
<input type="text" name="adi" value="<?=$guncelle["adi"]?>">
</div>
</div>



<div class="col-lg-12 col-sm-12 col-12">
<div class="form-group">
<label>Arama Çubuğu Durum </label>
<select class="select" name="durum">
<option value="0" <?php if($guncelle["durum"]==0){ echo "selected";}?>> Göster</option>
<option value="1" <?php if($guncelle["durum"]==1){ echo "selected";}?>> Gizle</option>
</select>
</div>
</div>


<div class="col-lg-12">
<div class="form-group">
<label> Beadcrumb Resim</label>
<div class="image-upload">
<input type="file" name="resim">
<div class="image-uploads">
   
<img src="../resimler/<?=$guncelle["resim"]?>" alt="img" width="50">
<h4>Buradan Resmi Değiştirebilirsiniz</h4>

</div>
</div>
</div>
</div>



                       

<br><br><br><br>


    <input type="hidden" name="link" value="../<?=$seo?>">

<button class="btn btn-submit me-2" type="submit" name="beadcrumb-duzenle">Güncelle</button>


</div>
</div>
</div>
</div>
</form>
</div>
</div>