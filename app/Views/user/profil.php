<?= $this->extend('view-template/template-user'); ?>

<?= $this->section('content'); ?>

<div class="card shadow mb-4">
    <form class="user">
        <div class="card-body">

            <div class="form-group">
                <h6>Nama</h6>
                <input type="text" class="form-control" id="exampleInputEmail">
            </div>
            <div class="form-group">
                <h6>Email</h6>
                <input type="email" class="form-control" id="exampleInputEmail">
            </div>
            <div class="form-group">
                <h6>Password</h6>
                <input type="password" class="form-control" id="exampleInputEmail">
            </div>
        </div>
        <br>
        <div class="d-flex justify-content-center">
            <a href="#" class="btn btn-primary btn-icon-split">
                <span class="text">Update Profil</span>
            </a>
        </div>
        <br>
    </form>
</div>

<?= $this->endSection(); ?>