<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title"> Achievements And Certification </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Achiev And Certification</li>
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
                                <div class="col-12 col-lg-11">
                                    <div class="row align-items-center my-4">
                                        <div class="col">
                                            <h2 class="page-title">Files Achievements And Certification</h2>
                                        </div>
                                        <div class="col-auto">
                                            <a class="btn btn-lg btn-info mt-2" href="<?= base_url('achiev/tambah') ?>"><span class="mdi mdi-eyedropper mr-3"></span>Tambah Data</a>
                                        </div>
                                    </div>
                                    <h6 class="mb-3">Quick Access</h6>
                                    <div class="card-deck mb-4">
                                        <div class="row">
                                            <?php
                                            $page = isset($_GET['page_achiev']) ? $_GET['page_achiev'] : 1;
                                            $perPage = 10; // Jumlah data per halaman
                                            $no = ($page - 1) * $perPage + 1;

                                            foreach ($achiev as $key => $value) { ?>
                                                <div class="col-lg-4">
                                                    <div class="card border-0 bg-transparent">
                                                        <img src="<?= base_url() ?>/upload_foto/<?= $value['foto_achiev']; ?>" alt="..." class="card-img-top img-fluid rounded">
                                                        <div class="card-body">
                                                            <h5 class="h6 card-title mb-2"><?= $value['nama_achiev']; ?> </h5>
                                                            <p class="card-text d-flex">
                                                                <a class="badge badge-pill badge-light text-muted mr-2" href="<?= base_url('achiev') ?>/edit/<?= $value['id_achiev'] ?>"><i class="mdi mdi-update"></i></a>
                                                                <a class="badge badge-pill badge-light text-muted" href="<?= base_url('achiev') ?>/delete/<?= $value['id_achiev'] ?>"><i class="mdi mdi-delete"></i></a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div> <!-- .card-deck -->
                                    <div class="float-center mt-3 mr-3">
                                        <?php echo $pager->Links('achiev', 'pagination') ?>
                                    </div>
                                </div>
                            </div> <!-- .row -->
                        </div> <!-- .container-fluid -->
                    </main>
                </div>
            </div>
        </div>
    </div>
</div>