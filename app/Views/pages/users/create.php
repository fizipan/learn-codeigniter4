<?= $this->extend('layouts/app'); ?>

<?= $this->section('title'); ?>
    Create Users
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
    <div class="container pt-3">
        <h2>Create Users</h2>
        <div class="card mt-4" style="width: 28rem;">
            <div class="card-body">
                <form action="/users/store" method="POST">
                <?= csrf_field(); ?>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" name="username" id="username" placeholder="Example user@gmail.com" aria-describedby="username">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Your Password" id="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
<?= $this->endSection(); ?>