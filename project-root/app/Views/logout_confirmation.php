<?= $this->extend('layouts/main') ?>

<?= $this->section('appbar') ?>
<header class="appbar">
    <div class="appbar-title">Logout Confirmation</div>
    <div class="appbar-links">
        <a href="<?= $referrer ?>" class="btn btn-outline-primary mr-3"><i class="fas fa-chevron-left"></i> Back</a>
    </div>
</header>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="container">
    <div class="row justify-content-center align-items-center" style="height: 50vh;">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body text-center" style="overflow-y: auto;">
                    <h3 class="card-title">Logout</h3>
                    <p class= "text-dark">Are you sure you want to log out?</p>
                    <div class="mt-4">
                        <a href="/logout/confirm" class="btn btn-danger mr-3">Yes, Logout</a>
                        <a href="<?= $referrer ?>" class="btn btn-secondary">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
