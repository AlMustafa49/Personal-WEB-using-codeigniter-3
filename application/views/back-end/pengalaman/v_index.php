<div class="col-md-12">
    <div class="card card-warning">
        <div class="card-header">
            <h3 class="card-title"> <i class="nav-icon fas fa-list-alt"></i>
                Data <?= $tittle ?>
            </h3>

            <div class="card-tools">
                <a href="<?= base_url('pengalaman/add')?>" class="btn btn-warning btn-xs">
                    <i class="fas fa-plus"></i> Add
                </a>
            </div>
            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">

            <?php
              if ($this->session->flashdata('pesan')){
                echo '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <i class="icon fas fa-check"></i>';
                echo $this->session->flashdata('pesan');
                echo '</div>';
              }
              ?>

            <table class="table table-bordered">
                <tr class="text-center">
                    <th>No</th>
                    <th>Posisi</th>
                    <th>Instansi</th>
                    <th>Tahun</th>
                    <th>Action</th>
                </tr>
                <?php $no = 1;
                foreach ($pengalaman as $key => $value) { ?>
                <tr class="text-center">
                    <td><?= $no++ ?></td>
                    <td><?= $value->posisi ?></td>
                    <td><?= $value->instansi ?></td>
                    <td><?= $value->tahun ?></td>
                    <td>
                        <a href="<?= base_url('pengalaman/edit/'.$value->id)?>" class="btn btn-success btn-sm"><i
                                class="fa fa-edit"></i></a>
                        <a href="<?= base_url('pengalaman/delete/'.$value->id)?>"
                            onclick="return confirm('Apakah anda yakin ingin menghapus data..?')"
                            class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                <?php } ?>
            </table>

        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>