<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title"> Personal Profil Account </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Personal</li>
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
                                <div class="col-12 col-lg-10 col-xl-10">
                                    <h2 class="h3 mb-4 page-title">Settings</h2>
                                    <div class="my-4">
                                        <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Profile Setting</a>
                                            </li>
                                        </ul>
                                        <form action="<?= site_url('pengaturan/update/' . $pengaturan['id_user']); ?>" method="POST" enctype="multipart/form-data">
                                            <div class="row mt-5 align-items-center">
                                                <div class="col-md-3 text-center mb-5">
                                                    <div class="avatar avatar-xl">
                                                        <img src="<?= base_url() ?>/upload_foto/<?= $pengaturan['foto'] ?>" alt="..." class="avatar-img rounded-circle" style="width: 100px; height: 100px; object-fit: cover;">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="row align-items-center">
                                                        <div class="col-md-7">
                                                            <h4 class="mb-1"><?= $pengaturan['nama_user'] ?></h4>
                                                            <p class="small mb-3"><span class="badge badge-dark"><?= $pengaturan['email'] ?></span></p>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4">
                                                        <div class="col-md-7">
                                                            <p class="text-muted"> Saya Sekarang Berada dan Dertempat Tingal di <?= $pengaturan['alamat'] ?> </p>
                                                        </div>
                                                        <div class="col">
                                                            <p class="small mb-0 text-muted"><?= $pengaturan['notelepon'] ?></p>
                                                            <p class="small mb-0 text-muted">Pengguna Aplikasi Perpustakaan</p>
                                                            <p class="small mb-0 text-muted"><?= $pengaturan['nama_user'] ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr class="my-4">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="nama_user">Nama User</label>
                                                    <input type="text" id="nama_user" name="nama_user" class="form-control" value="<?= $pengaturan['nama_user'] ?>" placeholder="Masukan Nama User">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="foto">Foto</label>
                                                    <input type="file" accept="images/*" id="foto" name="foto" class="form-control" value="<?= $pengaturan['foto'] ?>" placeholder="foto">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-8">
                                                    <label for="email">Email</label>
                                                    <input type="email" class="form-control" name="email" value="<?= $pengaturan['email'] ?>" id="email" placeholder="Masukan Email">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="notelepon">No Telepon</label>
                                                    <input type="text" class="form-control" name="notelepon" value="<?= $pengaturan['notelepon'] ?>" id="notelepon" placeholder="Masukan Nomor Telepon">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="alamat">Alamat</label>
                                                <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $pengaturan['alamat'] ?>" placeholder="Alamat">
                                            </div>
                                            <div style="text-align: right;">
                                                <button type="submit" class="btn btn-primary">Save Change</button>
                                            </div>
                                        </form>
                                        <form action=" <?= site_url('pengaturan/update1/' . $pengaturan['id_user']); ?>" method="POST" enctype="multipart/form-data">
                                            <hr class="my-4">
                                            <div class="row mb-4">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="old_password">Old Password</label>
                                                        <input type="password" name="old_password" class="form-control" id="old_password" placeholder="Masukan Password Lama">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="new_password">New Password</label>
                                                        <input type="password" name="new_password" class="form-control" id="new_password" placeholder="Masukan Password Baru">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="confirm_password">Confirm Password</label>
                                                        <input type="password" name="confirm_password" class="form-control" id="confirm_password" placeholder="Masukan Ulang Password Baru">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <p class="mb-2">Password requirements</p>
                                                    <p class="small text-muted mb-2"> To create a new password, you have to meet all of the following requirements: </p>
                                                    <ul class="small text-muted pl-4 mb-0">
                                                        <li> Minimum 8 character </li>
                                                        <li>At least one special character</li>
                                                        <li>At least one number</li>
                                                        <li>Can’t be the same as a previous password </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Save Change</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
        </div>
    </div>
</div>