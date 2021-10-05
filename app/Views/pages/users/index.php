<?= $this->extend('layouts/app'); ?>

<?= $this->section('title'); ?>
    Data Users
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
    <div class="container pt-2">
        <h1>Data Users</h1>
        <a href="/users/create" class="btn btn-success my-3">
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
                                    <li><a class="dropdown-item" href="users/<?= $user['id']; ?>">Detail</a></li>
                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                    <li>
                                        <form action="/users/<?= $user['id']; ?>" method="POST">
                                            <?= csrf_field(); ?>
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="dropdown-item text-danger">
                                                Delete
                                            </button>
                                        </form>
                                    </li>
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