<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card corona-gradient-card">
                <div class="card-body py-0 px-0 px-sm-3">
                    <div class="row align-items-center">
                        <div class="col-4 col-sm-3 col-xl-2">
                            <img src="<?= base_url() ?>/Template/7/template/assets/images/dashboard/Group126@2x.png" class="gradient-corona-img img-fluid" alt="">
                        </div>
                        <div class="col-5 col-sm-7 col-xl-8 p-0">
                            <h4 class="mb-1 mb-sm-0 text-success">Selamat Datang Di Dashboard</h4>
                            <p class="mb-0 font-weight-normal d-none d-sm-block">Cek Landing Page Sekarang Dan Nikmati Keindahannya</p>
                        </div>
                        <div class="col-3 col-sm-2 col-xl-2 pl-0 text-center">
                            <span>
                                <a href="<?= base_url('auth/logout') ?>" target="_blank" class="btn btn-outline-light btn-rounded get-started-btn text-warning">Landing Page</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h5>Data Users</h5>
                    <div class="row">
                        <div class="col-8 col-sm-12 col-xl-8 my-auto">
                            <div class="d-flex d-sm-block d-md-flex align-items-center">
                                <h2 class="mb-0"><?= countData('tbl_user') ?></h2>
                                <p class="text-success ml-2 mb-0 font-weight-medium"><i class="mdi mdi-trending-up" style="font-size: 30px;"></i></p>
                            </div>
                            <h6 class="text-muted font-weight-normal"> Seluruh Data Aplikasi</h6>
                        </div>
                        <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                            <i class="icon-lg mdi mdi-account-multiple-outline text-primary ml-auto"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h5>Data Pesan</h5>
                    <div class="row">
                        <div class="col-8 col-sm-12 col-xl-8 my-auto">
                            <div class="d-flex d-sm-block d-md-flex align-items-center">
                                <h2 class="mb-0"><?= countData('pesan') ?></h2>
                                <p class="text-success ml-2 mb-0 font-weight-medium"><i class="mdi mdi-trending-up" style="font-size: 30px;"></i></p>
                            </div>
                            <h6 class="text-muted font-weight-normal"> Seluruh Data Aplikasi</h6>
                        </div>
                        <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                            <i class="icon-lg mdi mdi-email text-danger ml-auto"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h5>Data Project</h5>
                    <div class="row">
                        <div class="col-8 col-sm-12 col-xl-8 my-auto">
                            <div class="d-flex d-sm-block d-md-flex align-items-center">
                                <h2 class="mb-0"><?= countData('project') ?></h2>
                                <p class="text-success ml-2 mb-0 font-weight-medium"><i class="mdi mdi-trending-up" style="font-size: 30px;"></i></p>
                            </div>
                            <h6 class="text-muted font-weight-normal"> Seluruh Data Aplikasi</h6>
                        </div>
                        <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                            <i class="icon-lg mdi mdi-monitor text-warning ml-auto"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-xl-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-row justify-content-between">
                        <h4 class="card-title">Users</h4>
                        <a href="<?= base_url('user') ?>">
                            <p class="text-muted mb-1 small">View all</p>
                        </a>
                    </div>
                    <div class="preview-list">
                        <?php
                        date_default_timezone_set('Asia/Jakarta');

                        $db = \Config\Database::connect();
                        $query = $db->table('tbl_user')->orderBy('created_at', 'DESC')->limit(4)->get();
                        $daftar = $query->getResult();

                        foreach ($daftar as $row) {
                            $createdTime = DateTime::createFromFormat('Y-m-d H:i:s', $row->created_at);
                            $currentTime = new DateTime();
                            $timeDiff = $currentTime->diff($createdTime);
                            $timeAgo = '';

                            if ($timeDiff->y > 0) {
                                $timeAgo .= $timeDiff->y . ' Tahun ';
                            }
                            if ($timeDiff->m > 0) {
                                $timeAgo .= $timeDiff->m . ' Bulan ';
                            }
                            if ($timeDiff->d > 0) {
                                $timeAgo .= $timeDiff->d . ' Hari ';
                            }
                            if ($timeDiff->h > 0) {
                                $timeAgo .= $timeDiff->h . ' Jam ';
                            }

                            $timeAgo .= 'Lalu';

                        ?>
                            <div class="preview-item border-bottom">
                                <div class="preview-thumbnail">
                                    <img src="<?= base_url() ?>/upload_foto/<?= $row->foto ?>" alt="image" class="rounded-circle" />
                                </div>
                                <div class="preview-item-content d-flex flex-grow">
                                    <div class="flex-grow">
                                        <div class="d-flex d-md-block d-xl-flex justify-content-between">
                                            <h6 class="preview-subject"><?= $row->nama_user ?></h6>
                                            <p class="text-muted text-small"><?= $timeAgo ?></p>
                                        </div>
                                        <p class="text-muted">Telah Terdaftar Didalam aplikasi.</p>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-row justify-content-between">
                        <h4 class="card-title mb-1">Your Projects</h4>
                        <p class="text-muted mb-1">Your data status</p>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="preview-list">
                                <?php
                                date_default_timezone_set('Asia/Jakarta');

                                $db = \Config\Database::connect();
                                $query = $db->table('project')->get();
                                $daftar = $query->getResult();

                                foreach ($daftar as $row) {
                                    $words = explode(' ', $row->keterangan_project);
                                    $short_desc = implode(' ', array_slice($words, 0, 20));
                                    $is_long = count($words) > 20;
                                ?>
                                    <div class="preview-item border-bottom">
                                        <div class="preview-thumbnail">
                                            <div class="preview-icon bg-info">
                                                <i class="mdi mdi-file-document"></i>
                                            </div>
                                        </div>
                                        <div class="preview-item-content d-sm-flex flex-grow">
                                            <div class="flex-grow" style="width: 200px;">
                                                <h6 class="preview-subject"><?= $row->nama_project ?></h6>
                                                <p class="text-muted mb-0"><?= $short_desc ?> <?= $is_long ? ' ...... <a href="project"> selengkapnya</a>' : '' ?></p>
                                            </div>
                                            <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                                <p class="text-muted"><?= $row->kategori_project ?></p>
                                                <p class="text-muted mb-0">Project Aktif <i class="mdi mdi-record text-success"></i> </p>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row ">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Pesan Masuk</h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th> Email Pengirim </th>
                                    <th> Isi Pesan </th>
                                    <th class="text-center"> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                date_default_timezone_set('Asia/Jakarta');

                                $db = \Config\Database::connect();
                                $query = $db->table('pesan')->get();
                                $daftar = $query->getResult();

                                foreach ($daftar as $row) { ?>
                                    <tr>
                                        <td>
                                            <img src="<?= base_url() ?>/Template/7/template/assets/images/faces-clipart/pic-4.png" alt="image" />
                                            <span class="pl-2"><?= $row->email ?></span>
                                        </td>
                                        <td> <?= $row->pesan ?> </td>
                                        <td class="text-center">
                                            <a class="badge badge-outline-danger text-center" href="<?= base_url('home/deletepesan/' . $row->id_pesan) ?>">Delete</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>