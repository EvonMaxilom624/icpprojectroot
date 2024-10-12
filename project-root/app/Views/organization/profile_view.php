<?= $this->extend('layouts/main') ?>

<?= $this->section('appbar') ?>
<header class="appbar">
    <div class="appbar-title">Profile</div>
    <div class="appbar-links">
        <a href="/dashboard" class="btn btn-outline-primary mr-3"><i class="fas fa-chevron-left"></i> Back</a>
        <a href="/logout" class="btn btn-danger">Logout</a>
    </div>
</header>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card mt-5">
                <div class="card-body text-center">
                    <img src="<?= base_url('images/profile_picture.jpg') ?>" class="rounded-circle mb-3" alt="Profile Picture" width="150">
                    <h3 class="card-title">Society of Information Technologists</h3>
                    <ul class="list-group text-left text-dark">
                        <li class="list-group-item"><strong>Email:</strong> sits@ustp.edu.ph</li>
                        <li class="list-group-item"><strong>Address:</strong> Magsaysay St., Poblacion, Claveria, Misamis Oriental</li>
                        <li class="list-group-item"><strong>Phone:</strong> 0912-123-1234</li>
                        <li class="list-group-item"><strong>Website:</strong> 
                            <a href="http://www.organization-website.com" target="_blank">www.organization-website.com</a></li>
                        <li class="list-group-item"><strong>Type:</strong> School Curricular Organization</li>
                        <li class="list-group-item"><strong>Founded:</strong> 2021</li>
                        <li class="list-group-item"><strong>Number of Members:</strong> 178</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mt-5">
                <div class="card-body ">
                    <h3 class="card-title">Mission</h3>
                    <p class= "text-left text-dark"> To provide high-quality education and training in the field of Information Technology, equipping students with the necessary skills and knowledge to excel in their careers and contribute to the advancement of technology.</p>
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-body">
                    <h3 class="card-title">Vision</h3>
                    <p class="text-left text-dark">To be a leading institution in Information Technology education, recognized globally for excellence in teaching, research, and community service, and producing graduates who are innovative, ethical, and prepared to meet the challenges of the ever-evolving IT industry.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
