<div class="page-sidebar">
                <ul class="list-unstyled accordion-menu">
                  <li class="sidebar-title">
                    Menü
                  </li>
                  <li>
                    <a href="index.php"><i data-feather="home"></i>Anasayfa</a>
                  </li>
            
              
                
                  <?php
                  if($guncelle1['slider_durum']=='on'){
				  ?>
                   <li>
                    <a href="index.php"><i data-feather="layout"></i>Slider Yönetimi<i class="fa fa-chevron-right dropdown-icon"></i></a>
                    <ul class="">
                      <li><a href="slider-ekle.php"><i class="fa fa-circle"></i>Slider Ekle</a></li>
                      <li><a href="slider-listele.php"><i class="fa fa-circle"></i>Slider Listele</a></li>
                     
                    </ul>
                  </li>
                  <?php }?>
                   <?php
                  if($guncelle1['sayfa_durum']=='on'){
				  ?>
                   <li>
                    <a href="index.php"><i data-feather="layout"></i>Sayfa Yönetimi<i class="fa fa-chevron-right dropdown-icon"></i></a>
                    <ul class="">
                      <li><a href="sayfa-ekle.php"><i class="fa fa-circle"></i>Sayfa Ekle</a></li>
                      <li><a href="sayfa-listele.php"><i class="fa fa-circle"></i>Sayfa Listele</a></li>
                     
                    </ul>
                  </li>
                   <?php }?>
                   <?php
                  if($guncelle1['urun_durum']=='on'){
				  ?>
                  
                        
                   <li>
                    <a href="index.php"><i data-feather="layout"></i>Ürün Yönetimi<i class="fa fa-chevron-right dropdown-icon"></i></a>
                    <ul class="">
                      <li><a href="urun-ekle.php"><i class="fa fa-circle"></i>Ürün Ekle</a></li>
                      <li><a href="urun-listele.php"><i class="fa fa-circle"></i>Ürün Listele</a></li>
                      
                   <?php
                  if($guncelle1['kategori_durum']=='on'){
				  ?>
                       <li><a href="kategori-ekle.php"><i class="fa fa-circle"></i>Ürün Kategori Ekle</a></li>
                      <li><a href="kategori-listele.php"><i class="fa fa-circle"></i>Ürün Kategori Listele</a></li>
                      <?php }?>
                    </ul>
                  </li>
                   <?php }?>
                   <?php
                  if($guncelle1['haber_durum']=='on'){
				  ?>
				  
             
                  
                    <li>
                    <a href="index.php"><i data-feather="server"></i>Haber Yönetimi<i class="fa fa-chevron-right dropdown-icon"></i></a>
                    <ul class="">
                      <li><a href="haber-ekle.php"><i class="fa fa-circle"></i>Haber Ekle</a></li>
                      <li><a href="haber-listele.php"><i class="fa fa-circle"></i>Haber Listele</a></li>
                     
                    </ul>
                  </li>
                   <?php }?>
                   <?php
                  if($guncelle1['sss_durum']=='on'){
				  ?>
                  
                   <li>
                    <a href="index.php"><i data-feather="server"></i>SSS Yönetimi<i class="fa fa-chevron-right dropdown-icon"></i></a>
                    <ul class="">
                      <li><a href="sss-ekle.php"><i class="fa fa-circle"></i>SSS Ekle</a></li>
                      <li><a href="sss-listele.php"><i class="fa fa-circle"></i>SSS Listele</a></li>
                     
                    </ul>
                  </li>
                   <?php }?>
                   <?php
                  if($guncelle1['istatik_durum']=='on'){
				  ?>
                  
                    <li>
                    <a href="index.php"><i data-feather="server"></i>İstatik Yönetimi<i class="fa fa-chevron-right dropdown-icon"></i></a>
                    <ul class="">
                      <li><a href="istatik-ekle.php"><i class="fa fa-circle"></i>İstatik Ekle</a></li>
                      <li><a href="istatik-listele.php"><i class="fa fa-circle"></i>İstatik Listele</a></li>
                     
                    </ul>
                  </li>
                   <?php }?>
                   <?php
                  if($guncelle1['galeri_durum']=='on'){
				  ?>
                         
                    <li>
                    <a href="index.php"><i data-feather="server"></i>Galeri Yönetimi<i class="fa fa-chevron-right dropdown-icon"></i></a>
                    <ul class="">
                      <li><a href="galeri-ekle.php"><i class="fa fa-circle"></i>Galeri Ekle</a></li>
                      <li><a href="galeri-listele.php"><i class="fa fa-circle"></i>Galeri Listele</a></li>
                     
                    </ul>
                  </li>
                   <?php }?>
                   <?php
                  if($guncelle1['video_durum']=='on'){
				  ?>
                        <li>
                    <a href="index.php"><i data-feather="server"></i>Video Yönetimi<i class="fa fa-chevron-right dropdown-icon"></i></a>
                    <ul class="">
                      <li><a href="video-ekle.php"><i class="fa fa-circle"></i>Video Ekle</a></li>
                      <li><a href="video-listele.php"><i class="fa fa-circle"></i>Video Listele</a></li>
                     
                    </ul>
                  </li>
                   <?php }?>
                   <?php
                  if($guncelle1['ekip_durum']=='on'){
				  ?>
                   
                    <li>
                    <a href="index.php"><i data-feather="server"></i>Ekibimiz Yönetimi<i class="fa fa-chevron-right dropdown-icon"></i></a>
                    <ul class="">
                      <li><a href="ekibimiz-ekle.php"><i class="fa fa-circle"></i>Ekibimiz Ekle</a></li>
                      <li><a href="ekibimiz-listele.php"><i class="fa fa-circle"></i>Ekibimiz Listele</a></li>
                     
                    </ul>
                  </li>
                   <?php }?>
                   <?php
                  if($guncelle1['hizmet_durum']=='on'){
				  ?>
                  <li>
                    <a href="index.php"><i data-feather="server"></i>Hizmet Yönetimi<i class="fa fa-chevron-right dropdown-icon"></i></a>
                    <ul class="">
                      <li><a href="hizmet-ekle.php"><i class="fa fa-circle"></i>Hizmet Ekle</a></li>
                      <li><a href="hizmet-listele.php"><i class="fa fa-circle"></i>Hizmet Listele</a></li>
                     
                    </ul>
                  </li>
                   <?php }?>
                   <?php
                  if($guncelle1['ref_durum']=='on'){
				  ?>
                  
                    <li>
                    <a href="index.php"><i data-feather="server"></i>Referans Yönetimi<i class="fa fa-chevron-right dropdown-icon"></i></a>
                    <ul class="">
                      <li><a href="referans-ekle.php"><i class="fa fa-circle"></i>Referans Ekle</a></li>
                      <li><a href="referans-listele.php"><i class="fa fa-circle"></i>Referans Listele</a></li>
                     
                    </ul>
                  </li>
                  
          <?php }?>
                   <?php
                  if($guncelle1['yorum_durum']=='on'){
				  ?>
                  
              
                    <li>
                    <a href="index.php"><i data-feather="server"></i>Yorum Yönetimi<i class="fa fa-chevron-right dropdown-icon"></i></a>
                    <ul class="">
                      <li><a href="yorum-ekle.php"><i class="fa fa-circle"></i>Yorum Ekle</a></li>
                      <li><a href="yorum-listele.php"><i class="fa fa-circle"></i>Yorum Listele</a></li>
                     
                    </ul>
                  </li>
                  
                
            <?php }?>
                  
                  
                     
          
           
                  
                  
                  
                  
                   
            
                  
                  
                   
                  
                  
                    
                
                  
                  
                  
                    <li>
                    <a href="index.php"><i data-feather="user"></i>Yönetici Yönetimi<i class="fa fa-chevron-right dropdown-icon"></i></a>
                    <ul class="">
                      <li><a href="yonetici-ekle.php"><i class="fa fa-circle"></i>Yönetici Ekle</a></li>
                      <li><a href="yonetici-listele.php"><i class="fa fa-circle"></i>Yönetici Listele</a></li>
                     
                    </ul>
                  </li>
                  
                  
                  
                  
                      <li>
                    <a href="iletisimbilgileri.php"><i data-feather="phone"></i>İletişim Bilgileri</a>
                   
                  </li>
                   <li>
                    <a href="sosyalmedya.php"><i data-feather="share-2"></i>Sosyal Medya Ayarları</a>
                   
                  </li>
                  
                   <li>
                    <a href="mailayarlari.php"><i data-feather="mail"></i>Mail Ayarları</a>
                   
                  </li>
                  
                     <li>
                    <a href="ayarlar.php"><i data-feather="settings"></i>Site Yönetimi</a>
                   
                  </li>
                  
                  <li>
                    <a href="cikis.php"><i data-feather="check-circle"></i>Çıkış yap</a>
                  </li>
                </ul>
            </div>