<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title"> Project </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('project') ?>">Project</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tambah Data</li>
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
                                            <h2 class="h3 mb-0 page-title">Add Project</h2>
                                        </div>
                                        <div class="col-auto">
                                            <a href="<?= base_url('project') ?>" class="btn btn-warning">Halaman Sebelumnya</a>
                                        </div>
                                    </div>
                                    <form action="<?= base_url('project/save'); ?>" method="POST" enctype="multipart/form-data">
                                        <hr class="my-4">
                                        <p class="mb-4">Cara terbaik untuk meramalkan masa depan adalah dengan menciptakannya</p>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="nama_project">Nama Project</label>
                                                <input type="text" id="nama_project" name="nama_project" class="form-control" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="kategori_project">Kategori Project</label>
                                                <input type="text" id="kategori_project" name="kategori_project" class="form-control" required>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="foto_project">Foto Logo</label>
                                                <input type="file" accept="images/*" id="foto_project" name="foto_project[]" class="form-control" required multiple>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label for="keterangan_project">Keterangan</label>
                                                <textarea class="form-control" name="keterangan_project" id="keterangan_project" cols="30" rows="10"></textarea>
                                            </div>
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