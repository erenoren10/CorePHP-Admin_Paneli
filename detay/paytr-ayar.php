<div class="page-wrapper">
    <form method="post" action="include/fonksiyonlar.php">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>PAYTR Ayarları</h4>
</div>
</div>

<div class="card">
<div class="card-body">
<div class="row">


<div class="col-lg-12 col-sm-12">
<div class="form-group">
<label>	Mertchant İd  <span class="manitory">*</span></label>
<input type="text" name="merchand_id" value="<?=$paytr["merchand_id"]?>">
</div>
</div>
<input type="hidden" name="link" value="../<?=$seo?>">


<div class="col-lg-12 col-sm-12">
<div class="form-group">
<label>	Mertchant Key  <span class="manitory">*</span></label>
<input type="text" name="merchand_key" value="<?=$paytr["merchand_key"]?>">
</div>
</div>


<div class="col-lg-12 col-sm-12">
<div class="form-group">
<label>	Mertchant Salt  <span class="manitory">*</span></label>
<input type="text" name="merchand_salt" value="<?=$paytr["merchand_salt"]?>">
</div>
</div>


<div class="row">
<div class="col-lg-12">
<button class="btn btn-submit me-2" type="submit" name="paytr-ayar">Güncelle</button>

</div>
</div>
</div>
</div>
</div>

</div></form>
</div>