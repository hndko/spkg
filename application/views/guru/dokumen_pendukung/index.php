<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                        <h5>Manajemen Dokumen Pendukung</h5>
                    </div>
                    <div class="col-sm-6">
                        <span class="float-right"><a href="<?= base_url('guru/dokumenpendukung/upload') ?>" class="btn btn-sm btn-primary">Tambah Dokumen</a></span>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-sm-12">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="datas">
                                <thead>
                                    <tr>
                                        <th width="3%">No</th>
                                        <th>File</th>
                                        <th>Tanggal Diunggah</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($row as $key => $dokumen) { ?>
                                        <tr>
                                            <td><?= $key + 1 ?></td>
                                            <td><?= $dokumen->file ?></td>
                                            <td><?= $dokumen->created_at ?></td>
                                            <td>
                                                <a href="<?= base_url() ?>guru/dokumenpendukung/edit/<?= $dokumen->id ?>" class="btn btn-sm btn-warning"><i class="icon-paper"></i> Edit</a>
                                                <a href="<?= base_url() ?>guru/dokumenpendukung/delete/<?= $dokumen->id ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus dokumen ini?');"><i class="icon-trash"></i> Hapus</a>
                                                <a href="<?= base_url() ?>guru/dokumenpendukung/show/<?= $dokumen->id ?>" class="btn btn-sm btn-info"><i class="icon-eye"></i> Lihat</a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>