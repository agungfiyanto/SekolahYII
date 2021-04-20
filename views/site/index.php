<?php

/* @var $this \yii\web\View */
/* @var $content string */
use yii\helpers\Html;


$url = Yii::getAlias("@web") . '/img/';
?>

<!DOCTYPE html>
<html lang="en">

<body>

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container">
            <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

                <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">

                    <!-- Slide 1 -->
                    <div class="carousel-item active" style="background: url(<?= $url ?>/slide/pm1.jpg)">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animate__animated animate__fadeInDown">Selamat datang di <span> <br>SMA Panca Marga 1 Lamongan</span></h2>
                                <p class="animate__animated animate__fadeInUp">SMA Panca Marga 1 Lamongan adalah sekolah swasta yang berada di lamongan, sekolah ini direkomendasikan untuk kalian yang ingin mennjadi TNI/Polri.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="carousel-item" style="background: url(<?= $url ?>/slide/pm2.jpg)">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animate__animated fanimate__adeInDown">Melihat Aktivitas <span>Sekolah</span></h2>
                                <p class="animate__animated animate__fadeInUp">Berbagai macam kegiatan akan di unggah di website ini, sehingga anda dapat melihat aktivitas sekolah dengan mudah.</p>
                            </div>
                        </div>
                    </div>

                </div>

                <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon icofont-rounded-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>

                <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon icofont-rounded-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>

            </div>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Featured Section ======= -->
        <section id="featured" class="featured">
            <div class="container">

                <div class="row">
                    <div class="col-lg-4">
                        <div class="icon-box">
                            <i class="icofont-ui-user"></i>
                            <h3><a href="">Buat Akun</a></h3>
                            <p>Untuk membuat akun hubungi admin, keuntungan membuat akun adalah bisa mengakses semua fitur</p>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <div class="icon-box">
                            <i class="icofont-image"></i>
                            <h3><?= Html::a('Melihat Kegiatan Sekolah', ['/sekolah/foto']) ?></h3>
                            <p>Anda dapat melihat foto-foto kegiatan sekolah seperti lomba 17san, pemilihan osis dll di website ini</p>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <div class="icon-box">
                            <i class="icofont-tasks-alt"></i>
                            <h3><?= Html::a('Info Pengumuman', ['/sekolah/info']) ?></h3>
                            <p>Disini anda juga dapat melihat pengumuman sehingga pengumuman dapat dilihat banyak orang dengan mudah</p>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Featured Section -->

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="row">
                    <div class="col-lg-6">
                        <?= Html::img('@web/img/pm3.jpg', ['class' => 'img-fluid']); ?>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 content">
                        <h3>Fasilitas dan Ekstrakurikuler</h3>
                        <p class="font-italic">
                            Fasilitas yang ada di Panca Marga sebagai berikut :
                        </p>
                        <ul>
                            <li><i class="icofont-check-circled"></i> Laboratorium Biologi, Kimia, Fisika, Bahasa dan Komputer</li>
                            <li><i class="icofont-check-circled"></i> Lapangan Olahraga</li>
                            <li><i class="icofont-check-circled"></i> Kelas dengan LCD proyektor</li>
                            <li><i class="icofont-check-circled"></i> Perpustakaan</li>
                            <li><i class="icofont-check-circled"></i> Wifi Zone</li>
                        </ul>
                        <ul>
                            <h3>Program Sekolah</h3>
                            <p>
                                Adanya berbagai kegiatan pelatihan dari luar yang sering dilakukan di sekolah ini memudahkan
                                sekolah berhubungan dengan dunia usaha dan dunia industri juga dalam mengadopsi kemajuan
                                teknologi yang saat ini berkembang dengan pesat.
                            </p>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

    </main><!-- End #main -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
</body>

</html>