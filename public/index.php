<?php

require_once '../config.php';

if (!empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['g-recaptcha-response'])) {

    $nome = filter_var($_POST['nome'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

   try {

       $connection = new PDO('mysql:dbname=parodias;host=localhost', $user, $password);

       $sql = 'INSERT into leads (nome,email) VALUES (:nome,:email)';

        $query = $connection->prepare($sql);
        $foi = $query->execute(array(':nome' => $nome, ':email' => $email));


        echo('<script>alert("Deu bom!");</script>');


    } catch (Exception $e) {

        echo('<script>alert("Deu ruim");</script>');

    }

}


?>

<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Videograph Template">
    <meta name="keywords" content="Videograph, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quarto Concurso de Paródias de TI da Galacta</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&display=swap"
          rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-168811112-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-168811112-2');
    </script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Header Section Begin -->
<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <div class="header__logo">
                    <a href="./index.html"><img src="img/logo.png" alt=""></a>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="header__nav__option">
                    <nav class="header__nav__menu mobile-menu">
                        <ul>
                            <li class="active"><a href="./index.html">Home</a></li>
                            <li><a href="#sobre">Sobre</a></li>
                            <li><a href="#fiscais">Fiscais de Paródia</a></li>
                            <li><a href="#participe">Participe!</a></li>
                            <li><a href="https://twitch.tv/pokemaobr" target="_blank">Live</a></li>
                        </ul>
                    </nav>
                    <div class="header__nav__social">
                        <a href="https://facebook.com/pokemaobr" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a href="https://twitter.com/pokemaobr" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a href="https://twitch.tv/pokemaobr" target="_blank"><i class="fa fa-twitch"></i></a>
                        <a href="https://instagram.com/pokemaobr" target="_blank"><i class="fa fa-instagram"></i></a>
                        <a href="https://youtube.com/pokemaobr" target="_blank"><i class="fa fa-youtube-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
</header>
<!-- Header End -->

<!-- Hero Section Begin -->
<section class="hero">
    <div class="hero__slider owl-carousel">
        <div class="hero__item set-bg" data-setbg="img/hero/hero-1.jpg">
            <div class="container" id="sobre">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="hero__text">
                            <span>Quarto Concurso de Paródias de TI da Galacta</span>
                            <h2>Versão CARNAVAL!</h2>
                            <a href="https://twitch.tv/pokemaobr" class="primary-btn" target="_blank">TWITCH.TV/POKEMAOBR</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero__item set-bg" data-setbg="img/hero/hero-1.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="hero__text">
                            <span>Grandes profissionais de TI together em uma disputa xow!</span>
                            <h2>Vem com a gente!</h2>
                            <a href="https://twitch.tv/pokemaobr" class="primary-btn" target="_blank">TWITCH.TV/POKEMAOBR</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero__item set-bg" data-setbg="img/hero/hero-1.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="hero__text">
                            <span>Uma bancada formada por pessoas denomenais</span>
                            <h2>Participe com a gente!</h2>
                            <a href="https://twitch.tv/pokemaobr" class="primary-btn" target="_blank">TWITCH.TV/POKEMAOBR</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->


<!-- Services Section Begin -->

<section class="services spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="services__title">
                    <div class="section-title">
                        <span>#TCDPDTIDGEPTBR</span>
                        <h2>O que será essa disputa?</h2>
                    </div>
                    <p>Seu objetivo é criar uma paródia com melodias baseadas em CARNAVAL usando elementos de TI para compor a
                        letra.</p>
                    <a href="https://twitch.tv/pokemaobr" class="primary-btn" target="_blank">TWITCH.TV/POKEMAOBR</a>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="services__item">
                            <div class="services__item__icon">
                                <img src="img/icons/si-1.png" alt="">
                            </div>
                            <h4>O concurso</h4>
                            <p>Pessoas de todo o mundo que falam português em uma disputa acalorada pela coroa de melhor
                                paródia de TI da Galacta com o tema Carnaval.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="services__item">
                            <div class="services__item__icon">
                                <img src="img/icons/si-2.png" alt="">
                            </div>
                            <h4>Fiscais de Paródia</h4>
                            <p>Pessoas renomadas no mundo de live coding irão julgar as paródias mais votadas.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="services__item">
                            <div class="services__item__icon">
                                <img src="img/icons/si-3.png" alt="">
                            </div>
                            <h4>Sua Paródia</h4>
                            <p>Você deverá enviar o link do vídeo no youtube com alguém cantando sua paródia. O vídeo
                                deverá ter entre 90 e 300 segundos.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="services__item">
                            <div class="services__item__icon">
                                <img src="img/icons/si-4.png" alt="">
                            </div>
                            <h4>18 de fevereiro de 2024 às 15h00 é o momento!</h4>
                            <p>Faremos uma live especial de Carnaval e iremos analisar ao vivo as paródias finalistas e distribuir os
                                prêmios a quem ganhar.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services Section End -->

<!-- Work Section Begin -->
<!--
<section class="work">
<div class="work__gallery">
    <div class="grid-sizer"></div>
    <div class="work__item wide__item set-bg" data-setbg="img/work/work-1.jpg">
        <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="play-btn video-popup"><i
                class="fa fa-play"></i></a>
        <div class="work__item__hover">
            <h4>VIP Auto Tires & Service</h4>
            <ul>
                <li>eCommerce</li>
                <li>Magento</li>
            </ul>
        </div>
    </div>
    <div class="work__item small__item set-bg" data-setbg="img/work/work-2.jpg">
        <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="play-btn video-popup"><i
                class="fa fa-play"></i></a>
    </div>
    <div class="work__item small__item set-bg" data-setbg="img/work/work-3.jpg">
        <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="play-btn video-popup"><i
                class="fa fa-play"></i></a>
    </div>
    <div class="work__item large__item set-bg" data-setbg="img/work/work-4.jpg">
        <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="play-btn video-popup"><i
                class="fa fa-play"></i></a>
        <div class="work__item__hover">
            <h4>VIP Auto Tires & Service</h4>
            <ul>
                <li>eCommerce</li>
                <li>Magento</li>
            </ul>
        </div>
    </div>
    <div class="work__item small__item set-bg" data-setbg="img/work/work-5.jpg">
        <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="play-btn video-popup"><i
                class="fa fa-play"></i></a>
    </div>
    <div class="work__item small__item set-bg" data-setbg="img/work/work-6.jpg">
        <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="play-btn video-popup"><i
                class="fa fa-play"></i></a>
    </div>
    <div class="work__item wide__item set-bg" data-setbg="img/work/work-7.jpg">
        <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="play-btn video-popup"><i
                class="fa fa-play"></i></a>
        <div class="work__item__hover">
            <h4>VIP Auto Tires & Service</h4>
            <ul>
                <li>eCommerce</li>
                <li>Magento</li>
            </ul>
        </div>
    </div>
</div>
</section>
-->
<!-- Work Section End -->

<!-- Team Section Begin -->
<section class="team spad set-bg" data-setbg="img/team-bg.jpg">
    <div class="container" id="fiscais">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title team__title">
                    <span>Bancada Avaliadora</span>
                    <h2>Fiscais de Paródia</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                <div class="team__item set-bg" data-setbg="https://namorarcom.dev/img/journey/interrogacao.png">
                    <div class="team__item__text">
                        <h4>Mistério</h4>
                        <p>Fiscal de Paródia</p>
                        <div class="team__item__social">
                            <a href="https://www.facebook.com/" target="_blank"><i
                                        class="fa fa-facebook"></i></a>
                            <a href="https://twitter.com/" target="_blank"><i
                                        class="fa fa-twitter"></i></a>
                            <a href="https://www.twitch.tv/" target="_blank"><i class="fa fa-twitch"></i></a>
                            <a href="https://www.instagram.com/" target="_blank"><i
                                        class="fa fa-instagram"></i></a>
                        </div>
                        <!-- <h4>KASTR0WALKER</h4>
                        <p>Substituto de Pachi Codes</p>
                        <div class="team__item__social">
                            <a href="https://www.facebook.com/profile.php?id=100006781810430" target="_blank"><i
                                        class="fa fa-facebook"></i></a>
                            <a href="https://twitter.com/kastrowalker" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="https://www.twitch.tv/kastr0walker" target="_blank"><i class="fa fa-twitch"></i></a>
                            <a href="https://www.instagram.com/kastrowalker/" target="_blank"><i
                                        class="fa fa-instagram"></i></a>
                        </div> !-->
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                <div class="team__item team__item--second set-bg" data-setbg="https://namorarcom.dev/img/journey/interrogacao.png">
                    <div class="team__item__text">
                    <h4>Mistério</h4>
                    <p>Fiscal de Paródia</p>
                    <div class="team__item__social">
                        <a href="https://www.facebook.com/" target="_blank"><i
                                    class="fa fa-facebook"></i></a>
                        <a href="https://twitter.com/" target="_blank"><i
                                    class="fa fa-twitter"></i></a>
                        <a href="https://www.twitch.tv/" target="_blank"><i class="fa fa-twitch"></i></a>
                        <a href="https://www.instagram.com/" target="_blank"><i
                                    class="fa fa-instagram"></i></a>
                    </div>
                    <!-- <div class="team__item__text">
                        <h4>JP, O BRABO</h4>
                        <p>Sênior de menor</p>
                        <div class="team__item__social">
                            <a href="https://twitch.tv/jpbrab0" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="https://twitter.com/jpbrab0" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="https://twitch.tv/jpbrab0" target="_blank"><i class="fa fa-twitch"></i></a>
                            <a href="https://instagram.com/jpres.dev" target="_blank"><i class="fa fa-instagram"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                <div class="team__item team__item--third set-bg" data-setbg="img/team/levxyca.jpg">
                    <div class="team__item__text">
                        <h4>LEVXYCA</h4>
                        <p>Estagiária Dev</p>
                        <div class="team__item__social">
                            <a href="https://www.facebook.com/levxycas" target="_blank"><i
                                        class="fa fa-facebook"></i></a>
                            <a href="https://twitter.com/levxyca" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="https://twitch.tv/levxyca" target="_blank"><i class="fa fa-twitch"></i></a>
                            <a href="https://www.instagram.com/levxyca/" target="_blank"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                <div class="team__item team__item--four set-bg" data-setbg="https://namorarcom.dev/img/journey/interrogacao.png">
                    <div class="team__item__text">
                        <h4>Mistéria</h4>
                        <p>Fiscal de Paródia</p>
                        <div class="team__item__social">
                            <a href="https://www.facebook.com/" target="_blank"><i
                                        class="fa fa-facebook"></i></a>
                            <a href="https://twitter.com/" target="_blank"><i
                                        class="fa fa-twitter"></i></a>
                            <a href="https://www.twitch.tv/" target="_blank"><i class="fa fa-twitch"></i></a>
                            <a href="https://www.instagram.com/" target="_blank"><i
                                        class="fa fa-instagram"></i></a>
                        </div>
                        <!--
                        <h4>FREAKY FOG</h4>
                        <p>Full Cycle Denolover</p>
                        <div class="team__item__social">
                            <a href="https://twitter.com/rafaelmb" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="https://twitter.com/rafaelmb" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="https://twitch.tv/freakyfog" target="_blank"><i class="fa fa-twitch"></i></a>
                            <a href="https://twitter.com/rafaelmb" target="_blank"><i class="fa fa-instagram"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                <div class="team__item set-bg" data-setbg="https://namorarcom.dev/img/journey/interrogacao.png">
                   <div class="team__item__text">
                       <h4>Mistério</h4>
                       <p>Fiscal de Paródia</p>
                       <div class="team__item__social">
                           <a href="https://www.facebook.com/" target="_blank"><i
                                       class="fa fa-facebook"></i></a>
                           <a href="https://twitter.com/" target="_blank"><i
                                       class="fa fa-twitter"></i></a>
                           <a href="https://www.twitch.tv/" target="_blank"><i class="fa fa-twitch"></i></a>
                           <a href="https://www.instagram.com/" target="_blank"><i
                                       class="fa fa-instagram"></i></a>
                       </div>
                       <!-- <h4>NARIO__</h4>
                        <p>Comedor de Açaí e Gritaria</p>
                        <div class="team__item__social">
                            <a href="https://www.facebook.com/nario93/" target="_blank"><i
                                        class="fa fa-facebook"></i></a>
                            <a href="https://twitter.com/higor_barbossa" target="_blank"><i
                                        class="fa fa-twitter"></i></a>
                            <a href="https://www.twitch.tv/nario__" target="_blank"><i class="fa fa-twitch"></i></a>
                            <a href="https://www.instagram.com/higor.barbossa/" target="_blank"><i
                                        class="fa fa-instagram"></i></a>
                        </div>
                        -->
                   </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                <div class="team__item team__item--second set-bg" data-setbg="https://namorarcom.dev/img/journey/interrogacao.png">
                    <div class="team__item__text">
                        <h4>Mistéria</h4>
                        <p>Fiscal de Paródia</p>
                        <div class="team__item__social">
                            <a href="https://www.facebook.com/" target="_blank"><i
                                        class="fa fa-facebook"></i></a>
                            <a href="https://twitter.com/" target="_blank"><i
                                        class="fa fa-twitter"></i></a>
                            <a href="https://www.twitch.tv/" target="_blank"><i class="fa fa-twitch"></i></a>
                            <a href="https://www.instagram.com/" target="_blank"><i
                                        class="fa fa-instagram"></i></a>
                        </div>
                        <!--<h4>xTecna</h4>
                        <p>Resolvedora de URI e Comentarista de Treta</p>
                        <div class="team__item__social">
                            <a href="https://www.twitter.com/WNXTecna"><i class="fa fa-facebook"></i></a>
                            <a href="https://www.twitter.com/WNXTecna"><i class="fa fa-twitter"></i></a>
                            <a href="https://twitch.tv/xtecna"><i class="fa fa-twitch"></i></a>
                            <a href="https://www.twitter.com/WNXTecna"><i class="fa fa-instagram"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                <div class="team__item team__item--third set-bg" data-setbg="img/team/profbrunolopes.jpg">
                    <div class="team__item__text">
                        <h4>PROFESSOR BRUNO LOPES</h4>
                        <p>Professor das Artes Aleatórias e Advogado</p>
                        <div class="team__item__social">
                            <a href="https://twitch.tv/profbrunolopes" target="_blank"><i
                                        class="fa fa-facebook"></i></a>
                            <a href="https://twitter.com/brunolopesjn" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="https://twitch.tv/profbrunolopes" target="_blank"><i class="fa fa-twitch"></i></a>
                            <a href="https://twitch.tv/profbrunolopes" target="_blank"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                <div class="team__item team__item--four set-bg" data-setbg="img/team/pachi1.jpg">
                    <div class="team__item__text">
                        <h4>PACHI CODES</h4>
                        <p>Ganhadora de Concurso de Paródias</p>
                        <div class="team__item__social">
                            <a href="https://twitch.tv/pachicodes" target="_blank"><i class="fa fa-twitch"></i></a>
                            <a href="https://www.instagram.com/pachicodes/" target="_blank"><i
                                        class="fa fa-instagram"></i></a>
                            <a href="https://twitter.com/pachicodes" target="_blank"><i
                                        class="fa fa-twitter"></i></a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 p-0">
                <div class="team__btn">
                    <a href="https://twitch.tv/pokemaobr" class="primary-btn">TWITCH.TV/POKEMAOBR</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Team Section End -->

<!-- Counter Section Begin -->
<section class="counter">
    <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter__item">
                        <div class="counter__item__text">
                            <img src="img/icons/ci-1.png" alt="">
                            <h2 class="counter_num">62</h2>
                            <p>Viewers / Hora</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter__item second__item">
                        <div class="counter__item__text">
                            <img src="img/icons/ci-2.png" alt="">
                            <h2 class="counter_num">14337</h2>
                            <p>Viewers / Mês</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter__item third__item">
                        <div class="counter__item__text">
                            <img src="img/icons/ci-3.png" alt="">
                            <h2 class="counter_num">200</h2>
                            <p>Subscribers</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter__item four__item">
                        <div class="counter__item__text">
                            <img src="img/icons/ci-4.png" alt="">
                            <h2 class="counter_num">2</h2>
                            <p>Paródias Esperadas</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Counter Section End -->


<!-- Latest Blog Section Begin -->
<!--
<section class="latest spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title center-title">
                    <span>Our Blog</span>
                    <h2>Blog Update</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="latest__slider owl-carousel">
                <div class="col-lg-4">
                    <div class="blog__item latest__item">
                        <h4>What Makes Users Want to Share a Video on Social Media?</h4>
                        <ul>
                            <li>Jan 03, 2020</li>
                            <li>05 Comment</li>
                        </ul>
                        <p>We recently launched a new website for a Vital client and wanted to share some of the
                            cool features we were able...</p>
                        <a href="#">Read more <span class="arrow_right"></span></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog__item latest__item">
                        <h4>Bumper Ads: How to Tell a Story in 6 Seconds</h4>
                        <ul>
                            <li>Jan 03, 2020</li>
                            <li>05 Comment</li>
                        </ul>
                        <p>We recently launched a new website for a Vital client and wanted to share some of the
                            cool features we were able...</p>
                        <a href="#">Read more <span class="arrow_right"></span></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog__item latest__item">
                        <h4>What Makes Users Want to Share a Video on Social Media?</h4>
                        <ul>
                            <li>Jan 03, 2020</li>
                            <li>05 Comment</li>
                        </ul>
                        <p>We recently launched a new website for a Vital client and wanted to share some of the
                            cool features we were able...</p>
                        <a href="#">Read more <span class="arrow_right"></span></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog__item latest__item">
                        <h4>Bumper Ads: How to Tell a Story in 6 Seconds</h4>
                        <ul>
                            <li>Jan 03, 2020</li>
                            <li>05 Comment</li>
                        </ul>
                        <p>We recently launched a new website for a Vital client and wanted to share some of the
                            cool features we were able...</p>
                        <a href="#">Read more <span class="arrow_right"></span></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog__item latest__item">
                        <h4>What Makes Users Want to Share a Video on Social Media?</h4>
                        <ul>
                            <li>Jan 03, 2020</li>
                            <li>05 Comment</li>
                        </ul>
                        <p>We recently launched a new website for a Vital client and wanted to share some of the
                            cool features we were able...</p>
                        <a href="#">Read more <span class="arrow_right"></span></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog__item latest__item">
                        <h4>What Makes Users Want to Share a Video on Social Media?</h4>
                        <ul>
                            <li>Jan 03, 2020</li>
                            <li>05 Comment</li>
                        </ul>
                        <p>We recently launched a new website for a Vital client and wanted to share some of the
                            cool features we were able...</p>
                        <a href="#">Read more <span class="arrow_right"></span></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog__item latest__item">
                        <h4>What Makes Users Want to Share a Video on Social Media?</h4>
                        <ul>
                            <li>Jan 03, 2020</li>
                            <li>05 Comment</li>
                        </ul>
                        <p>We recently launched a new website for a Vital client and wanted to share some of the
                            cool features we were able...</p>
                        <a href="#">Read more <span class="arrow_right"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
-->
<!-- Latest Blog Section End -->
<section class="callto spad set-bg" data-setbg="img/callto-bg.jpg">
    <div class="container">
        <div class="col-lg-6 col-md-6">
            <div class="doinferno" id="participe">
                <h2>PARTICIPE!</h2>
                <span>Caso tenha interesse em participar do concurso. Preencha com seu nome e e-mail para te avisarmos
                        dos próximos passos. Prometemos não enviar SPAM.</span>
            </div>
            <div class="contact__form">
                <form action="" method="POST">
                    <input type="text" name="nome" placeholder="Nome">
                    <input type="text" name="email" placeholder="E-mail">
                    <div class="g-recaptcha" data-sitekey="6LdWlcwZAAAAANcAqE4paAS9VjrD51BQyVmGe8vM"></div>
                    <br/>
                    <button type="submit" class="site-btn">Enviar!</button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Call To Action Section Begin -->
<!--
<section class="callto spad set-bg" data-setbg="img/callto-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="callto__text">
                    <h2>Fresh Ideas, Fresh Moments Giving Wings to your Stories.</h2>
                    <p>INC5000, Best places to work 2019</p>
                    <a href="#">Start your stories</a>
                </div>
            </div>
        </div>
    </div>
</section>
-->
<!-- Call To Action Section End -->

<!-- Footer Section Begin -->
<footer class="footer">
    <div class="container">
        <div class="footer__top">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="footer__top__logo">
                        <a href="#"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="footer__top__social">
                        <a href="https://facebook.com/pokemaobr"><i class="fa fa-facebook"></i></a>
                        <a href="https://twitter.com/pokemaobr"><i class="fa fa-twitter"></i></a>
                        <a href="https://twitch.com/pokemaobr"><i class="fa fa-twitch"></i></a>
                        <a href="https://instagram.com/pokemaobr"><i class="fa fa-instagram"></i></a>
                        <a href="https://youtube.com/pokemaobr"><i class="fa fa-youtube-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__option">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__option__item">
                        <h5>Sobre Nós</h5>
                        <p>Fazemos live na twitch de programação e entretenimento dev. </p>
                        <a href="https://twitch.tv/pokemaobr" class="read__more" target="_blank">Conheça mais sobre o
                            nosso trabalho. <span class="arrow_right"></span></a>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__option__item">
                        <p>Art. 47 da Lei 9610/98 - Art. 47. São livres as paráfrases e paródias que não forem verdadeiras
                            reproduções da obra originária nem lhe implicarem descrédito.</p>
                    </div>
                </div>
            </div>
            <div class="footer__copyright">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <p class="footer__copyright__text">Copyleft
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                            - Todos os esquerdos reservados | Esse template foi feito com <i class="fa fa-heart-o"
                                                                                             aria-hidden="true"></i> por
                            <a
                                    href="https://colorlib.com" target="_blank">Colorlib</a>
                        </p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                </div>
            </div>
        </div>
</footer>
<!-- Footer Section End -->

<!-- Js Plugins -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/mixitup.min.js"></script>
<script src="js/masonry.pkgd.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>
</body>

</html>