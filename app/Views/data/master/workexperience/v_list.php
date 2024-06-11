<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title"> Work Experience </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Work Experience</li>
            </ol>
        </nav>
    </div>

    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <h4 class="card-title col-10">List Data Tabel</h4>
                        <a class="btn btn-info btn-fw p-3 col-2" href="<?= base_url('workexperience/tambah') ?>"> Tambah Data</a>
                    </div>

                    <p class="card-description" style="margin-top: 35px; margin-left: 12px;"> Teknologi adalah kekuatan pendorong di balik inovasi dan wawasan menjadi tindakan.</p>
                    <div class="table-responsive" style="margin-top: 30px;">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th> Logo </th>
                                    <th> Nama Instansi </th>
                                    <th> Posisi Jabatan </th>
                                    <th> Tahun Mulai </th>
                                    <th> Tahun Selesai </th>
                                    <th> Keterangan </th>
                                    <th> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $page = isset($_GET['page_workexperience']) ? $_GET['page_workexperience'] : 1;
                                $perPage = 10; // Jumlah data per halaman
                                $no = ($page - 1) * $perPage + 1;

                                foreach ($workexperience as $key => $value) { ?>
                                    <tr>
                                        <td class="py-1">
                                            <img src="<?= base_url() ?>/upload_foto/<?= $value['logo_workexperience'] ?>" alt="image" />
                                        </td>
                                        <td> <?= $value['nama_instansi_workexperience'] ?> </td>
                                        <td> <?= $value['posisi_workexperience'] ?> </td>
                                        <td> <?= $value['tahun_mulai_workexperience'] ?> </td>
                                        <td> <?= $value['tahun_selesai_workexperience'] ?> </td>
                                        <td> <?= $value['keterangan_workexperience'] ?> </td>
                                        <td>
                                            <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuIconButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="mdi mdi-earth"></i>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuIconButton1">
                                                <h6 class="dropdown-header ">Action</h6>
                                                <a class="dropdown-item " href="<?= base_url('workexperience/edit/' . $value['id_workexperience']) ?>">Edit</a>
                                                <a class="dropdown-item" href="<?= base_url('workexperience/delete/' . $value['id_workexperience']) ?>">Hapus</a>
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
                        <?php echo $pager->Links('workexperience', 'pagination') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>