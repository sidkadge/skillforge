<?php 
include __DIR__.'/../student/Studentsidebar.php';
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
                                <i class="icofont icofont-upload icofont-video bg-c-pink"></i>
                                <div class="d-inline">
                                    <h3>Video uploaded by Faculty</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="page-header-breadcrumb">
                                <ul class="breadcrumb-title">
                                    <li class="breadcrumb-item">
                                        <a href="studentdashboard">
                                            <i class="icofont icofont-home"></i>
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#!">Pages</a></li>
                                    <li class="breadcrumb-item"><a href="<?= base_url('Studentvideos') ?>">Student videos</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Page-header end -->

                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-body">
                                        <?php if (!empty($facultyuplodedimg)): ?>
                                            <div class="row">
                                                <?php foreach ($facultyuplodedimg as $index => $image): ?>
                                                    <!-- Start a new row every 4 images -->
                                                    <?php if ($index % 4 == 0 && $index != 0): ?>
                                                        </div><div class="row mt-4">
                                                    <?php endif; ?>
                                                    <div class="col-md-3 video-container">
                                                        <div class="card">
                                                            <div class="card-body text-center">
                                                            <video src="<?= base_url('public/uploads/faculty/Videos/' . $image['video_name']) ?>" controls alt="video uploaded by <?= esc($image['student_name']) ?>" class="card-img-top" style="width: 100%; height: auto;"></video>
                                                                <p class="card-text mt-2">Uploaded by: <?= esc($image['student_name']); ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endforeach; ?>
                                            </div>
                                        <?php else: ?>
                                            <p class="text-center">No Videos uploaded.</p>
                                        <?php endif; ?>
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

<style>
    .video-container {
        margin-bottom: 20px;
    }
</style>

<?php 
include __DIR__.'/../Admin/footer.php';
?>
