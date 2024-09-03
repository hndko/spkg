<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        <h5>Perbaharui Data Pengguna</h5>
                    </div>
                </div>
                <form action="<?= site_url('admin/users/update') ?>" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                    <input type="hidden" name="id" value="<?= $this->uri->segment(4) ?>">
                    <div class="row mt-3">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Username *</label>
                                <input type="text" name="username_user" value="<?= @$row->username_user ?>" class="form-control" placeholder="ex. 7311732" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Password <sup>(Opsional)</sup></label>
                                <input type="text" name="password_user" class="form-control" placeholder="ex: ************">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Level User *</label>
                                <select name="level_user" class="form-control" required>
                                    <option value="1" <?= @$row->level_user == 1 ? 'selected' : '' ?>>Administrator</option>
                                    <option value="2" <?= @$row->level_user == 2 ? 'selected' : '' ?>>Kepala Sekolah</option>
                                    <option value="3" <?= @$row->level_user == 3 ? 'selected' : '' ?>>Guru</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Status User *</label>
                                <select name="status_user" class="form-control" required>
                                    <option value="1" <?= @$row->status_user == 1 ? 'selected' : '' ?>>Aktif</option>
                                    <option value="2" <?= @$row->status_user == 2 ? 'selected' : '' ?>>Non-Aktif</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-success btn-block"><i class="icon-loader"></i> Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>