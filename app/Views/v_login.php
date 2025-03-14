<!doctype html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <link rel="shortcut icon" href="<?= base_url() ?>/Template/1/img/image.png">

    <title>Portofolio - Bhakti Ragil Varino</title>

    <link href="<?= base_url() ?>/Template/1/css/bootstrap/bootstrap.min.css" rel="stylesheet">

    <link href='https://use.fontawesome.com/releases/v5.7.2/css/all.css' rel='stylesheet'>

    <script type="text/javascript" src="<?= base_url() ?>/Template/1/js/jquery.min.js"></script>

    <style>
        ::-webkit-scrollbar {
            width: 8px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #888;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }

        body {
            background-color: #19123B;
            background: url(../Template/1/img/bg.jpg) center no-repeat;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            height: 90vh;
            transform: scale(0.8);
            transform-origin: top left;
            width: 125%;

        }

        .card {
            border: none;
            margin-top: 120px;
            border-top: 5px solid rgb(176, 106, 252);
            background: #212042;
            color: #57557A;
        }

        p {
            font-weight: 600;
            font-size: 15px;
        }

        .fab {
            display: flex;
            justify-content: center;
            align-items: center;
            border: none;
            background: #2A284D;
            height: 40px;
            width: 90px;
        }

        .fab:hover {
            cursor: pointer;
        }

        .fa-twitter {
            color: #56ABEC;
        }

        .fa-facebook {
            color: #1775F1;
        }

        .fa-google {
            color: #CB5048;
        }

        .division {
            float: none;
            position: relative;
            margin: 30px auto 20px;
            text-align: center;
            width: 100%;
            box-sizing: border-box;
        }

        .division .line {
            border-top: 1.5px solid #57557A;
            ;
            position: absolute;
            top: 13px;
            width: 85%;
        }

        .line.l {
            left: 52px;
        }

        .line.r {
            right: 45px;

        }

        .division span {
            font-weight: 600;
            font-size: 14px;
        }

        .myform {
            padding: 0 25px 0 33px;
        }

        .form-control {
            border: 1px solid #57557A;
            border-radius: 3px;
            background: #212042;
            margin-bottom: 20px;
            letter-spacing: 1px;

        }

        .form-control:focus {
            border: 1px solid #57557A;
            border-radius: 3px;
            box-shadow: none;
            background: #212042;
            color: #fff;
            letter-spacing: 1px;
        }

        .bn {
            text-decoration: underline;
        }

        .bn:hover {
            cursor: pointer;
        }

        .form-check-input {
            margin-top: 8px !important;
        }

        .btn-primary {
            background: linear-gradient(135deg, rgba(176, 106, 252, 1) 39%, rgba(116, 17, 255, 1) 101%);
            border: none;
            border-radius: 50px;
        }

        .btn-primary:focus {
            box-shadow: none;
            border: none;
        }

        small {
            color: #F2CEFF;
        }

        .far.fa-user {
            font-size: 13px;
        }

        @media(min-width: 767px) {
            .bn {
                text-align: right;
            }
        }

        @media(max-width: 767px) {
            .form-check {
                text-align: center;
            }

            .bn {
                text-align: center;
                align-items: center;
            }
        }

        @media(max-width: 450px) {
            .fab {
                width: 100%;
                height: 100%;
            }

            .division .line {
                width: 50%;
            }
        }
    </style>
</head>

<body className='snippet-body'>

    <div class="container">
        <div class="row d-flex justify-content-center mt-5">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card py-3 px-2">
                    <h1 class="text-center">Selamat Datang</h1>
                    <p class="text-center mb-3 mt-2">HUBUNGI ADMIN</p>
                    <div class="row mx-auto ">
                        <a href="https://x.com/RagilBhakti" class="col-3">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://web.facebook.com/profile.php?id=100009155707215" class="col-3">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="https://www.instagram.com/bhaktiragill_/" class="col-3">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://www.linkedin.com/in/bhakti-ragil-varino-84b611298/" class="col-3">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </div>
                    <div class="division">
                        <div class="row">
                            <div class="col-3">
                                <div class="line l"></div>
                            </div>
                            <div class="col-6"><span>LOGIN HANYA ADMIN</span></div>
                            <div class="col-3">
                                <div class="line r"></div>
                            </div>
                        </div>
                    </div>
                    <form action="<?= base_url('auth/login') ?>" method="post" class="myform">
                        <div class="form-group">
                            <input type="text" name="username" class="form-control" placeholder="Masukan Username">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Masukan Password">
                        </div>
                        <div class="row">
                            <a href="<?= base_url('lp') ?>" style="text-decoration: none;" class="col-md-12 col-12 bn">Kembali Ke Landing page</a>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="btn btn-block btn-primary btn-lg"><small><i class="far fa-user pr-2"></i>Login</small></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script type='text/javascript' src='<?= base_url() ?>/Template/1/css/bootstrap/bootstrap.bundle.min.js'></script>
    <script src="<?= base_url() ?>/Template/7/sweetalert/sweetalert.min.js"></script>

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
</body>

</html>