<?php 
include __DIR__.'/../Admin/Adminsidebar.php';

?>

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
                                    <h4>Abroad class</h4>
                                    <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
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
                                    <li class="breadcrumb-item"><a href="<?= base_url('abroadclasslist') ?>">Abroad class List</a>
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
                                    <form action="<?php echo base_url(); ?>setabrordclassname" id="formabrordclassname"
                                        method="post">
                                        <div class="row card-body">
                                            <input type="hidden" name="id" class="form-control" id="id"
                                                value="<?php if(!empty($single_data)){ echo $single_data->ab_id;} ?>">
                                            <div class="col-lg-12 col-md-3 col-12 form-group">
                                                <label for="abrordclassname">Add Abrord Class Name</label>
                                                <input type="text" name="abrordclassname" class="form-control"
                                                    id="abrordclassname" placeholder="Abrord Class Name"
                                                    value="<?php if(!empty($single_data)){ echo $single_data->abrordclassname; } ?>" required>


                                            </div>

                                        </div>
                                        <div class="card-footer text-right">
                                            <!-- <button type="submit" class="btn btn-primary submitButton">Submit</button> -->

                                            <button type="submit" value="" name="submit" id="submit"
                                                class="btn btn-primary submitButton"><?php if(!empty($single_data)){ echo 'Update'; }else{ echo 'Submit';} ?></button>
                                        </div>
                                    </form>
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