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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/gsap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body>
    <!--navbar-->
    <nav class="justify-content-between ">
        <a class="align-self-center back-btn" href="<?php echo site_url('profil_orangtua') ?>"><img class="cursor-pointer" src="<?php echo asset_url() ?>svg/arrow-left.svg"></a>
        <h1 class="align-self-center text-center">edit profil orang tua</h1>
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
            <!--data-->
            <section class="info-data ">
                <form action="<?php echo site_url('profil_orangtua/simpanprofil') ?>" method="POST">
                    <div class="data-item mx-auto">
                        <label for="orang-tua">Nama Orang Tua</label>
                        <input type="text" id="orang-tua" name="nama_orangtua" value="<?php echo $orangtua->nama_orangtua ?>" required>
                    </div>
                    <div class="data-item mx-auto">
                        <label for="nik-ortu">NIK Orang Tua</label>
                        <input type="number" id="nik-ortu" name="nik_orangtua" value="<?php echo $orangtua->nik_orangtua ?>" required>
                    </div>
                    <div class="data-item mx-auto">
                        <label for="tgl-lahir-ortu">Tanggal Lahir</label>
                        <input type="date" id="tgl-lahir-ortu" name="tgl_orangtua" value="<?php echo $orangtua->tgl_orangtua ?>" required>
                    </div>
                    <div class="data-item mx-auto">
                        <label for="email-reg">Email</label>
                        <input type="email" id="email-reg" name="email_orangtua" value="<?php echo $orangtua->email_orangtua ?>" required>
                    </div>
                    <button class="cursor-pointer w-50 mt-4 py-2 d-block mx-auto" type="submit">
                        Simpan
                    </button>
                </form>
            </section>
        </div>
    </main>

    <script src="<?php echo asset_url() ?>js/main.js"></script>
</body>

</html>