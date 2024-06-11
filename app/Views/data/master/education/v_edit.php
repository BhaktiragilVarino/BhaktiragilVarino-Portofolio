<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title"> Education </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('education') ?>">Education</a></li>
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
                                            <h2 class="h3 mb-0 page-title">Update Education</h2>
                                        </div>
                                        <div class="col-auto">
                                            <a href="<?= base_url('education') ?>" class="btn btn-warning">Halaman Sebelumnya</a>
                                        </div>
                                    </div>
                                    <form action="<?= base_url('education/update/' . $education['id_education']); ?>" method="POST" enctype="multipart/form-data">
                                        <hr class="my-4">
                                        <p class="mb-4">Cara terbaik untuk meramalkan masa depan adalah dengan menciptakannya</p>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="nama_instansi_education">Nama Instansi</label>
                                                <input type="text" id="nama_instansi_education" name="nama_instansi_education" value="<?= $education['nama_instansi_education'] ?>" class="form-control">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="logo_instansi_education">Foto Logo</label>
                                                <input type="file" accept="images/*" id="logo_instansi_education" value="<?= $education['logo_instansi_education'] ?>" name="logo_instansi_education" class="form-control">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="prodi_education">Program Studi Instansi</label>
                                                <input type="text" id="prodi_education" name="prodi_education" value="<?= $education['prodi_education'] ?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label for="keterangan_education">Keterangan</label>
                                                <textarea class="form-control" name="keterangan_education" id="keterangan_education" cols="30" rows="10"><?= $education['keterangan_education'] ?></textarea>
                                            </div>
                                        </div>
                                        <hr class="my-4">
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="custom-control custom-switch">
                                                    <input type="checkbox" class="custom-control-input" id="customPass" checked disabled>
                                                    <label class="custom-control-label" for="customPass">Create account and email generated password</label>
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