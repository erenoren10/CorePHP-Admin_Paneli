<div class="page-wrapper">
<div class="content">
<div class="page-header">
<div class="page-title">
<h4>Müşteriler</h4>
<h6>Sitemize Kayıt Olanlar</h6>
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
<th>Tarih</th>
<th>Ad Soyad</th>
<th>Telefon</th>
<th>Email</th>



<th class="text-center">İşlem</th>
</tr>
</thead>
<tbody>
    <?php
    $cek = $db->query("select * from uyeler order by id desc")->fetchAll(PDO::FETCH_ASSOC);
    foreach($cek as $goster){
    ?>
<tr>
<td>
<label class="checkboxs">
<input type="checkbox">
<span class="checkmarks"></span>
</label>
</td>
<td><?=$goster["tarih"]?></td>
<td><?=$goster["adsoyad"]?></td>
<td><?=$goster["telefon"]?></td>
<td><?=$goster["email"]?></td>




<td class="text-center">
<a class="action-set" href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="true">
<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
</a>
<ul class="dropdown-menu">
<li>
<a href="uye-detay?id=<?=$goster["id"]?>" class="dropdown-item"><img src="assets/img/icons/eye1.svg" class="me-2" alt="img">Üye Detay</a>
</li>

</ul>
</td>
</tr>
<?php }?>
</tbody>
</table>
</div>
</div>
</div>

</div>
</div>