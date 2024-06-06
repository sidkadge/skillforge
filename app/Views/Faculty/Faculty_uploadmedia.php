<?php 
include __DIR__.'/../Faculty/Facultysidebar.php';

?>
    
    <div class="pcoded-content">
                        <div class="pcoded-inner-content">

                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                <!-- Page-header start -->
                                    <div class="page-header card">
                                        <div class="row align-items-end">
                                            <div class="col-lg-8">
                                                <div class="page-header-title">
                                                <i class="fa-solid fa-user-graduate bg-c-blue"></i>
                                                    <div class="d-inline">
                                                        <h4>Faculty Media</h4>
                                                         <span>Faculty can upload the media here i.e, in the form of images, videos & documents.</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="page-header-breadcrumb">
                                                    <ul class="breadcrumb-title">
                                                <li class="breadcrumb-item">
                                                    <a href="#!">Faculty_Feedback</a>
                                                </li>
                                            </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Page-header end -->
                                    
                                    <!-- Page-body start -->
                                    <div class="row mt-4">
                                        <div class="col-lg-4">
                                            <div class="card">
                                            <form action="<?php echo base_url() ?>tbl_upload_image" method="post" enctype="multipart/form-data">
                                                <div class="card-body">
                                                    <h5 class="card-title">Images</h5>
                                                    <!-- Dropdown for student selection -->
                                                    <div class="form-group">
                                                        <label for="student_id">Select Student</label>
                                                        <select name="student_id" id="student_id" class="form-control" required>
                                                            <option value="">Select</option>
                                                            <?php foreach ($facultylist as $student): ?>
                                                                <option value="<?php echo $student['r_id']; ?>"><?php echo $student['username']; ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                    <input type="file" name="tbl_upload_image" class="form-control-file mb-2" required>
                                                    <span>Please upload images from here.</span>
                                                    <button type="submit" class="btn btn-primary mt-2">Upload</button>
                                                </div>
                                            </form>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="card">
                                                <form action="<?php echo base_url() ?>tbl_upload_video" method="post" enctype="multipart/form-data">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Video</h5>
                                                        <!-- Dropdown for student selection -->
                                                        <div class="form-group">
                                                            <label for="student_id">Select Student</label>
                                                            <select name="student_id" id="student_id" class="form-control" required>
                                                                <option value="">Select</option>
                                                                <?php foreach ($facultylist as $student): ?>
                                                                    <option value="<?php echo $student['r_id']; ?>"><?php echo $student['username']; ?></option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>
                                                        <input type="file" name="tbl_upload_video" class="form-control-file mb-2" accept="video/*" required>
                                                        <span>Please upload videos from here.</span>
                                                        <button type="submit" class="btn btn-primary mt-2">Upload</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="card">
                                                <form action="<?php echo base_url() ?>tbl_upload_doc" method="post" enctype="multipart/form-data">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Document</h5>
                                                        <!-- Dropdown for student selection -->
                                                        <div class="form-group">
                                                            <label for="student_id">Select Student</label>
                                                            <select name="student_id" id="student_id" class="form-control" required>
                                                                <option value="">Select</option>
                                                                <?php foreach ($facultylist as $student): ?>
                                                                    <option value="<?php echo $student['r_id']; ?>"><?php echo $student['username']; ?></option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>
                                                        <input type="file" name="tbl_upload_doc" class="form-control-file mb-2" required>
                                                        <span>Please upload documents from here.</span>
                                                        <button type="submit" class="btn btn-primary mt-2">Upload</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Page-body end -->
                                </div>
                            </div>
                            <!-- Main-body end -->
                            <div id="styleSelector">

                            </div>
                        </div>
                    </div>




<?php 
include __DIR__.'/../Admin/footer.php';

?>
 