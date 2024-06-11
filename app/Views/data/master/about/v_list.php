<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <main role="main" class="main-content" style="margin-top: -50px;">
                        <div class="container-fluid">
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <div class="w-50 mx-auto text-center justify-content-center py-5 my-5">
                                        <h2 class="page-title mb-0">Pengecekan Data About ?</h2>
                                        <?php if ($about) : ?>
                                            <p class="lead text-muted mb-3 mt-2">Anda Sudah Mempunyai Data Di About Silakan Cek Sekarang .</p>
                                            <a href="<?= base_url('about/edit/1') ?>" class="form-control form-control-lg bg-info rounded-pill">Cek Data</a>
                                            <p class="help-text mt-2 text-muted">" Kesuksesan bukanlah akhir, kegagalan bukanlah hal yang fatal: Keberanian untuk melanjutkan itulah yang penting "</p>
                                        <?php else : ?>
                                            <p class="lead text-muted mb-3 mt-2">Anda Belum Mempunyai Data Di About.</p>
                                            <a href="<?= base_url('about/tambah') ?>" class="form-control form-control-lg bg-warning rounded-pill">Tambah Data</a>
                                            <p class="help-text mt-2 text-muted">" Cara terbaik untuk meramalkan masa depan adalah dengan menciptakannya "</p>
                                        <?php endif; ?>
                                    </div>
                                    <div class="row my-4">
                                        <div class="col-6 col-lg-3" style="margin-top: -40px;">
                                            <div class="card shadow mb-4">
                                                <div class="card-body">
                                                    <i class="mdi mdi-account-card-details text-warning"></i>
                                                    <a href="<?= base_url('pengaturan/edit/' . session()->get('id_user')) ?>">
                                                        <h3 class="h5 mt-4 mb-1">Your Profil</h3>
                                                    </a>
                                                    <p class="text-muted">Cek Profilmu Sekarang</p>
                                                </div> <!-- .card-body -->
                                            </div> <!-- .card -->
                                        </div> <!-- .col-md-->
                                        <div class="col-6 col-lg-3" style="margin-top: -40px;">
                                            <div class="card shadow mb-4">
                                                <div class="card-body">
                                                    <i class="mdi mdi-settings text-success"></i>
                                                    <a href="<?= base_url('pengaturan/edit2/' . session()->get('id_user')) ?>">
                                                        <h3 class="h5 mt-4 mb-1">Settings</h3>
                                                    </a>
                                                    <p class="text-muted">Atur Account Profile</p>
                                                </div> <!-- .card-body -->
                                            </div> <!-- .card -->
                                        </div> <!-- .col-md-->
                                        <div class="col-6 col-lg-3" style="margin-top: -40px;">
                                            <div class="card shadow mb-4">
                                                <div class="card-body">
                                                    <i class="mdi mdi-home text-secondary"></i>
                                                    <a href="<?= base_url('home') ?>">
                                                        <h3 class="h5 mt-4 mb-1">Dashboard</h3>
                                                    </a>
                                                    <p class="text-muted">Cek Data Aplikasi</p>
                                                </div> <!-- .card-body -->
                                            </div> <!-- .card -->
                                        </div> <!-- .col-md-->
                                        <div class="col-6 col-lg-3" style="margin-top: -40px;">
                                            <div class="card shadow">
                                                <div class="card-body">
                                                    <i class="mdi mdi-message-text-outline text-info"></i>
                                                    <a href="<?= base_url('auth/logout') ?>">
                                                        <h3 class="h5 mt-4 mb-1">Landing Page</h3>
                                                    </a>
                                                    <p class="text-muted">Cek Page Portofolio</p>
                                                </div> <!-- .card-body -->
                                            </div> <!-- .card -->
                                        </div> <!-- .col-md-->
                                    </div>
                                </div> <!-- .col-12 -->
                            </div> <!-- .row -->
                        </div> <!-- .container-fluid -->
                    </main> <!-- main -->
                </div>
            </div>
        </div>
    </div>
</div>