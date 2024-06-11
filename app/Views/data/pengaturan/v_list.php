<?php

use Picqer\Barcode\BarcodeGeneratorPNG;

function generateBarcodeWithWhiteBackground($barcodeText, $barcodeType)
{
    $generator = new BarcodeGeneratorPNG();
    $barcodeData = $generator->getBarcode($barcodeText, $barcodeType);

    // Create an image from the barcode PNG data
    $barcodeImage = imagecreatefromstring($barcodeData);

    // Get the dimensions of the barcode image
    $width = imagesx($barcodeImage);
    $height = imagesy($barcodeImage);
    $width1 = 400;
    $height1 = 100;

    // Create a new true color image with the new dimensions
    $whiteBackgroundImage = imagecreatetruecolor($width1, $height1);

    // Allocate a white color
    $white = imagecolorallocate($whiteBackgroundImage, 255, 255, 255);

    // Fill the background with white
    imagefilledrectangle($whiteBackgroundImage, 0, 0, $width1, $height1, $white);

    // Calculate the vertical position to center the barcode
    $yOffset = ($height1 - $height) / 2;
    $xOffset = ($width1 - $width) / 2;

    // Copy the barcode image onto the white background at the calculated position
    imagecopy($whiteBackgroundImage, $barcodeImage, $xOffset, $yOffset, 0, 0, $width, $height);

    // Start output buffering
    ob_start();
    // Output the image as PNG
    imagepng($whiteBackgroundImage);
    // Capture the output
    $outputImageData = ob_get_clean();

    // Clean up
    imagedestroy($barcodeImage);
    imagedestroy($whiteBackgroundImage);

    return $outputImageData;
}

$barcodeText = session()->get('barcode');
$barcodeType = BarcodeGeneratorPNG::TYPE_CODE_128;
$barcodeData = generateBarcodeWithWhiteBackground($barcodeText, $barcodeType);
$barcodeBase64 = base64_encode($barcodeData);

?>
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title"> Personal Profil Account </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Personal</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <main role="main" class="main-content">
                        <div class="container-fluid">
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <h2 class="h3 mb-4 page-title">Profile</h2>
                                    <div class="row mt-5 align-items-center">
                                        <div class="col-md-3 text-center mb-5">
                                            <div class="avatar avatar-xl">
                                                <img src="<?= base_url() ?>/upload_foto/<?= $pengaturan['foto'] ?>" alt="..." class="avatar-img rounded-circle" style="width: 100px; height: 100px; object-fit: cover;">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="row align-items-center">
                                                <div class="col-md-7">
                                                    <h4 class="mb-1"><?= $pengaturan['nama_user'] ?></h4>
                                                    <p class="small mb-3 mt-3"><span class="badge badge-dark"><?= $pengaturan['email'] ?></span></p>
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <div class="col-md-7">
                                                    <p class="text-muted"> Saya Sekarang Berada dan Dertempat Tingal di <?= $pengaturan['alamat'] ?> </p>
                                                </div>
                                                <div class="col">
                                                    <p class="small mb-0 text-muted"><?= $pengaturan['notelepon'] ?></p>
                                                    <p class="small mb-0 text-muted"><?= $pengaturan['nama_user'] ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my-4">
                                        <div class="col-md-6">
                                            <div class="card mb-4 shadow">
                                                <div class="card-body my-n3">
                                                    <div class="row align-items-center">
                                                        <div class="col-3 text-center">
                                                            <span class="">
                                                                <i class="fe fe-user text-primary" style="font-size: 50px;"></i>
                                                            </span>
                                                        </div> <!-- .col -->
                                                        <div class="col">
                                                            <a href="#">
                                                                <h3 class="h5 mt-4 mb-1">Personal</h3>
                                                            </a>
                                                            <p class="text-muted">Mengubah perspektif, memperindah kehidupan. Selamat datang di lembaran baru dari perjalanan.</p>
                                                        </div> <!-- .col -->
                                                    </div> <!-- .row -->
                                                </div> <!-- .card-body -->
                                                <?php
                                                // Mengganti kode sebelumnya
                                                $db = \Config\Database::connect();
                                                $id_user = session()->get('id_user');

                                                $query = $db->query("SELECT foto, nama_user FROM tbl_user WHERE id_user = $id_user");
                                                $result = $query->getRow();

                                                if ($result) {
                                                    $foto = $result->foto;
                                                    $nama_user = $result->nama_user;
                                                } else {
                                                    $foto = 'avatar-1.png';
                                                    $nama_user = $result->nama_user;
                                                }

                                                if (empty($foto)) {
                                                    $foto = 'avatar-1.png';
                                                    $nama_user = $result->nama_user;
                                                }
                                                ?>
                                                <div class="card-footer">
                                                    <a href="<?= base_url('pengaturan/edit2') ?>/<?= $id_user ?>" class="d-flex justify-content-between text-muted"><span>Account Settings</span><i class="fe fe-chevron-right"></i></a>
                                                </div> <!-- .card-footer -->
                                            </div> <!-- .card -->
                                        </div> <!-- .col-md-->
                                        <div class="col-md-6">
                                            <div class="card mb-4 shadow">
                                                <div class="card-body my-n3">
                                                    <div class="row align-items-center">
                                                        <div class="col-3 text-center">
                                                            <span class="">
                                                                <i class="mdi mdi-barcode-scan text-primary" style="font-size:  50px;"></i>
                                                            </span>
                                                        </div> <!-- .col -->
                                                        <div class="col">
                                                            <a href="data:image/png;base64,<?= $barcodeBase64 ?>" download="Barcode.png">
                                                                <h3 class="h5 mt-4 mb-1">Barcode Recovery Account</h3>
                                                            </a>
                                                            <p class="text-muted">Atasi kesulitan dalam Login lakukan dengan mengunduh barcode ini. Sederhana, cepat, dan efisien !</p>
                                                        </div> <!-- .col -->
                                                    </div> <!-- .row -->
                                                </div> <!-- .card-body -->
                                                <div class="card-footer">
                                                    <a href="data:image/png;base64,<?= $barcodeBase64 ?>" download="Barcode.png" class="d-flex justify-content-between text-muted"><span>Download Barcode</span><i class="fe fe-chevron-right"></i></a>
                                                </div> <!-- .card-footer -->
                                            </div> <!-- .card -->
                                        </div> <!-- .col-md-->
                                    </div> <!-- .row-->
                                    <h3 style="text-align: center;">Terima Kasih</h3>
                                </div> <!-- /.col-12 -->
                            </div> <!-- .row -->
                        </div> <!-- .container-fluid -->
                    </main>
                </div>
            </div>
        </div>
    </div>
</div>