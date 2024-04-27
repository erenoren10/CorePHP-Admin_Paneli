<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4><?=$adi?></h4>
</div>
</div>
<form method="post" action="include/fonksiyonlar.php" enctype="multipart/form-data">
    <input type="hidden" name="link" value="../<?=$seo?>">
<div class="card">
<div class="card-body">
<div class="row">
<div class="col-lg-4 col-sm-6 col-12">
<div class="form-group">
<label>Site Title <span class="manitory">*</span></label>
<input type="text" name="site_title" value="<?=$title?>">
</div>
</div>

<div class="col-lg-4 col-sm-6 col-12">
<div class="form-group">
<label>Site Keyword <span class="manitory">*</span></label>
<input type="text" name="site_keyword" value="<?=$keyword?>">
</div>
</div>

<div class="col-lg-4 col-sm-6 col-12">
<div class="form-group">
<label>Site Author <span class="manitory">*</span></label>
<input type="text" name="site_author" value="<?=$author?>">
</div>
</div>

<div class="col-lg-6 col-sm-6 col-12">
<div class="form-group">
<label>Site Renk 1 <span class="manitory">*</span></label>
<input type="color" name="renk" value="<?=$renk?>">
</div>
</div>


<div class="col-lg-6 col-sm-6 col-12">
<div class="form-group">
<label>Site Renk 2 <span class="manitory">*</span></label>
<input type="color" name="renk2" value="<?=$renk2?>">
</div>
</div>

<div class="col-lg-12 col-sm-6 col-12">
<div class="form-group">
<label>Footer Copyright <span class="manitory">*</span></label>
<input type="text" name="footer_copyright" value="<?=$copyright?>">
</div>
</div>



<div class="col-lg-12">
<div class="form-group">
<label>Site Description</label>
<textarea class="form-control" name="site_description"><?=$des?></textarea>
</div>
</div>

<div class="col-lg-4">
<div class="form-group">
<label> Site Logo</label>
<div class="image-upload">
<input type="file" name="logo">
<div class="image-uploads">
<img src="<?=$logo?>" alt="img" width="150">
<h4>Buradan Resmi Değiştirebilirsiniz</h4>
</div>
</div>
</div>
</div>

<div class="col-lg-4">
<div class="form-group">
<label> Site Footer Logo</label>
<div class="image-upload">
<input type="file" name="footer_logo">
<div class="image-uploads">
<img src="<?=$footerlogo?>" alt="img" width="150">
<h4>Buradan Resmi Değiştirebilirsiniz</h4>
</div>
</div>
</div>
</div>

<div class="col-lg-4">
<div class="form-group">
<label> Site Favicon</label>
<div class="image-upload">
<input type="file" name="favicon">
<div class="image-uploads">
<img src="<?=$favicon?>" alt="img" width="40">
<h4>Buradan Resmi Değiştirebilirsiniz</h4>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<button class="btn btn-submit me-2" type="submit" name="genel-ayarlar">Güncelle</button>

</div>
</div>
</div>
</div>
</div>
</form>
</div>
</div>