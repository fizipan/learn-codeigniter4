<?= $this->extend('layouts/app'); ?>

<?= $this->section('title'); ?>
    Data Users
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
    <div class="container pt-2">
        <a href="" class="btn btn-success">
            + Tambah Data
        </a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Username</th>
                    <th scope="col">Password</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($users as $key => $user) : ?>
                    <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td><?= $user['username']; ?></td>
                        <td><?= $user['password']; ?></td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    Action
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                    <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                <?php $i++ ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<?= $this->endSection(); ?>