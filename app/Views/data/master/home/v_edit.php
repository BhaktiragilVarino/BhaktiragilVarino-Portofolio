<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title"> Home </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('home/cekdata') ?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Update Data</li>
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
                                <div class="col-12 col-xl-10">
                                    <div class="row align-items-center my-4">
                                        <div class="col">
                                            <h2 class="h3 mb-0 page-title">Update Home</h2>
                                        </div>
                                        <div class="col-auto">
                                            <a href="<?= base_url('home/cekdata') ?>" class="btn btn-warning">Halaman Sebelumnya</a>
                                        </div>
                                    </div>
                                    <form action="<?= base_url('home/update/' . $home['id_home']); ?>" method="POST" enctype="multipart/form-data">
                                        <hr class="my-4">
                                        <p class="mb-4">Cara terbaik untuk meramalkan masa depan adalah dengan menciptakannya</p>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="nama_home">Nama Lengkap</label>
                                                <input type="text" id="nama_home" name="nama_home" value="<?= $home['nama_home'] ?>" class="form-control" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="minat_home">Minat</label>
                                                <input type="text" id="minat_home" name="minat_home" value="<?= $home['minat_home'] ?>" class="form-control" required>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="cv_home">Berkas CV</label>
                                                <input type="file" accept=".pdf" id="cv_home" name="cv_home[]" value="<?= $home['cv_home'] ?>" class="form-control" multiple>
                                            </div>
                                            <p class="text-warning col-md-12">*Centang Berkas Jika Ingin Dihapus <i class="mdi mdi-comment-check-outline text-info"></i></p>
                                            <?php if (!empty($home['cv_home'])) : ?>
                                                <?php
                                                $files = explode(',', $home['cv_home']);
                                                foreach ($files as $file) :
                                                ?>
                                                    <div class="form-group col-md-2">
                                                        <a href="<?= base_url('upload_file/' . $file) ?>" alt="File CV" width="100"><img src="<?= base_url('upload_file/cv-pdf.png') ?>" style="width: 100px;"></a>
                                                        <label>
                                                            <input class="form-control" style="margin-top: -10px;" type="checkbox" name="delete_file[]" value="<?= $file ?>">
                                                            <label><i class="mdi mdi-delete-forever text-danger"></i></label>
                                                        </label>
                                                    </div>
                                                <?php endforeach; ?>
                                            <?php endif; ?>
                                        </div>
                                        <hr class="my-4">
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="custom-control custom-switch">
                                                    <input type="checkbox" class="custom-control-input" id="customPass" checked disabled>
                                                    <label class="custom-control-label" for="customPass">Masukan Data Dengan Benar</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 text-right">
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
        </div>
    </div>
</div>