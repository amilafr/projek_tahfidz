<?= $this->extend('view-template/template-user'); ?>

<?= $this->section('content'); ?>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Rekap Hafalan Terakhir</h6>
    </div>
    <div class="card-body">
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
        <div class="d-flex justify-content-center">
            <a href="#" class="btn btn-primary btn-icon-split">
                <span class="text">Lanjut Hafalan</span>
            </a>
        </div>
    </div>
</div>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Rekap Hafalan</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Tanggal</th>
                        <th>Surat</th>
                        <th>#</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>
                            <a href="#" class="btn btn-secondary btn-icon-split btn-sm">
                                <span class="text">Muroja'ah</span>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>