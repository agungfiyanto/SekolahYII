<?php

/* @var $this \yii\web\View */
/* @var $content string */
use yii\helpers\Html;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body>
    <?php $this->beginBody() ?>

    <div class="wrap">
        <!-- ======= Top Bar ======= -->
        <section id="topbar" class="d-none d-lg-block">
            <div class="container d-flex">
                <div class="contact-info mr-auto">
                    <i class="icofont-envelope"></i><a href="mailto:agungfiyanto0@gmail.com">agungfiyanto0@gmail.com</a>
                    <i class="icofont-phone"></i>087 757 185 999
                </div>
                <div class="social-links">
                    <a href="https://www.facebook.com/pmlamongan" class="facebook"><i class="icofont-facebook"></i></a>
                    <a href="https://www.instagram.com/explore_smapama/" class="instagram"><i class="icofont-instagram"></i></a>
                </div>
            </div>
        </section>

        <!-- ======= Header ======= -->
        <header id="header">
            <div class="container d-flex">

                <div class="logo mr-auto">
                    <h1 class="text-light"><a href="index.html"><span>SMA Panca Marga 1 Lamongan</span></a></h1>
                    <!-- Uncomment below if you prefer to use an image logo -->
                    <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
                </div>

                <nav class="nav-menu d-none d-lg-block">
                    <ul>
                        <li><?= Html::a('Home', ['/site/index']) ?></li>
                        <li class="drop-down"><?= Html::a('Tentang', ['/sekolah/info_sekolah']) ?>
                            <ul>
                                <li><?= Html::a('Tentang Sekolah', ['/sekolah/info_sekolah']) ?></li>
                                <li><?= Html::a('Tentang Admin', ['/sekolah/info_admin']) ?></li>
                            </ul>
                        </li>
                        <li><?= Html::a('Foto', ['/sekolah/foto']) ?></li>
                        <li><?= Html::a('Informasi', ['/sekolah/info']) ?></li>
                        <li><?= Html::a('Kontak', ['/sekolah/kontak']) ?></li>
                        <li><?= Html::a('Login', ['/site/login']) ?></li>
                        <li><?= Html::a('Admin', ['/admin/index']) ?></li>
                    </ul>
                </nav><!-- .nav-menu -->
            </div>
        </header><!-- End Header -->

        <div>
            <?= $content ?>
        </div>

    </div>
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">


                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h4>Lokasi Sekolah</h4>
                        <p>
                            Jl. Sunan Giri No.41Tumenggungan<br>
                            Kec. Lamongan, Kabupaten Lamongan<br>
                            Jawa Timur 62214
                            <br>
                            <br>
                            <strong>Phone:</strong> 0877 5718 5999<br>
                            <strong>Email:</strong> agungfiyanto0@gmail.com<br>
                        </p>

                    </div>

                    <div class="col-lg-4 col-md-6 footer-info">
                        <h3>SMA Panca Marga 1 Lamongan</h3>
                        <p>web ini merupakan web resmi Panca Marga yang digunakan untuk mempermudah kegiatan sekolah</p>
                        <div class="social-links mt-3">
                            <a href="https://www.facebook.com/pmlamongan" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="https://www.instagram.com/explore_smapama/" class="instagram"><i class="bx bxl-instagram"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </footer><!-- End Footer -->

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>