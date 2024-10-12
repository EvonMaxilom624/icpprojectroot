<?= $this->extend('layouts/main') ?>

<?= $this->section('appbar') ?>
<header class="appbar">
    <div class="appbar-title">Activity Request</div>
    <div class="appbar-links">
        <a href="/dashboard" class="text-white ml-3">Dashboard</a>
        <a href="/profile" class="text-white ml-3">Profile</a>
        <a href="/calendar" class="text-white ml-3">Calendar</a>
        <a href="/logout" class="btn btn-danger ml-3">Logout</a>
    </div>
</header>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Activity Request Submitted Successfully</div>
                <div class="card-body">
                    <p style="color: black;">Your activity request has been submitted successfully.</p>
                    <!-- You can add additional content or instructions here -->
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
