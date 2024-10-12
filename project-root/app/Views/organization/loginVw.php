<?= $this->extend('layouts/landing') ?>

<?= $this->section('content') ?>
<div class="row justify-content-center align-items-center" style="height: 100vh;">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body text-center">
                <img src="/images/ioslogo.jpg" alt="Logo" class="mb-4 rounded mx-auto d-block" style="height: 100px;">
                <h3 class="card-title text-center">Login</h3>

                <?php if (session()->getFlashdata('error')): ?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
                <?php endif; ?>

                <?php if (session()->getFlashdata('success')): ?>
                    <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
                <?php endif; ?>
                
                <form action="/loginproc" method="post">
                    <div class="form-group">
                        <label for="username">Name</label>
                        <input type="text" name="username" id="username" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                </form>
                <div class="text-center mt-3">
                    <a href="/forgotpassword">Forgot Password?</a>
                </div>
                <div>
                    <a href="/" class="btn btn-outline-primary mb-3"><i class="fas fa-chevron-left"></i> Back </a> 
                </div>    
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
