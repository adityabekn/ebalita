<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Imunisasi | E-Balita</title>
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
        <h1 class="align-self-center text-center">imunisasi</h1>
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
                    <b>Success!</b> Berhasil memasukkan imunisasi
                </div>
            <?php } else if ($this->session->flashdata('status') == 'false') { ?>
                <div class="alert" style="background-color: #F66359;">
                    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                    <b>Error!</b> Gagal memasukkan imunisasi
                </div>
            <?php } ?>
            <!--data-->
            <section class="info-data ">
                <form action="<?php echo site_url('imunisasi/input_imunisasi') ?>" method="POST">
                    <div class="data-item mx-auto mb-4">
                        <label for="tgl-imun">Tanggal Imunisasi</label>
                        <input type="date" id="tgl-imun" name="tgl_imunisasi" required>
                    </div>
                    <div class="data-item mx-auto mb-4">
                        <label for="jenis-imun">Jenis Imunisasi</label>
                        <select name="jenis_imunisasi" id='jenis-imunisasi' required>
                            <option value="" selected disabled hidden>-- Pilih Jenis Imunisasi --</option>
                            <option value="Hepatitis B">Hepatitis B</option>
                            <option value="Polio">Polio</option>
                            <option value="BCG">BCG</option>
                            <option value="DTP">DTP</option>
                            <option value="Pneumokokus">Pneumokokus</option>
                            <option value="Rotavirus">Rotavirus</option>
                            <option value="Influenza">Influenza</option>
                            <option value="Campak">Campak</option>
                            <option value="MMR/MR">MMR/MR</option>
                            <option value="Varisela">Varisela</option>
                            <option value="HPV">HPV</option>
                            <option value="JE">JE</option>
                            <option value="Dengue">Dengue</option>
                        </select>
                    </div>
                    <button class="cursor-pointer w-50 mt-4 py-2 d-block mx-auto" type="submit">SIMPAN</button>
                </form>
                <button class="toggle-trigger secondary-btn cursor-pointer w-50 mt-2 py-2 d-block mx-auto">LIHAT DATA IMUNISASI</button>
            </section>
            <!--data imunisasi-->
            <section class="data-table mt-5 table-responsive hide-section">
                <table class="mx-auto table">
                    <thead>
                        <tr>
                            <th>nama</th>
                            <th>tanggal</th>
                            <th>jenis imunisasi</th>
                            <th>status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($imunisasi as $row) { ?>
                            <tr>
                                <td><?php echo $row->nama_balita ?></td>
                                <td>
                                    <?php
                                    if (isset($row->tgl_imunisasi)) {
                                        echo date_indo($row->tgl_imunisasi);
                                    } else {
                                        echo '-';
                                    }
                                    ?>
                                </td>
                                <td><?php echo $row->jenis_imunisasi ?></td>
                                <td><?php echo $row->status_imunisasi ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </section>
        </div>
    </main>

    <script src="<?php echo asset_url() ?>js/main.js"></script>
</body>

</html>