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
              echo form_open('pengalaman/edit/' . $pengalaman->id);
              ?>

              <div class="form-group">
                <label>Posisi</label>
                <input class="form-control" name="posisi" value="<?= $pengalaman->posisi ?>" placeholder="Posisi">
              </div>

              <div class="form-group">
                <label>Instansi</label>
                <input class="form-control" name="instansi" value="<?= $pengalaman->instansi ?>" placeholder="Instansi">
              </div>
              
              <div class="form-group">
                <label>Tahun</label>
                <input class="form-control" name="tahun" value="<?= $pengalaman->tahun ?>" placeholder="Tahun">
              </div>

              <div class="form-group">
                <button class= "btn btn-outline-primary" type="submit">Simpan</button>
                <a href="<?= base_url('pengalaman')?>" class= "btn btn-outline-danger">Kembali</a>
              </div>
                <?php echo form_close(); ?>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>