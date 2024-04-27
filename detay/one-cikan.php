
<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Öne Çıkan Ürünler </h4>
</div>
</div>



<form method="post" action="include/fonksiyonlar.php" enctype="multipart/form-data">



<div class="col-lg-12 col-sm-12 col-12">
<div class="form-group">
<label>Ürünler  </label>


    <select class="select" name="urunler[]" multiple>
                                       
                                        <?php


                                        $urun_kategori = $db->query("select * from urunler  order by id desc",PDO::FETCH_ASSOC);
										if($urun_kategori->rowCount()){foreach($urun_kategori as $urunkat){
										?>
                                        <option value="<?=$urunkat["id"]?>"
                                        <?php
                                        $urun = $onecikan["urunler"];
                                        $urun = explode(",",$urun);
                                        foreach($urun as $urunn =>$deger){
                                          
                                            if($deger==$urunkat["id"]){
                                        ?>
                                        
                                        selected <?php } }?>><?=$urunkat['adi']?></option>
                               <?php }}?>
                                      </select>


</div>
</div>



      

<br><br><br><br>

<div class="col-lg-12">

    <input type="hidden" name="link" value="../<?=$seo?>">

<button class="btn btn-submit me-2" type="submit" name="one-cikan">Güncelle</button>


</div>
</div>
</div>
</div>
</form>
</div>
</div>