<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Berat Badan | E-Balita</title>
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
        <h1 class="align-self-center text-center">berat badan</h1>
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
                <h1>data pertumbuhan berat badan</h1>
            </div>
            <section class="data-table mt-5 table-responsive">
                <table class="mx-auto table">
                    <thead>
                        <tr>
                            <th>BB (kg)</th>
                            <th>tanggal</th>
                            <th>umur (bulan)</th>
                            <th>status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($bb as $row) {
                        ?>
                            <tr>
                                <td><?php echo $row->bb_pengukuran ?></td>
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
                                    if ($row->hari == 0 and $row->bb_pengukuran == null) {
                                        echo 'Pendaftaran';
                                    } else if ($row->bb_pengukuran == 0) {
                                        echo '-';
                                    } else if ($row->hari > 0 or $row->umur == 1) {
                                        if ($row->bb_pengukuran < 3) {
                                            echo "Kecil";
                                        } else if ($row->bb_pengukuran > 4.3) {
                                            echo "Besar";
                                        } else {
                                            echo "Normal";
                                        }
                                    } else if ($row->umur == 2) {
                                        if ($row->bb_pengukuran < 3.6) {
                                            echo "Kecil";
                                        } else if ($row->bb_pengukuran > 5.2) {
                                            echo "Besar";
                                        } else {
                                            echo "Normal";
                                        }
                                    } else if ($row->umur == 3) {
                                        if ($row->bb_pengukuran < 4.2) {
                                            echo "Kecil";
                                        } else if ($row->bb_pengukuran > 6) {
                                            echo "Besar";
                                        } else {
                                            echo "Normal";
                                        }
                                    } else if ($row->umur == 4) {
                                        if ($row->bb_pengukuran < 4.7) {
                                            echo "Kecil";
                                        } else if ($row->bb_pengukuran > 6.7) {
                                            echo "Besar";
                                        } else {
                                            echo "Normal";
                                        }
                                    } else if ($row->umur == 5) {
                                        if ($row->bb_pengukuran < 5.3) {
                                            echo "Kecil";
                                        } else if ($row->bb_pengukuran > 7.3) {
                                            echo "Besar";
                                        } else {
                                            echo "Normal";
                                        }
                                    } else if ($row->umur == 6) {
                                        if ($row->bb_pengukuran < 5.8) {
                                            echo "Kecil";
                                        } else if ($row->bb_pengukuran > 7.8) {
                                            echo "Besar";
                                        } else {
                                            echo "Normal";
                                        }
                                    } else if ($row->umur == 7) {
                                        if ($row->bb_pengukuran < 6.2) {
                                            echo "Kecil";
                                        } else if ($row->bb_pengukuran > 8.3) {
                                            echo "Besar";
                                        } else {
                                            echo "Normal";
                                        }
                                    } else if ($row->umur == 8) {
                                        if ($row->bb_pengukuran < 6.6) {
                                            echo "Kecil";
                                        } else if ($row->bb_pengukuran > 8.8) {
                                            echo "Besar";
                                        } else {
                                            echo "Normal";
                                        }
                                    } else if ($row->umur == 9) {
                                        if ($row->bb_pengukuran < 7) {
                                            echo "Kecil";
                                        } else if ($row->bb_pengukuran > 9.2) {
                                            echo "Besar";
                                        } else {
                                            echo "Normal";
                                        }
                                    } else if ($row->umur == 10) {
                                        if ($row->bb_pengukuran < 7.3) {
                                            echo "Kecil";
                                        } else if ($row->bb_pengukuran > 9.5) {
                                            echo "Besar";
                                        } else {
                                            echo "Normal";
                                        }
                                    } else if ($row->umur == 11) {
                                        if ($row->bb_pengukuran < 7.6) {
                                            echo "Kecil";
                                        } else if ($row->bb_pengukuran > 9.9) {
                                            echo "Besar";
                                        } else {
                                            echo "Normal";
                                        }
                                    } else if ($row->umur == 12) {
                                        if ($row->bb_pengukuran < 7.8) {
                                            echo "Kecil";
                                        } else if ($row->bb_pengukuran > 10.2) {
                                            echo "Besar";
                                        } else {
                                            echo "Normal";
                                        }
                                    } else if ($row->umur > 12 && $row->umur <= 15) {
                                        if ($row->bb_pengukuran < 8.4) {
                                            echo "Kecil";
                                        } else if ($row->bb_pengukuran > 10.9) {
                                            echo "Besar";
                                        } else {
                                            echo "Normal";
                                        }
                                    } else if ($row->umur > 15 && $row->umur <= 18) {
                                        if ($row->bb_pengukuran < 8.9) {
                                            echo "Kecil";
                                        } else if ($row->bb_pengukuran > 11.5) {
                                            echo "Besar";
                                        } else {
                                            echo "Normal";
                                        }
                                    } else if ($row->umur > 18 && $row->umur <= 24) {
                                        if ($row->bb_pengukuran < 9.9) {
                                            echo "Kecil";
                                        } else if ($row->bb_pengukuran > 12.3) {
                                            echo "Besar";
                                        } else {
                                            echo "Normal";
                                        }
                                    } else if ($row->umur > 24 && $row->umur <= 30) {
                                        if ($row->bb_pengukuran < 10.8) {
                                            echo "Kecil";
                                        } else if ($row->bb_pengukuran > 13.5) {
                                            echo "Besar";
                                        } else {
                                            echo "Normal";
                                        }
                                    } else if ($row->umur > 30 && $row->umur <= 36) {
                                        if ($row->bb_pengukuran < 11.7) {
                                            echo "Kecil";
                                        } else if ($row->bb_pengukuran > 14.6) {
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