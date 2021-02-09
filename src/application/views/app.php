<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Beranda | E-Balita</title>
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
    <nav>
        <img class="ham cursor-pointer" src="<?php echo asset_url() ?>svg/ham-toggle.svg">
        <img class="nav-content-center" src="<?php echo asset_url() ?>images/logo.png">
    </nav>
    <!--nav menu-->
    <aside>
        <div class="menu-body">
            <div class="header">
                <h1 class="mb-0">MENU</h1>
                <img class="menu-close cursor-pointer" src="<?php echo asset_url() ?>svg/arrow-left.svg">
            </div>
            <div class="menu-content">
                <ul class="list-unstyled">
                    <a href="<?php echo site_url('app/pengaturan') ?>">
                        <li><i class="fas fa-cog"></i>Pengaturan</li>
                    </a>
                    <a href="<?php echo site_url('app/tentang') ?>">
                        <li><i class="fas fa-info-circle"></i>Tentang</li>
                    </a>
                    <a href="<?php echo site_url('app/bantuan') ?>">
                        <li><i class="far fa-question-circle"></i>Bantuan</li>
                    </a>
                    <a href="<?php echo site_url('auth/logout') ?>">
                        <li><i class="fas fa-sign-out-alt"></i>Keluar</li>
                    </a>
                </ul>
            </div>
        </div>
        <div class="menu-background"></div>
    </aside>
    <!--main content-->
    <main>
        <div class="container">
            <div class="grid-container">
                <div>
                    <a href="<?php echo site_url('profil_balita') ?>">
                        <div class="fitur fitur-1">
                            <img src="<?php echo asset_url() ?>images/Mask Group.png" alt="profil balita">
                        </div>
                        <h2>profil balita</h2>
                    </a>
                </div>
                <div>
                    <a href="<?php echo site_url('profil_orangtua') ?>">
                        <div class="fitur fitur-2">
                            <img src="<?php echo asset_url() ?>images/Group 17.png" alt="profil orangtua">
                        </div>
                        <h2>profil orangtua</h2>
                    </a>
                </div>
                <div>
                    <a href="<?php echo site_url('pengukuran') ?>">
                        <div class="fitur fitur-3">
                            <img src="<?php echo asset_url() ?>images/weight-scale 1.png" alt="pengukuran">
                        </div>
                        <h2>pengukuran</h2>
                    </a>
                </div>
                <div>
                    <a href="<?php echo site_url('pertumbuhan') ?>">
                        <div class="fitur fitur-4">
                            <img src="<?php echo asset_url() ?>images/stats 1.png" alt="pertumbuhan">
                        </div>
                        <h2>pertumbuhan</h2>
                    </a>
                </div>
                <div>
                    <a href="<?php echo site_url('imunisasi') ?>">
                        <div class="fitur fitur-5">
                            <img src="<?php echo asset_url() ?>images/syringe 1.png" alt="imunisasi">
                        </div>
                        <h2>imunisasi</h2>
                    </a>
                </div>
                <div>
                    <a href="<?php echo site_url('info_sehat') ?>">
                        <div class="fitur fitur-6">
                            <img src="<?php echo asset_url() ?>images/baby-food 1.png" alt="info sehat">
                        </div>
                        <h2>info sehat</h2>
                    </a>
                </div>
            </div>
        </div>
    </main>

    <script src="<?php echo asset_url() ?>js/main.js"></script>
</body>

</html>