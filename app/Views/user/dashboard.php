<?= $this->extend('view-template/template-user'); ?>

<?= $this->section('content'); ?>

<div class="card shadow mb-4" style="background-image: url('img/header.jpg'); background-size: cover;">
    <div class="card-body text-center" style="padding: 50px;">
        <br>
        <h5 class="text-gray-100">Dari Abu Hurairah RA, ia berkata: “Rasulullah SAW. bersabda, “Tidaklah suatu kaum berkumpul dalam salah satu rumah dari rumah-rumah Allah (masjid), untuk membaca Al-Qur’an dan mempelajarinya, kecuali akan diturunkan kepada mereka ketenangan, dan mereka dilingkupi rahmat Allah, para malaikat akan mengelilingi mereka dan Allah akan menyebut-nyebut mereka di hadapan makhluk-Nya yang berada didekat-Nya (para malaikat).” </h5>
        <p class="text-gray-500"><i>- HR. Muslim</i></p>
    </div>
</div>

<div class="row">
    <div class="col">
        <!-- Area Chart -->
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Muroja'ah</h6>
                <a href="/murojaah" class="btn btn-primary btn-icon-split btn-sm">
                    <span class="text">Lanjut Muroja'ah &nbsp;<i class="fas fa-arrow-right"></i></span>
                </a>
            </div>
            <div class="card-body">
                <p>Muroja'ah terakhir</p>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Tanggal</th>
                            <th>Surat</th>
                            <th>Ayat Terakhir</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col">
        <!-- Bar Chart -->
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Hafalan</h6>
                <a href="/hafalan" class="btn btn-primary btn-icon-split btn-sm">
                    <span class="text">Lanjut Hafalan &nbsp;<i class="fas fa-arrow-right"></i></span>
                </a>
            </div>
            <div class="card-body">
                <p>Hafalan terakhir</p>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Tanggal</th>
                            <th>Surat</th>
                            <th>Ayat Terakhir</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>