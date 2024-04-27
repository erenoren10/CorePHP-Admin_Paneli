<div class="page-wrapper">
    <form method="post" action="include/fonksiyonlar.php">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Sosyal Medya Ayarları</h4>
</div>
</div>

<div class="card">
<div class="card-body">
<div class="row">
    
    
<div class="col-lg-6 col-sm-12">
<div class="form-group">
<label>İnstagram <span class="manitory">*</span></label>
<input type="text" name="instagram" value="<?=$sosyal["instagram"]?>">
</div>
</div>

<input type="hidden" name="link" value="../<?=$seo?>">
<div class="col-lg-6 col-sm-12">
<div class="form-group">
<label>Facebook <span class="manitory">*</span></label>
<input type="text" name="facebook" value="<?=$sosyal["facebook"]?>">
</div>
</div>

<div class="col-lg-6 col-sm-12">
<div class="form-group">
<label>Youtube <span class="manitory">*</span></label>
<input type="text" name="youtube" value="<?=$sosyal["youtube"]?>">
</div>
</div>

<div class="col-lg-6 col-sm-12">
<div class="form-group">
<label>Linkedin <span class="manitory">*</span></label>
<input type="text" name="linkedin" value="<?=$sosyal["linkedin"]?>">
</div>
</div>


<div class="col-lg-6 col-sm-12">
<div class="form-group">
<label>Pinterest <span class="manitory">*</span></label>
<input type="text" name="pinterest" value="<?=$sosyal["pinterest"]?>">
</div>
</div>


<div class="col-lg-6 col-sm-12">
<div class="form-group">
<label>Telegram <span class="manitory">*</span></label>
<input type="text" name="telegram" value="<?=$sosyal["telegram"]?>">
</div>
</div>


<div class="col-lg-6 col-sm-12">
<div class="form-group">
<label>Twitter <span class="manitory">*</span></label>
<input type="text" name="twitter" value="<?=$sosyal["twitter"]?>">
</div>
</div>


<div class="row">
<div class="col-lg-12">
<button class="btn btn-submit me-2" type="submit" name="sosyal-medya">Güncelle</button>

</div>
</div>
</div>
</div>
</div>

</div></form>
</div>