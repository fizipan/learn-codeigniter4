<?= $this->extend('layouts/app'); ?>

<?= $this->section('title'); ?>
    Detail Users
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
    <div class="container pt-2">
        <div class="card" style="width: 18rem;">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Username: <?= $user['username']; ?></li>
                <li class="list-group-item">Password: <?= $user['password']; ?></li>
            </ul>
        </div>
        <a href="/users" class="btn btn-danger mt-2">Kembali</a>
    </div>
<?= $this->endSection(); ?>