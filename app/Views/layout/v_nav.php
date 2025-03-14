<body>
	<div class="container-scroller">
		<!-- partial:partials/_sidebar.html -->
		<nav class="sidebar sidebar-offcanvas" id="sidebar">
			<div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
				<a class="sidebar-brand brand-logo" href="<?= base_url('home') ?>"><img src="<?= base_url() ?>/Template/7/template/assets/images/logo.svg" alt="logo" /></a>
				<a class="sidebar-brand brand-logo-mini" href="<?= base_url('home') ?>"><img src="<?= base_url() ?>/Template/7/template/assets/images/logo-mini.svg" alt="logo" /></a>
			</div>
			<ul class="nav">
				<li class="nav-item profile">
					<div class="profile-desc">
						<?php

						$db = \Config\Database::connect();
						$id_user = session()->get('id_user');

						$query = $db->query("SELECT foto, nama_user FROM tbl_user WHERE id_user = $id_user");
						$result = $query->getRow();

						if ($result) {
							$foto = $result->foto;
							$nama_user = $result->nama_user;
						} else {
							$foto = 'avatar-1.png';
							$nama_user = $result->nama_user;
						}

						if (empty($foto)) {
							$foto = 'avatar-1.png';
							$nama_user = $result->nama_user;
						}
						?>
						<div class="profile-pic">
							<div class="count-indicator">
								<img class="img-xs rounded-circle " src="<?= base_url() ?>/upload_foto/<?= $foto ?>" alt="">
								<span class="count bg-success"></span>
							</div>
							<div class="profile-name">
								<h5 class="mb-0 font-weight-normal"><?= $nama_user ?></h5>
								<?php
								$level = session()->get('level');

								if ($level == '1') {
									echo '<span>Super Admin</span>';
								} else {
									echo '<span>Admin</span>';
								}
								?>

							</div>
						</div>
						<a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
						<div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
							<a href="<?= base_url('pengaturan/edit') ?>/<?= $id_user ?>" class="dropdown-item preview-item">
								<div class="preview-thumbnail">
									<div class="preview-icon bg-dark rounded-circle">
										<i class="mdi mdi-account-circle text-primary"></i>
									</div>
								</div>
								<div class="preview-item-content">
									<p class="preview-subject ellipsis mb-1 text-small">Profile</p>
								</div>
							</a>
							<div class="dropdown-divider"></div>
							<a href="<?= base_url('pengaturan/edit2') ?>/<?= $id_user ?>" class="dropdown-item preview-item">
								<div class="preview-thumbnail">
									<div class="preview-icon bg-dark rounded-circle">
										<i class="mdi mdi-account-key  text-info"></i>
									</div>
								</div>
								<div class="preview-item-content">
									<p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
								</div>
							</a>
							<div class="dropdown-divider"></div>
							<a href="<?= base_url('auth/logout') ?>" class="dropdown-item preview-item">
								<div class="preview-thumbnail">
									<div class="preview-icon bg-dark rounded-circle">
										<i class="mdi mdi-logout text-success"></i>
									</div>
								</div>
								<div class="preview-item-content">
									<p class="preview-subject ellipsis mb-1 text-small">Log Out</p>
								</div>
							</a>
						</div>
					</div>
				</li>
				<li class="nav-item nav-category">
					<span class="nav-link">Home</span>
				</li>
				<li class="nav-item menu-items">
					<a class="nav-link" href="<?= base_url('home') ?>">
						<span class="menu-icon">
							<i class="mdi mdi-speedometer"></i>
						</span>
						<span class="menu-title">Dashboard</span>
					</a>
				</li>
				<li class="nav-item nav-category">
					<span class="nav-link">Master Landing Page</span>
				</li>
				<li class="nav-item menu-items">
					<a class="nav-link" href="<?= base_url('home/cekdata') ?>" aria-expanded="false" aria-controls="ui-basic">
						<span class="menu-icon">
							<i class="mdi mdi-home"></i>
						</span>
						<span class="menu-title">Home</span>
					</a>
				</li>
				<li class="nav-item menu-items">
					<a class="nav-link" href="<?= base_url('about') ?>">
						<span class="menu-icon">
							<i class="mdi mdi-account-check"></i>
						</span>
						<span class="menu-title">About</span>
					</a>
				</li>
				<li class="nav-item menu-items">
					<a class="nav-link" href="<?= base_url('technologysuite') ?>">
						<span class="menu-icon">
							<i class="mdi mdi-laptop"></i>
						</span>
						<span class="menu-title">Technology Suite</span>
					</a>
				</li>
				<li class="nav-item menu-items">
					<a class="nav-link" href="<?= base_url('Achiev') ?>">
						<span class="menu-icon">
							<i class="mdi mdi-certificate"></i>
						</span>
						<span class="menu-title">Achiev And Certif</span>
					</a>
				</li>
				<li class="nav-item menu-items">
					<a class="nav-link" href="<?= base_url('education') ?>">
						<span class="menu-icon">
							<i class="mdi mdi-school"></i>
						</span>
						<span class="menu-title">Education</span>
					</a>
				</li>
				<li class="nav-item menu-items">
					<a class="nav-link" href="<?= base_url('workexperience') ?>">
						<span class="menu-icon">
							<i class="mdi mdi-home-modern"></i>
						</span>
						<span class="menu-title">Work Experience</span>
					</a>
				</li>
				<li class="nav-item menu-items">
					<a class="nav-link" href="<?= base_url('project') ?>">
						<span class="menu-icon">
							<i class="mdi mdi-playlist-check"></i>
						</span>
						<span class="menu-title">My Project</span>
					</a>
				</li>
				<li class="nav-item nav-category">
					<span class="nav-link">Settings</span>
				</li>
				<li class="nav-item menu-items">
					<a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
						<span class="menu-icon">
							<i class="mdi mdi-security"></i>
						</span>
						<span class="menu-title">User Pages</span>
						<i class="menu-arrow"></i>
					</a>
					<div class="collapse" id="auth">
						<ul class="nav flex-column sub-menu">
							<li class="nav-item"> <a class="nav-link" href="<?= base_url('user') ?>"> List User </a></li>
							<li class="nav-item"> <a class="nav-link" href="<?= base_url('user/tambah') ?>"> Tambah User </a></li>
						</ul>
					</div>
				</li>
				<li class="nav-item menu-items">
					<a class="nav-link" href="<?= base_url('auth/logout') ?>">
						<span class="menu-icon">
							<i class="mdi mdi-logout"></i>
						</span>
						<span class="menu-title">Log Out</span>
					</a>
				</li>
			</ul>
		</nav>
		<!-- partial -->
		<div class="container-fluid page-body-wrapper">
			<!-- partial:partials/_navbar.html -->
			<nav class="navbar p-0 fixed-top d-flex flex-row">
				<div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
					<a class="navbar-brand brand-logo-mini" href="<?= base_url('home') ?>"><img src="<?= base_url() ?>/Template/7/template/assets/images/logo-mini.svg" alt="logo" /></a>
				</div>
				<div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
					<button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
						<span class="mdi mdi-menu"></span>
					</button>
					<ul class="navbar-nav w-100">
						<li class="nav-item w-100">
							<div class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
								<h3 class="text-warning">Selamat Datang</h3>
							</div>
						</li>
					</ul>
					<ul class="navbar-nav navbar-nav-right">
						<li class="nav-item dropdown d-none d-lg-block">
							<a class="nav-link btn btn-success create-new-button" id="createbuttonDropdown" data-toggle="dropdown" aria-expanded="false" href="#">+ Create New User</a>
							<div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="createbuttonDropdown">
								<h6 class="p-3 mb-0">Users</h6>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item preview-item" href="<?= base_url('user/tambah') ?>">
									<div class="preview-thumbnail">
										<div class="preview-icon bg-dark rounded-circle">
											<i class="mdi mdi-file-outline text-primary"></i>
										</div>
									</div>
									<div class="preview-item-content">
										<p class="preview-subject ellipsis mb-1">Tambah Data User</p>
									</div>
								</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item preview-item" href="<?= base_url('user') ?>">
									<div class="preview-thumbnail">
										<div class="preview-icon bg-dark rounded-circle">
											<i class="mdi mdi-web text-info"></i>
										</div>
									</div>
									<div class="preview-item-content">
										<p class="preview-subject ellipsis mb-1">List Data User</p>
									</div>
								</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item preview-item" href="<?= base_url('pengaturan/edit') ?>/<?= $id_user ?>">
									<div class="preview-thumbnail">
										<div class="preview-icon bg-dark rounded-circle">
											<i class="mdi mdi-layers text-danger"></i>
										</div>
									</div>
									<div class="preview-item-content">
										<p class="preview-subject ellipsis mb-1">My Profil</p>
									</div>
								</a>
								<div class="dropdown-divider"></div>
								<p class="p-3 mb-0 text-center"><i class="mdi mdi-arrow-left-bold-hexagon-outline text-warning" style="font-size: 20px; margin-right: 5px; cursor: pointer;"> Thanks</i> </p>
							</div>
						</li>
						<li class="nav-item nav-settings d-none d-lg-block">
							<a class="nav-link" href="#" id="fullscreenBtn">
								<i class="mdi mdi-arrow-expand-all"></i>
							</a>
						</li>
						<li class="nav-item dropdown border-left">
							<a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
								<i class="mdi mdi-bell"></i>
								<span class="count bg-success"></span>
							</a>
							<div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
								<div class="d-flex dropdown-item preview-item">
									<h6 class="p-3 mb-0 text-info">Notification</h6>
									<p class="p-3 mb-0 text-center" style="margin-left: 13	0px;"><a class="text-warning" href="?markAsRead1=true" id="markAsRead1">Tandai Telah Baca</a></p>
								</div>

								<?php
								date_default_timezone_set('Asia/Jakarta');

								$db = \Config\Database::connect();
								$query = $db->table('tbl_user')->orderBy('created_at', 'DESC')->limit(4)->get();
								$daftar = $query->getResult();

								// Mengambil data dari local storage
								$readStatus1 = isset($_COOKIE['read_status1']) ? json_decode($_COOKIE['read_status1']) : [];

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
									if ($timeDiff->i > 0) {
										$timeAgo .= $timeDiff->i . ' Menit ';
									}
									if ($timeDiff->s > 0) {
										$timeAgo .= $timeDiff->s . '  ';
									}

									$timeAgo .= ' Detik Yang Lalu';
									// Mengecek apakah data telah dibaca
									$isRead1 = in_array($row->id_user, $readStatus1);
									if ($isRead1) {
										continue; // Jika data telah dibaca, lanjut ke iterasi berikutnya
									}
									// Memeriksa apakah tautan "Tandai Telah Baca" diklik
									if (isset($_GET['markAsRead1']) && $_GET['markAsRead1'] == 'true') {
										// Menyimpan data yang belum dibaca ke local storage
										$readStatus1[] = $row->id_user;
									}
								?>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item preview-item">
										<div class="preview-thumbnail">
											<img src="<?= base_url() ?>/upload_foto/<?= $row->foto ?>" alt="image" class="rounded-circle profile-pic">
										</div>
										<div class="preview-item-content">
											<p class="preview-subject ellipsis mb-2 text-primary"><?= $row->nama_user ?></p>
											<p class="text-muted mb-0"> <?= $timeAgo ?> </p>
										</div>
									</a>
								<?php } ?>
								<?php
								// Mengubah data readStatus ke format JSON dan menyimpannya di local storage
								setcookie('read_status1', json_encode($readStatus1));
								?>
								<div class="dropdown-divider"></div>
								<?php
								// Mengambil data dari local storage
								$readStatus1 = isset($_COOKIE['read_status1']) ? json_decode($_COOKIE['read_status1']) : [];
								// Mengecek apakah ada notifikasi yang belum dibaca
								$hasUnreadNotification = false;
								foreach ($daftar as $row) {
									if (!in_array($row->id_user, $readStatus1)) {
										$hasUnreadNotification = true;
										break;
									}
								}
								?>
								<?php if (!$hasUnreadNotification) { ?>
									<a class="dropdown-item preview-item">
										<div class="preview-item-content">
											<p class="preview-subject ellipsis text-light p-2 m-2">Tidak Ada Notifikasi Baru</p>
										</div>
									</a>
								<?php } else { ?>
									<a class="dropdown-item preview-item" href="<?= base_url('user') ?>">
										<div class="preview-item-content">
											<p class="preview-subject ellipsis text-light p-2 m-2">All Notification</p>
										</div>
									</a>
								<?php } ?>

							</div>
						</li>
						<li class="nav-item dropdown border-left">
							<a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
								<i class="mdi mdi-email"></i>
								<span class="count bg-danger"></span>
							</a>
							<div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
								<div class="d-flex dropdown-item preview-item">
									<h6 class="p-3 mb-0 text-info">Pesan</h6>
									<p class="p-3 mb-0 text-center ml-5"><a class="text-warning" href="?markAsRead2=true" id="markAsRead2">Tandai Telah Baca</a></p>
								</div>

								<?php
								date_default_timezone_set('Asia/Jakarta');

								$db = \Config\Database::connect();
								$query = $db->table('pesan')->orderBy('created_at', 'DESC')->limit(4)->get();
								$datapesan = $query->getResult();

								// Mengambil data dari local storage
								$readStatus2 = isset($_COOKIE['read_status']) ? json_decode($_COOKIE['read_status']) : [];

								foreach ($datapesan as $row) {
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
									if ($timeDiff->i > 0) {
										$timeAgo .= $timeDiff->i . ' Menit ';
									}
									if ($timeDiff->s > 0) {
										$timeAgo .= $timeDiff->s . '  ';
									}

									$timeAgo .= ' Detik Yang Lalu';
									// Mengecek apakah data telah dibaca
									$isRead2 = in_array($row->id_pesan, $readStatus2);
									if ($isRead2) {
										continue; // Jika data telah dibaca, lanjut ke iterasi berikutnya
									}
									// Memeriksa apakah tautan "Tandai Telah Baca" diklik
									if (isset($_GET['markAsRead2']) && $_GET['markAsRead2'] == 'true') {
										// Menyimpan data yang belum dibaca ke local storage
										$readStatus2[] = $row->id_pesan;
									}
								?>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item preview-item">
										<div class="preview-thumbnail">
											<div class="preview-icon bg-dark rounded-circle">
												<i class="mdi mdi-comment-multiple-outline text-success"></i>
											</div>
										</div>
										<div class="preview-item-content">
											<p class="preview-subject mb-1"><?= $row->email ?></p>
											<p class="text-muted ellipsis mb-0 mt-2"> <?= $row->pesan ?> </p>
										</div>
									</a>
								<?php } ?>
								<?php
								// Mengubah data readStatus ke format JSON dan menyimpannya di local storage
								setcookie('read_status', json_encode($readStatus2));
								?>
								<div class="dropdown-divider"></div>
								<?php
								// Mengambil data dari local storage
								$readStatus2 = isset($_COOKIE['read_status']) ? json_decode($_COOKIE['read_status']) : [];
								// Mengecek apakah ada notifikasi yang belum dibaca
								$hasUnreadNotification = false;
								foreach ($datapesan as $row) {
									if (!in_array($row->id_pesan, $readStatus2)) {
										$hasUnreadNotification = true;
										break;
									}
								}
								?>
								<?php if (!$hasUnreadNotification) { ?>
									<a class="dropdown-item preview-item">
										<div class="preview-item-content">
											<p class="preview-subject ellipsis text-light p-2 m-2">Tidak Ada Pesan Baru</p>
										</div>
									</a>
								<?php } else { ?>
									<a class="dropdown-item preview-item" href="<?= base_url('home') ?>">
										<div class="preview-item-content">
											<p class="preview-subject ellipsis text-light p-2 m-2">Semua Pesan</p>
										</div>
									</a>
								<?php } ?>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
								<div class="navbar-profile">
									<img class="img-xs rounded-circle" src="<?= base_url() ?>/upload_foto/<?= $foto ?>" alt="">
									<p class="mb-0 d-none d-sm-block navbar-profile-name"><?= $nama_user ?></p>
									<i class="mdi mdi-menu-down d-none d-sm-block"></i>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
								<h6 class="p-3 mb-0">Profile</h6>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item preview-item" href="<?= base_url('pengaturan/edit2') ?>/<?= $id_user ?>">
									<div class="preview-thumbnail">
										<div class="preview-icon bg-dark rounded-circle">
											<i class="mdi mdi-settings text-success"></i>
										</div>
									</div>
									<div class="preview-item-content">
										<p class="preview-subject mb-1">Settings</p>
									</div>
								</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item preview-item" href="<?= base_url('auth/logout') ?>">
									<div class="preview-thumbnail">
										<div class="preview-icon bg-dark rounded-circle">
											<i class="mdi mdi-logout text-danger"></i>
										</div>
									</div>
									<div class="preview-item-content">
										<p class="preview-subject mb-1">Log out</p>
									</div>
								</a>
								<div class="dropdown-divider"></div>
								<p class="p-3 mb-0 text-center">Advanced settings</p>
							</div>
						</li>
					</ul>
					<button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
						<span class="mdi mdi-format-line-spacing"></span>
					</button>
				</div>
			</nav>
			<!-- partial -->
			<div class="main-panel">