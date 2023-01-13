<div class="row">
    <div class="col-sm-2">
        <div class="card card-dark">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="nav-icon fas fa-image"></i>
                    Foto profile
                </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <?php echo form_open_multipart('admin/setting') ?>
                <div class="form-group">
                    <img src="<?= base_url('gambar/' . $biodata->foto)?>" id="gambar_load" width="220px" height="240px">
                </div>
                <div class="form-group">
                    <label>Ubah Foto</label>
                    <input type="file" class="form-control" name="foto" id="preview_gambar" placeholder="Ubah Foto">
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-10">
        <div class="card card-dark">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="nav-icon fas fa-table"></i>
                    Biodata
                </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

                <?php
                echo validation_errors('<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <i class="icon fas fa-ban"></i>','</div>');

                if ($this->session->flashdata('pesan')){
                    echo '<div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="icon fas fa-check"></i>';
                    echo $this->session->flashdata('pesan');
                    echo '</div>';
                  }
                  
                 ?>

                <div class="row">

                    <div class="col-sm-6">
                        <div class="group">
                            <label>Nama Lengkap</label>
                            <input name="nama_lengkap" value="<?= $biodata->nama_lengkap ?>" class="form-control">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="group">
                            <label>Nama Panggilan</label>
                            <input name="nama_panggilan" value="<?= $biodata->nama_panggilan ?>" class="form-control">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="group">
                            <label>Tempat Lahir</label>
                            <input name="tempat_lahir" value="<?= $biodata->tempat_lahir ?>" class="form-control">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="group">
                            <label>Tanggal Lahir</label>
                            <input name="tgl_lahir" value="<?= $biodata->tgl_lahir ?>" class="form-control">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="group">
                            <label>Email</label>
                            <input name="email" value="<?= $biodata->email ?>" class="form-control">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="group">
                            <label>No.HP</label>
                            <input name="no_hp" value="<?= $biodata->no_hp ?>" class="form-control">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="group">
                            <label>Password</label>
                            <input name="password" value="<?= $biodata->password ?>" class="form-control">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="group">
                            <label>Alamat</label>
                            <input name="alamat" value="<?= $biodata->alamat ?>" class="form-control">
                        </div>
                    </div>


                    <div class="col-sm-6">
                        <div class="group">
                            <br>
                            <button class="btn btn-secondary" type="submit"><i class="fa fa-save"></i>
                                Simpan</button>
                        </div>
                    </div>

                </div>

                <?php echo form_close() ?>

            </div>

        </div>

    </div>

</div>