<div class="page-wrapper">
    <form method="post" action="include/fonksiyonlar.php">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Email SMTP Ayarları</h4>
</div>
</div>

<div class="card">
<div class="card-body">
<div class="row">
<div class="col-lg-6 col-sm-12">
<div class="form-group">
<label>Site Mail <span class="manitory">*</span></label>
<input type="text" name="site_mail" value="<?=$smtp["site_mail"]?>">
</div>
</div>

<input type="hidden" name="link" value="../<?=$seo?>">
<div class="col-lg-6 col-sm-12">
<div class="form-group">
<label>Site Mail Şifre <span class="manitory">*</span></label>
<div class="pass-group">
<input type="password" class=" pass-input" name="site_mail_sifre" value="<?=$smtp["site_mail_sifre"]?>">
<span class="fas toggle-password fa-eye-slash"></span>
</div>
</div>
</div>

<div class="col-lg-6 col-sm-12">
<div class="form-group">
<label>Site Mail Host <span class="manitory">*</span></label>
<input type="text" name="site_mail_host" value="<?=$smtp["site_mail_host"]?>">
</div>
</div>

<div class="col-lg-6 col-sm-12">
<div class="form-group">
<label>Site Mail Port <span class="manitory">*</span></label>
<input type="text" name="site_mail_port" value="<?=$smtp["site_mail_port"]?>">
</div>
</div>

<div class="col-lg-12 col-sm-12">
<div class="form-group">
<label>Gönderen Mail   <span class="manitory">*</span></label>
<input type="text" name="gonderen_mail" value="<?=$smtp["gonderen_mail"]?>">
</div>
</div>


<div class="row">
<div class="col-lg-12">
<button class="btn btn-submit me-2" type="submit" name="smtp-ayar">Güncelle</button>

</div>
</div>
</div>
</div>
</div>

</div></form>
</div>