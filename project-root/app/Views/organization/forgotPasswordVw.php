<?= $this->extend('layouts/landing') ?>

<?= $this->section('content') ?>
<div class="row justify-content-center align-items-center" style="height: 100vh;">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title text-center">Forgot Password</h3>
                <?php if (session()->getFlashdata('success')): ?>
                    <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
                <?php endif; ?>
                <form action="/forgotpassword/process" method="post">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Send Reset Link</button>
                </form>
                <div class="text-center mt-3">
                    <a href="/login">Back to Login</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
