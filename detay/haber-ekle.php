
<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Haber Ekle</h4>
</div>
</div>

<?php
if($_GET['islem']=='duzenle'){
    
    $guncelle = $db->query("select * from haberler where id='{$_GET['id']}'")->fetch(PDO::FETCH_ASSOC);
}
?>

<form method="post" action="include/fonksiyonlar.php" enctype="multipart/form-data">
<div class="card">
<div class="card-body">
<div class="row">
<div class="col-lg-6 col-sm-6 col-12">
<div class="form-group">
<label>Haber Sırası</label>
<input type="text" name="sira" value="<?=$guncelle["sira"]?>">
</div>
</div>
<div class="col-lg-6 col-sm-6 col-12">
<div class="form-group">
<label>Haber Adı</label>
<input type="text" name="adi" value="<?=$guncelle["adi"]?>">
</div>
</div>



<div class="col-lg-12 col-sm-12 col-12">
<div class="form-group">
<label>Haber Durum </label>
<select class="select" name="durum">
<option value="0" <?php if($guncelle["durum"]==0){ echo "selected";}?>>Sitede Göster</option>
<option value="1" <?php if($guncelle["durum"]==1){ echo "selected";}?>>Sitede Gizle</option>
</select>
</div>
</div>

<div class="col-lg-12">
<div class="form-group">
<label>Haber ön Açıklama</label>
<textarea class="form-control" name="onaciklama"> <?=$guncelle["onaciklama"]?></textarea>
</div>
</div>
<div class="col-lg-12">
<div class="form-group">
<label> Haber Resim</label>
<div class="image-upload">
<input type="file" name="resim">
<div class="image-uploads">
    <?php if($_GET['islem']=='duzenle'){?>
<img src="../resimler/<?=$guncelle["resim"]?>" alt="img" width="50">
<h4>Buradan Resmi Değiştirebilirsiniz</h4>
<?php } else {?>
<img src="assets/img/icons/upload.svg" alt="img">
<h4>Buradan Resim Ekleyebilirsiniz </h4>
<?php }?>
</div>
</div>
</div>
</div>

<div class="col-lg-12">

<textarea  class="ckeditor" name="aciklama"  rows="10"><?=$guncelle['aciklama']?></textarea>

</div>

                        <div class="row" id="resimler">
                            
                            	<div class="form-group row col-md-12" id="resimler">
                            
                            
                            	<?php
									$i = 0;
									
									$iddd=$_GET['id'];
									if($_GET['islem']=='duzenle'){
										$cek = $db->query("SELECT * FROM urun_img WHERE urun_id = '$iddd' and tur='haberler' order by id asc", PDO::FETCH_ASSOC);
										if($cek->rowCount()){
											foreach( $cek as $c ){
												echo '<div class="col-md-3" data-resim-dis-id="'.$i.'">
									                    <div class="uploaddis pasif" style="float:left;">
									        			  <div class="yuklendi">
									        				  <img src="../resimler/'.$c['img'].'" width="100%">
									        				  <div class="icon" data-resim-sil-id="'.$i.'"><span class="fa fa-trash"></span></div>
									        				  <input type="hidden" name="img[]" value="'.$c['img'].'" required="">
									        			  </div>
									        			</div>
									                </div>';
									            $i++;
											}
										}
									}
								?>
                            </div>
                            
                            	<div class="form-group row col-md-12">
                             <div class="col-md-4 " style="margin:auto;padding:auto;">
				                    <div class="uploaddis aktif" data-id="1" style="margin:0 auto;">
				        			  <div class="upload1">
				        				  <span class="metin" style="width: 100%;float: left;">Haber Resimi Yükle</span>
				        				  <div class="icon"><span class="fa fa-upload" data-id="1"></span></div>
				        			  </div>
				        			</div>
				                </div>
                            
                            
                            </div>
                            
                            
                            
                            
                            
                            
				
					
				</div>
<div id="queue"></div>
                                 

<br><br><br><br>

<div class="col-lg-12">
    <?php if($_GET['islem']=='duzenle'){?>
<button class="btn btn-submit me-2" type="submit" name="haber-guncelle">Haber Güncelle</button>
<input type="hidden" name="id" value="<?=$guncelle["id"]?>">
    <input type="hidden" name="link" value="../haber-ekle?islem=duzenle&id=<?=$guncelle["id"]?>">

<?php } else {?>
    <input type="hidden" name="link" value="../<?=$seo?>">

<button class="btn btn-submit me-2" type="submit" name="haber-ekle">Haber Ekle</button>

<?php }?>
</div>
</div>
</div>
</div>
</form>
</div>
</div>