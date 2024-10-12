<?= $this->extend('layouts/main') ?>

<?= $this->section('appbar') ?>
<header class="appbar">
    <div class="appbar-title">Admin Dashboard</div>
    <div class="appbar-links">
        <a href="/logout" class="btn btn-danger ml-3">Logout</a>
    </div>
</header>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-3 mb-3">
            <a href="/admin/organizations" class="card-link">
                <div class="card h-100">
                    <div class="card-body d-flex flex-column align-items-center justify-content-center">
                        <h5 class="card-title mt-3">View Organizations</h5>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3 mb-3">
            <a href="/admin/events" class="card-link">
                <div class="card h-100">
                    <div class="card-body d-flex flex-column align-items-center justify-content-center">
                        <h5 class="card-title mt-3">View Event Reports</h5>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3 mb-3">
            <a href="/admin/accounts" class="card-link">
                <div class="card h-100">
                    <div class="card-body d-flex flex-column align-items-center justify-content-center">
                        <h5 class="card-title mt-3">Manage Accounts</h5>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3 mb-3">
            <a href="/admin/organizations/register" class="card-link">
                <div class="card h-100">
                    <div class="card-body d-flex flex-column align-items-center justify-content-center">
                        <h5 class="card-title mt-3">Register New Organization</h5>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
