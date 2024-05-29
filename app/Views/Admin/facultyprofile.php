<?php 
include __DIR__.'/../Admin/Adminsidebar.php';

?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="pcoded-content">
    <div class="pcoded-inner-content">

        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header card">
                    <div class="row align-items-end">
                        <div class="col-lg-8">
                            <div class="page-header-title">
                                <i class="icofont icofont icofont icofont-file-document bg-c-pink"></i>
                                <div class="d-inline">
                                    <h4>Student Profile</h4>
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
                                    <li class="breadcrumb-item"><a href="#!">Pages</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="">Student Profile</a></li>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Page-header end -->

                <div class="page-body">
                    <div class="row">
                    <?php if (is_array($facultylist) && !empty($facultylist)): ?>
                            <?php foreach ($facultylist as $student): ?>
                        <div class="col-sm-3">

                            <div class="card card-primary card-outline">
                                <div class="card-body box-profile">
                                    <div class="text-center">
                                        <img class="profile-user-img img-fluid img-circle"
                                            src="<?php base_url()?> public/dashborads/images/profile.png" style="max-width: 62%;height: auto;" alt="User profile picture">
                                    </div>

                                    <h5 class="profile-username text-center"><?php echo $faculty->username ?></h5>

                                    <p class="text-muted text-center"><?php echo $faculty->email ?></p>

                                    <ul class="list-group list-group-unbordered mb-3">
                                        <li class="list-group-item">
                                            <b>Class</b> <a class="float-right">1,322</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Age</b> <a class="float-right">543</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Location</b> <a class="float-right">13,287</a>
                                        </li>
                                    </ul>

                                </div>

                            </div>

                        </div>
                        <?php endforeach; ?>
                        <?php else: ?>
                            <div class="col-sm-12">
                                <div class="alert alert-warning" role="alert">
                                    No faculty profiles found.
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div id="styleSelector">

        </div>
    </div>
</div>

<?php 
include __DIR__.'/../Admin/footer.php';

?>