<div class="col-md-12">
    <div class="card card-warning">
        <div class="card-header">
            <h3 class="card-title"> <i class="nav-icon fas fa-graduation-cap"></i>
                <?= $tittle ?>
            </h3>

        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <?php
                echo validation_errors('<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <i class="icon fas fa-ban"></i>','</div>');

                //notif error upload
                if(isset($error_upload)){
                    echo '<div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="icon fas fa-ban"></i>'.$error_upload.'</div>';
                }

                 ?>

            <?php
              echo form_open_multipart('blog/add');
              ?>

            <div class="form-group">
                <label>Judul</label>
                <input class="form-control" name="judul" value="<?= set_value('judul'); ?>" placeholder="Judul Artikel">
            </div>
            <div class="form-group">
                <label>Isi Blog</label>
                <textarea name="isi_blog" class="form-control" id="summernote"><?= set_value('isi_blog'); ?></textarea>
            </div>
            <div class="form-group">
                <label>Gambar</label>
                <input type="file" class="form-control" name="gambar" accept="image/*" required>
            </div>
            <div class="form-group">
                <button class="btn btn-outline-primary" type="submit">Simpan</button>
                <a href="<?= base_url('blog')?>" class="btn btn-outline-danger">Kembali</a>
            </div>
            <?php echo form_close(); ?>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>