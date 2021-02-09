<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login | E-Balita</title>
  <link rel="icon" href="<?php echo asset_url() ?>images/logo.png" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="<?php echo asset_url() ?>css/main.css" />
  <link rel="stylesheet" href="<?php echo asset_url() ?>css/index.css" />
  <link rel="stylesheet" href="<?php echo asset_url() ?>css/alert.css" />

  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/gsap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body>
  <div class="container-login">
    <img src="<?php echo asset_url() ?>images/logo.png" alt="logo" />

    <div class="login">
      <?php if ($this->session->flashdata('status') == 'true') { ?>
        <div class="alert" style="background-color: #6BBD6E;">
          <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
          <b>Success!</b> Berhasil membuat akun ke E-Balita
        </div>
      <?php } else if ($this->session->flashdata('status') == 'failed') { ?>
        <div class="alert" style="background-color: #F66359;">
          <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
          <b>Error!</b> Gagal membuat akun, Pastikan form terisi semua
        </div>
      <?php } else if ($this->session->flashdata('status') == 'duplicate') { ?>
        <div class="alert">
          <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
          <b>Warning!</b> Akun sudah ada
        </div>
      <?php } ?>
      <div class="header-login">
        <p>Belum punya akun?</p>
        <a id="reg-trigger" href="#">Daftar akun baru</a>
      </div>

      <?php if ($this->session->flashdata('status') == 'false') { ?>
        <div class="alert">
          <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
          <b>Peringatan!</b> Email atau password salah
        </div>
      <?php } ?>

      <div class="form-login">
        <form action="<?php echo base_url('auth/ceklogin') ?>" method="POST">
          <div class="input">
            <label for="email">Email</label>
            <input class="login-input" type="email" name="email" id="email" required />
          </div>
          <div class="input">
            <label for="password">Kata Sandi</label>
            <input class="login-input" type="password" name="password" id="password" required />
          </div>
          <button class="cursor-pointer" type="submit">MASUK</button>
        </form>
      </div>

      <div class="footer-login">
        <a href="#">Lupa kata sandi?</a>
      </div>

    </div>

    <!--daftar akun-->
    <form action="<?php echo site_url('auth/signup') ?>" method="POST" class="modal">
      <div id="register-1" class="modal-body">
        <div class="header">
          <img class="cursor-pointer" id="modal-back-1" src="<?php echo asset_url() ?>svg/arrow-left.svg" alt="back">
          <h1 class="title">Daftar Akun Baru</h1>
        </div>
        <div class="modal-content">
          <div class="input">
            <label for="orang-tua">Nama Orang Tua</label>
            <input type="text" id="orang-tua" name="nama_orangtua">
          </div>
          <div class="input">
            <label for="nik-ortu">NIK Orang Tua</label>
            <input type="number" id="nik-ortu" name="nik_orangtua">
          </div>
          <div class="input">
            <label for="tgl-lahir-ortu">Tanggal Lahir</label>
            <input type="date" id="tgl-lahir-ortu" name="tgl_orangtua">
          </div>
          <div class="input">
            <label for="email-reg">Email</label>
            <input type="email" id="email-reg" name="email_orangtua">
          </div>
          <div class="input">
            <label for="password-reg">Kata Sandi</label>
            <input type="password" id="password-reg" name="password_orangtua">
          </div>
          <button id="reg-submit-1" class="cursor-pointer" type="button">DAFTAR</button>
        </div>
      </div>

      <div id="register-2" class="modal-body">
        <div class="header">
          <img class="cursor-pointer" id="modal-back-2" src="<?php echo asset_url() ?>svg/arrow-left.svg" alt="back">
          <h1 class="title">Daftar Akun Baru</h1>
        </div>
        <div class="modal-content">
          <div class="input">
            <label for="balita">Nama Balita</label>
            <input type="text" id="balita" name="nama_balita">
          </div>
          <div class="input">
            <label for="nik-balita">NIK Balita</label>
            <input type="number" id="nik-balita" name="nik_balita">
          </div>
          <div class="input">
            <label for="tgl-lahir-balita">Tanggal Lahir</label>
            <input type="date" id="tgl-lahir-balita" name="tgl_balita">
          </div>
          <div class="input">
            <label for="jenis-kelamin">Jenis Kelamin</label>
            <select name="kelamin_balita">
              <option value="" selected disabled hidden>-- Pilih Jenis Imunisasi --</option>
              <option value="laki-laki">Laki-laki</option>
              <option value="perempuan">Perempuan</option>
            </select>
          </div>
          <button id="reg-submit-2" class="cursor-pointer" type="submit">SIMPAN</button>
        </div>
      </div>
      <div class="modal-background"></div>
    </form>

  </div>

  <script src="<?php echo asset_url() ?>js/modal.js"></script>
</body>

</html>