<?php
if ($_GET["durum"] == 'Basarili') {
  ?>
  <script>
    Swal.fire({
      position: 'top-end',
      icon: 'success',
      title: 'İşleminiz Başarıyla Kaydedildi',
      showConfirmButton: false,
      timer: 1500
    })

  </script>
<?php } else if (isset($_GET["durum"])) {
  $durum = $_GET["durum"];

  if ($durum == 'Hata') { ?>
      <script>
        Swal.fire({
          position: 'top-end',
          icon: 'error',
          title: 'Hata, işlem yapılamadı!',
          showConfirmButton: false,
          timer: 1500
        })

      </script>
  <?php }
} ?>
<div class="header">

  <div class="header-left active">
    <a href="./" class="logo">
      <img src="../<?= $logo ?>" alt="<?= $title ?>" style="width:50px">
    </a>
    <a href="./" class="logo-small">
      <img src="../<?= $favicon ?>" alt="">
    </a>
    <a id="toggle_btn" href="javascript:void(0);">
    </a>
  </div>

  <a id="mobile_btn" class="mobile_btn" href="#sidebar">
    <span class="bar-icon">
      <span></span>
      <span></span>
      <span></span>
    </span>
  </a>

  <ul class="nav user-menu">
    <li class="nav-item dropdown has-arrow main-drop">
      <a href="javascript:void(0);" class="dropdown-toggle nav-link userset" data-bs-toggle="dropdown">
        <span class="user-img"><img src="../<?= $favicon ?>" alt="">
          <span class="status online"></span></span>
      </a>
      <div class="dropdown-menu menu-drop-user">
        <div class="profilename">
          <div class="profileset">
            <span class="user-img"><img src="<?= $favicon ?>" alt="">
              <span class="status online"></span></span>
            <div class="profilesets">
              <h6>
                <?= $_SESSION["ad_soyad"] ?>
              </h6>
              <h5>Admin</h5>
            </div>
          </div>
          <hr class="m-0">
          <a class="dropdown-item" href="yonetici-ekle?islem=duzenle&id=<?= $_SESSION["id"] ?>"> <i class="me-2"
              data-feather="user"></i> Düzenle</a>
          <hr class="m-0">
          <a class="dropdown-item logout pb-0" href="include/cikis.php"><img src="assets/img/icons/log-out.svg"
              class="me-2" alt="img">Çıkış Yap</a>
        </div>
      </div>
    </li>
  </ul>


  <div class="dropdown mobile-user-menu">
    <a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i
        class="fa fa-ellipsis-v"></i></a>
    <div class="dropdown-menu dropdown-menu-right">
      <a class="dropdown-item" href="profile.html">My Profile</a>
      <a class="dropdown-item" href="generalsettings.html">Settings</a>
      <a class="dropdown-item" href="signin.html">Logout</a>
    </div>
  </div>

</div>