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
                <div class="card-header">Activity Request Form</div>
                <div class="card-body">
                    <form action="/requestform/submit" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="title" style="color: black;">Title of Event</label>
                            <input type="text" class="form-control" id="title" name="title" required>
                        </div>
                        <div class="form-group">
                            <label for="participants" style="color: black;">Participants</label>
                            <input type="text" class="form-control" id="participants" name="participants" required>
                        </div>
                        <div class="form-group">
                            <label for="when" style="color: black;">When</label>
                            <input type="datetime-local" class="form-control" id="when" name="when" required>
                        </div>
                        <div class="form-group">
                            <label for="where" style="color: black;">Where</label>
                            <input type="text" class="form-control" id="where" name="where" required>
                        </div>
                        <div class="form-group">
                            <label for="budget" style="color: black;">Budget</label>
                            <input type="number" class="form-control" id="budget" name="budget" required>
                        </div>
                        <div class="form-group">
                            <label for="requirements" style="color: black;">Requests, Letters, and Other Requirements</label>
                            <input type="file" class="form-control-file" id="requirements" name="requirements" >
                        </div>
                        <button type="submit" class="btn btn-primary">Submit Request</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
