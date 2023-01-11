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
                 ?>

              <?php
              echo form_open('medsos/edit/' . $medsos->id);

              ?>

              <div class="form-group">
                <label>Icon</label>
                <input class="form-control" name="icon" value="<?= $medsos->icon ?>" placeholder="Icon">
              </div>
              <div class="form-group">
                <label>Media Sosial</label>
                <input class="form-control" name="medsos" value="<?= $medsos->medsos ?>" placeholder="Media Sosial ">
              </div>
              <div class="form-group">
                <label>URL</label>
                <input class="form-control" name="url" value="<?= $medsos->url ?>" placeholder="URL">
              </div>
              <div class="form-group">
                <button class= "btn btn-outline-primary" type="submit">Simpan</button>
                <a href="<?= base_url('medsos')?>" class= "btn btn-outline-danger">Kembali</a>
              </div>
                <?php echo form_close(); ?>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>