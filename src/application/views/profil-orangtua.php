<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profil Orang Tua | E-Balita</title>
    <link rel="icon" href="<?php echo asset_url() ?>images/logo.png" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.0/css/mdb.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

    <link rel="stylesheet" href="<?php echo asset_url() ?>css/main.css" />
    <link rel="stylesheet" href="<?php echo asset_url() ?>css/alert.css" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/gsap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body>
    <!--navbar-->
    <nav class="justify-content-between ">
        <a class="align-self-center back-btn" href="<?php echo site_url('app') ?>"><img class="cursor-pointer" src="<?php echo asset_url() ?>svg/arrow-left.svg"></a>
        <h1 class="align-self-center text-center">profil orang tua</h1>
        <img class="align-self-center" src="<?php echo asset_url() ?>images/logo.png">
    </nav>
    <!--nav menu-->
    <!-- <aside>
            <div class="menu-body">
                <div class="header">
                    <h1 class="mb-0">MENU</h1>
                    <img class="menu-close cursor-pointer" src="assets/svg/arrow-left.svg">
                </div>
                <div class="menu-content">
                    <ul class="list-unstyled">
                        <a href="#"><li><i class="fas fa-cog"></i>Pengaturan</li></a>
                        <a href="#"><li><i class="fas fa-info-circle"></i>Tentang</li></a>
                        <a href="#"><li><i class="far fa-question-circle"></i>Bantuan</li></a>
                        <a href="index.html"><li><i class="fas fa-sign-out-alt"></i>Keluar</li></a>
                    </ul>
                </div>
            </div>
            <div class="menu-background"></div>
        </aside> -->

    <!--main content-->
    <main>
        <div class="container">
            <?php if ($this->session->flashdata('status') == 'true') { ?>
                <div class="alert" style="background-color: #6BBD6E;">
                    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                    <b>Success!</b> Berhasil mengedit profil balita
                </div>
            <?php } ?>
            <?php if ($this->session->flashdata('status') == 'false') { ?>
                <div class="alert" style="background-color: #F66359;">
                    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                    <b>Error!</b> Gagal mengedit profil balita
                </div>
            <?php } ?>
            <?php if ($this->session->flashdata('status') == 'duplicate') { ?>
                <div class="alert">
                    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                    <b>Warning!</b> Email yang ingin diupdate sudah digunakan akun lain
                </div>
            <?php } ?>
            <!--foto-->
            <div class="photo-profile mx-auto text-center">
                <img src="<?php echo asset_url() ?>images/Ellipse 1 (1).png" alt="foto balita">
            </div>
            <!--data-->
            <section class="info-data ">
                <form action="<?php echo site_url('profil_orangtua/editprofil') ?>">
                    <div class="data-item mx-auto">
                        <label for="orang-tua">Nama Orang Tua</label>
                        <input disabled type="text" id="orang-tua" name="" value="<?php echo $orangtua->nama_orangtua ?>">
                    </div>
                    <div class="data-item mx-auto">
                        <label for="nik-ortu">NIK Orang Tua</label>
                        <input disabled type="number" id="nik-ortu" name="" value="<?php echo $orangtua->nik_orangtua ?>">
                    </div>
                    <div class="data-item mx-auto">
                        <label for="tgl-lahir-ortu">Tanggal Lahir</label>
                        <input disabled type="text" id="tgl-lahir-ortu" value="<?php echo date_indo($orangtua->tgl_orangtua) ?>">
                    </div>
                    <div class="data-item mx-auto">
                        <label for="email-reg">Email</label>
                        <input disabled type="email" id="email-reg" value="<?php echo $orangtua->email_orangtua ?>">
                    </div>
                    <button class="cursor-pointer w-50 mt-4 py-2 d-block mx-auto" type="submit">
                        Edit Profil
                    </button>
                </form>
            </section>
        </div>
    </main>

    <script src="<?php echo asset_url() ?>js/main.js"></script>
</body>

</html>