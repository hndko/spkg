<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-9">
                        <h5>Formulir Penilaian Guru</h5>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-sm-12">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="datas">
                                <thead>
                                    <tr>
                                        <th width="5%">No</th>
                                        <th>nuptk</th>
                                        <th>Nama</th>
                                        <th width="10%">Status</th>
                                        <?php if (isset($guru) && $guru->num_rows() > 0 && get_penilaian_byguru($guru->row()->id_guru)->num_rows() == 0) : ?>
                                        <?php else : ?>
                                            <th width="15%">Aksi</th>
                                        <?php endif; ?>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (isset($guru) && $guru->num_rows() > 0) : ?>
                                        <?php foreach ($guru->result() as $key => $data) : ?>
                                            <tr>
                                                <td><?= $key + 1 ?></td>
                                                <td><?= $data->nuptk_guru ?></td>
                                                <td><?= $data->nama_guru ?></td>
                                                <td><?= get_penilaian_byguru($data->id_guru)->num_rows() == 0 ? '<span class="badge bg-danger text-white">Belum Dinilai</span>' : '<span class="badge bg-success text-white">Sudah Dinilai</span>' ?></td>
                                                <?php if (get_penilaian_byguru($data->id_guru)->num_rows() == 0) : ?>
                                                <?php else : ?>
                                                    <td>
                                                        <a href="<?= site_url('guru/laporan/cetak/' . $data->id_guru) ?>" class="btn btn-dark btn-sm" target="_blank"><i class="icon-eye"></i> Lihat Nilai </a>
                                                    </td>
                                                <?php endif; ?>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php else : ?>
                                        <tr>
                                            <td colspan="5" class="text-center">No data available</td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>