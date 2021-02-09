<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Info Sehat | E-Balita</title>
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
        <h1 class="align-self-center text-center">info sehat</h1>
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
            <section class="mx-auto row">
                <!--article-->
                <article class="col-lg-6">
                    <a href="#">
                        <div class="article-wrapper row mx-auto">
                            <div class="px-0 text-center article-img col-md-3 mx-3 mb-2">
                                <img src="<?php echo asset_url() ?>images/food.png" alt="image content" class="w-100">
                            </div>
                            <div class="w-auto px-0 col">
                                <h3 class="article-title">Menu Makanan Sehat dan Bergizi Seimbang untuk Balita</h3>
                                <p class="article-content">Makanan yang dapat dikatakan sehat dan bergizi seimbang terdiri dari lima kelompok makanan utama. Setiap kelompok memiliki beragam zat gizi penting, termasuk vitamin dan mineral.</p>
                                <div><a class="article-source" href="#">KLIKDOKTER.COM</a></div>
                            </div>
                        </div>
                    </a>
                </article>
                <article class="col-lg-6">
                    <a href="#">
                        <div class="article-wrapper row mx-auto">
                            <div class="px-0 text-center article-img col-md-3 mx-3 mb-2">
                                <img src="<?php echo asset_url() ?>images/toys.png" alt="image content" class="w-100">
                            </div>
                            <div class="w-auto px-0 col">
                                <h3 class="article-title">Tips Memilih Mainan Anak Sesuai Fase Perkembangan 0 Bulan-6 Tahun</h3>
                                <p class="article-content">Orang tua harus mengetahui beberapa kriteria mainan yang baik, seperti mainan seharusnya menarik bagi anak, cocok dengan kemampuan fisik anak, menunjang perkembangan mental dan sosial anak, tahan lama, aman, dan sesuai dengan usia anak.</p>
                                <div><a class="article-source" href="#">TIRTO.ID</a></div>
                            </div>
                        </div>
                    </a>
                </article>
                <article class="col-lg-6">
                    <a href="#">
                        <div class="article-wrapper row mx-auto">
                            <div class="px-0 text-center article-img col-md-3 mx-3 mb-2">
                                <img src="<?php echo asset_url() ?>images/mainan-anak-1-3-tahun 1.png" alt="image content" class="w-100">
                            </div>
                            <div class="w-auto px-0 col">
                                <h3 class="article-title">5 Aktivitas Seru untuk Perkembangan Otak Balita</h3>
                                <p class="article-content">Ketika lahir, otak si Kecil berisi 100 miliar neuron. Pada tahun pertamanya, berjuta-juta koneksi sel akan tumbuh di dalam otaknya, ini disebut dengan sinapsis saraf. Berikut adalah 5 aktivitas permainan seru yang mampu menstimulasi perkembangan otak si Kecil.</p>
                                <div><a class="article-source" href="#">NUTRICLUB.COM</a></div>
                            </div>
                        </div>
                    </a>
                </article>
                <article class="col-lg-6">
                    <a href="#">
                        <div class="article-wrapper row mx-auto">
                            <div class="px-0 text-center article-img col-md-3 mx-3 mb-2">
                                <img src="<?php echo asset_url() ?>images/Rectangle 5.png" alt="image content" class="w-100">
                            </div>
                            <div class="w-auto px-0 col">
                                <h3 class="article-title">Pilihan Makanan Balita yang Sehat agar Si Kecil Tumbuh Cerdas</h3>
                                <p class="article-content">Usia balita memang bisa dibilang usia emas pertumbuhan anak. Sehingga, pada masa itu, orangtua harus semaksimal mungkin memfasilitasi perkembangannya, termasuk dengan memilih jenis makanan balita yang sehat.</p>
                                <div><a class="article-source" href="#">SEHATQ.COM</a></div>
                            </div>
                        </div>
                    </a>
                </article>

            </section>
        </div>
    </main>

    <script src="<?php echo asset_url() ?>js/main.js"></script>
</body>

</html>