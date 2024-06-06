<?php 
include __DIR__.'/../Faculty/Facultysidebar.php';
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
                                    <h3>Image uploaded by students</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="page-header-breadcrumb">
                                <ul class="breadcrumb-title">
                                    <li class="breadcrumb-item">
                                        <a href="Facultydashboard">
                                            <i class="icofont icofont-home"></i>
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#!">Pages</a></li>
                                    <li class="breadcrumb-item"><a href="<?= base_url('Facultyimages') ?>">Faculty images</a></li>
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
                                    <div class="row card-body">
                                        <?php if (!empty($images)): ?>
                                            <div class="row">
                                                <?php foreach ($images as $index => $image): ?>
                                                    <div class="col-md-3 image-container">
                                                        <div class="cardinner">
                                                            <div class="card-body text-center">
                                                                <a href="<?php echo base_url('public/uploads/student/Images/' . $image->image_name); ?>" download="<?php echo $image->image_name; ?>">
                                                                    <img src="<?php echo base_url('public/uploads/student/Images/' . $image->image_name); ?>" alt="Image uploaded by <?php echo esc($image->student_name); ?>" class="fixed-size-img">
                                                                </a>
                                                                <p class="card-text">Uploaded by: <?php echo esc($image->student_name); ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Close and start a new row after every 4 images -->
                                                    <?php if (($index + 1) % 4 == 0 && $index != count($images) - 1): ?>
                                                        </div><div class="row">
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            </div>
                                        <?php else: ?>
                                            <p class="text-center">No images uploaded.</p>
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
    .image-container {
        margin-bottom: 20px;
    }
    .fixed-size-img {
        width: 100%;
        height: 150px;
        object-fit: cover;
    }
</style>

<?php 
include __DIR__.'/../Admin/footer.php';
?>
