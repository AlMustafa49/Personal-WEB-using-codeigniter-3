</div>
<!-- /.content -->
<div class="col-sm-12">
    <div class="row">
        <div class="col-sm-3">
            <div class="card card-dark card-outline">
                <div class="card-body box-profile">
                    <div class="text-center">
                        <img class="img-fluid" src="<?=base_url('gambar/' . $biodata->foto)?>">
                    </div>
                    <!-- <h3 class="profile-username text-center"><?= $biodata->nama_lengkap ?></h3> -->
                </div>

            </div>
        </div>

        <div class="col-sm-9">
            <div class="card card-dark card-outline">
                <div class="card-body box-profile">
                    <strong><i class="fas fa-user"></i> Nama Lengkap</strong>
                    <p class="text-muted">
                        <?= $biodata->nama_lengkap ?>
                    </p>
                    <strong><i class="fas fa-user"></i> Nama Panggilan</strong>
                    <p class="text-muted">
                        <?= $biodata->nama_panggilan ?>
                    </p>
                    <strong><i class="fas fa-calendar"></i> Tempat / Tanggal Lahir</strong>
                    <p class="text-muted">
                        <?= $biodata->tempat_lahir ?> /
                        <?= $biodata->tgl_lahir ?>
                    </p>
                    <strong><i class="fas fa-phone"></i> No Handphone</strong>
                    <p class="text-muted">
                        <?= $biodata->no_hp ?>
                    </p>
                    <strong><i class="fas fa-map-marker"></i> Alamat</strong>
                    <p class="text-muted">
                        <?= $biodata->alamat ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-sm-12">
    <div class="row">
        <div class="col-sm-12">

            <div class="card card-dark card-outline">
                <div class="card-body box-profile">
                    <strong><i class="fas fa-graduation-cap"></i> Pendidikan</strong>

                    <table class="table table-bordered">
                        <tr class="text-center">
                            <th width="70px">No</th>
                            <th>Pendidikan</th>
                            <th>Jurusan</th>
                            <th>Tahun</th>
                        </tr>
                        <?php $no = 1;
                        foreach ($pendidikan as $key => $value) { ?>
                        <tr class="text-center">
                            <td><?= $no++ ?></td>
                            <td><?= $value->pendidikan ?></td>
                            <td><?= $value->jurusan ?></td>
                            <td><?= $value->tahun ?></td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-sm-12">
    <div class="row">
        <div class="col-sm-12">

            <div class="card card-dark card-outline">
                <div class="card-body box-profile">
                    <strong><i class="fas fa-star"></i> Skill</strong>

                    <table class="table table-bordered">
                        <tr class="text-center">
                            <th width="70px">No</th>
                            <th>Skill</th>
                        </tr>
                        <?php $no = 1;
                foreach ($skill as $key => $value) { ?>
                        <tr class="text-center">
                            <td><?= $no++ ?></td>
                            <td class="text-left">
                                <div class="progress-group">
                                    <span class="progress-text"><?= $value->skill ?></span>
                                    <span class="float-right"><b><?= $value->nilai ?></b>/100</span>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-warning" style="width: <?= $value->nilai ?>%"></div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-sm-12">
    <div class="row">
        <div class="col-sm-12">

            <div class="card card-dark card-outline">
                <div class="card-body box-profile">
                    <strong><i class="fas fa-list-alt"></i> Pengalaman</strong>

                    <table class="table table-bordered">
                        <tr class="text-center">
                            <th width="70px">No</th>
                            <th>Posisi</th>
                            <th>Instansi</th>
                            <th>Tahun</th>
                        </tr>
                        <?php $no = 1;
                foreach ($pengalaman as $key => $value) { ?>
                        <tr class="text-center">
                            <td><?= $no++ ?></td>
                            <td><?= $value->posisi ?></td>
                            <td><?= $value->instansi ?></td>
                            <td><?= $value->tahun ?></td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-sm-12">
    <div class="row">
        <div class="col-sm-12">

            <div class="card card-dark card-outline">
                <div class="card-body box-profile">
                    <strong><i class="fas fa-globe"></i> Medsos</strong>

                    <table class="table table-bordered">
                        <tr class="text-center">
                            <th width="70px">No</th>
                            <th>Icon</th>
                            <th>Media Sosial</th>
                            <th>Url</th>
                        </tr>
                        <?php $no = 1;
                foreach ($medsos as $key => $value) { ?>
                        <tr class="text-center">
                            <td><?= $no++ ?></td>
                            <td><i class="fab <?= $value->icon ?> fa-2x"></i></td>
                            <td><?= $value->medsos ?></td>
                            <td><?= $value->url ?></td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- /.content-wrapper -->