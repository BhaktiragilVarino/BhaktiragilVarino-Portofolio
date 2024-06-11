<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title"> Education </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Education</li>
            </ol>
        </nav>
    </div>

    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <h4 class="card-title col-10">List Data Tabel</h4>
                        <a class="btn btn-info btn-fw p-3 col-2" href="<?= base_url('education/tambah') ?>"> Tambah Data</a>
                    </div>

                    <p class="card-description" style="margin-top: 35px; margin-left: 12px;"> Teknologi adalah kekuatan pendorong di balik inovasi dan wawasan menjadi tindakan.</p>
                    <div class="table-responsive" style="margin-top: 30px;">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th> Logo </th>
                                    <th> Nama Instansi </th>
                                    <th> Prodi Instansi </th>
                                    <th> Keterangan </th>
                                    <th> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $page = isset($_GET['page_education']) ? $_GET['page_education'] : 1;
                                $perPage = 10; // Jumlah data per halaman
                                $no = ($page - 1) * $perPage + 1;

                                foreach ($education as $key => $value) { ?>
                                    <tr>
                                        <td class="py-1">
                                            <img src="<?= base_url() ?>/upload_foto/<?= $value['logo_instansi_education'] ?>" alt="image" />
                                        </td>
                                        <td> <?= $value['nama_instansi_education'] ?> </td>
                                        <td>
                                            <?= $value['prodi_education'] ?> </td>
                                        </td>
                                        <td> <?= $value['keterangan_education'] ?> </td>
                                        <td>
                                            <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuIconButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="mdi mdi-earth"></i>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuIconButton1">
                                                <h6 class="dropdown-header ">Action</h6>
                                                <a class="dropdown-item " href="<?= base_url('education/edit/' . $value['id_education']) ?>">Edit</a>
                                                <a class="dropdown-item" href="<?= base_url('education/delete/' . $value['id_education']) ?>">Hapus</a>
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
                        <?php echo $pager->Links('education', 'pagination') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>