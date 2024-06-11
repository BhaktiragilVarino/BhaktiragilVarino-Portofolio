<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title"> Users </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('user') ?>">Users</a></li>
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
                                            <h2 class="h3 mb-0 page-title">Update Users</h2>
                                        </div>
                                        <div class="col-auto">
                                            <a href="<?= base_url('user') ?>" class="btn btn-warning">Halaman Sebelumnya</a>
                                        </div>
                                    </div>
                                    <form action="<?= base_url('user/update/' . $user['id_user']); ?>" method="POST" enctype="multipart/form-data">
                                        <hr class="my-4">
                                        <p class="mb-4 text-info">Cara terbaik untuk meramalkan masa depan adalah dengan menciptakannya</p>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label for="nama_user">Nama User</label>
                                                <input type="text" id="nama_user" value="<?= $user['nama_user'] ?>" name="nama_user" class="form-control" required>
                                            </div>
                                            <div class="form-group col-md-4 d-none">
                                                <label for="level">Level</label>
                                                <select name="level" id="level" class="form-control" required>
                                                    <option value="1">Super Admin</option>
                                                    <option value="2" selected>Admin</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="foto">Foto</label>
                                                <input type="file" accept="images/*" value="<?= $user['foto'] ?>" id="foto" name="foto" class="form-control">
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="notelepon">No Telepon</label>
                                                <input type="text" id="notelepon" name="notelepon" value="<?= $user['notelepon'] ?>" class="form-control" required>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="email">Email</label>
                                                <input type="email" id="email" name="email" value="<?= $user['email'] ?>" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label for="alamat">Alamat</label>
                                                <textarea class="form-control" name="alamat" id="alamat" cols="30" rows="10"><?= $user['alamat'] ?></textarea>
                                            </div>
                                        </div>
                                        <hr class="my-4">
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="custom-control custom-switch">

                                                </div>
                                            </div>
                                            <div class="col-md-6 text-right">
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
                                        </div>
                                    </form>
                                    <form action="<?= base_url('user/changeusernamepassword/' . $user['id_user']); ?>" method="POST" enctype="multipart/form-data">
                                        <hr class="my-4">
                                        <p class="mb-4 text-warning">Ubah Username & Password</p>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="username">Username</label>
                                                <input type="text" id="username" name="username" class="form-control" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="password">Password</label>
                                                <input type="password" id="password" name="password" class="form-control" required>
                                            </div>
                                        </div>
                                        <hr class="my-4">
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="custom-control custom-switch">
                                                    <input type="checkbox" class="custom-control-input" id="customPass" checked disabled>
                                                    <label class="custom-control-label" for="customPass">Buat Perubahan Dengan Baik</label>
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