<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        <h5>Buat Pengguna Baru</h5>
                    </div>
                </div>
                <form action="<?= site_url('admin/users/create') ?>" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                    <div class="row mt-3">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Username *</label>
                                <input type="text" name="username_user" class="form-control" placeholder="ex. 7311732" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Password *</label>
                                <input type="text" name="password_user" class="form-control" placeholder="ex: ************" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Level User *</label>
                                <select name="level_user" class="form-control" required>
                                    <option value="1">Administrator</option>
                                    <option value="2">Kepala Sekolah</option>
                                    <option value="3">Guru</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Status User *</label>
                                <select name="status_user" class="form-control" required>
                                    <option value="1">Aktif</option>
                                    <option value="2">Non-Aktif</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-success btn-block"><i class="icon-loader"></i> Create</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>