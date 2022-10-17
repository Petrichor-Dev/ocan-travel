<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->

  <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootsrap.min.css">

  <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">

  <title>ocan travel</title>
</head>

<body style="height: 800px;">
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="#">
      <h1 style="color: white; font-weight: lighter;">Ocan</h1>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ml-auto justify-content-center">

        <li class="nav-item icon bungkus-icon">
          <a href="<?= base_url() ?>pesan"><img src="<?= base_url() ?>assets/icon/plane2-bold.png" class="icon-gambar" alt=""><span style="color:white;">Pesawat</span></a>
        </li>
        <li class="nav-item icon bungkus-icon">
          <a href=""><img src="<?= base_url() ?>assets/icon/hotel-bold.png" class="icon-gambar" alt=""><span style="color:white;">Hotel</span></a>
        </li>
        <li class="nav-item icon bungkus-icon">
          <a href=""><img src="<?= base_url() ?>assets/icon/kereta-bold.png" class="icon-gambar" alt=""><span style="color:white;">Kereta</span></a>
        </li>
        <li class="nav-item icon bungkus-icon mr-3">
          <a href=""><img src="<?= base_url() ?>assets/icon/restaurant-bold.png" class="icon-gambar" alt=""><span style="color:white;">Restaurant</span></a>
        </li>
        <li class="nav-item" style="margin-right: -10px;">
          <?php if ($this->session->userdata("email") && $this->session->userdata("rule_id")) : ?>
            <a class="nav-link profile" href="#"><img src="<?= base_url(); ?>assets/img/<?= $data['foto_profil'] ?>.jpg" width="32" style="border-radius: 50%;margin-top: -8px;" class="img-fluid"></a>
          <?php else : ?>
            <a class="nav-link profile" href="#"><img src="<?= base_url(); ?>assets/img/ini.jpg" width="32" style=";margin-top: -8px;" class="img-fluid"></a>
          <?php endif; ?>
        </li>

        <li class="nav-item dropdown mr-3">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 15px; color:white;">
            <?php if ($this->session->userdata("email") && $this->session->userdata("rule_id")) : ?>
              <?= $data['nama']; ?>
            <?php else : ?>
              user
            <?php endif; ?>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Edit Profile</a>
          </div>
        </li>
        <?php if (!$this->session->userdata("email") && !$this->session->userdata("rule_id")) : ?>
          <li class="nav-item " style="margin-right: 10px;">
            <a class="nav-link log-out btn" href="<?= base_url() ?>auth">login</a>
          </li>
        <?php endif; ?>
        <li class="nav-item" onclick="confirm('Yakin ingin logout ?')" style="margin-right: 10px;">
          <a class="nav-link log-out btn" href="<?= base_url() ?>auth/logout">Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="menu">
    <a href="#" class="about">About Me</a>
    <a href="#">Contact</a>
    <a href="#">Partnership</a>
    <a href="#">Why Using Us</a>

    <div class="dropdown" style="display: inline;">
      <a class=" dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Pay
      </a>

      <div class="dropdown-menu " aria-labelledby="dropdownMenuLink">
        <a class="dropdown-item text-dark" href="#">Via Minimarket</a>
        <a class="dropdown-item text-dark" href="#">Transfer Antar Bank</a>
        <a class="dropdown-item text-dark" href="#">Via Paypal</a>
        <a class="dropdown-item text-dark" href="#">Kartu Keredit</a>
      </div>
    </div>
    <a href="#">Favorite Destination</a>
  </div>