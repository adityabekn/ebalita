<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tinggi Badan | E-Balita</title>
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
        <a class="align-self-center back-btn" href="<?php echo site_url('pertumbuhan') ?>"><img class="cursor-pointer" src="<?php echo asset_url() ?>svg/arrow-left.svg"></a>
        <h1 class="align-self-center text-center">tinggi badan</h1>
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
            <div class="section-title">
                <h1>data pertumbuhan tinggi badan</h1>
            </div>
            <section class="data-table mt-5 table-responsive">
                <table class="mx-auto table">
                    <thead>
                        <tr>
                            <th>TB (cm)</th>
                            <th>tanggal</th>
                            <th>umur (bulan)</th>
                            <th>status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($tb as $row) { ?>
                            <tr>
                                <td><?php echo $row->tb_pengukuran ?></td>
                                <td><?php echo date_indo($row->tgl_pengukuran) ?></td>
                                <td>
                                    <?php
                                    if (is_float($row->umur / 12)) {
                                        $years = floor($row->umur / 12) . ' Tahun';
                                        if ($years == 0) {
                                            $years = '';
                                        }
                                    } else {
                                        $years = '';
                                    }
                                    if ($row->hari > 30) {
                                        $months = ' ' . ($row->umur % 12) . ' Bulan';
                                        if ($months == 0) {
                                            $months = '';
                                        }
                                        $day = '';
                                    } else {
                                        $day = ' ' . $row->hari . ' Hari';
                                        $months = '';
                                    }

                                    $display = $years . '' . $months . '' . $day;
                                    echo $display;
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if ($row->umur == 0 and $row->tb_pengukuran == null) {
                                        echo 'Pendaftaran';
                                    } else if ($row->tb_pengukuran == 0) {
                                        echo '-';
                                    } else if ($row->hari > 0 or $row->umur == 1) {
                                        if ($row->tb_pengukuran < 49.8) {
                                            echo "Kecil";
                                        } else if ($row->tb_pengukuran > 54.3) {
                                            echo "Besar";
                                        } else {
                                            echo "Normal";
                                        }
                                    } else if ($row->umur == 2) {
                                        if ($row->tb_pengukuran < 52.8) {
                                            echo "Kecil";
                                        } else if ($row->tb_pengukuran > 58.1) {
                                            echo "Besar";
                                        } else {
                                            echo "Normal";
                                        }
                                    } else if ($row->umur == 3) {
                                        if ($row->tb_pengukuran < 55.5) {
                                            echo "Kecil";
                                        } else if ($row->tb_pengukuran > 61.1) {
                                            echo "Besar";
                                        } else {
                                            echo "Normal";
                                        }
                                    } else if ($row->umur == 4) {
                                        if ($row->tb_pengukuran < 57.8) {
                                            echo "Kecil";
                                        } else if ($row->tb_pengukuran > 63.7) {
                                            echo "Besar";
                                        } else {
                                            echo "Normal";
                                        }
                                    } else if ($row->umur == 5) {
                                        if ($row->tb_pengukuran < 59.8) {
                                            echo "Kecil";
                                        } else if ($row->tb_pengukuran > 65.9) {
                                            echo "Besar";
                                        } else {
                                            echo "Normal";
                                        }
                                    } else if ($row->umur == 6) {
                                        if ($row->tb_pengukuran < 61.6) {
                                            echo "Kecil";
                                        } else if ($row->tb_pengukuran > 67.8) {
                                            echo "Besar";
                                        } else {
                                            echo "Normal";
                                        }
                                    } else if ($row->umur == 7) {
                                        if ($row->tb_pengukuran < 63.2) {
                                            echo "Kecil";
                                        } else if ($row->tb_pengukuran > 69.5) {
                                            echo "Besar";
                                        } else {
                                            echo "Normal";
                                        }
                                    } else if ($row->umur == 8) {
                                        if ($row->tb_pengukuran < 64.6) {
                                            echo "Kecil";
                                        } else if ($row->tb_pengukuran > 71) {
                                            echo "Besar";
                                        } else {
                                            echo "Normal";
                                        }
                                    } else if ($row->umur == 9) {
                                        if ($row->tb_pengukuran < 66) {
                                            echo "Kecil";
                                        } else if ($row->tb_pengukuran > 72.3) {
                                            echo "Besar";
                                        } else {
                                            echo "Normal";
                                        }
                                    } else if ($row->umur == 10) {
                                        if ($row->tb_pengukuran < 67.2) {
                                            echo "Kecil";
                                        } else if ($row->tb_pengukuran > 73.6) {
                                            echo "Besar";
                                        } else {
                                            echo "Normal";
                                        }
                                    } else if ($row->umur == 11) {
                                        if ($row->tb_pengukuran < 68.5) {
                                            echo "Kecil";
                                        } else if ($row->tb_pengukuran > 74.9) {
                                            echo "Besar";
                                        } else {
                                            echo "Normal";
                                        }
                                    } else if ($row->umur == 12) {
                                        if ($row->tb_pengukuran < 69.6) {
                                            echo "Kecil";
                                        } else if ($row->tb_pengukuran > 76.1) {
                                            echo "Besar";
                                        } else {
                                            echo "Normal";
                                        }
                                    } else if ($row->umur > 12 && $row->umur <= 15) {
                                        if ($row->tb_pengukuran < 72.9) {
                                            echo "Kecil";
                                        } else if ($row->tb_pengukuran > 79.4) {
                                            echo "Besar";
                                        } else {
                                            echo "Normal";
                                        }
                                    } else if ($row->umur > 15 && $row->umur <= 18) {
                                        if ($row->tb_pengukuran < 75.9) {
                                            echo "Kecil";
                                        } else if ($row->tb_pengukuran > 82.4) {
                                            echo "Besar";
                                        } else {
                                            echo "Normal";
                                        }
                                    } else if ($row->umur > 18 && $row->umur <= 24) {
                                        if ($row->tb_pengukuran < 79.2) {
                                            echo "Kecil";
                                        } else if ($row->tb_pengukuran > 85.6) {
                                            echo "Besar";
                                        } else {
                                            echo "Normal";
                                        }
                                    } else if ($row->umur > 24 && $row->umur <= 30) {
                                        if ($row->tb_pengukuran < 83.7) {
                                            echo "Kecil";
                                        } else if ($row->tb_pengukuran > 90.4) {
                                            echo "Besar";
                                        } else {
                                            echo "Normal";
                                        }
                                    } else if ($row->umur > 30 && $row->umur <= 36) {
                                        if ($row->tb_pengukuran < 87.8) {
                                            echo "Kecil";
                                        } else if ($row->tb_pengukuran > 94.9) {
                                            echo "Besar";
                                        } else {
                                            echo "Normal";
                                        }
                                    } else {
                                        echo '-';
                                    }
                                    ?>
                                </td>
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