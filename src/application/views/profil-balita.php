<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profil Balita | E-Balita</title>
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
        <h1 class="align-self-center text-center">profil balita</h1>
        <img class="align-self-center" src="<?php echo asset_url() ?>images/logo.png">
    </nav>
    <!--nav menu-->
    <!-- <aside>
            <div class="menu-body">
                <div class="header">
                    <h1 class="mb-0">MENU</h1>
                    <img class="menu-close cursor-pointer" src="assets/svg/arbb-left.svg">
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
            <!--foto-->
            <div class="photo-profile mx-auto text-center">
                <img src="<?php echo asset_url() ?>images/Ellipse 1.png" alt="foto balita">
            </div>
            <!--data-->
            <section class="info-data ">
                <form action="<?php echo site_url('profil_balita/editprofil') ?>">
                    <div class="data-item mx-auto">
                        <label for="balita">Nama</label>
                        <input disabled type="text" id="balita" name="" value="<?php echo $balita->nama_balita ?>">
                    </div>
                    <div class="data-item mx-auto">
                        <label for="nik-balita">NIK Balita</label>
                        <input disabled type="number" id="nik-balita" name="" value="<?php echo $balita->nik_balita ?>">
                    </div>
                    <div class="data-item mx-auto">
                        <label for="tgl-lahir-balita">Tanggal Lahir</label>
                        <input disabled type="text" id="tgl-lahir-balita" value="<?php echo date_indo($balita->tgl_balita) ?>">
                    </div>
                    <div class="data-item mx-auto">
                        <label for="jenis-kelamin">Jenis Kelamin</label>
                        <select disabled name="jenis-kelamin">
                            <option value="laki-laki" <?php if ($balita->kelamin_balita == 'laki-laki') {
                                                            echo 'selected';
                                                        } ?>>Laki-laki</option>
                            <option value="perempuan" <?php if ($balita->kelamin_balita == 'perempuan') {
                                                            echo 'selected';
                                                        } ?>>Perempuan</option>
                        </select>
                    </div>
                    <button class="cursor-pointer w-50 mt-4 py-2 d-block mx-auto" type="submit">
                        Edit Profil
                    </button>
                </form>
            </section>
            <?php
            if ($bb->umur == 1) {
                if ($bb->bb_pengukuran < 3) {
                    echo "<img class='status-gizi kurang mx-auto' src='".asset_url()."svg/gizi-kurang.svg' alt='gizi kurang'";
                } else if ($bb->bb_pengukuran > 4.3) {
                    echo "<img class='status-gizi lebih mx-auto' src='".asset_url()."svg/gizi-lebih.svg' alt='gizi lebih'>";
                } else {
                    echo "<img class='status-gizi baik mx-auto' src='".asset_url()."svg/gizi-baik.svg' alt='gizi baik'>";
                }
            } else if ($bb->umur == 2) {
                if ($bb->bb_pengukuran < 3.6) {
                    echo "<img class='status-gizi kurang mx-auto' src='".asset_url()."svg/gizi-kurang.svg' alt='gizi kurang'";
                } else if ($bb->bb_pengukuran > 5.2) {
                    echo "<img class='status-gizi lebih mx-auto' src='".asset_url()."svg/gizi-lebih.svg' alt='gizi lebih'>";
                } else {
                    echo "<img class='status-gizi baik mx-auto' src='".asset_url()."svg/gizi-baik.svg' alt='gizi baik'>";
                }
            } else if ($bb->umur == 3) {
                if ($bb->bb_pengukuran < 4.2) {
                    echo "<img class='status-gizi kurang mx-auto' src='".asset_url()."svg/gizi-kurang.svg' alt='gizi kurang'";
                } else if ($bb->bb_pengukuran > 6) {
                    echo "<img class='status-gizi lebih mx-auto' src='".asset_url()."svg/gizi-lebih.svg' alt='gizi lebih'>";
                } else {
                    echo "<img class='status-gizi baik mx-auto' src='".asset_url()."svg/gizi-baik.svg' alt='gizi baik'>";
                }
            } else if ($bb->umur == 4) {
                if ($bb->bb_pengukuran < 4.7) {
                    echo "<img class='status-gizi kurang mx-auto' src='".asset_url()."svg/gizi-kurang.svg' alt='gizi kurang'";
                } else if ($bb->bb_pengukuran > 6.7) {
                    echo "<img class='status-gizi lebih mx-auto' src='".asset_url()."svg/gizi-lebih.svg' alt='gizi lebih'>";
                } else {
                    echo "<img class='status-gizi baik mx-auto' src='".asset_url()."svg/gizi-baik.svg' alt='gizi baik'>";
                }
            } else if ($bb->umur == 5) {
                if ($bb->bb_pengukuran < 5.3) {
                    echo "<img class='status-gizi kurang mx-auto' src='".asset_url()."svg/gizi-kurang.svg' alt='gizi kurang'";
                } else if ($bb->bb_pengukuran > 7.3) {
                    echo "<img class='status-gizi lebih mx-auto' src='".asset_url()."svg/gizi-lebih.svg' alt='gizi lebih'>";
                } else {
                    echo "<img class='status-gizi baik mx-auto' src='".asset_url()."svg/gizi-baik.svg' alt='gizi baik'>";
                }
            } else if ($bb->umur == 6) {
                if ($bb->bb_pengukuran < 5.8) {
                    echo "<img class='status-gizi kurang mx-auto' src='".asset_url()."svg/gizi-kurang.svg' alt='gizi kurang'";
                } else if ($bb->bb_pengukuran > 7.8) {
                    echo "<img class='status-gizi lebih mx-auto' src='".asset_url()."svg/gizi-lebih.svg' alt='gizi lebih'>";
                } else {
                    echo "<img class='status-gizi baik mx-auto' src='".asset_url()."svg/gizi-baik.svg' alt='gizi baik'>";
                }
            } else if ($bb->umur == 7) {
                if ($bb->bb_pengukuran < 6.2) {
                    echo "<img class='status-gizi kurang mx-auto' src='".asset_url()."svg/gizi-kurang.svg' alt='gizi kurang'";
                } else if ($bb->bb_pengukuran > 8.3) {
                    echo "<img class='status-gizi lebih mx-auto' src='".asset_url()."svg/gizi-lebih.svg' alt='gizi lebih'>";
                } else {
                    echo "<img class='status-gizi baik mx-auto' src='".asset_url()."svg/gizi-baik.svg' alt='gizi baik'>";
                }
            } else if ($bb->umur == 8) {
                if ($bb->bb_pengukuran < 6.6) {
                    echo "<img class='status-gizi kurang mx-auto' src='".asset_url()."svg/gizi-kurang.svg' alt='gizi kurang'";
                } else if ($bb->bb_pengukuran > 8.8) {
                    echo "<img class='status-gizi lebih mx-auto' src='".asset_url()."svg/gizi-lebih.svg' alt='gizi lebih'>";
                } else {
                    echo "<img class='status-gizi baik mx-auto' src='".asset_url()."svg/gizi-baik.svg' alt='gizi baik'>";
                }
            } else if ($bb->umur == 9) {
                if ($bb->bb_pengukuran < 7) {
                    echo "<img class='status-gizi kurang mx-auto' src='".asset_url()."svg/gizi-kurang.svg' alt='gizi kurang'";
                } else if ($bb->bb_pengukuran > 9.2) {
                    echo "<img class='status-gizi lebih mx-auto' src='".asset_url()."svg/gizi-lebih.svg' alt='gizi lebih'>";
                } else {
                    echo "<img class='status-gizi baik mx-auto' src='".asset_url()."svg/gizi-baik.svg' alt='gizi baik'>";
                }
            } else if ($bb->umur == 10) {
                if ($bb->bb_pengukuran < 7.3) {
                    echo "<img class='status-gizi kurang mx-auto' src='".asset_url()."svg/gizi-kurang.svg' alt='gizi kurang'";
                } else if ($bb->bb_pengukuran > 9.5) {
                    echo "<img class='status-gizi lebih mx-auto' src='".asset_url()."svg/gizi-lebih.svg' alt='gizi lebih'>";
                } else {
                    echo "<img class='status-gizi baik mx-auto' src='".asset_url()."svg/gizi-baik.svg' alt='gizi baik'>";
                }
            } else if ($bb->umur == 11) {
                if ($bb->bb_pengukuran < 7.6) {
                    echo "<img class='status-gizi kurang mx-auto' src='".asset_url()."svg/gizi-kurang.svg' alt='gizi kurang'";
                } else if ($bb->bb_pengukuran > 9.9) {
                    echo "<img class='status-gizi lebih mx-auto' src='".asset_url()."svg/gizi-lebih.svg' alt='gizi lebih'>";
                } else {
                    echo "<img class='status-gizi baik mx-auto' src='".asset_url()."svg/gizi-baik.svg' alt='gizi baik'>";
                }
            } else if ($bb->umur == 12) {
                if ($bb->bb_pengukuran < 7.8) {
                    echo "<img class='status-gizi kurang mx-auto' src='".asset_url()."svg/gizi-kurang.svg' alt='gizi kurang'";
                } else if ($bb->bb_pengukuran > 10.2) {
                    echo "<img class='status-gizi lebih mx-auto' src='".asset_url()."svg/gizi-lebih.svg' alt='gizi lebih'>";
                } else {
                    echo "<img class='status-gizi baik mx-auto' src='".asset_url()."svg/gizi-baik.svg' alt='gizi baik'>";
                }
            } else if ($bb->umur > 12 && $bb->umur <= 15) {
                if ($bb->bb_pengukuran < 8.4) {
                    echo "<img class='status-gizi kurang mx-auto' src='".asset_url()."svg/gizi-kurang.svg' alt='gizi kurang'";
                } else if ($bb->bb_pengukuran > 10.9) {
                    echo "<img class='status-gizi lebih mx-auto' src='".asset_url()."svg/gizi-lebih.svg' alt='gizi lebih'>";
                } else {
                    echo "<img class='status-gizi baik mx-auto' src='".asset_url()."svg/gizi-baik.svg' alt='gizi baik'>";
                }
            } else if ($bb->umur > 15 && $bb->umur <= 18) {
                if ($bb->bb_pengukuran < 8.9) {
                    echo "<img class='status-gizi kurang mx-auto' src='".asset_url()."svg/gizi-kurang.svg' alt='gizi kurang'";
                } else if ($bb->bb_pengukuran > 11.5) {
                    echo "<img class='status-gizi lebih mx-auto' src='".asset_url()."svg/gizi-lebih.svg' alt='gizi lebih'>";
                } else {
                    echo "<img class='status-gizi baik mx-auto' src='".asset_url()."svg/gizi-baik.svg' alt='gizi baik'>";
                }
            } else if ($bb->umur > 18 && $bb->umur <= 24) {
                if ($bb->bb_pengukuran < 9.9) {
                    echo "<img class='status-gizi kurang mx-auto' src='".asset_url()."svg/gizi-kurang.svg' alt='gizi kurang'";
                } else if ($bb->bb_pengukuran > 12.3) {
                    echo "<img class='status-gizi lebih mx-auto' src='".asset_url()."svg/gizi-lebih.svg' alt='gizi lebih'>";
                } else {
                    echo "<img class='status-gizi baik mx-auto' src='".asset_url()."svg/gizi-baik.svg' alt='gizi baik'>";
                }
            } else if ($bb->umur > 24 && $bb->umur <= 30) {
                if ($bb->bb_pengukuran < 10.8) {
                    echo "<img class='status-gizi kurang mx-auto' src='".asset_url()."svg/gizi-kurang.svg' alt='gizi kurang'";
                } else if ($bb->bb_pengukuran > 13.5) {
                    echo "<img class='status-gizi lebih mx-auto' src='".asset_url()."svg/gizi-lebih.svg' alt='gizi lebih'>";
                } else {
                    echo "<img class='status-gizi baik mx-auto' src='".asset_url()."svg/gizi-baik.svg' alt='gizi baik'>";
                }
            } else if ($bb->umur > 30 && $bb->umur <= 36) {
                if ($bb->bb_pengukuran < 11.7) {
                    echo "<img class='status-gizi kurang mx-auto' src='".asset_url()."svg/gizi-kurang.svg' alt='gizi kurang'";
                } else if ($bb->bb_pengukuran > 14.6) {
                    echo "<img class='status-gizi lebih mx-auto' src='".asset_url()."svg/gizi-lebih.svg' alt='gizi lebih'>";
                } else {
                    echo "<img class='status-gizi baik mx-auto' src='".asset_url()."svg/gizi-baik.svg' alt='gizi baik'>";
                }
            } else {
                echo '-';
            }
            ?>
            <!-- <img class="status-gizi baik mx-auto" src="<?php echo asset_url() ?>svg/gizi-baik.svg" alt="gizi baik">
            <img class="status-gizi kurang mx-auto d-none" src="<?php echo asset_url() ?>svg/gizi-kurang.svg" alt="gizi kurang">
            <img class="status-gizi lebih mx-auto d-none" src="<?php echo asset_url() ?>svg/gizi-lebih.svg" alt="gizi lebih"> -->
            <br>
        </div>
    </main>

    <script src="<?php echo asset_url() ?>js/main.js"></script>
</body>

</html>