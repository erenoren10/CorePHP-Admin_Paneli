<div class="page-wrapper">
    <?php
if(isset($_POST['sil'])){
	
	$sil=$_POST['toplu_sil'];
	$sill = implode(",",$sil);
	
	foreach($sil as $s){
		
	$resim_sorgu1=$db->query("select * from iletisimler where id='$s'")->fetch(PDO::FETCH_ASSOC);
	 unlink('../../resimler/'.$resim_sorgu1['resim']);
	$simdii=$db->query("delete from iletisimler where id='$s'")->fetch(PDO::FETCH_ASSOC);
	}
	
}
?>

   <form method="post">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>İletişimden Gelenler</h4>
</div>

<div class="page-btn">

  <input type="submit" name="sil" class="btn btn-added" value="Seçilenleri Sil">

</div>
</div>


<div class="card">
<div class="card-body">
<div class="table-top">
<div class="search-set">

<div class="search-input">
<a class="btn btn-searchset"><img src="assets/img/icons/search-white.svg" alt="img"></a>
</div>
</div>
<div class="wordset">
<ul>
<li>
<a data-bs-toggle="tooltip" data-bs-placement="top" title="pdf"><img src="assets/img/icons/pdf.svg" alt="img"></a>
</li>
<li>
<a data-bs-toggle="tooltip" data-bs-placement="top" title="excel"><img src="assets/img/icons/excel.svg" alt="img"></a>
</li>
<li>
<a data-bs-toggle="tooltip" data-bs-placement="top" title="print"><img src="assets/img/icons/printer.svg" alt="img"></a>
</li>
</ul>
</div>
</div>


<div class="table-responsive">
<table class="table  datanew">
<thead>
<tr>
<th>
<label class="checkboxs">
<input type="checkbox" id="select-all">
<span class="checkmarks"></span>
</label>
</th>
<th>Id</th>
<th>Ad Soyad</th>
<th>Konu</th>
<th>Telefon</th>
<th>Email</th>
<th>Mesaj</th>
<th>Tarih</th>

</tr>
</thead>
<tbody> 

<?php
$cek = $db->query("select * from iletisimler order by id desc")->fetchAll(PDO::FETCH_ASSOC);
foreach($cek as $goster){
?>
<tr>
<td>
<label class="checkboxs">
<input type="checkbox"  name="toplu_sil[]" value="<?=$goster["id"]?>">
<span class="checkmarks"></span>
</label>
</td>
<td><?=$goster["id"]?></td>
<td><?=$goster["adsoyad"]?></td>
<td><?=$goster["konu"]?></td>
<td><?=$goster["telefon"]?></td>
<td><?=$goster["email"]?></td>
<td><?=$goster["mesaj"]?></td>
<td><?=$goster["tarih"]?></td>

</tr>
<?php }?>
</tbody>
</table>
</div>
</div>
</div>

</div></form>
</div>