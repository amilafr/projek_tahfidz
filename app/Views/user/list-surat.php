<?= $this->extend('view-template/template-user'); ?>

<?= $this->section('content'); ?>

<?php
$json_url = file_get_contents('https://api.quran.sutanlab.id/surah/');
$data = json_decode($json_url, true);

$data = $data["data"];
?>

<div class="row">
    <?php foreach ($data as $row) : ?>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="h4 mb-3 font-weight-bold text-gray-800 d-flex justify-content-center"><?= $row['name']['short']; ?></div>
                    <div class="h5 mb-0 text-gray-500 d-flex justify-content-center"><?= $row['name']['transliteration']['id']; ?></div>
                    <br>
                    <div class="d-flex justify-content-center">
                        <a href="/list-surat/<?= $row['number']; ?>" class="btn btn-primary btn-circle">
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>


<?= $this->endSection(); ?>