<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Siparişler</h4>
                <h6>Tüm Gelen Siparişler</h6>
            </div>
            <!--<div class="page-btn">
                <a href="add-sales.html" class="btn btn-added"><img src="assets/img/icons/plus.svg" alt="img"
                        class="me-1">Add Sales</a>
            </div>-->
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
                                <a data-bs-toggle="tooltip" data-bs-placement="top" title="pdf"><img
                                        src="assets/img/icons/pdf.svg" alt="img"></a>
                            </li>
                            <li>
                                <a data-bs-toggle="tooltip" data-bs-placement="top" title="excel"><img
                                        src="assets/img/icons/excel.svg" alt="img"></a>
                            </li>
                            <li>
                                <a data-bs-toggle="tooltip" data-bs-placement="top" title="print"><img
                                        src="assets/img/icons/printer.svg" alt="img"></a>
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
                                <th>Tarih</th>
                                <th>Ad Soyad</th>
                                <th>Telefon</th>
                                <th>Mail</th>
                                <th>Adres</th>
                                <th>Sipariş Türü</th>
                                <th>Fiyat</th>

                                <th class="text-center">İşlem</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $cek = $db->query("select * from orders order by id desc")->fetchAll(PDO::FETCH_ASSOC);
                            foreach ($cek as $goster) {
                                $codeSutun = $goster['code'];
                                $toplam = 0;
                                $cekfiyatlar = $db->query("select fiyat from order_details where code=$codeSutun")->fetchall(PDO::FETCH_ASSOC);

                                foreach ($cekfiyatlar as $tutar) {
                                    foreach ($tutar as $fiyat) {
                                        $toplam += $fiyat;
                                    }
                                }

                                ?>
                                <tr>
                                    <td>
                                        <label class="checkboxs">
                                            <input type="checkbox">
                                            <span class="checkmarks"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <?= $goster["order_date"] ?>
                                    </td>
                                    <td>
                                        <?= $goster["customer_name"] ?>
                                    </td>
                                    <td>
                                        <?= $goster["phone"] ?>
                                    </td>
                                    <td>
                                        <?= $goster["mail"] ?>
                                    </td>
                                    <td>
                                        <?= $goster["address"] ?>
                                    </td>
                                    <td>
                                        <?= $goster['tur'] ?>
                                    </td>
                                    <td><span class="badges bg-lightgreen">
                                            <?= $toplam ?>₺
                                        </span></td>


                                    <td class="text-center">
                                        <a class="action-set" href="javascript:void(0);" data-bs-toggle="dropdown"
                                            aria-expanded="true">
                                            <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="siparis-detay?id=<?= $goster["id"] ?>" class="dropdown-item"><img
                                                        src="assets/img/icons/eye1.svg" class="me-2" alt="img">Sipariş
                                                    Detay</a>
                                            </li>

                                        </ul>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>