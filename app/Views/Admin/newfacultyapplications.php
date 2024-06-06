<?php 
include __DIR__.'/../Admin/Adminsidebar.php';
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-header card">
                    <div class="row align-items-end">
                        <div class="col-lg-8">
                            <div class="page-header-title">
                                <i class="icofont icofont-file-document bg-c-pink"></i>
                                <div class="d-inline">
                                    <h4>New Faculty Applications</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="page-header-breadcrumb">
                                <ul class="breadcrumb-title">
                                    <li class="breadcrumb-item">
                                        <a href="<?= base_url('Admindasboard') ?>">
                                            <i class="icofont icofont-home"></i>
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#!">Pages</a></li>
                                    <li class="breadcrumb-item"><a href="">New Faculty Applications</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <!-- Material tab card start -->
                        <div class="card">
                            <div class="card-header">
                                <h5>New Applications</h5>
                                <div class="card-header-right">
                                    <ul class="list-unstyled card-option">
                                        <li><i class="icofont icofont-simple-left "></i></li>
                                        <li><i class="icofont icofont-maximize full-card"></i></li>
                                        <li><i class="icofont icofont-minus minimize-card"></i></li>
                                        <li><i class="icofont icofont-refresh reload-card"></i></li>
                                        <li><i class="icofont icofont-error close-card"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-block">
                                <!-- Row start -->
                                <div class="row m-b-30">
                                    <div class="col-lg-12 col-xl-12">
                                        <div class="sub-title"></div>
                                        <!-- Nav tabs -->
                                        <ul class="nav nav-tabs md-tabs" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-toggle="tab" href="#home3"
                                                    role="tab">New Applications</a>
                                                <div class="slide"></div>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#profile3"
                                                    role="tab">Pending Applications</a>
                                                <div class="slide"></div>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#messages3"
                                                    role="tab">Create Password</a>
                                                <div class="slide"></div>
                                            </li>

                                        </ul>
                                        <!-- Tab panes -->
                                        <div class="tab-content card-block">
                                            <div class="tab-pane active" id="home3" role="tabpanel">
                                                <div class="card-block table-border-style">
                                                    <div class="table-responsive">
                                                        <?php if (!empty($facultyapplications)): ?>
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th>No</th>
                                                                    <th>Full Name</th>
                                                                    <th>Email</th>
                                                                    <th>Resume</th>
                                                                    <th>Certificates</th>
                                                                    <th>Cource Certificates</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php $rowNumber = 1; ?>
                                                                <?php foreach ($facultyapplications as $application): ?>
                                                                <tr>
                                                                    <td><?= $rowNumber++; ?></td>
                                                                    <td><?= esc($application['full_name']); ?></td>
                                                                    <td><?= esc($application['email']); ?></td>
                                                                    <td> <a href="<?= base_url('public/uploads/faculty_resume/' . $application['resume']) ?>"
                                                                            target="_blank">
                                                                            <i class="fas fa-eye"></i> </a></td>
                                                                    <td> <a href="<?= base_url('public/uploads/facultycertificates/' . $application['certificates']) ?>"
                                                                            target="_blank">
                                                                            <i class="fas fa-eye"></i> </a></td>
                                                                    <td> <a href="<?= base_url('public/uploads/facultycourseCertificates/' . $application['courseCertificates']) ?>"
                                                                            target="_blank">
                                                                            <i class="fas fa-eye"></i> </a></td>
                                                                    <td>
                                                                        <form method="post"
                                                                            action="<?= base_url('updateApplicationStatus') ?>">
                                                                            <input type="hidden" name="id"
                                                                                value="<?= $application['id']; ?>">
                                                                            <button type="submit" name="status"
                                                                                value="A"
                                                                                class="btn btn-success">Accept</button>
                                                                            <button type="submit" name="status"
                                                                                value="R"
                                                                                class="btn btn-danger">Decline</button>
                                                                            <button type="submit" name="status"
                                                                                value="P"
                                                                                class="btn btn-warning">Pending</button>
                                                                        </form>
                                                                    </td>
                                                                </tr>
                                                                <?php endforeach; ?>
                                                            </tbody>
                                                        </table>
                                                        <?php else: ?>
                                                        <p>No applications found.</p>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="profile3" role="tabpanel">
                                                <div class="card-block table-border-style">
                                                    <div class="table-responsive">
                                                        <?php if (!empty($pendingapplications)): ?>
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th>No</th>
                                                                    <th>Full Name</th>
                                                                    <th>Email</th>
                                                                    <th>Resume</th>
                                                                    <th>Certificates</th>
                                                                    <th>Cource Certificates</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php $rowNumber = 1; ?>
                                                                <?php foreach ($pendingapplications as $application): ?>
                                                                <tr>
                                                                    <td><?= $rowNumber++; ?></td>
                                                                    <td><?= esc($application['full_name']); ?></td>
                                                                    <td><?= esc($application['email']); ?></td>
                                                                    <td> <a href="<?= base_url('public/uploads/faculty_resume/' . $application['resume']) ?>"
                                                                            target="_blank">
                                                                            <i class="fas fa-eye"></i> </a></td>
                                                                    <td> <a href="<?= base_url('public/uploads/facultycertificates/' . $application['certificates']) ?>"
                                                                            target="_blank">
                                                                            <i class="fas fa-eye"></i> </a></td>
                                                                    <td> <a href="<?= base_url('public/uploads/facultycourseCertificates/' . $application['courseCertificates']) ?>"
                                                                            target="_blank">
                                                                            <i class="fas fa-eye"></i> </a></td>
                                                                    <td>
                                                                        <form method="post"
                                                                            action="<?= base_url('updateApplicationStatus') ?>">
                                                                            <input type="hidden" name="id"
                                                                                value="<?= $application['id']; ?>">
                                                                            <button type="submit" name="status"
                                                                                value="A"
                                                                                class="btn btn-success">Accept</button>
                                                                            <button type="submit" name="status"
                                                                                value="R"
                                                                                class="btn btn-danger">Reject</button>
                                                                           
                                                                        </form>
                                                                    </td>
                                                                </tr>
                                                                <?php endforeach; ?>
                                                            </tbody>
                                                        </table>
                                                        <?php else: ?>
                                                        <p>No applications found.</p>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="messages3" role="tabpanel">
                                                <div class="card-block table-border-style">
                                                    <div class="table-responsive">
                                                        <?php if (!empty($acceptapplications)): ?>
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th>No</th>
                                                                    <th>Full Name</th>
                                                                    <th>Email</th>

                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php $rowNumber = 1; ?>
                                                                <?php foreach ($acceptapplications as $application): ?>
                                                                <tr>
                                                                    <td><?= $rowNumber++; ?></td>
                                                                    <td><?= esc($application['full_name']); ?></td>
                                                                    <td><?= esc($application['email']); ?></td>

                                                                    <td>
                                                                        <form method="post"
                                                                            action="<?= base_url('createpassforfaculty') ?>">

                                                                            <input type="hidden" name="email"
                                                                                value="<?= $application['email']; ?>">
                                                                            <input type="text" name="Password">

                                                                            <button type="submit" name="status"
                                                                                class="btn-round btn-warning">Create
                                                                                Password</button>
                                                                        </form>
                                                                    </td>
                                                                </tr>
                                                                <?php endforeach; ?>
                                                            </tbody>
                                                        </table>
                                                        <?php else: ?>
                                                        <p>No applications found.</p>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="styleSelector"></div>
    </div>
</div>

<?php 
include __DIR__.'/../Admin/footer.php';
?>