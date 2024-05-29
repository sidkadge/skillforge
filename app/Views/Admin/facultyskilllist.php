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
                                    <h4>Faculty Skills List</h4>
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
                                    <li class="breadcrumb-item"><a href="<?= base_url('addfacultyskills') ?>">Add Faculty skills</a></li>
                                    </li>
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
                                        <table class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Sr.No</th>
                                                    <th>Class Name</th>
                                                    <th>Action</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if (!empty($faculty_skills)) {
                                                    $i = 1;
                                                    foreach ($faculty_skills as $data) { ?>
                                                <tr>
                                                    <td><?= $i; ?></td>
                                                    <td><?= $data->facultyskill	; ?></td>
                                                    <td>
                                                        <div class="d-inline-block">
                                                            <!-- Use d-inline-block to display buttons in the same line -->
                                                            <!-- Edit Button -->
                                                            <a href="<?= base_url('addfacultyskills/' . $data->id) ?>"
                                                                class="btn btn-mat btn-warning" role="button">
                                                                </i>Edit
                                                            </a>

                                                            <!-- Delete Form -->
                                                            <form id="deletefacultyskills<?= $data->id ?>"
                                                                action="<?= base_url('deletefacultyskills') ?>"
                                                                method="post" style="display: inline;">
                                                                <input type="hidden" name="id"
                                                                    value="<?= $data->id ?>">
                                                                <input type="hidden" name="table_name"
                                                                    value="tbl_faculty_skills">
                                                                <button type="button" class="btn btn-mat btn-danger"
                                                                    onclick="confirmDelete(<?= $data->id ?>)">Delete</button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <?php $i++;
        }
    } ?>
                                            </tbody>


                                        </table>
                                    </div>


                                </div>

                            </div>
                        </div>
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