<?= $this->extend('view-template/template-user'); ?>

<?= $this->section('content'); ?>

<?php
$json_url = file_get_contents('https://api.quran.sutanlab.id/surah/' . $no_surat);
$data = json_decode($json_url, true);

$data = $data["data"];
?>

<div class="card shadow mb-4">
    <div class="card-body text-center">
        <h1 class="mb-2 font-weight-bold text-gray-800"><?= $data['name']['short']; ?></h1>
        <h4 class="mb-3 text-gray-500"><?= $data['name']['transliteration']['id']; ?></h4>
        <h5 class="mb-4">"<?= $data['name']['translation']['id']; ?>"</h5>
        <hr>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <!-- <th>#</th> -->
                    <th>Audio</th>
                    <th>Arti</th>
                    <th>Ayat</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data['verses'] as $row) : ?>
                    <tr>
                        <!-- <td><?= $row['number']['inSurah']; ?></td> -->
                        <td>
                            <audio controls>
                                <source src="<?= $row['audio']['secondary'][0]; ?>" type="audio/mpeg">
                            </audio>
                        </td>
                        <td><?= $row['translation']['id']; ?></td>
                        <td class="text-right" style="font-size: 14pt;"><?= $row['text']['arab']; ?></td>

                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection(); ?>