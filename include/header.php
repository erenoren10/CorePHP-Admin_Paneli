<?php
ob_start();
session_start();
oturumkontrolana();
?>
<nav class="navbar navbar-expand-lg d-flex justify-content-between">
              <div class="" id="navbarNav">
                <ul class="navbar-nav" id="leftNav">
                  <li class="nav-item">
                    <a class="nav-link" id="sidebar-toggle" href="#"><i data-feather="arrow-left"></i></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="index.php">Anasayfa</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="ayarlar.php">Ayarlar</a>
                  </li>
                   <li class="nav-item">
                    <a class="nav-link" href="izinler.php">İzinler</a>
                  </li>
                   <li class="nav-item">
                    <a class="nav-link" href="../" target="_blank">Siteye Geç</a>
                  </li>
                 
                </ul>
                </div>
                <div class="">
                  <a class="" href="index.php"><img src="../resimler/<?=$ayar['logo']?>" width="70"></a>
                </div>
                <div class="" id="headerNav">
                  <ul class="navbar-nav">
                
                    <li class="nav-item dropdown">
                      <a class="nav-link profile-dropdown" href="#" id="profileDropDown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="../resimler/<?=$ayar['favicon']?>" alt=""></a>
                     
                    </li>
                  </ul>
              </div>
            </nav>
            
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>