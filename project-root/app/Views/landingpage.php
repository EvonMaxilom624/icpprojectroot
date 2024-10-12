<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<header class="appbar">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 d-flex align-items-center">
                <img src="/images/ioslogo.jpg" alt="Logo" class="appbar-logo rounded" style="height: 175px; margin-right: 15px;">
                <h1 class="appbar-title">Integrated Organizations' System (IOS)</h1>
            </div>
            <div class="col-md-6 text-right">
                <a href="/about" class="appbar-link">About</a>
                <a href="/contact" class="appbar-link">Contact</a>
                <a href="/faq" class="appbar-link">FAQ</a>
            </div>
        </div>
    </div>
</header>

<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto text-center">
            <h2>Welcome to the Integrated Organizations' System (IOS)</h2>
            <p>Please select your role to proceed:</p>
            <div class="mt-4">
                <a href="/organization/login" class="btn btn-primary mr-3">Organization Login</a>
                <a href="/admin/login" class="btn btn-primary">Admin Login</a>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
