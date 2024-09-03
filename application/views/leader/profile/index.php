<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        <h5>Perbaharui Profile</h5>
                    </div>
                </div>
                <form action="<?= site_url('leader/profile/update') ?>" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                    <input type="hidden" name="id" value="<?= @$row->id_user ?>">
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
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-success btn-block"><i class="icon-loader"></i> Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>