<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title"> Achiev </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('achiev') ?>">Achiev</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tambah Data</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Tambah Data About</h4>
                    <p class="card-description" style="margin-top: -10px; margin-bottom: 30px;"> Masukan Semua Data Dengan Benar </p>
                    <form class="forms-sample" action="<?= base_url('achiev/save'); ?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nama_achiev">Nama Achievment</label>
                            <input type="text" class="form-control" id="nama_achiev" name="nama_achiev" placeholder="Masukan Nama Achievment ">
                        </div>
                        <div class="form-group">
                            <label for="foto_achiev">Foto</label>
                            <p class="text-info">* Direkomendasikan Menggunakan Foto 230px * 190px</p>
                            <input type="file" accept="images/*" class="form-control" id="foto_achiev" name="foto_achiev" placeholder="Masukan Foto">
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <a class="btn btn-dark" href="<?= base_url('achiev') ?>">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>