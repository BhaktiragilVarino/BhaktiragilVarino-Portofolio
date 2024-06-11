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

?>
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title"> User </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">User</li>
            </ol>
        </nav>
    </div>

    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <h4 class="card-title col-10">List Data Tabel</h4>
                        <a class="btn btn-info btn-fw p-3 col-2" href="<?= base_url('user/tambah') ?>"> Tambah Data</a>
                    </div>

                    <p class="card-description" style="margin-top: 35px; margin-left: 12px;"> Teknologi adalah kekuatan pendorong di balik inovasi dan wawasan menjadi tindakan.</p>
                    <div class="table-responsive" style="margin-top: 30px;">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th> Foto </th>
                                    <th> Nama User </th>
                                    <th> Level </th>
                                    <th> No Telepon </th>
                                    <th> Email </th>
                                    <th> Barcode </th>
                                    <th> Create At </th>
                                    <th> Alamat </th>
                                    <th> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $page = isset($_GET['page_user']) ? $_GET['page_user'] : 1;
                                $perPage = 10; // Jumlah data per halaman
                                $no = ($page - 1) * $perPage + 1;

                                foreach ($user as $key => $value) { ?>
                                    <tr>
                                        <td class="py-1">
                                            <img src="<?= base_url() ?>/upload_foto/<?= $value['foto'] ?>" alt="image" />
                                        </td>
                                        <td> <?= $value['nama_user'] ?> </td>
                                        <td>
                                            <?php
                                            switch ($value['level']) {
                                                case 1:
                                                    echo 'Super Admin';
                                                    break;
                                                default:
                                                    echo 'Admin';
                                                    break;
                                            }
                                            ?>
                                        </td>
                                        <td>
                                            <?= $value['notelepon'] ?> </td>
                                        </td>
                                        <td>
                                            <?= $value['email'] ?> </td>
                                        </td>

                                        <td>
                                            <center>
                                                <?php

                                                $barcodeText = $value['barcode'];
                                                $barcodeType = BarcodeGeneratorPNG::TYPE_CODE_128;
                                                $barcodeData = generateBarcodeWithWhiteBackground($barcodeText, $barcodeType);
                                                $barcodeBase64 = base64_encode($barcodeData);

                                                ?>
                                                <a href="data:image/png;base64,<?= $barcodeBase64 ?>" download="barcode.png"><img src=" data:image/png;base64,<?= $barcodeBase64 ?>" style="width: 100%;"></a>
                                            </center>
                                        </td>
                                        <td>
                                            <?= $value['created_at'] ?> </td>
                                        </td>
                                        <td> <?= $value['alamat'] ?> </td>
                                        <td>
                                            <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuIconButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="mdi mdi-earth"></i>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuIconButton1">
                                                <h6 class="dropdown-header ">Action</h6>
                                                <?php
                                                $level = session()->get('level');

                                                if ($level == '1') {
                                                    echo '<a class="dropdown-item " href="user/edit/' . $value['id_user'] . '">Edit</a>';
                                                } else {
                                                    echo '';
                                                }
                                                ?>
                                                <a class="dropdown-item" href="<?= base_url('user/delete/' . $value['id_user']) ?>">Hapus</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item " href="#">Close</a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="float-right mt-3 mr-3">
                        <?php echo $pager->Links('user', 'pagination') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>