<?php foreach ($blog as $key => $value){ ?>

<div class="col-sm-4">
    <div class="card card-success">
        <div class="card-body">
            <p class="text-center">
                <img width="280px" height="180px" src="<?= base_url('gambar/' . $value->gambar) ?>">
            </p>
            <a href=" <?= base_url('home/detail_blog/' . $value->slug) ?>">
                <h5 class="text-primary"><?= substr($value->judul,0 ,50) ?>..</h5>
            </a>


        </div>
    </div>
</div>

<?php } ?>