<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title"> Work Experience </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('workexperience') ?>">Work Experience</a></li>
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
                                            <h2 class="h3 mb-0 page-title">Add Work Experience</h2>
                                        </div>
                                        <div class="col-auto">
                                            <a href="<?= base_url('workexperience') ?>" class="btn btn-warning">Halaman Sebelumnya</a>
                                        </div>
                                    </div>
                                    <form action="<?= base_url('workexperience/save'); ?>" method="POST" enctype="multipart/form-data">
                                        <hr class="my-4">
                                        <p class="mb-4">Cara terbaik untuk meramalkan masa depan adalah dengan menciptakannya</p>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="nama_instansi_workexperience">Nama Instansi</label>
                                                <input type="text" id="nama_instansi_workexperience" name="nama_instansi_workexperience" class="form-control" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="posisi_workexperience">Posisi Jabatan</label>
                                                <input type="text" id="posisi_workexperience" name="posisi_workexperience" class="form-control" required>
                                            </div>
                                            <div class="form-group col-md-8">
                                                <label for="logo_workexperience">Foto Logo</label>
                                                <input type="file" accept="images/*" id="logo_workexperience" name="logo_workexperience" class="form-control" required>
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label for="tahun_mulai_workexperience">Tahun Mulai</label>
                                                <input type="number" id="tahun_mulai_workexperience" name="tahun_mulai_workexperience" class="form-control" required>
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label for="tahun_selesai_workexperience">Tahun Mulai Akhir</label>
                                                <input type="number" id="tahun_selesai_workexperience" name="tahun_selesai_workexperience" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label for="keterangan_workexperience">Keterangan</label>
                                                <textarea class="form-control" name="keterangan_workexperience" id="keterangan_workexperience" cols="30" rows="10"></textarea>
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