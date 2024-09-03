<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        <h5>Edit Dokumen</h5>
                    </div>
                </div>
                <form action="<?= site_url('guru/dokumenpendukung/update/' . $dokumen->id) ?>" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                    <div class="row mt-3">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>File (Dokumen saat ini: <?= $dokumen->file ?>)</label>
                                <input type="file" name="file" class="form-control">
                                <small class="form-text text-muted">Kosongkan jika tidak ingin mengubah file.</small>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-success btn-block"><i class="icon-loader"></i> Perbarui</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>