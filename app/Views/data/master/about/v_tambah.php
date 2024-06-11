<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title"> About </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('about') ?>">About</a></li>
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
                    <form class="forms-sample" action="<?= base_url('about/save'); ?>" method="POST" enctype="multipart/form-data" onsubmit="saveSignature(event)">
                        <input type="text" class="d-none" name="id_about" value="1" required>
                        <div class="form-group">
                            <label for="judul_about">Judul</label>
                            <input type="text" class="form-control" id="judul_about" name="judul_about" placeholder="Masukan Judul" required>
                        </div>
                        <div class="form-group">
                            <label for="foto_about">Foto</label>
                            <p class="text-info">* Direkomendasikan Menggunakan Foto 555px * 350px</p>
                            <input type="file" accept="images/*" class="form-control" id="foto_about" name="foto_about" placeholder="Masukan Foto" required>
                        </div>
                        <div class="form-group">
                            <label for="link_youtube_about">Link Youtube</label>
                            <input type="text" class="form-control" id="link_youtube_about" name="link_youtube_about" placeholder="Masukan Link Youtube" required>
                        </div>
                        <div class="form-group">
                            <label for="quote_about">Quote</label>
                            <input type="text" class="form-control" id="quote_about" name="quote_about" placeholder="Masukan Quote" required>
                        </div>
                        <div class="form-group">
                            <label for="ttd_about">Tanda Tangan</label>
                            <div id="signature-pad" class="d-flex">
                                <div class="ml-0">
                                    <canvas width="500" height="300" style="border-radius: 20px; border: solid 3px orange;"></canvas>
                                </div>
                                <div class="ml-3" style="margin-top: 145px;">
                                    <button type="button" data-action="clear" class="btn btn-danger">Clear</button>
                                </div>
                            </div>
                            <input type="hidden" id="ttd_about" name="ttd_about">
                        </div>
                        <div class="form-group">
                            <label for="isi_about">Keterangan / Isi</label>
                            <textarea class="form-control" id="isi_about" name="isi_about" placeholder="Masukan Keterangan / Isi" rows="9" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <button class="btn btn-dark">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="<?= base_url() ?>/Template/7/signature-pad.js"></script>
<script>
    var wrapper = document.getElementById("signature-pad"),
        clearButton = wrapper.querySelector("[data-action=clear]"),
        canvas = wrapper.querySelector("canvas"),
        signaturePad;

    function resizeCanvas() {
        var ratio = window.devicePixelRatio || 1;
        canvas.width = canvas.offsetWidth * ratio;
        canvas.height = canvas.offsetHeight * ratio;
        canvas.getContext("2d").scale(ratio, ratio);
    }
    window.onresize = resizeCanvas;
    resizeCanvas();
    signaturePad = new SignaturePad(canvas);

    clearButton.addEventListener("click", function(event) {
        signaturePad.clear();
    });

    function saveSignature(event) {
        if (!signaturePad.isEmpty()) {
            var dataUrl = signaturePad.toDataURL('image/png');
            document.getElementById('ttd_about').value = dataUrl;
        }
    }
</script>