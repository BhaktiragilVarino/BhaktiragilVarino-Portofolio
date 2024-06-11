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
                    <form class="forms-sample" action="<?= base_url('about/update/' . $about['id_about']); ?>" method="POST" enctype="multipart/form-data" onsubmit="saveSignature(event)">
                        <div class="form-group">
                            <label for="judul_about">Judul</label>
                            <input type="text" class="form-control" id="judul_about" value="<?= $about['judul_about']; ?>" name="judul_about" placeholder="Masukan Judul" required>
                        </div>
                        <div class="form-group">
                            <label for="foto_about">Foto</label>
                            <p class="text-info" style="margin-bottom: 5px;">* Direkomendasikan Menggunakan Foto 555px * 350px</p>
                            <input type="file" accept="images/*" class="form-control" id="foto_about" value="<?= $about['foto_about']; ?>" name="foto_about" placeholder="Masukan Foto">
                        </div>
                        <div class="form-group">
                            <label for="link_youtube_about">Link Youtube</label>
                            <input type="text" class="form-control" id="link_youtube_about" value="<?= $about['link_youtube_about']; ?>" name="link_youtube_about" placeholder="Masukan Link Youtube" required>
                        </div>
                        <div class="form-group">
                            <label for="quote_about">Quote</label>
                            <input type="text" class="form-control" id="quote_about" value="<?= $about['quote_about']; ?>" name="quote_about" placeholder="Masukan Quote" required>
                        </div>
                        <div class="form-group" id="signature-pad">
                            <label for="ttd_about">Tanda Tangan</label>
                            <p class="text-info">* Buat Tanda Tangan Di Kanan Jika Anda Ingin Memperbaruinya.</p>
                            <div class="row d-flex p-3 justify-content-center">
                                <img class="col-5 m-2" src="<?= base_url() ?>/upload_foto/<?= $about['ttd_about']; ?>" alt="" style="border-radius: 20px; border: solid 3px orange;">
                                <div class="col-5 m-2">
                                    <canvas style="width: 100%; height: 300px; border-radius: 20px; border: solid 3px orange;"></canvas>
                                </div>
                            </div>
                            <div class="m-3 text-center">
                                <button type="button" data-action="clear" class="btn btn-danger">Clear</button>
                            </div>
                            <input type="hidden" class="form-control mt-3" id="ttd_about" value="<?= $about['ttd_about']; ?>" name="ttd_about" placeholder="Masukan Tanda Tangan" required>
                        </div>
                        <div class="form-group">
                            <label for="isi_about">Keterangan / Isi</label>
                            <textarea class="form-control" id="isi_about" name="isi_about" placeholder="Masukan Keterangan / Isi" required rows="9"><?= $about['isi_about']; ?></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <a class="btn btn-dark" href="<?= base_url('about') ?>">Cancel</a>
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