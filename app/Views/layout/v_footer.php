<!-- content-wrapper ends -->
<!-- partial:partials/_footer.html -->
<footer class="footer">
	<div class="d-sm-flex justify-content-center justify-content-sm-between">
		<span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © Bhakti Ragil Varino <?= date('Y') ?></span>
		<span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
	</div>
</footer>
<!-- partial -->
</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

<!-- plugins:js -->
<script src="<?= base_url() ?>/Template/7/template/assets/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="<?= base_url() ?>/Template/7/template/assets/vendors/chart.js/Chart.min.js"></script>
<script src="<?= base_url() ?>/Template/7/template/assets/vendors/progressbar.js/progressbar.min.js"></script>
<script src="<?= base_url() ?>/Template/7/template/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
<script src="<?= base_url() ?>/Template/7/template/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="<?= base_url() ?>/Template/7/template/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="<?= base_url() ?>/Template/7/template/assets/js/off-canvas.js"></script>
<script src="<?= base_url() ?>/Template/7/template/assets/js/hoverable-collapse.js"></script>
<script src="<?= base_url() ?>/Template/7/template/assets/js/misc.js"></script>
<script src="<?= base_url() ?>/Template/7/template/assets/js/settings.js"></script>
<script src="<?= base_url() ?>/Template/7/template/assets/js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="<?= base_url() ?>/Template/7/template/assets/js/dashboard.js"></script>
<!-- End custom js for this page -->
<script src="<?= base_url() ?>/Template/7/sweetalert/sweetalert.min.js"></script>

<?php if (!empty(session()->getflashdata('success'))) { ?>
	<script>
		swal("Congratulation", "<?= session()->getFlashData('success'); ?>", "success");
	</script>
	<!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
<?php session()->remove('success');
} ?>

<?php if (!empty(session()->getflashdata('errors'))) { ?>
	<script>
		swal("Mohon Maaf", "<?= session()->getFlashData('errors'); ?>", "error");
	</script>
	<!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
<?php session()->remove('errors');
} ?>

<?php if (!empty(session()->getflashdata('info'))) { ?>
	<script>
		swal("Mohon Perhatian", "<?= session()->getFlashData('info'); ?>", "info");
	</script>
	<!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
<?php session()->remove('info');
} ?>

<script>
	document.getElementById("fullscreenBtn").addEventListener("click", function() {
		toggleFullscreen();
	});

	function toggleFullscreen() {
		if (!document.fullscreenElement) {
			document.documentElement.requestFullscreen();
		} else {
			if (document.exitFullscreen) {
				document.exitFullscreen();
			}
		}
	}

	// Untuk memastikan tombol F11 juga dapat mengaktifkan mode layar penuh
	document.addEventListener("keydown", function(event) {
		if (event.key === "F11") {
			event.preventDefault(); // Mencegah perilaku default dari tombol F11
			toggleFullscreen();
		}
	});
</script>

</body>

</html>