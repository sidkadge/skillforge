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
                                <i class="icofont icofont-upload icofont-file bg-c-pink"></i>
                                <div class="d-inline">
                                    <h3>Documents Uploaded by Faculty</h3>
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
                                    <li class="breadcrumb-item"><a href="<?= base_url('Studentdoc') ?>">Student Documents</a></li>
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
                                    <h5>Uploaded Documents</h5>
                                </div>
                                <div class="card-body">
                                    <?php if (!empty($facultyuplodedimg)): ?>
                                        <div class="row">
                                            <?php foreach ($facultyuplodedimg as $index => $document): ?>
                                                <?php if ($index % 4 == 0 && $index != 0): ?>
                                                    </div><div class="row mt-4">
                                                <?php endif; ?>
                                                <div class="col-md-3 doc-container">
                                                    <div class="card">
                                                        <div class="card-body text-center">
                                                            <a href="<?php echo base_url('public/uploads/faculty/Doc/' . $document['doc_name']); ?>" target="_blank">
                                                                <i class="fa fa-file" style="font-size:48px;"></i>
                                                            </a>
                                                            <p class="card-text mt-2">Uploaded by: <?= esc($document['student_name']); ?></p>
                                                            <!-- <a href="<?= base_url('public/uploads/faculty/Doc/' . $document['doc_name']) ?>" class="btn btn-primary mt-2" target="_blank">View Document</a> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php else: ?>
                                        <p class="text-center">No Documents uploaded.</p>
                                    <?php endif; ?>
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
    .doc-container {
        margin-bottom: 20px;
    }
</style>

<?php 
include __DIR__.'/../Admin/footer.php';
?>
