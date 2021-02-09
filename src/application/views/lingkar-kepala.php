<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lingkar Kepala | E-Balita</title>
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
        <h1 class="align-self-center text-center">lingkar kepala</h1>
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
                <h1>data pertumbuhan lingkar kepala</h1>
            </div>
            <section class="data-table mt-5 table-responsive">
                <table class="mx-auto table">
                    <thead>
                        <tr>
                            <th>LK (cm)</th>
                            <th>tanggal</th>
                            <th>umur (bulan)</th>
                            <th>status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($lk as $row) { ?>
                            <tr>
                                <td><?php echo $row->lk_pengukuran ?></td>
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
                                    if ($row->hari == 0 and $row->lk_pengukuran == null) {
                                        echo 'Pendaftaran';
                                    } else if ($row->lk_pengukuran == 0) {
                                        echo '-';
                                    } else  if ($row->umur == 0 and !empty($row->lk_pengukuran)) {
                                        if ($row->kelamin_balita == 'laki-laki') {
                                            if ($row->lk_pengukuran < 33.1) {
                                                echo "Kecil";
                                            } else if ($row->lk_pengukuran > 35.8) {
                                                echo "Besar";
                                            } else {
                                                echo "Normal";
                                            }
                                        } else {
                                            if ($row->lk_pengukuran < 32.7) {
                                                echo "Kecil";
                                            } else if ($row->lk_pengukuran > 35.1) {
                                                echo "Besar";
                                            } else {
                                                echo "Normal";
                                            }
                                        }
                                    } else if ($row->umur == 1) {
                                        if ($row->kelamin_balita == 'laki-laki') {
                                            if ($row->lk_pengukuran < 36.1) {
                                                echo "Kecil";
                                            } else if ($row->lk_pengukuran > 38.5) {
                                                echo "Besar";
                                            } else {
                                                echo "Normal";
                                            }
                                        } else {
                                            if ($row->lk_pengukuran < 35.3) {
                                                echo "Kecil";
                                            } else if ($row->lk_pengukuran > 37.8) {
                                                echo "Besar";
                                            } else {
                                                echo "Normal";
                                            }
                                        }
                                    } else if ($row->umur == 2) {
                                        if ($row->kelamin_balita == 'laki-laki') {
                                            if ($row->lk_pengukuran < 37.9) {
                                                echo "Kecil";
                                            } else if ($row->lk_pengukuran > 40.3) {
                                                echo "Besar";
                                            } else {
                                                echo "Normal";
                                            }
                                        } else {
                                            if ($row->lk_pengukuran < 37) {
                                                echo "Kecil";
                                            } else if ($row->lk_pengukuran > 39.5) {
                                                echo "Besar";
                                            } else {
                                                echo "Normal";
                                            }
                                        }
                                    } else if ($row->umur == 3) {
                                        if ($row->kelamin_balita == 'laki-laki') {
                                            if ($row->lk_pengukuran < 39.3) {
                                                echo "Kecil";
                                            } else if ($row->lk_pengukuran > 41.7) {
                                                echo "Besar";
                                            } else {
                                                echo "Normal";
                                            }
                                        } else {
                                            if ($row->lk_pengukuran < 38.2) {
                                                echo "Kecil";
                                            } else if ($row->lk_pengukuran > 40.8) {
                                                echo "Besar";
                                            } else {
                                                echo "Normal";
                                            }
                                        }
                                    } else if ($row->umur == 4) {
                                        if ($row->kelamin_balita == 'laki-laki') {
                                            if ($row->lk_pengukuran < 40.4) {
                                                echo "Kecil";
                                            } else if ($row->lk_pengukuran > 42.9) {
                                                echo "Besar";
                                            } else {
                                                echo "Normal";
                                            }
                                        } else {
                                            if ($row->lk_pengukuran < 39.3) {
                                                echo "Kecil";
                                            } else if ($row->lk_pengukuran > 41.9) {
                                                echo "Besar";
                                            } else {
                                                echo "Normal";
                                            }
                                        }
                                    } else if ($row->umur == 5) {
                                        if ($row->kelamin_balita == 'laki-laki') {
                                            if ($row->lk_pengukuran < 41.3) {
                                                echo "Kecil";
                                            } else if ($row->lk_pengukuran > 43.8) {
                                                echo "Besar";
                                            } else {
                                                echo "Normal";
                                            }
                                        } else {
                                            if ($row->lk_pengukuran < 40.1) {
                                                echo "Kecil";
                                            } else if ($row->lk_pengukuran > 42.8) {
                                                echo "Besar";
                                            } else {
                                                echo "Normal";
                                            }
                                        }
                                    } else if ($row->umur == 6) {
                                        if ($row->kelamin_balita == 'laki-laki') {
                                            if ($row->lk_pengukuran < 42.1) {
                                                echo "Kecil";
                                            } else if ($row->lk_pengukuran > 44.6) {
                                                echo "Besar";
                                            } else {
                                                echo "Normal";
                                            }
                                        } else {
                                            if ($row->lk_pengukuran < 40.8) {
                                                echo "Kecil";
                                            } else if ($row->lk_pengukuran > 43.5) {
                                                echo "Besar";
                                            } else {
                                                echo "Normal";
                                            }
                                        }
                                    } else if ($row->umur == 7) {
                                        if ($row->kelamin_balita == 'laki-laki') {
                                            if ($row->lk_pengukuran < 42.7) {
                                                echo "Kecil";
                                            } else if ($row->lk_pengukuran > 45.3) {
                                                echo "Besar";
                                            } else {
                                                echo "Normal";
                                            }
                                        } else {
                                            if ($row->lk_pengukuran < 41.5) {
                                                echo "Kecil";
                                            } else if ($row->lk_pengukuran > 44.2) {
                                                echo "Besar";
                                            } else {
                                                echo "Normal";
                                            }
                                        }
                                    } else if ($row->umur == 8) {
                                        if ($row->kelamin_balita == 'laki-laki') {
                                            if ($row->lk_pengukuran < 43.2) {
                                                echo "Kecil";
                                            } else if ($row->lk_pengukuran > 45.8) {
                                                echo "Besar";
                                            } else {
                                                echo "Normal";
                                            }
                                        } else {
                                            if ($row->lk_pengukuran < 42) {
                                                echo "Kecil";
                                            } else if ($row->lk_pengukuran > 44.7) {
                                                echo "Besar";
                                            } else {
                                                echo "Normal";
                                            }
                                        }
                                    } else if ($row->umur == 9) {
                                        if ($row->kelamin_balita == 'laki-laki') {
                                            if ($row->lk_pengukuran < 43.7) {
                                                echo "Kecil";
                                            } else if ($row->lk_pengukuran > 46.3) {
                                                echo "Besar";
                                            } else {
                                                echo "Normal";
                                            }
                                        } else {
                                            if ($row->lk_pengukuran < 42.4) {
                                                echo "Kecil";
                                            } else if ($row->lk_pengukuran > 45.6) {
                                                echo "Besar";
                                            } else {
                                                echo "Normal";
                                            }
                                        }
                                    } else if ($row->umur == 10) {
                                        if ($row->kelamin_balita == 'laki-laki') {
                                            if ($row->lk_pengukuran < 44.1) {
                                                echo "Kecil";
                                            } else if ($row->lk_pengukuran > 46.7) {
                                                echo "Besar";
                                            } else {
                                                echo "Normal";
                                            }
                                        } else {
                                            if ($row->lk_pengukuran < 42.8) {
                                                echo "Kecil";
                                            } else if ($row->lk_pengukuran > 45.6) {
                                                echo "Besar";
                                            } else {
                                                echo "Normal";
                                            }
                                        }
                                    } else if ($row->umur == 11) {
                                        if ($row->kelamin_balita == 'laki-laki') {
                                            if ($row->lk_pengukuran < 44.4) {
                                                echo "Kecil";
                                            } else if ($row->lk_pengukuran > 47.1) {
                                                echo "Besar";
                                            } else {
                                                echo "Normal";
                                            }
                                        } else {
                                            if ($row->lk_pengukuran < 43.2) {
                                                echo "Kecil";
                                            } else if ($row->lk_pengukuran > 46) {
                                                echo "Besar";
                                            } else {
                                                echo "Normal";
                                            }
                                        }
                                    } else if ($row->umur == 12) {
                                        if ($row->kelamin_balita == 'laki-laki') {
                                            if ($row->lk_pengukuran < 44.7) {
                                                echo "Kecil";
                                            } else if ($row->lk_pengukuran > 47.4) {
                                                echo "Besar";
                                            } else {
                                                echo "Normal";
                                            }
                                        } else {
                                            if ($row->lk_pengukuran < 43.5) {
                                                echo "Kecil";
                                            } else if ($row->lk_pengukuran > 46.3) {
                                                echo "Besar";
                                            } else {
                                                echo "Normal";
                                            }
                                        }
                                    } else if ($row->umur > 12 && $row->umur <= 15) {
                                        if ($row->kelamin_balita == 'laki-laki') {
                                            if ($row->lk_pengukuran < 45.5) {
                                                echo "Kecil";
                                            } else if ($row->lk_pengukuran > 48.2) {
                                                echo "Besar";
                                            } else {
                                                echo "Normal";
                                            }
                                        } else {
                                            if ($row->lk_pengukuran < 44.2) {
                                                echo "Kecil";
                                            } else if ($row->lk_pengukuran > 47.1) {
                                                echo "Besar";
                                            } else {
                                                echo "Normal";
                                            }
                                        }
                                    } else if ($row->umur > 15 && $row->umur <= 18) {
                                        if ($row->kelamin_balita == 'laki-laki') {
                                            if ($row->lk_pengukuran < 46) {
                                                echo "Kecil";
                                            } else if ($row->lk_pengukuran > 48.7) {
                                                echo "Besar";
                                            } else {
                                                echo "Normal";
                                            }
                                        } else {
                                            if ($row->lk_pengukuran < 44.8) {
                                                echo "Kecil";
                                            } else if ($row->lk_pengukuran > 47.7) {
                                                echo "Besar";
                                            } else {
                                                echo "Normal";
                                            }
                                        }
                                    } else if ($row->umur > 18 && $row->umur <= 21) {
                                        if ($row->kelamin_balita == 'laki-laki') {
                                            if ($row->lk_pengukuran < 46.4) {
                                                echo "Kecil";
                                            } else if ($row->lk_pengukuran > 49.2) {
                                                echo "Besar";
                                            } else {
                                                echo "Normal";
                                            }
                                        } else {
                                            if ($row->lk_pengukuran < 45.3) {
                                                echo "Kecil";
                                            } else if ($row->lk_pengukuran > 48.2) {
                                                echo "Besar";
                                            } else {
                                                echo "Normal";
                                            }
                                        }
                                    } else if ($row->umur > 21 && $row->umur <= 24) {
                                        if ($row->kelamin_balita == 'laki-laki') {
                                            if ($row->lk_pengukuran < 46.8) {
                                                echo "Kecil";
                                            } else if ($row->lk_pengukuran > 49.7) {
                                                echo "Besar";
                                            } else {
                                                echo "Normal";
                                            }
                                        } else {
                                            if ($row->lk_pengukuran < 45.7) {
                                                echo "Kecil";
                                            } else if ($row->lk_pengukuran > 48.6) {
                                                echo "Besar";
                                            } else {
                                                echo "Normal";
                                            }
                                        }
                                    } else if ($row->umur > 24 && $row->umur <= 30) {
                                        if ($row->kelamin_balita == 'laki-laki') {
                                            if ($row->lk_pengukuran < 47.5) {
                                                echo "Kecil";
                                            } else if ($row->lk_pengukuran > 50.4) {
                                                echo "Besar";
                                            } else {
                                                echo "Normal";
                                            }
                                        } else {
                                            if ($row->lk_pengukuran < 46.5) {
                                                echo "Kecil";
                                            } else if ($row->lk_pengukuran > 49.4) {
                                                echo "Besar";
                                            } else {
                                                echo "Normal";
                                            }
                                        }
                                    } else if ($row->umur > 30 && $row->umur <= 36) {
                                        if ($row->kelamin_balita == 'laki-laki') {
                                            if ($row->lk_pengukuran < 48) {
                                                echo "Kecil";
                                            } else if ($row->lk_pengukuran > 50.9) {
                                                echo "Besar";
                                            } else {
                                                echo "Normal";
                                            }
                                        } else {
                                            if ($row->lk_pengukuran < 47) {
                                                echo "Kecil";
                                            } else if ($row->lk_pengukuran > 50) {
                                                echo "Besar";
                                            } else {
                                                echo "Normal";
                                            }
                                        }
                                    } else if ($row->umur > 36 && $row->umur <= 42) {
                                        if ($row->kelamin_balita == 'laki-laki') {
                                            if ($row->lk_pengukuran < 48.4) {
                                                echo "Kecil";
                                            } else if ($row->lk_pengukuran > 51.4) {
                                                echo "Besar";
                                            } else {
                                                echo "Normal";
                                            }
                                        } else {
                                            if ($row->lk_pengukuran < 47.5) {
                                                echo "Kecil";
                                            } else if ($row->lk_pengukuran > 50.4) {
                                                echo "Besar";
                                            } else {
                                                echo "Normal";
                                            }
                                        }
                                    } else if ($row->umur > 42 && $row->umur <= 48) {
                                        if ($row->kelamin_balita == 'laki-laki') {
                                            if ($row->lk_pengukuran < 48.7) {
                                                echo "Kecil";
                                            } else if ($row->lk_pengukuran > 51.7) {
                                                echo "Besar";
                                            } else {
                                                echo "Normal";
                                            }
                                        } else {
                                            if ($row->lk_pengukuran < 47.9) {
                                                echo "Kecil";
                                            } else if ($row->lk_pengukuran > 50.8) {
                                                echo "Besar";
                                            } else {
                                                echo "Normal";
                                            }
                                        }
                                    } else if ($row->umur > 48 && $row->umur <= 54) {
                                        if ($row->kelamin_balita == 'laki-laki') {
                                            if ($row->lk_pengukuran < 49) {
                                                echo "Kecil";
                                            } else if ($row->lk_pengukuran > 52) {
                                                echo "Besar";
                                            } else {
                                                echo "Normal";
                                            }
                                        } else {
                                            if ($row->lk_pengukuran < 48.2) {
                                                echo "Kecil";
                                            } else if ($row->lk_pengukuran > 51.1) {
                                                echo "Besar";
                                            } else {
                                                echo "Normal";
                                            }
                                        }
                                    } else if ($row->umur > 54 && $row->umur <= 60) {
                                        if ($row->kelamin_balita == 'laki-laki') {
                                            if ($row->lk_pengukuran < 49.2) {
                                                echo "Kecil";
                                            } else if ($row->lk_pengukuran > 52.3) {
                                                echo "Besar";
                                            } else {
                                                echo "Normal";
                                            }
                                        } else {
                                            if ($row->lk_pengukuran < 48.4) {
                                                echo "Kecil";
                                            } else if ($row->lk_pengukuran > 51.4) {
                                                echo "Besar";
                                            } else {
                                                echo "Normal";
                                            }
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