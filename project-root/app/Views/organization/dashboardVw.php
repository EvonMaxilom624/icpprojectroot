<?= $this->extend('layouts/main') ?>

<?= $this->section('appbar') ?>
<header class="appbar">
    <div class="appbar-title">Dashboard</div>
    <div class="appbar-links">
        <a href="/profile" class="text-white ml-3">Profile</a>
        <a href="/calendar" class="text-white ml-3">Calendar</a>
        <a href="/requestform" class="text-white ml-3">Request Form</a>
        <a href="/logout" class="btn btn-danger ml-3">Logout</a>
    </div>
</header>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-3 mb-3">
            <a href="/notifications" class="card-link">
                <div class="card h-100">
                    <div class="card-body notifications d-flex flex-column align-items-center justify-content-center">
                        <h5 class="card-title mt-3">Notifications</h5>
                        <span class="badge badge-pill badge-secondary">0</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3 mb-3">
            <a href="/recent-activities" class="card-link">
                <div class="card h-100">
                    <div class="card-body recent-activities d-flex flex-column align-items-center justify-content-center">
                        <h5 class="card-title mt-3">Recent Activities</h5>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3 mb-3">
            <a href="/important-announcements" class="card-link">
                <div class="card h-100">
                    <div class="card-body important-announcements d-flex flex-column align-items-center justify-content-center">
                        <h5 class="card-title mt-3">Important Announcements</h5>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3 mb-3">
            <a href="/organization-files" class="card-link">
                <div class="card h-100">
                    <div class="card-body organization-files d-flex flex-column align-items-center justify-content-center">
                        <h5 class="card-title mt-3">Organization Files</h5>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
