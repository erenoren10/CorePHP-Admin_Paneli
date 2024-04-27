<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Üye Detay </h4>
</div>
</div>
<?php

    $guncelle = $db->query("select * from uyeler where id='{$_GET['id']}'")->fetch(PDO::FETCH_ASSOC);

?>
<form method="post" action="include/fonksiyonlar.php" enctype="multipart/form-data">

<div class="card">
<div class="card-body">
<div class="row">
    <div class="col-lg-3 col-sm-6 col-12">
<div class="form-group">
<label>Üye Adı</label>
<input type="text" name="adsoyad" value="<?=$guncelle["adsoyad"]?>">
</div>
</div>
 <div class="col-lg-3 col-sm-6 col-12">
<div class="form-group">
<label>Üye Email</label>
<input type="text" name="email" value="<?=$guncelle["email"]?>">
</div>
</div>

 <div class="col-lg-3 col-sm-6 col-12">
<div class="form-group">
<label>Üye Telefon</label>
<input type="text" name="telefon" value="<?=$guncelle["telefon"]?>">
</div>
</div>


 <div class="col-lg-3 col-sm-6 col-12">
<div class="form-group">
<label>Üye Şifre</label>
<input type="text" name="sifre" value="<?=$guncelle["sifre"]?>">
</div>
</div>


<div class="col-lg-12">

<a href="uyeler" class="btn btn-cancel">Üyelere Geri Dön</a>
</div>





</div>
</div>
</div>

</form>

</div>
</div>