<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        <h5>Detail Dokumen</h5>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>File:</label>
                            <p>
                                <a href="<?= base_url('uploads/' . $dokumen->file) ?>" target="_blank"><?= $dokumen->file ?></a>
                            </p>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Diunggah:</label>
                            <p><?= $dokumen->created_at ?></p>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <a href="<?= base_url('guru/dokumenpendukung') ?>" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>