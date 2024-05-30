<?php 
include __DIR__.'/../Admin/Adminsidebar.php';
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<style>
.card-img-top {
    width: 100%;
    height: 200px;
    /* Set a fixed height */
    object-fit: cover;
    /* Ensure the image covers the area without distortion */
}

.video-container {
    width: 100%;
    height: 200px;
    background-color: #000;
}

.video-container video {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
</style>
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
                                    <h4>Student Uploaded Media</h4>
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
                                    <li class="breadcrumb-item"><a href="">Uploaded Media</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Uploaded Media</h5>
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
                                <div class="row m-b-30">
                                    <div class="col-lg-12 col-xl-12">
                                        <div class="sub-title"></div>
                                        <ul class="nav nav-tabs md-tabs" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-toggle="tab" href="#home3"
                                                    role="tab">Images</a>
                                                <div class="slide"></div>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#profile3"
                                                    role="tab">Videos</a>
                                                <div class="slide"></div>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#messages3"
                                                    role="tab">Documents</a>
                                                <div class="slide"></div>
                                            </li>
                                        </ul>
                                        <div class="tab-content card-block">
                                            <div class="tab-pane active" id="home3" role="tabpanel">
                                                <div class="row">
                                                    <?php if (is_array($images) && !empty($images)): ?>
                                                    <?php foreach ($images as $image): ?>
                                                    <div class="col-sm-3">
                                                        <div class="card">
                                                            <img src="<?= base_url('public/uploads/faculty/Images/' . esc($image['image_name'])) ?>"
                                                                class="card-img-top" alt="Image">
                                                            <div class="card-body">
                                                                <p class="card-text"><b>Uploaded by:
                                                                        <?= esc($image['student_name']) ?></b></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php endforeach; ?>
                                                    <?php else: ?>
                                                    <div class="col-12">
                                                        <p>No images found.</p>
                                                    </div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="profile3" role="tabpanel">
                                                <div class="row">
                                                    <?php if (is_array($videos) && !empty($videos)): ?>
                                                    <?php foreach ($videos as $video): ?>
                                                    <div class="col-sm-3">
                                                        <div class="card video-container">
                                                            <video controls>
                                                                <source
                                                                    src="<?= base_url('public/uploads/faculty/Videos/' . esc($video['video_name'])) ?>"
                                                                    type="video/mp4">
                                                                Your browser does not support the video tag.
                                                            </video>
                                                            <div class="card-body">
                                                                <p class="card-text"><b>Uploaded by:
                                                                        <?= esc($video['student_name']) ?></b></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php endforeach; ?>
                                                    <?php else: ?>
                                                    <div class="col-12">
                                                        <p>No videos found.</p>
                                                    </div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="messages3" role="tabpanel">
                                                <div class="row">
                                                    <?php if (is_array($docs) && !empty($docs)): ?>
                                                    <?php foreach ($docs as $doc): ?>
                                                    <div class="col-sm-3">
                                                        <div class="card">

                                                            <a href="<?php echo base_url('public/uploads/faculty/Doc/' . $doc['doc_name']); ?>"
                                                                target="_blank" download="">
                                                                <i class="fa fa-file" style="font-size:48px;"></i>
                                                            </a>
                                                            <div class="card-body">
                                                                <p class="card-text"><b>Uploaded by:
                                                                        <?= esc($doc['student_name']) ?></b></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php endforeach; ?>
                                                    <?php else: ?>
                                                    <div class="col-12">
                                                        <p>No documents found.</p>
                                                    </div>
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
</div>
</div>

<?php 
include __DIR__.'/../Admin/footer.php';
?>