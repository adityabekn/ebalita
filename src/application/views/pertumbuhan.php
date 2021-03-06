<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pertumbuhan | E-Balita</title>
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
        <a class="align-self-center back-btn" href="<?php echo site_url('app') ?>"><img class="cursor-pointer" src="<?php echo asset_url() ?>svg/arrow-left.svg"></a>
        <h1 class="align-self-center text-center">pertumbuhan</h1>
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

            <div class="grid-container square-menu">
                <div>
                    <a href="<?php echo site_url('pertumbuhan/berat_badan') ?>">
                        <div class="fitur measure measure-1">
                            <img src="<?php echo asset_url() ?>images/Group 38.png" alt="berat badan">
                        </div>
                        <h2>berat badan</h2>
                    </a>
                </div>
                <div>
                    <a href="<?php echo site_url('pertumbuhan/tinggi_badan') ?>">
                        <div class="fitur measure measure-2">
                            <img src="<?php echo asset_url() ?>images/Group 39.png" alt="tinggi badan">
                        </div>
                        <h2>tinggi badan</h2>
                    </a>
                </div>
                <div>
                    <a href="<?php echo site_url('pertumbuhan/lingkar_kepala') ?>">
                        <div class="fitur measure measure-3">
                            <img src="<?php echo asset_url() ?>images/Group 40.png" alt="lingkar kepala">
                        </div>
                        <h2>lingkar kepala</h2>
                    </a>
                </div>
                <div>
                    <a href="<?php echo site_url('pertumbuhan/lingkar_lengan') ?>">
                        <div class="fitur measure measure-4">
                            <img src="<?php echo asset_url() ?>images/Group 41.png" alt="lingkar lengan atas">
                        </div>
                        <h2>lingkar lengan atas</h2>
                    </a>
                </div>
            </div>

        </div>
    </main>

    <script src="<?php echo asset_url() ?>js/main.js"></script>
</body>

</html>