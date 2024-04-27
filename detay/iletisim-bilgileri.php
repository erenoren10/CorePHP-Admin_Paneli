<div class="page-wrapper">
    <form method="post" action="include/fonksiyonlar.php">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>İletişim Bilgileri</h4>
</div>
</div>

<div class="card">
<div class="card-body">
<div class="row">
    
<input type="hidden" name="link" value="../<?=$seo?>">
    
<div class="col-lg-6 col-sm-12">
<div class="form-group">
<label>Telefon 1 <span class="manitory">*</span></label>
<input type="text" name="telefon1" value="<?=$iletisim["telefon1"]?>">
</div>
</div>

<div class="col-lg-6 col-sm-12">
<div class="form-group">
<label>Telefon 2 <span class="manitory">*</span></label>
<input type="text" name="telefon2" value="<?=$iletisim["telefon2"]?>">
</div>
</div>

<div class="col-lg-6 col-sm-12">
<div class="form-group">
<label>Email 1 <span class="manitory">*</span></label>
<input type="text" name="email1" value="<?=$iletisim["email1"]?>">
</div>
</div>

<div class="col-lg-6 col-sm-12">
<div class="form-group">
<label>Email 2 <span class="manitory">*</span></label>
<input type="text" name="email2" value="<?=$iletisim["email2"]?>">
</div>
</div>

<div class="col-lg-6 col-sm-12">
<div class="form-group">
<label>Adres 1 <span class="manitory">*</span></label>
<input type="text" name="adres1" value="<?=$iletisim["adres1"]?>">
</div>
</div>

<div class="col-lg-6 col-sm-12">
<div class="form-group">
<label>Adres 2 <span class="manitory">*</span></label>
<input type="text" name="adres2" value="<?=$iletisim["adres2"]?>">
</div>
</div>

<div class="col-lg-12 col-sm-12">
<div class="form-group">
<label>Whatsapp Numaranız <span class="manitory">*</span></label>
<input type="text" name="whatsapp" value="<?=$iletisim["whatsapp"]?>">
</div>
</div>

<div class="col-lg-6 col-sm-12">
<div class="form-group">
<label>Whatsapp İcon Metni <span class="manitory">*</span></label>
<input type="text" name="wp_text" value="<?=$iletisim["wp_text"]?>">
</div>
</div>


<div class="col-lg-6 col-sm-12">
<div class="form-group">
<label>Whatsapp İcon Rengi <span class="manitory">*</span></label>
<input type="color" name="wp_renk" value="<?=$iletisim["wp_renk"]?>">
</div>
</div>





<div class="col-lg-12">
<div class="form-group">
<label>Google Maps </label>
<textarea class="form-control" name="google_maps"><?=$iletisim["google_maps"]?></textarea>
</div>
</div>




<div class="row">
<div class="col-lg-12">
<button class="btn btn-submit me-2" type="submit" name="iletisim-bilgileri">Güncelle</button>

</div>
</div>
</div>
</div>
</div>

</div></form>
</div>