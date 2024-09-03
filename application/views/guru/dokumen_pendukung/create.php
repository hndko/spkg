<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        <h5>Buat Dokumen Baru</h5>
                    </div>
                </div>
                <form action="<?= site_url('guru/dokumenpendukung/proses_upload') ?>" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                    <div class="row mt-3">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>File *</label>
                                <input type="file" name="file" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-success btn-block"><i class="icon-loader"></i> Unggah</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>