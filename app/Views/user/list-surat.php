<?= $this->extend('view-template/template-user'); ?>

<?= $this->section('content'); ?>

<?php
$json_url = file_get_contents('https://api.quran.sutanlab.id/surah/');
$data = json_decode($json_url, true);

$data = $data["data"];
?>

<div class="row">
    <?php foreach ($data as $row) : ?>
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body d-flex justify-content-between">
                    <div>
                        <div class="h4 mb-3 font-weight-bold text-gray-800"><?= $row['name']['short']; ?></div>
                        <div class="h5 mb-0 text-gray-500"><?= $row['name']['transliteration']['id']; ?></div>
                    </div>
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