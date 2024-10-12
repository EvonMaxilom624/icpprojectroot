<?= $this->extend('layouts/landing') ?>

<?= $this->section('content') ?>
<div class="row justify-content-center align-items-center" style="height: 100vh;">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body text-center">
                <img src="/images/admin_logo.jpg" alt="Admin Logo" class="mb-4 rounded mx-auto d-block" style="height: 100px;">
                <h3 class="card-title text-center">Forgot Password</h3>
                <?php if (session()->getFlashdata('error')): ?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
                <?php endif; ?>
                <?php if (session()->getFlashdata('success')): ?>
                    <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
                <?php endif; ?>
                <form action="/admin/forgotpasswordproc" method="post">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </form>
                <div class="text-center mt-3">
                    <a href="/admin/login">Back to Login</a>
                </div>
                <div>
                    <a href="/" class="btn btn-outline-primary mb-3"><i class="fas fa-chevron-left"></i> Back </a> 
                </div>    
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
