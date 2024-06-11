<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title"> Project </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Project</li>
            </ol>
        </nav>
    </div>

    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <h4 class="card-title col-10">List Data Tabel</h4>
                        <a class="btn btn-info btn-fw p-3 col-2" href="<?= base_url('project/tambah') ?>"> Tambah Data</a>
                    </div>

                    <p class="card-description" style="margin-top: 35px; margin-left: 12px;"> Teknologi adalah kekuatan pendorong di balik inovasi dan wawasan menjadi tindakan.</p>
                    <div class="table-responsive" style="margin-top: 30px;">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th> Foto Project </th>
                                    <th> Kategori Project </th>
                                    <th> Nama Project </th>
                                    <th> Keterangan </th>
                                    <th> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $page = isset($_GET['page_project']) ? $_GET['page_project'] : 1;
                                $perPage = 10; // Jumlah data per halaman
                                $no = ($page - 1) * $perPage + 1;

                                foreach ($project as $key => $value) { ?>
                                    <tr>
                                        <td class="py-1">
                                            <?php if (!empty($value['foto_project'])) : ?>
                                                <?php
                                                $fotos = explode(',', $value['foto_project']);
                                                foreach ($fotos as $foto) :
                                                ?>
                                                    <img src="<?= base_url('upload_foto/' . $foto) ?>" alt="Foto Project" width="100" />
                                                <?php endforeach; ?>
                                            <?php endif; ?>
                                        </td>
                                        <td> <?= $value['kategori_project'] ?> </td>
                                        <td> <?= $value['nama_project'] ?> </td>
                                        <td> <?= $value['keterangan_project'] ?> </td>
                                        <td>
                                            <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuIconButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="mdi mdi-earth"></i>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuIconButton1">
                                                <h6 class="dropdown-header ">Action</h6>
                                                <a class="dropdown-item " href="<?= base_url('project/edit/' . $value['id_project']) ?>">Edit</a>
                                                <a class="dropdown-item" href="<?= base_url('project/delete/' . $value['id_project']) ?>">Hapus</a>
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
                        <?php echo $pager->Links('project', 'pagination') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>