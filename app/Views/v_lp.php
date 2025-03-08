<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="<?= base_url() ?>/Template/1/img/image.png">
    <!-- Author Meta -->
    <meta name="author" content="codepixer">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Portofolio - Bhakti Ragil Varino</title>

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">

    <!-- CSS ============================================= -->
    <link rel="stylesheet" href="<?= base_url() ?>/Template/1/css/linearicons.css" />
    <link rel="stylesheet" href="<?= base_url() ?>/Template/1/css/font-awesome.min.css">

    <link rel="stylesheet" href="<?= base_url() ?>/Template/1/css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url() ?>/Template/1/css/magnific-popup.css">
    <link rel="stylesheet" href="<?= base_url() ?>/Template/1/css/nice-select.css">
    <link rel="stylesheet" href="<?= base_url() ?>/Template/1/css/animate.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/Template/1/css/owl.carousel.css">
    <link rel="stylesheet" href="<?= base_url() ?>/Template/1/css/main.css">

    <!-- Custom CSS -->
    <style>
        @font-face {
            font-family: 'MyCustomFont';
            src: url('<?= base_url() ?>/Template/1/fonts/Marine-Sikona.otf');
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: 'MyCustomFont2';
            src: url('<?= base_url() ?>/Template/1/fonts/Akilvan.otf');
            font-weight: normal;
            font-style: normal;
        }

        #loading {
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background: #D6B487;
            background-image: url('<?= base_url() ?>/Template/1/img/giffile.gif');
            background-size: cover;
            z-index: 9999;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #loading img {
            width: 100px;
            height: 100px;
            animation: spin 1s linear infinite;
        }

        #gallery {
            padding: 30px 15px;
        }

        #masonry-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-left: -15px;
            margin-right: -15px;
            width: auto;
        }

        .masonry-item {
            margin-bottom: 30px;
            padding-left: 15px;
            padding-right: 15px;
            width: 100%;
            /* Default to 100% width for small screens */
        }

        .img-pop-home {
            display: block;
            width: 100%;
        }

        .img-fluid {
            display: block;
            width: 100%;
            height: auto;
        }

        .ragil {
            margin-left: -130px;
        }

        .varino {
            margin-left: -190px;
        }

        @media (min-width: 576px) {
            .masonry-item {
                width: calc(50% - 30px);
                /* 2 items per row on small screens */
            }
        }

        @media (min-width: 800px) {
            .nav-menu {
                margin-right: 170px;
            }
        }

        @media (min-width: 962px) {
            .nav-menu {
                margin-right: 200px;
            }
        }


        @media (max-width: 992px) {
            .masonry-item {
                width: calc(33.333% - 30px);
                /* 3 items per row on medium to large screens */
            }

            .ragil {
                margin-left: 0px;
                margin-top: -30px;
            }

            .varino {
                margin-left: -15px;
                margin-top: -50px;
            }

            .minat {

                margin-top: 45px;
            }

            .flower {
                visibility: hidden;
            }
        }


        @media (min-width: 992px) {
            .masonry-item {
                width: calc(33.333% - 30px);
                /* 3 items per row on medium to large screens */
            }

            .ragil {
                margin-left: -80px;
            }

            .varino {
                margin-left: -140px;
            }
        }

        @media (min-width: 1200px) {
            .masonry-item {
                width: calc(33.333% - 30px);
                /* 3 items per row on medium to large screens */
            }

            .ragil {
                margin-left: -130px;
            }

            .varino {
                margin-left: -190px;

            }

            .nav-menu {
                margin-right: 500px;
            }
        }
    </style>

    <style>
        .gallery-area {
            padding: 60px 0;
        }

        .masonry-item {
            margin-bottom: 30px;
        }

        @media (max-width: 1199.98px) {
            .masonry-item {
                width: 50%;
            }
        }

        @media (max-width: 991.98px) {
            .masonry-item {
                width: 50%;
            }
        }

        @media (max-width: 767.98px) {
            .masonry-item {
                width: 100%;
            }
        }
    </style>

    <!-- Aos -->
    <link href="<?= base_url() ?>/Template/1/css/aos.css" rel="stylesheet">
</head>

<body>
    <!-- <div id="loading">
        <p style="margin-right: 200px;">Loading</p>
        <p style="margin-left: 200px; ">Loading</p>
    </div> -->

    <header id="header" id="home">
        <div class="header-top">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-lg-8 col-sm-4 col-8 header-top-right no-padding mb-2">
                        <ul>
                            <li style="color: black;">
                                bhaktiragil972@gmail.com
                            </li>
                            <li style="color: black;">
                                >
                            </li>
                            <li>
                                <a href="tel:+6285664904661" style="color: black;">(+62) 856 6490 4661</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row align-items-center justify-content-between d-flex">
                <div id="logo">
                    <a href="#home"><img src="<?= base_url() ?>/Template/1/img/logo.png" style="display: none;" alt="" title="" /></a>
                </div>
                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li class="menu-active"><a href="#home" style="color: #721D7A; font-family: 'MyCustomFont'; font-size: 15px;">Home</a></li>
                        <li><a href="#about" style="color: #721D7A; font-family: 'MyCustomFont'; font-size: 15px;">About</a></li>
                        <li><a href="#coffee" style="color: #721D7A; font-family: 'MyCustomFont'; font-size: 15px;">Tech Stack</a></li>
                        <li><a href="#review" style="color: #721D7A; font-family: 'MyCustomFont'; font-size: 15px;">Education</a></li>
                        <li><a href="#blog" style="color: #721D7A; font-family: 'MyCustomFont'; font-size: 15px;">Project</a></li>
                        <li class="menu-has-children">
                            <a style="color: #721D7A; font-family: 'MyCustomFont'; font-size: 15px;" href="<?= base_url('auth/formlogin') ?>">Login</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <!-- start banner Area -->
    <section class="banner-area" id="home">
        <div class="container">
            <div class="row fullscreen d-flex align-items-center justify-content-start">
                <div class="col-lg-12 banner-content" style="color: #721D7A; ">
                    <div class="col-lg-12 d-flex" style="margin-left: -15px;">
                        <div style=" margin-bottom: -15px; margin-top: 190px;">
                            <h2 id="hellow1" class="text-uppercase" style="font-family: 'MyCustomFont'; color: #721D7A; font-size: 30px;">H</h2>
                        </div>
                        <div style="margin-left: 3px; margin-bottom: -15px; margin-top: 165px; display: inline;">
                            <svg id="hellow4" style="opacity: 0; font-family: 'MyCustomFont'; color: #721D7A; font-size: 30px;" viewBox="0 0 137 135" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true">
                                <path d="M84.1148 67.3453H136.194C136.637 67.3453 137 67.7028 137 68.1397V134.043C137 134.484 136.633 134.845 136.186 134.841C99.0222 134.416 68.9737 104.827 68.502 68.2191V134.206C68.502 134.643 68.1392 135 67.6958 135H0.814284C0.366822 135 -2.06673e-05 134.639 0.00401052 134.198C0.439379 97.2879 30.9354 67.5042 68.498 67.5002H0.806238C0.362807 67.5002 0 67.1427 0 66.7057V0.802561C0 0.361644 0.366822 0.000171863 0.814284 0.00414409C37.9778 0.429172 68.0263 30.0183 68.498 66.6263V0.794617C68.498 0.357672 68.8608 0.000171819 69.3042 0.000171819H136.186C136.633 0.000171819 137 0.361644 136.996 0.802561C136.621 32.4969 114.079 58.94 83.9334 65.7802C83.0022 65.9907 83.1594 67.3453 84.1189 67.3453H84.1148Z" fill="url(#paint0_linear_1655_45397)"></path>
                                <path d="M84.1148 67.3453H136.194C136.637 67.3453 137 67.7028 137 68.1397V134.043C137 134.484 136.633 134.845 136.186 134.841C99.0222 134.416 68.9737 104.827 68.502 68.2191V134.206C68.502 134.643 68.1392 135 67.6958 135H0.814284C0.366822 135 -2.06673e-05 134.639 0.00401052 134.198C0.439379 97.2879 30.9354 67.5042 68.498 67.5002H0.806238C0.362807 67.5002 0 67.1427 0 66.7057V0.802561C0 0.361644 0.366822 0.000171863 0.814284 0.00414409C37.9778 0.429172 68.0263 30.0183 68.498 66.6263V0.794617C68.498 0.357672 68.8608 0.000171819 69.3042 0.000171819H136.186C136.633 0.000171819 137 0.361644 136.996 0.802561C136.621 32.4969 114.079 58.94 83.9334 65.7802C83.0022 65.9907 83.1594 67.3453 84.1189 67.3453H84.1148Z" fill="url(#pattern-home-hero-windmill-0)" fill-opacity="0.6" style="mix-blend-mode:multiply"></path>
                                <defs>
                                    <pattern id="pattern-home-hero-windmill-0" patternContentUnits="objectBoundingBox" width="1.45985" height="1.48148">
                                        <use xlink:href="#svg-noise" transform="scale(0.00291971 0.00296296)"></use>
                                    </pattern>
                                    <linearGradient id="paint0_linear_1655_45397" x1="-76.6791" y1="-15.6157" x2="165.682" y2="81.0082" gradientUnits="userSpaceOnUse">
                                        <stop offset="0.427083" stop-color="#D80400"></stop>
                                        <stop offset="0.791667" stop-color="#DFC7E8"></stop>
                                    </linearGradient>
                                </defs>
                            </svg>
                            <svg id="hellow2" viewBox="0 0 156 156" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" style="opacity: 0; font-family: 'MyCustomFont'; color: #721D7A; font-size: 30px;">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M45.9341 76.316C43.4159 76.8454 40.8068 77.1236 38.1333 77.1236C17.0729 77.1236 0 59.8589 0 38.5618C0 17.2647 17.0729 0 38.1333 0C59.1938 0 76.2666 17.2647 76.2666 38.5618C76.2666 40.3457 76.1469 42.1013 75.915 43.8209H80.0849C79.853 42.1013 79.7332 40.3457 79.7332 38.5618C79.7332 17.2647 96.8061 0 117.867 0C138.927 0 156 17.2647 156 38.5618C156 59.8589 138.927 77.1236 117.867 77.1236C115.499 77.1236 113.182 76.9054 110.934 76.4879V79.5128C113.182 79.0953 115.499 78.8771 117.867 78.8771C138.927 78.8771 156 96.1418 156 117.439C156 138.736 138.927 156.001 117.867 156.001C96.8064 156.001 79.7335 138.736 79.7335 117.439C79.7335 114.736 80.0086 112.097 80.5319 109.551H75.6376C76.0508 111.825 76.2667 114.169 76.2667 116.564C76.2667 137.861 59.1938 155.126 38.1334 155.126C17.0729 155.126 6.30037e-05 137.861 6.30037e-05 116.564C6.30037e-05 95.2671 17.0729 78.0024 38.1334 78.0024C40.8068 78.0024 43.416 78.2806 45.9341 78.8099V76.316Z" fill="url(#paint0_radial_1336_100489)"></path>
                                <path fill-opacity=".6" fill-rule="evenodd" clip-rule="evenodd" d="M45.9341 76.316C43.4159 76.8454 40.8068 77.1236 38.1333 77.1236C17.0729 77.1236 0 59.8589 0 38.5618C0 17.2647 17.0729 0 38.1333 0C59.1938 0 76.2666 17.2647 76.2666 38.5618C76.2666 40.3457 76.1469 42.1013 75.915 43.8209H80.0849C79.853 42.1013 79.7332 40.3457 79.7332 38.5618C79.7332 17.2647 96.8061 0 117.867 0C138.927 0 156 17.2647 156 38.5618C156 59.8589 138.927 77.1236 117.867 77.1236C115.499 77.1236 113.182 76.9054 110.934 76.4879V79.5128C113.182 79.0953 115.499 78.8771 117.867 78.8771C138.927 78.8771 156 96.1418 156 117.439C156 138.736 138.927 156.001 117.867 156.001C96.8064 156.001 79.7335 138.736 79.7335 117.439C79.7335 114.736 80.0086 112.097 80.5319 109.551H75.6376C76.0508 111.825 76.2667 114.169 76.2667 116.564C76.2667 137.861 59.1938 155.126 38.1334 155.126C17.0729 155.126 6.30037e-05 137.861 6.30037e-05 116.564C6.30037e-05 95.2671 17.0729 78.0024 38.1334 78.0024C40.8068 78.0024 43.416 78.2806 45.9341 78.8099V76.316Z" fill="url(#pattern-home-hero-circles-0)" style="mix-blend-mode:multiply"></path>
                                <defs>
                                    <pattern id="pattern-home-hero-circles-0" patternContentUnits="objectBoundingBox" width="0.641025" height="0.641023">
                                        <use xlink:href="#svg-noise" transform="scale(0.00128205)"></use>
                                    </pattern>
                                    <radialGradient id="paint0_radial_1336_100489" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(48.0022 111.876) rotate(-90) scale(122.883 122.883)">
                                        <stop stop-color="#E193FF"></stop>
                                        <stop offset="0.6721" stop-color="#8E78DA"></stop>
                                        <stop offset="0.7378" stop-color="#937DDB"></stop>
                                        <stop offset="0.8164" stop-color="#A28BDD"></stop>
                                        <stop offset="0.9014" stop-color="#BAA3E2"></stop>
                                        <stop offset="0.9905" stop-color="#DBC3E7"></stop>
                                        <stop offset="1" stop-color="#DFC7E8"></stop>
                                    </radialGradient>
                                </defs>
                            </svg>
                            <h2 id="hellow3" class="text-uppercase" style="opacity: 0; margin-top: -32px; font-family: 'MyCustomFont'; color: #721D7A; font-size: 30px;">N</h2>
                            <h2 id="hellow5" class="text-uppercase" style="opacity: 0; margin-top: -37px; font-family: 'MyCustomFont'; color: #721D7A; font-size: 30px;">A</h2>
                        </div>
                        <div style="margin-left: 3px; margin-bottom: -15px; margin-top: 190px;">
                            <h2 id="hellow6" class="text-uppercase" style="opacity: 0; font-family: 'MyCustomFont'; color: #721D7A; font-size: 30px;">L</h2>
                        </div>
                        <div style="margin-left: 3px; margin-bottom: -15px; margin-top: 190px;">
                            <h2 id="hellow7" class="text-uppercase" style="opacity: 0; font-family: 'MyCustomFont'; color: #721D7A; font-size: 30px;">L</h2>
                        </div>
                        <div style="margin-left: 3px; margin-bottom: -15px; margin-top: 190px;">
                            <svg id="hellow8" viewBox="0 0 157 156" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" style="translate: none; rotate: none; scale: none; transform: rotate(360deg);">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M82.2214 104.04L105.483 143.586C108.242 148.276 114.274 149.852 118.974 147.112V147.112C123.675 144.371 125.275 138.345 122.552 133.634L99.5971 93.9091L144.009 105.424C149.276 106.79 154.656 103.639 156.042 98.3773V98.3773C157.428 93.1154 154.298 87.7233 149.042 86.317L104.72 74.4593L144.266 51.1978C148.957 48.439 150.533 42.407 147.792 37.7062V37.7062C145.052 33.0054 139.026 31.4057 134.314 34.1282L94.5898 57.0835L106.105 12.6719C107.471 7.40463 104.32 2.02469 99.058 0.638673V0.638673C93.7961 -0.747342 88.4041 2.38242 86.9977 7.63895L75.14 51.9603L51.8786 12.4142C49.1197 7.72403 43.0878 6.14763 38.387 8.8883V8.8883C33.6862 11.629 32.0865 17.6548 34.809 22.3662L57.7643 62.0908L13.3526 50.5758C8.08539 49.2101 2.70545 52.3607 1.31944 57.6226V57.6226C-0.0665745 62.8845 3.06319 68.2766 8.31971 69.6829L52.6411 81.5406L13.095 104.802C8.4048 107.561 6.8284 113.593 9.56907 118.294V118.294C12.3097 122.994 18.3356 124.594 23.0469 121.872L62.7716 98.9164L51.2566 143.328C49.8909 148.595 53.0414 153.975 58.3034 155.361V155.361C63.5653 156.747 68.9573 153.617 70.3637 148.361L82.2214 104.04Z" fill="white"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M82.2214 104.04L105.483 143.586C108.242 148.276 114.274 149.852 118.974 147.112V147.112C123.675 144.371 125.275 138.345 122.552 133.634L99.5971 93.9091L144.009 105.424C149.276 106.79 154.656 103.639 156.042 98.3773V98.3773C157.428 93.1154 154.298 87.7233 149.042 86.317L104.72 74.4593L144.266 51.1978C148.957 48.439 150.533 42.407 147.792 37.7062V37.7062C145.052 33.0054 139.026 31.4057 134.314 34.1282L94.5898 57.0835L106.105 12.6719C107.471 7.40463 104.32 2.02469 99.058 0.638673V0.638673C93.7961 -0.747342 88.4041 2.38242 86.9977 7.63895L75.14 51.9603L51.8786 12.4142C49.1197 7.72403 43.0878 6.14763 38.387 8.8883V8.8883C33.6862 11.629 32.0865 17.6548 34.809 22.3662L57.7643 62.0908L13.3526 50.5758C8.08539 49.2101 2.70545 52.3607 1.31944 57.6226V57.6226C-0.0665745 62.8845 3.06319 68.2766 8.31971 69.6829L52.6411 81.5406L13.095 104.802C8.4048 107.561 6.8284 113.593 9.56907 118.294V118.294C12.3097 122.994 18.3356 124.594 23.0469 121.872L62.7716 98.9164L51.2566 143.328C49.8909 148.595 53.0414 153.975 58.3034 155.361V155.361C63.5653 156.747 68.9573 153.617 70.3637 148.361L82.2214 104.04Z" fill="url(#paint0_radial_1413_80169)"></path>
                                <path fill-opacity=".6" fill-rule="evenodd" clip-rule="evenodd" d="M82.2214 104.04L105.483 143.586C108.242 148.276 114.274 149.852 118.974 147.112V147.112C123.675 144.371 125.275 138.345 122.552 133.634L99.5971 93.9091L144.009 105.424C149.276 106.79 154.656 103.639 156.042 98.3773V98.3773C157.428 93.1154 154.298 87.7233 149.042 86.317L104.72 74.4593L144.266 51.1978C148.957 48.439 150.533 42.407 147.792 37.7062V37.7062C145.052 33.0054 139.026 31.4057 134.314 34.1282L94.5898 57.0835L106.105 12.6719C107.471 7.40463 104.32 2.02469 99.058 0.638673V0.638673C93.7961 -0.747342 88.4041 2.38242 86.9977 7.63895L75.14 51.9603L51.8786 12.4142C49.1197 7.72403 43.0878 6.14763 38.387 8.8883V8.8883C33.6862 11.629 32.0865 17.6548 34.809 22.3662L57.7643 62.0908L13.3526 50.5758C8.08539 49.2101 2.70545 52.3607 1.31944 57.6226V57.6226C-0.0665745 62.8845 3.06319 68.2766 8.31971 69.6829L52.6411 81.5406L13.095 104.802C8.4048 107.561 6.8284 113.593 9.56907 118.294V118.294C12.3097 122.994 18.3356 124.594 23.0469 121.872L62.7716 98.9164L51.2566 143.328C49.8909 148.595 53.0414 153.975 58.3034 155.361V155.361C63.5653 156.747 68.9573 153.617 70.3637 148.361L82.2214 104.04Z" fill="url(#pattern-home-hero-star-0)" style="mix-blend-mode:multiply"></path>
                                <defs>
                                    <pattern id="pattern-home-hero-star-0" patternContentUnits="objectBoundingBox" width="0.625" height="0.625">
                                        <use xlink:href="#svg-noise" transform="scale(0.00125)"></use>
                                    </pattern>
                                    <radialGradient id="paint0_radial_1413_80169" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(124.192 87.08) rotate(149.757) scale(126.034)">
                                        <stop stop-color="#FFEBE7"></stop>
                                        <stop offset="0.6721" stop-color="#FF9C7C"></stop>
                                        <stop offset="0.8164" stop-color="#FF9983"></stop>
                                        <stop offset="0.9014" stop-color="#FF774B"></stop>
                                        <stop offset="1" stop-color="#E76F00"></stop>
                                    </radialGradient>
                                </defs>
                            </svg>
                            <h2 id="hellow9" class="text-uppercase" style="margin-top: -28px; font-family: 'MyCustomFont'; color: #721D7A; font-size: 30px;">O</h2>
                        </div>
                        <div style="margin-left: 20px; margin-bottom: -15px; margin-top: 190px;">
                            <h2 id="hellow10" class="text-uppercase" style="opacity:0; font-family: 'MyCustomFont'; color: #721D7A; font-size: 30px;">1</h2>
                            <h2 id="hellow11" class="text-uppercase" style="margin-top: -36px; font-family: 'MyCustomFont'; color: #721D7A; font-size: 30px;">I</h2>
                        </div>
                        <div style="margin-left: 20px; margin-bottom: -15px; margin-top: 190px;">
                            <h2 id="hellow12" class="text-uppercase" style="opacity:0; font-family: 'MyCustomFont'; color: #721D7A; font-size: 30px;">20</h2>
                            <h2 id="hellow13" class="text-uppercase" style="margin-top: -36px; font-family: 'MyCustomFont'; color: #721D7A; font-size: 30px;">AM</h2>
                        </div>
                        <div style="margin-left: 3px; margin-bottom: -15px; margin-top: 190px;">
                            <h2 id="hellow14" class="text-uppercase" style="opacity:0; font-family: 'MyCustomFont'; color: #721D7A; font-size: 30px;">0</h2>
                        </div>
                    </div>
                    <div class="row d-flex" style="margin-left: -15px;">
                        <div class="col-lg-4 d-flex" style="margin-bottom: -40px;">
                            <h1 id="nama11" style="margin-top: 40px; color: #721D7A; font-family: 'MyCustomFont'; font-size: 55px; letter-spacing: 3px;">BHAK</h1>
                            <h1 id="nama12" style="margin-left: 0px; margin-top: 20px; color: #721D7A; font-family: 'MyCustomFont'; font-size: 55px;">T</h1>
                            <h1 id="nama13" style="margin-left: 2px; margin-top: 20px; color: #721D7A; font-family: 'MyCustomFont'; font-size: 55px;">I</h1>
                        </div>
                        <div class="col-lg-4 d-flex ragil" style="margin-bottom: -40px;">
                            <h1 id="nama1" style="color: #721D7A; font-family: 'MyCustomFont'; font-size: 55px;">R</h1>
                            <h1 id="nama2" style="margin-left: -40px; opacity: 0; margin-top: -20px; color: #721D7A; font-family: 'MyCustomFont'; font-size: 55px;">R</h1>
                            <h1 id="nama3" style="margin-left: 4px; color: #721D7A; font-family: 'MyCustomFont'; font-size: 55px;">A</h1>
                            <h1 id="nama4" style="margin-left: -40px; opacity: 0; margin-top: -20px; color: #721D7A; font-family: 'MyCustomFont'; font-size: 55px;">A</h1>
                            <h1 id="nama6" style="margin-left: 2px; opacity:0; scale: 0.2; color: #721D7A; font-family: 'MyCustomFont'; font-size: 55px;">G</h1>
                            <h1 id="nama7" style="margin-left: -40px; opacity: 0; margin-top: 65px; color: #721D7A; font-family: 'MyCustomFont'; font-size: 55px;">G</h1>
                            <div style="margin-left: 2px;">
                                <svg class="flower" id="flower" style="cursor: pointer; opacity: 1; margin-top: -30px; margin-left: -15px;" id="ui-flower-shape" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="34" fill="none" viewBox="0 0 249 248" aria-hidden="true">
                                    <path fill="url(#paint0_linear_2439_61837)" fill-rule="evenodd" d="M73.062 121.321a60.197 60.197 0 0 1-12.401 1.284c-33.48 0-60.622-27.446-60.622-61.303S27.18 0 60.661 0c33.48 0 60.622 27.446 60.622 61.303 0 2.836-.19 5.626-.559 8.36h6.629a62.454 62.454 0 0 1-.559-8.36C126.794 27.445 153.935 0 187.416 0c33.48 0 60.622 27.446 60.622 61.303s-27.142 61.303-60.622 61.303c-3.764 0-7.447-.347-11.021-1.01v4.809a60.29 60.29 0 0 1 11.021-1.011c33.481 0 60.622 27.446 60.622 61.303S220.897 248 187.416 248c-33.48 0-60.622-27.446-60.622-61.303 0-4.298.438-8.493 1.27-12.541h-7.781c.657 3.615 1 7.341 1 11.148 0 33.857-27.141 61.303-60.622 61.303-33.48 0-60.622-27.446-60.622-61.303C.04 151.447 27.18 124 60.661 124c4.25 0 8.398.443 12.401 1.284v-3.963Z" clip-rule="evenodd" />
                                    <path fill="url(#pattern-flower-0)" fill-opacity=".6" fill-rule="evenodd" d="M73.062 121.321a60.197 60.197 0 0 1-12.401 1.284c-33.48 0-60.622-27.446-60.622-61.303S27.18 0 60.661 0c33.48 0 60.622 27.446 60.622 61.303 0 2.836-.19 5.626-.559 8.36h6.629a62.454 62.454 0 0 1-.559-8.36C126.794 27.445 153.935 0 187.416 0c33.48 0 60.622 27.446 60.622 61.303s-27.142 61.303-60.622 61.303c-3.764 0-7.447-.347-11.021-1.01v4.809a60.29 60.29 0 0 1 11.021-1.011c33.481 0 60.622 27.446 60.622 61.303S220.897 248 187.416 248c-33.48 0-60.622-27.446-60.622-61.303 0-4.298.438-8.493 1.27-12.541h-7.781c.657 3.615 1 7.341 1 11.148 0 33.857-27.141 61.303-60.622 61.303-33.48 0-60.622-27.446-60.622-61.303C.04 151.447 27.18 124 60.661 124c4.25 0 8.398.443 12.401 1.284v-3.963Z" clip-rule="evenodd" style="mix-blend-mode:multiply" />
                                    <defs>
                                        <linearGradient id="paint0_linear_2439_61837" x1="-21.144" x2="223.752" y1="-7.808" y2="329.47" gradientUnits="userSpaceOnUse">
                                            <stop offset=".27" stop-color="#FEC5FB" />
                                            <stop offset=".838" stop-color="#00BAE2" />
                                        </linearGradient>

                                        <linearGradient id="paint0_linear_2439_62385" x1="-21.144" x2="256.286" y1="-7.809" y2="390.977" gradientUnits="userSpaceOnUse">
                                            <stop offset=".133" stop-color="#FEC5FB" />
                                            <stop offset=".306" stop-color="#FEC5FB" />
                                            <stop offset=".591" stop-color="#00BAE2" />
                                            <stop offset=".669" stop-color="#0BA3C5" />
                                            <stop offset=".762" stop-color="#037F9A" />
                                        </linearGradient>

                                        <pattern id="pattern-flower-0" width=".806" height=".806" patternContentUnits="objectBoundingBox">
                                            <use xlink:href="#svg-noise" transform="scale(.00161)" />
                                        </pattern>
                                    </defs>
                                </svg>

                                <h1 id="nama10" style="margin-top: -2px; opacity:0; scale: 0.2; color: #721D7A; font-family: 'MyCustomFont'; font-size: 55px;">I</h1>
                            </div>
                            <img id="nama8" src="<?= base_url() ?>/Template/1/img/LOLI.webp" style="margin-left: 2px; color: #721D7A; font-family: 'MyCustomFont'; font-size: 55px;  width: 35px; height: 60px; opacity:1;  margin-top: 47px;" />
                            <h1 id="nama9" style="margin-left: -35px; margin-top: 22px; color: #721D7A; font-family: 'MyCustomFont'; font-size: 55px;">L</h1>
                        </div>
                        <div class="col-lg-4 d-flex varino" style="margin-bottom: -40px;">
                            <h1 id="nama14" style="margin-left: 16px; margin-top: 22px; color: #721D7A; font-family: 'MyCustomFont'; font-size: 55px;">V</h1>
                            <h1 id="nama15" style="margin-left: -4px; margin-top: 22px; color: #721D7A; font-family: 'MyCustomFont'; font-size: 55px;">A</h1>
                            <h1 id="nama16" style="margin-left: 2px; margin-top: 22px; color: #721D7A; font-family: 'MyCustomFont'; font-size: 55px;">R</h1>
                            <h1 id="nama16" style="margin-left: 2px; margin-top: 22px; color: #721D7A; font-family: 'MyCustomFont'; font-size: 55px;">I</h1>
                            <h1 id="nama16" style="margin-left: 2px; margin-top: 22px; color: #721D7A; font-family: 'MyCustomFont'; font-size: 55px;">N</h1>
                            <h1 id="nama16" style="margin-left: 2px; margin-top: 22px; color: #721D7A; font-family: 'MyCustomFont'; font-size: 55px;">O</h1>
                        </div>
                    </div>
                    <div class="col-lg-12 d-flex minat" style="margin-left: -15px;">
                        <h3 class="text-uppercase" style="margin-top: -15px; font-family: 'MyCustomFont2'; color: #B4007B; font-size: 20px;">Web Depelover And Accounting</h3>
                    </div>


                    <a id="animationContainer" href="<?= base_url('document/CV BHAKTI RAGIL VARINO.pdf') ?>" class="genric-btn primary circle text-uppercase mt-4" style="background-color: #D80400;">
                        <div style="display: flex; margin-left:-20 ;">
                            <div id="cv">
                                <span>CV</span>
                            </div>
                            <div>
                                <div id="btn-circles" style="opacity: 0; margin-left: -25px; translate: none; rotate: none; scale: none; transform: translate(-16.1033px, 0px) rotate(-360deg) scale(0.3, 0.3); z-index: -1;">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="none" width="23" height="23" viewBox="0 0 23 23" aria-hidden="true">
                                        <path fill="url(#paint0_radial_2146_58993)" fill-rule="evenodd" d="M7.959 10.053a4.368 4.368 0 0 1-.889-.17c-2.327-.7-3.64-3.174-2.933-5.527C4.845 2.002 7.305.662 9.632 1.36c2.327.7 3.64 3.174 2.933 5.528-.06.197-.131.387-.214.57l.46.138c.032-.198.078-.396.137-.593.707-2.353 3.167-3.694 5.494-2.995 2.328.7 3.64 3.175 2.933 5.528-.707 2.353-3.167 3.694-5.494 2.995a4.377 4.377 0 0 1-.745-.3l-.1.333c.261.029.525.082.786.16 2.328.7 3.64 3.175 2.933 5.528-.707 2.353-3.167 3.694-5.494 2.995-2.327-.7-3.64-3.175-2.933-5.528a4.51 4.51 0 0 1 .35-.845l-.54-.163c-.03.265-.085.531-.164.796-.708 2.353-3.168 3.694-5.495 2.994-2.327-.7-3.64-3.174-2.933-5.527.708-2.354 3.168-3.694 5.495-2.995.295.089.574.206.835.349l.083-.276Z" clip-rule="evenodd"></path>
                                        <path fill="url(#pattern-home-hero-btn-circles-0)" fill-opacity=".6" fill-rule="evenodd" d="M7.959 10.053a4.368 4.368 0 0 1-.889-.17c-2.327-.7-3.64-3.174-2.933-5.527C4.845 2.002 7.305.662 9.632 1.36c2.327.7 3.64 3.174 2.933 5.528-.06.197-.131.387-.214.57l.46.138c.032-.198.078-.396.137-.593.707-2.353 3.167-3.694 5.494-2.995 2.328.7 3.64 3.175 2.933 5.528-.707 2.353-3.167 3.694-5.494 2.995a4.377 4.377 0 0 1-.745-.3l-.1.333c.261.029.525.082.786.16 2.328.7 3.64 3.175 2.933 5.528-.707 2.353-3.167 3.694-5.494 2.995-2.327-.7-3.64-3.175-2.933-5.528a4.51 4.51 0 0 1 .35-.845l-.54-.163c-.03.265-.085.531-.164.796-.708 2.353-3.168 3.694-5.495 2.994-2.327-.7-3.64-3.174-2.933-5.527.708-2.354 3.168-3.694 5.495-2.995.295.089.574.206.835.349l.083-.276Z" clip-rule="evenodd"></path>
                                        <defs>
                                            <radialGradient id="paint0_radial_2146_58993" cx="0" cy="0" r="1" gradientTransform="rotate(-31.559 22.628 3.049) scale(17.064 11.3981)" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#FFD9B0"></stop>
                                                <stop offset=".807" stop-color="#FD9F3B"></stop>
                                                <stop offset="1" stop-color="#FF8709"></stop>
                                            </radialGradient>
                                            <pattern id="pattern-home-hero-btn-circles-0" width="5.556" height="5.556" patternContentUnits="objectBoundingBox">
                                                <use xlink:href="#svg-noise" transform="scale(.01111)"></use>
                                            </pattern>
                                        </defs>
                                    </svg>
                                </div>
                                <div id="btn-windmill" style="opacity: 0; margin-left: 20px; margin-top: -55px; translate: none; rotate: none; scale: none; transform: translate(-40.6396px, 0px) rotate(-360deg) scale(0.3, 0.3); z-index: -1;">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="none" width="62" height="63" viewBox="0 0 62 63" aria-hidden="true">
                                        <path fill="url(#paint0_radial_2771_42684)" d="m34.246 27.525 10.197-13.201a.26.26 0 0 1 .362-.047L61.76 27.372a.26.26 0 0 1 .046.366c-7.386 9.336-20.882 11.074-30.391 3.919l16.975 13.112c.112.087.133.25.046.362L35.34 62.085a.26.26 0 0 1-.365.046c-9.41-7.444-11.1-21.093-3.746-30.616l-13.255 17.16a.259.259 0 0 1-.362.046L.658 35.626a.26.26 0 0 1-.046-.365c7.386-9.337 20.881-11.074 30.391-3.92l-16.935-13.08a.259.259 0 0 1-.047-.363L27.117.944a.26.26 0 0 1 .365-.046c8.08 6.393 10.469 17.361 6.326 26.362-.129.278.25.508.439.264l-.001.001Z"></path>
                                        <path fill="url(#pattern-home-hero-btn-windmill-0)" fill-opacity=".6" d="m34.246 27.525 10.197-13.201a.26.26 0 0 1 .362-.047L61.76 27.372a.26.26 0 0 1 .046.366c-7.386 9.336-20.882 11.074-30.391 3.919l16.975 13.112c.112.087.133.25.046.362L35.34 62.085a.26.26 0 0 1-.365.046c-9.41-7.444-11.1-21.093-3.746-30.616l-13.255 17.16a.259.259 0 0 1-.362.046L.658 35.626a.26.26 0 0 1-.046-.365c7.386-9.337 20.881-11.074 30.391-3.92l-16.935-13.08a.259.259 0 0 1-.047-.363L27.117.944a.26.26 0 0 1 .365-.046c8.08 6.393 10.469 17.361 6.326 26.362-.129.278.25.508.439.264l-.001.001Z"></path>
                                        <defs>
                                            <radialGradient id="paint0_radial_2771_42684" cx="0" cy="0" r="1" gradientTransform="rotate(-142.317 24.316 16.274) scale(34.5669)" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#F0FCFF"></stop>
                                                <stop offset=".672" stop-color="#9BEDFF"></stop>
                                                <stop offset=".76" stop-color="#98ECFF"></stop>
                                                <stop offset=".849" stop-color="#5BE1FF"></stop>
                                                <stop offset=".948" stop-color="#00BAE2"></stop>
                                            </radialGradient>
                                            <pattern id="pattern-home-hero-btn-windmill-0" width="2.279" height="2.279" patternContentUnits="objectBoundingBox">
                                                <use xlink:href="#svg-noise" transform="scale(.00456)"></use>
                                            </pattern>
                                        </defs>
                                    </svg>
                                </div>
                                <div id="btn-square" style="opacity: 0; margin-left: -100px; margin-top: -65px; translate: none; rotate: none; scale: none; transform: translate3d(17.7954px, 0px, 0px) rotate(-360deg) scale(0.3, 0.3); z-index: -1;">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="none" width="19" height="19" viewBox="0 0 19 19" aria-hidden="true">
                                        <path fill="url(#paint0_linear_2771_24471)" d="M.27 7.683a1 1 0 0 1 .372-1.364L10.995.409a1 1 0 0 1 1.364.373l5.91 10.352a1 1 0 0 1-.373 1.365l-10.353 5.91a1 1 0 0 1-1.364-.373L.27 7.683Z"></path>
                                        <path fill="url(#pattern-home-hero-btn-square-0)" fill-opacity=".6" d="M.27 7.683a1 1 0 0 1 .372-1.364L10.995.409a1 1 0 0 1 1.364.373l5.91 10.352a1 1 0 0 1-.373 1.365l-10.353 5.91a1 1 0 0 1-1.364-.373L.27 7.683Z"></path>
                                        <defs>
                                            <linearGradient id="paint0_linear_2771_24471" x1="24.297" x2="3.329" y1="7.113" y2="17.933" gradientUnits="userSpaceOnUse">
                                                <stop offset=".144" stop-color="#FFE9FE"></stop>
                                                <stop offset="1" stop-color="#FF96F9"></stop>
                                            </linearGradient>
                                            <pattern id="pattern-home-hero-btn-square-0" width="5.08" height="5.08" patternContentUnits="objectBoundingBox">
                                                <use xlink:href="#svg-noise" transform="scale(.01016)"></use>
                                            </pattern>
                                        </defs>
                                    </svg>
                                </div>
                                <div id="btn-star" style="opacity: 0; margin-left: -140px; margin-top: -40px; translate: none; rotate: none; scale: none; transform: translate3d(36.367px, 0px, 0px) rotate(-360deg) scale(0.3, 0.3); z-index: -1;">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="none" width="18" height="18" viewBox="0 0 18 18" aria-hidden="true">
                                        <path fill="url(#paint0_linear_2771_24384)" fill-rule="evenodd" d="m6.324 7.326-4.936-.849a1.078 1.078 0 0 0-.374 2.124l4.93.887-4.091 2.89a1.078 1.078 0 0 0 1.238 1.766l4.112-2.858-.849 4.936a1.078 1.078 0 0 0 2.124.374l.887-4.93 2.89 4.09a1.078 1.078 0 0 0 1.766-1.238l-2.858-4.111 4.936.848a1.078 1.078 0 0 0 .374-2.124l-4.93-.887 4.09-2.89a1.078 1.078 0 0 0-1.238-1.766l-4.111 2.858.848-4.935a1.078 1.078 0 0 0-2.124-.374l-.886 4.93-2.89-4.091a1.078 1.078 0 0 0-1.766 1.238l2.858 4.112Z" clip-rule="evenodd"></path>
                                        <path fill="url(#pattern-home-hero-btn-star-0)" fill-opacity=".6" fill-rule="evenodd" d="m6.324 7.326-4.936-.849a1.078 1.078 0 0 0-.374 2.124l4.93.887-4.091 2.89a1.078 1.078 0 0 0 1.238 1.766l4.112-2.858-.849 4.936a1.078 1.078 0 0 0 2.124.374l.887-4.93 2.89 4.09a1.078 1.078 0 0 0 1.766-1.238l-2.858-4.111 4.936.848a1.078 1.078 0 0 0 .374-2.124l-4.93-.887 4.09-2.89a1.078 1.078 0 0 0-1.238-1.766l-4.111 2.858.848-4.935a1.078 1.078 0 0 0-2.124-.374l-.886 4.93-2.89-4.091a1.078 1.078 0 0 0-1.766 1.238l2.858 4.112Z" clip-rule="evenodd" style="mix-blend-mode:multiply"></path>
                                        <defs>
                                            <linearGradient id="paint0_linear_2771_24384" x1="24.729" x2="25.351" y1="8.665" y2="20.075" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#0AE448"></stop>
                                                <stop offset="1" stop-color="#0085D0"></stop>
                                            </linearGradient>
                                            <pattern id="pattern-home-hero-btn-star-0" width="11.452" height="11.452" patternContentUnits="objectBoundingBox">
                                                <use xlink:href="#svg-noise" transform="scale(.0229)"></use>
                                            </pattern>
                                        </defs>
                                    </svg>
                                </div>
                            </div>
                            <div id="indo" style="margin-left: -80px;">
                                <span>INDO</span>
                            </div>
                        </div>


                    </a>
                    <a id="animationContainer2" href="<?= base_url('document/CV BHAKTI RAGIL VARINO ENGLISH.pdf') ?>" class="genric-btn primary-border circle text-uppercase mt-4 ml-3">
                        <div style="display: flex; margin-left:-20 ;">
                            <div id="cv2">
                                <span>CV</span>
                            </div>
                            <div>
                                <div id="btn-circles2" style="opacity: 0; margin-left: -25px; translate: none; rotate: none; scale: none; transform: translate(-16.1033px, 0px) rotate(-360deg) scale(0.3, 0.3); z-index: -1;">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="none" width="23" height="23" viewBox="0 0 23 23" aria-hidden="true">
                                        <path fill="url(#paint0_radial_2146_58993)" fill-rule="evenodd" d="M7.959 10.053a4.368 4.368 0 0 1-.889-.17c-2.327-.7-3.64-3.174-2.933-5.527C4.845 2.002 7.305.662 9.632 1.36c2.327.7 3.64 3.174 2.933 5.528-.06.197-.131.387-.214.57l.46.138c.032-.198.078-.396.137-.593.707-2.353 3.167-3.694 5.494-2.995 2.328.7 3.64 3.175 2.933 5.528-.707 2.353-3.167 3.694-5.494 2.995a4.377 4.377 0 0 1-.745-.3l-.1.333c.261.029.525.082.786.16 2.328.7 3.64 3.175 2.933 5.528-.707 2.353-3.167 3.694-5.494 2.995-2.327-.7-3.64-3.175-2.933-5.528a4.51 4.51 0 0 1 .35-.845l-.54-.163c-.03.265-.085.531-.164.796-.708 2.353-3.168 3.694-5.495 2.994-2.327-.7-3.64-3.174-2.933-5.527.708-2.354 3.168-3.694 5.495-2.995.295.089.574.206.835.349l.083-.276Z" clip-rule="evenodd"></path>
                                        <path fill="url(#pattern-home-hero-btn-circles-0)" fill-opacity=".6" fill-rule="evenodd" d="M7.959 10.053a4.368 4.368 0 0 1-.889-.17c-2.327-.7-3.64-3.174-2.933-5.527C4.845 2.002 7.305.662 9.632 1.36c2.327.7 3.64 3.174 2.933 5.528-.06.197-.131.387-.214.57l.46.138c.032-.198.078-.396.137-.593.707-2.353 3.167-3.694 5.494-2.995 2.328.7 3.64 3.175 2.933 5.528-.707 2.353-3.167 3.694-5.494 2.995a4.377 4.377 0 0 1-.745-.3l-.1.333c.261.029.525.082.786.16 2.328.7 3.64 3.175 2.933 5.528-.707 2.353-3.167 3.694-5.494 2.995-2.327-.7-3.64-3.175-2.933-5.528a4.51 4.51 0 0 1 .35-.845l-.54-.163c-.03.265-.085.531-.164.796-.708 2.353-3.168 3.694-5.495 2.994-2.327-.7-3.64-3.174-2.933-5.527.708-2.354 3.168-3.694 5.495-2.995.295.089.574.206.835.349l.083-.276Z" clip-rule="evenodd"></path>
                                        <defs>
                                            <radialGradient id="paint0_radial_2146_58993" cx="0" cy="0" r="1" gradientTransform="rotate(-31.559 22.628 3.049) scale(17.064 11.3981)" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#FFD9B0"></stop>
                                                <stop offset=".807" stop-color="#FD9F3B"></stop>
                                                <stop offset="1" stop-color="#FF8709"></stop>
                                            </radialGradient>
                                            <pattern id="pattern-home-hero-btn-circles-0" width="5.556" height="5.556" patternContentUnits="objectBoundingBox">
                                                <use xlink:href="#svg-noise" transform="scale(.01111)"></use>
                                            </pattern>
                                        </defs>
                                    </svg>
                                </div>
                                <div id="btn-windmill2" style="opacity: 0; margin-left: 20px; margin-top: -55px; translate: none; rotate: none; scale: none; transform: translate(-40.6396px, 0px) rotate(-360deg) scale(0.3, 0.3); z-index: -1;">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="none" width="62" height="63" viewBox="0 0 62 63" aria-hidden="true">
                                        <path fill="url(#paint0_radial_2771_42684)" d="m34.246 27.525 10.197-13.201a.26.26 0 0 1 .362-.047L61.76 27.372a.26.26 0 0 1 .046.366c-7.386 9.336-20.882 11.074-30.391 3.919l16.975 13.112c.112.087.133.25.046.362L35.34 62.085a.26.26 0 0 1-.365.046c-9.41-7.444-11.1-21.093-3.746-30.616l-13.255 17.16a.259.259 0 0 1-.362.046L.658 35.626a.26.26 0 0 1-.046-.365c7.386-9.337 20.881-11.074 30.391-3.92l-16.935-13.08a.259.259 0 0 1-.047-.363L27.117.944a.26.26 0 0 1 .365-.046c8.08 6.393 10.469 17.361 6.326 26.362-.129.278.25.508.439.264l-.001.001Z"></path>
                                        <path fill="url(#pattern-home-hero-btn-windmill-0)" fill-opacity=".6" d="m34.246 27.525 10.197-13.201a.26.26 0 0 1 .362-.047L61.76 27.372a.26.26 0 0 1 .046.366c-7.386 9.336-20.882 11.074-30.391 3.919l16.975 13.112c.112.087.133.25.046.362L35.34 62.085a.26.26 0 0 1-.365.046c-9.41-7.444-11.1-21.093-3.746-30.616l-13.255 17.16a.259.259 0 0 1-.362.046L.658 35.626a.26.26 0 0 1-.046-.365c7.386-9.337 20.881-11.074 30.391-3.92l-16.935-13.08a.259.259 0 0 1-.047-.363L27.117.944a.26.26 0 0 1 .365-.046c8.08 6.393 10.469 17.361 6.326 26.362-.129.278.25.508.439.264l-.001.001Z"></path>
                                        <defs>
                                            <radialGradient id="paint0_radial_2771_42684" cx="0" cy="0" r="1" gradientTransform="rotate(-142.317 24.316 16.274) scale(34.5669)" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#F0FCFF"></stop>
                                                <stop offset=".672" stop-color="#9BEDFF"></stop>
                                                <stop offset=".76" stop-color="#98ECFF"></stop>
                                                <stop offset=".849" stop-color="#5BE1FF"></stop>
                                                <stop offset=".948" stop-color="#00BAE2"></stop>
                                            </radialGradient>
                                            <pattern id="pattern-home-hero-btn-windmill-0" width="2.279" height="2.279" patternContentUnits="objectBoundingBox">
                                                <use xlink:href="#svg-noise" transform="scale(.00456)"></use>
                                            </pattern>
                                        </defs>
                                    </svg>
                                </div>
                                <div id="btn-square2" style="opacity: 0; margin-left: -100px; margin-top: -65px; translate: none; rotate: none; scale: none; transform: translate3d(17.7954px, 0px, 0px) rotate(-360deg) scale(0.3, 0.3); z-index: -1;">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="none" width="19" height="19" viewBox="0 0 19 19" aria-hidden="true">
                                        <path fill="url(#paint0_linear_2771_24471)" d="M.27 7.683a1 1 0 0 1 .372-1.364L10.995.409a1 1 0 0 1 1.364.373l5.91 10.352a1 1 0 0 1-.373 1.365l-10.353 5.91a1 1 0 0 1-1.364-.373L.27 7.683Z"></path>
                                        <path fill="url(#pattern-home-hero-btn-square-0)" fill-opacity=".6" d="M.27 7.683a1 1 0 0 1 .372-1.364L10.995.409a1 1 0 0 1 1.364.373l5.91 10.352a1 1 0 0 1-.373 1.365l-10.353 5.91a1 1 0 0 1-1.364-.373L.27 7.683Z"></path>
                                        <defs>
                                            <linearGradient id="paint0_linear_2771_24471" x1="24.297" x2="3.329" y1="7.113" y2="17.933" gradientUnits="userSpaceOnUse">
                                                <stop offset=".144" stop-color="#FFE9FE"></stop>
                                                <stop offset="1" stop-color="#FF96F9"></stop>
                                            </linearGradient>
                                            <pattern id="pattern-home-hero-btn-square-0" width="5.08" height="5.08" patternContentUnits="objectBoundingBox">
                                                <use xlink:href="#svg-noise" transform="scale(.01016)"></use>
                                            </pattern>
                                        </defs>
                                    </svg>
                                </div>
                                <div id="btn-star2" style="opacity: 0; margin-left: -140px; margin-top: -40px; translate: none; rotate: none; scale: none; transform: translate3d(36.367px, 0px, 0px) rotate(-360deg) scale(0.3, 0.3); z-index: -1;">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="none" width="18" height="18" viewBox="0 0 18 18" aria-hidden="true">
                                        <path fill="url(#paint0_linear_2771_24384)" fill-rule="evenodd" d="m6.324 7.326-4.936-.849a1.078 1.078 0 0 0-.374 2.124l4.93.887-4.091 2.89a1.078 1.078 0 0 0 1.238 1.766l4.112-2.858-.849 4.936a1.078 1.078 0 0 0 2.124.374l.887-4.93 2.89 4.09a1.078 1.078 0 0 0 1.766-1.238l-2.858-4.111 4.936.848a1.078 1.078 0 0 0 .374-2.124l-4.93-.887 4.09-2.89a1.078 1.078 0 0 0-1.238-1.766l-4.111 2.858.848-4.935a1.078 1.078 0 0 0-2.124-.374l-.886 4.93-2.89-4.091a1.078 1.078 0 0 0-1.766 1.238l2.858 4.112Z" clip-rule="evenodd"></path>
                                        <path fill="url(#pattern-home-hero-btn-star-0)" fill-opacity=".6" fill-rule="evenodd" d="m6.324 7.326-4.936-.849a1.078 1.078 0 0 0-.374 2.124l4.93.887-4.091 2.89a1.078 1.078 0 0 0 1.238 1.766l4.112-2.858-.849 4.936a1.078 1.078 0 0 0 2.124.374l.887-4.93 2.89 4.09a1.078 1.078 0 0 0 1.766-1.238l-2.858-4.111 4.936.848a1.078 1.078 0 0 0 .374-2.124l-4.93-.887 4.09-2.89a1.078 1.078 0 0 0-1.238-1.766l-4.111 2.858.848-4.935a1.078 1.078 0 0 0-2.124-.374l-.886 4.93-2.89-4.091a1.078 1.078 0 0 0-1.766 1.238l2.858 4.112Z" clip-rule="evenodd" style="mix-blend-mode:multiply"></path>
                                        <defs>
                                            <linearGradient id="paint0_linear_2771_24384" x1="24.729" x2="25.351" y1="8.665" y2="20.075" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#0AE448"></stop>
                                                <stop offset="1" stop-color="#0085D0"></stop>
                                            </linearGradient>
                                            <pattern id="pattern-home-hero-btn-star-0" width="11.452" height="11.452" patternContentUnits="objectBoundingBox">
                                                <use xlink:href="#svg-noise" transform="scale(.0229)"></use>
                                            </pattern>
                                        </defs>
                                    </svg>
                                </div>
                            </div>
                            <div id="indo2" style="margin-left: -80px;">
                                <span>ENG</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->

    <!-- Start About Area -->
    <section class="video-sec-area pb-100 pt-40" id="about">
        <div class="container">
            <?php
            $db = \Config\Database::connect();
            $query = $db->table('about')->get();
            $about = $query->getResult();

            foreach ($about as $row) { ?>
                <div class="row justify-content-start align-items-center">
                    <div class="col-lg-6 video-right justify-content-center align-items-center d-flex" data-aos="zoom-in-right" data-aos-duration="1100">
                        <div class="overlay overlay-bg"></div>
                        <a class="play-btn" href="<?= $row->link_youtube_about ?>"><img class="img-fluid" src="<?= Base_url() ?>/Template/1/img/play-icon.png" alt=""></a>
                    </div>
                    <div class="col-lg-6 video-left" data-aos="zoom-in-left" data-aos-delay="500">
                        <h6>Introduce About My Self.</h6>
                        <h1 style="font-family: 'MyCustomFont'; margin-top: 20px;">About Me <br>
                            <?= $row->judul_about ?></h1>
                        <p><span>" <?= $row->quote_about ?> "</span></p>
                        <p>
                            <?= $row->isi_about ?>

                        </p>
                        <img class="img-fluid" src="<?= base_url() ?>/upload_foto/<?= $row->ttd_about ?>" style=" width: 200px;" alt="">
                    </div>
                </div>
            <?php } ?>
        </div>
    </section>
    <!-- End About Area -->

    <!-- Start Tech Stcak Area -->
    <section class="menu-area section-gap" id="coffee">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-60 col-lg-10">
                    <div class="title text-center">
                        <h1 class="mb-10">Technology Suite & Software Framework</h1>
                        <p>Technologies I've been working with recently.</p>
                    </div>
                </div>
            </div>
            <div class="row" data-aos="fade-right" data-aos-delay="50000">
                <?php
                $db = \Config\Database::connect();
                $query = $db->table('technologysuite')->get();
                $technologysuite = $query->getResult();

                foreach ($technologysuite as $row) { ?>
                    <div class="col-lg-4" data-aos="zoom-in-down" data-aos-duration="1100" data-aos-delay="5000">
                        <div class="single-menu">
                            <div class="title-div justify-content-between d-flex">
                                <h4><?= $row->nama_keahlian_technologysuite ?></h4>
                                <p class="price float-right">
                                    <img src="<?= base_url() ?>/upload_foto/<?= $row->foto_technologysuite ?>" alt="" style="width: 35px; height: 35px; margin-top: -10px;">
                                </p>
                            </div>
                            <p style="margin-top: -5px; margin-right:-15px;">
                                <?= $row->keterangan_technologysuite ?>
                            </p>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- End Tech Stack Area -->

    <!-- Start gallery Area -->
    <section class="gallery-area section-gap" id="gallery">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-60 col-lg-12">
                    <div class="title text-center" style="margin-top: 50px;">
                        <h1 class="mb-10">Achievements And Certification</h1>
                        <p>Portfolio Highlights: Showcasing my achievements and certification.</p>
                    </div>
                </div>
            </div>
            <div class="row" id="masonry-grid">
                <?php
                $db = \Config\Database::connect();
                $query = $db->table('achiev')->get();
                $achiev = $query->getResult();

                foreach ($achiev as $row) { ?>
                    <div class="col-lg-4 masonry-item" data-aos="zoom-in-down" data-aos-duration="1000">
                        <a href="<?= base_url() ?>/upload_foto/<?= $row->foto_achiev ?>" class="img-pop-home">
                            <img class="img-fluid" src="<?= base_url() ?>/upload_foto/<?= $row->foto_achiev ?>" alt="">
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- End gallery Area -->

    <!-- Start Experience Area -->
    <section class="review-area section-gap" id="review">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-60 col-lg-10">
                    <div class="title text-center">
                        <h1 class="mb-10"> Education And Work Experience</h1>
                        <p>Comprehensive education and impactful professional experiences.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                $db = \Config\Database::connect();
                $query = $db->table('education')->get();
                $education = $query->getResult();

                foreach ($education as $row) { ?>
                    <div class="col-lg-6 col-md-6 single-review" data-aos="zoom-in" data-aos-delay="9000">
                        <img src="<?= base_url() ?>/upload_foto/<?= $row->logo_instansi_education ?>" style="height: 50px;" alt="">
                        <div class="title d-flex flex-row" data-aos="flip-up" data-aos-duration="1000">
                            <h4 style="color: #B4007B; font-family: 'MyCustomFont2'; font-size: 17px;"><?= $row->nama_instansi_education ?></h4>
                            <div class="star" data-aos="flip-up" data-aos-duration="1000">
                                <h5><?= $row->prodi_education ?></h5>
                            </div>
                        </div>
                        <p style="color: white;">
                            <?= $row->keterangan_education ?>
                        </p>
                    </div>
                <?php } ?>
            </div>
            <div class="row counter-row text-center">
                <?php
                $db = \Config\Database::connect();
                $query = $db->table('workexperience')->get();
                $workexperience = $query->getResult();

                foreach ($workexperience as $row) { ?>
                    <div class="col-lg-12 single-counter text-center" data-aos="zoom-in-up" data-aos-duration="1000">
                        <img src="<?= base_url() ?>/upload_foto/<?= $row->logo_workexperience ?>" style="height: 50px;" alt="">
                        <h3 style="color: #721D7A; font-family: 'MyCustomFont2';" class="mt-3"><?= $row->nama_instansi_workexperience ?></h3>
                        <h4 class="mt-2" style="color: black;"><?= $row->posisi_workexperience ?></h4>
                        <div class="text-center">
                            <h2 class="counter text-white"> <?= $row->tahun_selesai_workexperience ?></h2>
                        </div>

                        <p><?= $row->keterangan_workexperience ?></p>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- End Experience Area -->

    <!-- Start Project Area -->
    <section class="blog-area section-gap" id="blog">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-60 col-lg-10">
                    <div class="title text-center">
                        <h1 class="mb-10">Projects</h1>
                        <p>Portfolio Highlights: Showcasing my notable projects.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                function formatDateIndo($date)
                {
                    $bulan = [
                        1 => 'Januari',
                        'Februari',
                        'Maret',
                        'April',
                        'Mei',
                        'Juni',
                        'Juli',
                        'Agustus',
                        'September',
                        'Oktober',
                        'November',
                        'Desember'
                    ];
                    $split = explode('-', $date);
                    return $split[2] . ' ' . $bulan[(int)$split[1]] . ' ' . $split[0];
                }

                $db = \Config\Database::connect();
                $query = $db->table('project')->get();
                $project = $query->getResult();

                foreach ($project as $row) {
                    // Split the images by comma
                    $images = explode(',', $row->foto_project);
                    // Get the first image
                    $first_image = trim($images[0]);
                    // Format the date and time
                    $dateTime = new DateTime($row->created_at);
                    $formattedDate = formatDateIndo($dateTime->format('Y-m-d'));
                    $formattedTime = $dateTime->format('H:i');

                    $keterangan = $row->keterangan_project;
                    $words = explode(' ', $keterangan);

                    if (count($words) > 30) {
                        $keterangan = implode(' ', array_slice($words, 0, 30)) . ' ...';
                    }
                ?>
                    <div class="col-lg-6 col-md-6 single-blog" data-aos="zoom-out-right">
                        <img class="img-fluid" style="height: 310px;" src="<?= base_url() ?>/upload_foto/<?= $first_image ?>" alt="">
                        <ul class="post-tags">
                            <?php
                            // Assuming kategori_project contains categories separated by commas
                            $categories = explode(',', $row->kategori_project);
                            foreach ($categories as $category) { ?>
                                <li><a href="#"><?= trim($category) ?></a></li>
                            <?php } ?>
                        </ul>
                        <a href="#">
                            <h4><?= $row->nama_project ?></h4>
                        </a>
                        <p>
                            <?= $keterangan ?>
                        </p>
                        <p class="post-date">
                            <?= $formattedDate ?> di Jam <?= $formattedTime ?>
                        </p>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- End Project Area -->

    <!-- start footer Area -->
    <footer class="footer-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>Moto Hidup</h6>
                        <p>
                            Setiap tantangan adalah peluang untuk berkembang. Dengan perpaduan ilmu akuntansi dan teknologi, saya terus mencari cara terbaik dalam pekerjaan yang saya lakukan.
                        </p>
                        <p class="footer-text">
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This Website is made with <i class="fa fa-heart" style="color: red;" aria-hidden="true"></i> by <a href="https://www.linkedin.com/in/bhakti-ragil-varino-84b611298/">Bhakti Ragil Varino</a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-5  col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>Pesan</h6>
                        <p>Tinggalkan Pesan Jika Anda Ingin Menanyakan Lebih Lanjut Dengan Pemilik !!</p>
                        <div class="">
                            <form action="<?= base_url('lp/save') ?>" method="post" class="form-inline">
                                <input class="form-control" name="email" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
                                <textarea class="form-control mt-2" style="width: 357px;" name="pesan" placeholder="Masukan pesan Anda" required=""></textarea>
                                <button class="click-btn mt-2" type="submit"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
                                <div class="info pt-20"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6 social-widget">
                    <div class="single-footer-widget">
                        <h6>Follow Us</h6>
                        <p>Let us be social Media</p>
                        <div class="footer-social d-flex align-items-center">
                            <a href="https://web.facebook.com/profile.php?id=100009155707215"><i class="fa fa-facebook"></i></a>
                            <a href="https://www.instagram.com/bhaktiragill_/"><i class="fa fa-instagram"></i></a>
                            <a href="https://x.com/RagilBhakti"><i class="fa fa-twitter"></i></a>
                            <a href="https://www.linkedin.com/in/bhakti-ragil-varino-84b611298/"><i class="fa fa-linkedin"></i></a>
                            <a href="https://github.com/BhaktiragilVarino"><i class="fa fa-github"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End footer Area -->

    <script src="<?= base_url() ?>/Template/1/js/vendor/jquery-2.2.4.min.js"></script>

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> -->
    <script src="<?= base_url() ?>/Template/1/js/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <script src="<?= base_url() ?>/Template/1/js/vendor/bootstrap.min.js"></script>

    <script src="<?= base_url() ?>/Template/1/js/easing.min.js"></script>
    <script src="<?= base_url() ?>/Template/1/js/hoverIntent.js"></script>
    <script src="<?= base_url() ?>/Template/1/js/superfish.min.js"></script>
    <script src="<?= base_url() ?>/Template/1/js/jquery.ajaxchimp.min.js"></script>
    <script src="<?= base_url() ?>/Template/1/js/jquery.magnific-popup.min.js"></script>
    <script src="<?= base_url() ?>/Template/1/js/owl.carousel.min.js"></script>
    <script src="<?= base_url() ?>/Template/1/js/jquery.sticky.js"></script>
    <script src="<?= base_url() ?>/Template/1/js/jquery.nice-select.min.js"></script>
    <script src="<?= base_url() ?>/Template/1/js/parallax.min.js"></script>
    <script src="<?= base_url() ?>/Template/1/js/waypoints.min.js"></script>
    <script src="<?= base_url() ?>/Template/1/js/jquery.counterup.min.js"></script>
    <script src="<?= base_url() ?>/Template/1/js/mail-script.js"></script>
    <script src="<?= base_url() ?>/Template/1/js/main.js"></script>

    <script src="<?= base_url() ?>/Template/1/js/masonry.pkgd.min.js"></script>
    <script src="<?= base_url() ?>/Template/1/js/imagesloaded.pkgd.min.js"></script>

    <script>
        $(document).ready(function() {
            var $grid = $('#masonry-grid').masonry({
                itemSelector: '.masonry-item',
                columnWidth: '.masonry-item',
                percentPosition: true,
                gutter: 30
            });

            $grid.imagesLoaded().progress(function() {
                $grid.masonry('layout');
            });

            $(window).resize(function() {
                $grid.masonry('layout');
            });
        });

        // document.addEventListener("DOMContentLoaded", function() {
        //     // Function to hide the loading screen
        //     function hideLoading() {
        //         var loading = document.getElementById('loading');
        //         loading.style.display = 'none';
        //     }

        //     // Set a timeout to hide the loading screen after 3 seconds
        //     setTimeout(hideLoading, 4000);
        // });
    </script>

    <!-- <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> -->
    <script src="<?= base_url() ?>/Template/1/js/aos.js"></script>

    <script>
        AOS.init();
    </script>

    <!-- <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12/dist/gsap.min.js"></script> -->
    <script src="<?= base_url() ?>/Template/1/js/gsap.min.js"></script>
    <script src="<?= base_url() ?>/Template/1/js/gsapp.min.js"></script>

    <!-- <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/Flip.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/Observer.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollToPlugin.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/Draggable.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/MotionPathPlugin.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/EaselPlugin.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/PixiPlugin.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/TextPlugin.min.js"></script> -->
    <script src="<?= base_url() ?>/Template/1/js/Flip.min.js"></script>
    <script src="<?= base_url() ?>/Template/1/js/ScrollTrigger.min.js"></script>
    <script src="<?= base_url() ?>/Template/1/js/Observer.min.js"></script>
    <script src="<?= base_url() ?>/Template/1/js/ScrollToPlugin.min.js"></script>
    <script src="<?= base_url() ?>/Template/1/js/Draggable.min.js"></script>
    <script src="<?= base_url() ?>/Template/1/js/MotionPathPlugin.min.js"></script>
    <script src="<?= base_url() ?>/Template/1/js/EaselPlugin.min.js"></script>
    <script src="<?= base_url() ?>/Template/1/js/PixiPlugin.min.js"></script>
    <script src="<?= base_url() ?>/Template/1/js/TextPlugin.min.js"></script>

    <!-- <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/EasePack.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/CustomEase.min.js"></script> -->
    <script src="<?= base_url() ?>/Template/1/js/EasePack.min.js"></script>
    <script src="<?= base_url() ?>/Template/1/js/CustomEase.min.js"></script>

    <script src="<?= base_url() ?>/Template/1/sweetalert/sweetalert.min.js"></script>

    <?php if (!empty(session()->getflashdata('success'))) { ?>
        <script>
            swal("Congratulation", "<?= session()->getFlashData('success'); ?>", "success");
        </script>
        <!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
    <?php session()->remove('success');
    } ?>

    <?php if (!empty(session()->getflashdata('errors'))) { ?>
        <script>
            swal("Mohon Maaf", "<?= session()->getFlashData('errors'); ?>", "error");
        </script>
        <!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
    <?php session()->remove('errors');
    } ?>

    <?php if (!empty(session()->getflashdata('info'))) { ?>
        <script>
            swal("Mohon Perhatian", "<?= session()->getFlashData('info'); ?>", "info");
        </script>
        <!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
    <?php session()->remove('info');
    } ?>

    <script>
        // use a script tag or an external JS file
        document.addEventListener("DOMContentLoaded", (event) => {
            gsap.registerPlugin(Flip, ScrollTrigger, Observer, ScrollToPlugin, Draggable, MotionPathPlugin, EaselPlugin, PixiPlugin, TextPlugin, RoughEase, ExpoScaleEase, SlowMo, CustomEase, EasePack)
            // gsap code here!
        });
    </script>

    <script>
        const tl = gsap.timeline();

        tl.to("#hellow1", {
                duration: 0.5,
                y: 20,
                rotationX: 180,
                ease: "power2.in"
            }, 0)
            .to("#hellow1", {
                duration: 1,
                y: 0,
                rotationX: 0,
                ease: "power2.out"
            });
        tl.to("#hellow2", {
                duration: 0.2,
                scale: 1,
                opacity: 1,
                ease: "power2.out"
            }, 0)
            // Move up 90px
            .to("#hellow2", {
                duration: 0.5,
                y: -90, // Move up 90px
                ease: "power2.out"
            })
            // Fade out
            .to("#hellow2", {
                duration: 0.5,
                opacity: 0,
                ease: "power2.out"
            });
        tl.to("#hellow3", {
                duration: 0.1,
                opacity: 1,
                ease: "power2.out"
            })
            .from("#hellow3", {
                duration: 0.4,
                y: 20,
            });
        tl.to("#hellow4", {
                duration: 0.1,
                opacity: 1,
                ease: "power2.out"
            }, 2)
            .from("#hellow4", {
                duration: 0.2,
                x: -40,
            }, 3)
            .to("#hellow4", {
                rotation: 360,
                duration: 2,
                repeat: -1,
            });
        tl.to("#hellow3", {
            duration: 0.5,
            opacity: 0,
            ease: "power2.in"
        });
        tl.to("#hellow5", {
            duration: 0.3,
            opacity: 1,
            rotationY: 180,
            ease: "power2.out"
        });
        tl.to("#hellow6", {
                duration: 0.5,
                opacity: 1,
                ease: "power2.in"
            }, 3)
            .from("#hellow6", {
                duration: 0.3,
                y: -40,
                ease: "power2.out"
            });
        tl.to("#hellow7", {
                duration: 0.5,
                opacity: 1,
                ease: "power2.in"
            }, 4)
            .from("#hellow7", {
                duration: 0.4,
                x: -20,
                ease: "power2.out"
            }, 5);
        tl.from("#hellow8", {
                duration: 0.5,
                x: -20, // Start from 20px to the left
                opacity: 0, // Start with opacity 0
                ease: "power2.out"
            }, 1)
            .to("#hellow8", {
                duration: 0.1,
                x: 0, // Move to original position
                rotation: 360,
                repeat: -1,
                ease: "power2.inOut"
            }, 5)
            .to("#hellow8", {
                duration: 0.3,
                y: 40, // Move down 20px
                ease: "power2.inOut"
            })
            .to("#hellow8", {
                duration: 0.3,
                opacity: 0, // Fade out to opacity 0
                ease: "power2.out"
            });
        tl.from("#hellow9", {
            duration: 0.5,
            y: 20,
            opacity: 0,
            ease: "power2.out"
        });
        tl.to("#hellow10", {
                duration: 0.5,
                y: -40,
                opacity: 1,
                ease: "power2.out"
            }, 3)
            .to("#hellow10", {
                duration: 0.5,
                opacity: 0,
                ease: "power2.out"
            });
        tl.from("#hellow11", {
            duration: 0.5,
            y: 20,
            opacity: 0,
            ease: "power2.out"
        }, 6);
        tl.to("#hellow12", {
                duration: 0.5,
                y: -40,
                opacity: 1,
                ease: "power2.out"
            }, 6)
            .to("#hellow12", {
                duration: 0.5,
                opacity: 0,
                ease: "power2.out"
            }, );
        tl.from("#hellow13", {
            duration: 0.5,
            y: 20,
            opacity: 0,
            ease: "power2.out"
        }, 6);
        tl.to("#hellow14", {
                duration: 0.5,
                y: -40,
                opacity: 1,
                ease: "power2.out"
            }, 6)
            .to("#hellow14", {
                duration: 0.5,
                opacity: 0,
                ease: "power2.out"
            });
    </script>

    <script>
        const tll = gsap.timeline({
            paused: true
        });
        tll.to("#btn-circles", {
                duration: 0.8,
                opacity: 1,
                y: -60,
                x: 5,
                scale: 0.7,
                ease: "power2.in"
            }, 0)
            .to("#btn-circles", {
                duration: 1,
                y: 0,
                x: 10,
                rotation: 360,
                scale: 0.3,
                ease: "power2.in"
            }, 0.8)
            .to("#btn-circles", {
                duration: 0.1,
                opacity: 0,
                scale: 0.3,
            }, 1.7);

        tll.to("#btn-windmill", {
                duration: 0.8,
                opacity: 1,
                y: -70,
                x: -65,
                rotation: -240,
                ease: "power2.in"
            }, 0)

            .to("#btn-windmill", {
                duration: 1,
                y: 0,
                x: -70,
                rotation: -420,
                scale: 0.3,
                ease: "power2.in"
            }, 0.73)
            .to("#btn-windmill", {
                duration: 0.1,
                opacity: 0,
                scale: 0.3,
            }, 1.6);
        tll.to("#btn-square", {
                duration: 0.8,
                opacity: 1,
                y: -60,
                x: 10,
                rotation: -360,
                scale: 0.5,
                ease: "power2.in"
            }, 0)
            .to("#btn-square", {
                duration: 1,
                y: 0,
                x: 0,
                rotation: -360,
                scale: 0.3,
                ease: "power2.in"
            }, 0.8)
            .to("#btn-square", {
                duration: 0.1,
                opacity: 0,
                scale: 0.3,
            }, 1.7);
        tll.to("#btn-star", {
                duration: 0.8,
                opacity: 1,
                y: -50,
                x: 50,
                rotation: -360,
                scale: 0.5,
                ease: "power2.in"
            }, 0)
            .to("#btn-star", {
                duration: 1,
                y: 0,
                x: 55,
                rotation: -360,
                scale: 0.3,
                ease: "power2.in"
            }, 0.8)
            .to("#btn-star", {
                duration: 0.1,
                opacity: 0,
                scale: 0.3,
            }, 1.7);
        tll.to("#cv", {
                duration: 0.5,
                x: -5,
                ease: "power2.in"
            }, 0)
            .to("#cv", {
                duration: 0.5,
                x: 5,
                ease: "power2.in"
            }, 1.7);
        tll.to("#indo", {
                duration: 0.5,
                x: 24,
                ease: "power2.in"
            }, 0)
            .to("#indo", {
                duration: 0.5,
                x: 9,
                ease: "power2.in"
            }, 1.7);
        tll.to("#animationContainer", {
                duration: 0.5,
                width: 120,
                ease: "power2.in"
            }, 0)
            .to("#animationContainer", {
                duration: 0.5,
                width: 115,
                ease: "power2.in"
            }, 1.7);

        document.getElementById("animationContainer").addEventListener("mouseenter", () => {
            tll.restart();
        });
    </script>

    <script>
        const tlll = gsap.timeline({
            paused: true
        });
        tlll.to("#btn-circles2", {
                duration: 1,
                opacity: 1,
                y: -150,
                x: 115,
                scale: 1,
                ease: "power2.in"
            }, 0)

            .to("#btn-circles2", {
                duration: 0.1,
                scale: 0.3,
                opacity: 0,
                ease: "power2.out"
            }, 1);

        tlll.to("#btn-windmill2", {
                duration: 1,
                opacity: 1,
                y: -130,
                x: -125,
                rotation: -240,
                ease: "power2.in"
            }, 0)

            .to("#btn-windmill2", {
                duration: 0.1,
                opacity: 0,
                scale: 0.3,
            }, 1);
        tlll.to("#btn-square2", {
                duration: 1,
                opacity: 1,
                y: -70,
                x: -20,
                rotation: -360,
                scale: 0.5,
                ease: "power2.in"
            }, 0)

            .to("#btn-square2", {
                duration: 0.1,
                opacity: 0,
                scale: 0.3,
            }, 1);
        tlll.to("#btn-star2", {
                duration: 1,
                opacity: 1,
                y: -80,
                x: 60,
                rotation: -360,
                scale: 0.5,
                ease: "power2.in"
            }, 0)
            .to("#btn-star2", {
                duration: 0.1,
                opacity: 0,
                scale: 0.3,
            }, 1);
        tlll.to("#cv2", {
                duration: 0.5,
                x: -5,
                ease: "power2.in"
            }, 0)
            .to("#cv2", {
                duration: 0.5,
                x: 5,
                ease: "power2.in"
            }, 1.7);
        tlll.to("#indo2", {
                duration: 0.5,
                x: 24,
                ease: "power2.in"
            }, 0)
            .to("#indo2", {
                duration: 0.5,
                x: 9,
                ease: "power2.in"
            }, 1.7);
        tlll.to("#animationContainer2", {
                duration: 0.5,
                width: 120,
                ease: "power2.in"
            }, 0)
            .to("#animationContainer2", {
                duration: 0.5,
                width: 115,
                ease: "power2.in"
            }, 1.7);

        document.getElementById("animationContainer2").addEventListener("mouseenter", () => {
            tlll.restart();
        });
    </script>

    <script>
        const nama = gsap.timeline();

        nama.from("#nama1", {
                duration: 0.7,
                opacity: 0,
                y: 30,
                ease: "power2.in"
            }, 0)
            .to("#nama1", {
                duration: 0.8,
                y: 30,
                opacity: 0,
                ease: "power2.out"
            }, 1)
            .to("#nama2", {
                duration: 0.6,
                opacity: 1,
                y: 44,
                ease: "power2.in"
            }, 1)
            .to("#nama2", {
                duration: 0.6,
                y: 0,
                opacity: 0,
                ease: "power2.in"
            }, 2)
            .to("#nama1", {
                duration: 0.8,
                y: 0,
                opacity: 1,
                ease: "power2.out"
            }, 2.4);
        nama.from("#nama3", {
                duration: 0.7,
                opacity: 0,
                y: 30,
                ease: "power2.in"
            }, 1)
            .to("#nama3", {
                duration: 0.8,
                y: 30,
                opacity: 0,
                ease: "power2.out"
            }, 2)
            .to("#nama4", {
                duration: 0.6,
                opacity: 1,
                y: 44,

                ease: "power2.in"
            }, 2)
            .to("#nama4", {
                duration: 0.6,
                y: 0,
                opacity: 0,
                ease: "power2.in"
            }, 3)
            .to("#nama3", {
                duration: 0.8,
                y: 0,
                opacity: 1,
                ease: "power2.out"
            }, 3.4);
        nama.to("#nama5", {
            duration: 1.3,
            opacity: 1,
            rotationY: 360,
            scale: 1,
            ease: "power2.in"
        }, 0);
        nama.to("#nama6", {
                duration: 0.6,
                opacity: 1,
                scale: 1,
                ease: "power2.in"
            }, 0)
            .to("#nama6", {
                duration: 0.3,
                color: "green",
            }, 1)
            .to("#nama6", {
                duration: 0.5,
                y: -70,
                x: 50,
                rotation: 70,
                scale: 0.5,
                opacity: 0,
            }, 2)
            .to("#nama7", {
                duration: 0.6,
                opacity: 1,
                y: -46,
                ease: "power2.in"
            }, 2);
        nama.from("#nama8", {
                duration: 0.6,
                opacity: 0,
                y: -50,
                ease: "power2.in"
            }, 1)
            .to("#nama8", {
                duration: 0.6,
                rotation: 38,
                x: -17,
                y: -8,
                ease: "power2.in"
            }, 2);
        nama.from("#nama9", {
            duration: 0.6,
            opacity: 0,
            y: 70,
            ease: "power2.in"
        }, 1);
        nama.to("#nama10", {
                duration: 1.3,
                opacity: 1,
                rotationX: 360,
                scale: 1,
                ease: "power2.in",
            }, 0)
            .to("#nama10", {
                duration: 2,
                Y: 0,
            }, 1)
            .to("#nama10", {
                duration: 1.5,
                rotationX: 720,
                repeat: -1,
                repeatDelay: 2,
            }, 3);
        nama.from("#nama11", {
                duration: 1.3,
                y: -300,
                opacity: 0,
                ease: "power2.in",
            }, 0)
            .to("#nama11", {
                duration: 0.3,
                y: -30,
            }, 1.3)
            .to("#nama11", {
                duration: 0.3,
                y: -20,
            }, 1.6);
        nama.from("#nama12", {
            duration: 1.3,
            x: 30,
            opacity: 0,
            ease: "power2.in",
        }, 0);
        nama.from("#nama13", {
            duration: 1.3,
            x: -30,
            opacity: 0,
            ease: "power2.in",
        }, 0);
        nama.from("#nama14", {
            duration: 0.5,
            y: 300,
            opacity: 0,
            ease: "power2.in",
        }, 0.8);
        nama.from("#nama15", {
                duration: 1.3,
                y: -320,
                opacity: 0,
                ease: "power2.in",
            }, 3.2)
            .to("#nama15", {
                duration: 0.5,
                y: -10,
                ease: "power2.in",
            }, 4.5)
            .to("#nama15", {
                duration: 0.5,
                y: 0,
                ease: "power2.in",
            }, 5);
        nama.from("#nama16", {
            duration: 0.5,
            y: 300,
            opacity: 0,
            ease: "power2.in",
        }, 0.8);
        nama.from("#flower", {
                duration: 0.5,
                x: 190,
                rotation: 45,
                opacity: 0,
                ease: "power2.in",
            }, 6)
            .to("#flower", {
                duration: 0.5,
                rotation: 55,
                ease: "power2.out",
            }, 6.5);
        document.getElementById("flower").addEventListener("click", function() {
            gsap.to("#flower", {
                duration: 1.3,
                rotation: "+=360",
                opacity: 1,
                ease: "power2.in"
            });
        });
    </script>

</body>

</html>