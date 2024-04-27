<?php
$siparis = $db->query("select * from orders where id='{$_GET["id"]}'")->fetch(PDO::FETCH_ASSOC);

?>

<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Sipariş Detay </h4>

            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="card-sales-split">
                    <h2>Sipariş Kodu :
                        <?= $siparis["code"] ?>
                    </h2>
                    <?php ?>
                    <ul>
                        <li>
                            <a href="javascript:void(0);"><img src="assets/img/icons/edit.svg" alt="img"></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);"><img src="assets/img/icons/pdf.svg" alt="img"></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);"><img src="assets/img/icons/excel.svg" alt="img"></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);"><img src="assets/img/icons/printer.svg" alt="img"></a>
                        </li>
                    </ul>
                </div>
                <div class="invoice-box table-height"
                    style="max-width: 1600px;width:100%;overflow: auto;margin:15px auto;padding: 0;font-size: 14px;line-height: 24px;color: #555;">
                    <table cellpadding="0" cellspacing="0" style="width: 100%;line-height: inherit;text-align: left;">
                        <tbody>
                            <tr class="top">
                                <td colspan="6" style="padding: 5px;vertical-align: top;">
                                    
                                </td>
                            </tr>
                            <tr class="heading " style="background: #F3F2F7;">
                                <td
                                    style="padding: 5px;vertical-align: middle;font-weight: 600;color: #5E5873;font-size: 14px;padding: 10px; ">
                                    Ürün Adı
                                </td>

                                <td
                                    style="padding: 5px;vertical-align: middle;font-weight: 600;color: #5E5873;font-size: 14px;padding: 10px; ">
                                    Fiyat
                                </td>
                                <td
                                    style="padding: 5px;vertical-align: middle;font-weight: 600;color: #5E5873;font-size: 14px;padding: 10px; ">
                                    Miktar
                                </td>
                                <td
                                    style="padding: 5px;vertical-align: middle;font-weight: 600;color: #5E5873;font-size: 14px;padding: 10px; ">
                                    Ödeme Türü
                                </td>


                            </tr>
                            <?php
                            $codeSutun = $siparis['code'];
                            $urunid = $db->query("select * from order_details where code='{$codeSutun}'")->fetchAll(PDO::FETCH_ASSOC);
                          
                            foreach ($urunid as $urun => $deger) {
                                $uruninfo = $deger['product_id'];
                                $urun = $db->query("select * from urunler where id='$uruninfo'")->fetch(PDO::FETCH_ASSOC);
                                ?>

                                <tr class="details" style="border-bottom:1px solid #E9ECEF ;">
                                    <td style="padding: 10px;vertical-align: top; display: flex;align-items: center;">
                                        <img src="<?= $urun["resim"] ?>" alt="<?= $urun["adi"] ?>" class="me-2"
                                            style="width:40px;height:40px;">
                                        <?= $urun["adi"] ?>
                                    </td>
                                    <td style="padding: 10px;vertical-align: top; ">
                                        <?= $urun["fiyat"] ?> ₺
                                    </td>
                                    <td style="padding: 10px;vertical-align: top; ">
                                        <?= $deger["quantity"] ?>
                                    </td>
                                    <td style="padding: 10px;vertical-align: top; ">
                                        <?= $siparis["tur"] ?>
                                    </td>
                                    
                                </tr>
                            <?php } ?>
                            
                        </tbody>
                    </table>
                </div>
                <div class="row">

                    
                    <div class="col-lg-12">

                        <a href="siparisler" class="btn btn-cancel">Siparişlere Geri Dön</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>