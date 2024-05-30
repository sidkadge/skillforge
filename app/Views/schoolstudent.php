<?php include('header.php') ?>
<link rel="stylesheet" href="public/assets/css/about.css">
<link rel="stylesheet" href="public/assets/css/courses.css">

<div class="breadcrumbs-custom">
    <div class="container breadcrumbs-custom-container">
        <div class="breadcrumbs-custom-inner context-dark">
            <div class="breadcrumbs-custom-item">
                <h6>What We Offer</h6>
                <h1 class="breadcrumbs-custom-title">About</h1>
            </div>
            <ul class="breadcrumbs-custom-path">
                <li><a href="index.html">Home</a></li>
                <li class="active">About</li>
            </ul>
        </div>
    </div>
</div>
<section class="section section-lg bg-gray-100">
    <div class="container">
        <!-- Top Row of Buttons -->
        <div class="row justify-content-center">
            <div class="col-md-3 col-lg-3 col-xl-3">
                <a class="button button-primary-gradient" data-toggle="collapse" href="#homeGardenNursery" role="button"
                    aria-expanded="true" aria-controls="homeGardenNursery"><span> Home Garden & Nursery</span></a>
            </div>
            <div class="col-md-3 col-lg-3 col-xl-3">
                <a class="button button-primary-gradient" data-toggle="collapse" href="#button2" role="button"
                    aria-expanded="false" aria-controls="button2"><span>Basic Home Plumbing </span></a>
            </div>
            <div class="col-md-3 col-lg-3 col-xl-3">
                <a class="button button-primary-gradient" data-toggle="collapse" href="#button3" role="button"
                    aria-expanded="false" aria-controls="button3"><span>Mud Architecture </span></a>
            </div>
            <div class="col-md-3 col-lg-3 col-xl-3">
                <a class="button button-primary-gradient" data-toggle="collapse" href="#button4" role="button"
                    aria-expanded="false" aria-controls="button4"><span>Outdoor Recreation </span></a>
            </div>
        </div>
        <!-- Bottom Row of Buttons -->
        <div class="row justify-content-center">
            <div class="col-md-3 col-lg-3 col-xl-3">
                <a class="button button-primary-gradient" data-toggle="collapse" href="#button5" role="button"
                    aria-expanded="false" aria-controls="button5"><span>Traditional Crafts and Handicrafts</span></a>
            </div>
            <div class="col-md-3 col-lg-3 col-xl-3">
                <a class="button button-primary-gradient" data-toggle="collapse" href="#button6" role="button"
                    aria-expanded="false" aria-controls="button6"><span>History and Cultural Studies</span></a>
            </div>
            <div class="col-md-3 col-lg-3 col-xl-3">
                <a class="button button-primary-gradient" data-toggle="collapse" href="#button7" role="button"
                    aria-expanded="false" aria-controls="button7"><span>History and Cultural Studies</span></a>
            </div>
            <div class="col-md-3 col-lg-3 col-xl-3">
                <a class="button button-primary-gradient" data-toggle="collapse" href="#button8" role="button"
                    aria-expanded="false" aria-controls="button8"><span>History and Cultural Studies</span></a>
            </div>
        </div>


        <div id="accordion">
        <div class="collapse show" id="homeGardenNursery" data-parent="#accordion">
            <div class="card">
                <div class="card-header text-center">
                    <h5 style="font-weight: bold;">Home Garden & Nursery</h5>
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
                <div class="card-block table-border-style">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Course</th>
                                    <th>Description</th>
                                    <th>Session</th>
                                    <th>Duration</th>
                                    <th>Fee</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Gardening Basics</td>
                                    <td>
                                        <ul>
                                            <li>Understanding Plants</li>
                                            <li>Soil Preparation</li>
                                            <li>Planting Seeds</li>
                                            <li>Watering</li>
                                        </ul>
                                    </td>
                                    <td>Vegetable Gardening</td>
                                    <td>3 Months</td>
                                    <td>₹500</td>
                                    <td><button class="btn btn-primary" onclick="addToCart('Gardening Basics', 500)">Add to Cart</button></td>
                                </tr>
                                <tr>
                                    <td>Another Course</td>
                                    <td>
                                        <ul>
                                            <li>Description 1</li>
                                            <li>Description 2</li>
                                            <li>Description 3</li>
                                            <li>Description 4</li>
                                        </ul>
                                    </td>
                                    <td>Session 2</td>
                                    <td>6 Months</td>
                                    <td>₹700</td>
                                    <td><button class="btn btn-primary" onclick="addToCart('Another Course', 700)">Add to Cart</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="text-center mt-3">
                        <a href="#cartPage" class="btn btn-primary">View Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

            <div class="collapse" id="button2" data-parent="#accordion">
                <div class="card">
                    <div class="card-header text-center">
                        <h5 style="font-weight: bold;">Basic Home Plumbing</h5>
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
                    <div class="card-block table-border-style">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Course</th>
                                        <th>Description</th>
                                        <th>Session</th>
                                        <th>Duration</th>
                                        <th>Fee</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Course 1</td>
                                        <td>
                                            <ul>
                                                <li>Description 1</li>
                                                <li>Description 2</li>
                                                <li>Description 3</li>
                                                <li>Description 4</li>
                                            </ul>
                                        </td>
                                        <td>Session 1</td>
                                        <td>3 Months</td>
                                        <td>₹500</td>
                                    </tr>
                                    <!-- Add more rows as needed -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="collapse" id="button3" data-parent="#accordion">
                <div class="card">
                    <div class="card-header text-center">
                        <h5 style="font-weight: bold;">Mud Architecture</h5>
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
                    <div class="card-block table-border-style">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Course</th>
                                        <th>Description</th>
                                        <th>Session</th>
                                        <th>Duration</th>
                                        <th>Fee</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Course 2</td>
                                        <td>
                                            <ul>
                                                <li>Description 1</li>
                                                <li>Description 2</li>
                                                <li>Description 3</li>
                                                <li>Description 4</li>
                                            </ul>
                                        </td>
                                        <td>Session 2</td>
                                        <td>6 Months</td>
                                        <td>₹700</td>
                                    </tr>
                                    <!-- Add more rows as needed -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="collapse" id="button4" data-parent="#accordion">
                <div class="card">
                    <div class="card-header text-center">
                        <h5 style="font-weight: bold;">Outdoor Recreation</h5>
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
                    <div class="card-block table-border-style">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Course</th>
                                        <th>Description</th>
                                        <th>Session</th>
                                        <th>Duration</th>
                                        <th>Fee</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Course 3</td>
                                        <td>
                                            <ul>
                                                <li>Description 1</li>
                                                <li>Description 2</li>
                                                <li>Description 3</li>
                                                <li>Description 4</li>
                                            </ul>
                                        </td>
                                        <td>Session 3</td>
                                        <td>4 Months</td>
                                        <td>₹600</td>
                                    </tr>
                                    <!-- Add more rows as needed -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="collapse" id="button5" data-parent="#accordion">
                <div class="card">
                    <div class="card-header text-center">
                        <h5 style="font-weight: bold;">Traditional Crafts and Handicrafts</h5>
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
                    <div class="card-block table-border-style">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Course</th>
                                        <th>Description</th>
                                        <th>Session</th>
                                        <th>Duration</th>
                                        <th>Fee</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Course 4</td>
                                        <td>
                                            <ul>
                                                <li>Description 1</li>
                                                <li>Description 2</li>
                                                <li>Description 3</li>
                                                <li>Description 4</li>
                                            </ul>
                                        </td>
                                        <td>Session 4</td>
                                        <td>5 Months</td>
                                        <td>₹800</td>
                                    </tr>
                                    <!-- Add more rows as needed -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="collapse" id="button6" data-parent="#accordion">
                <div class="card">
                    <div class="card-header text-center">
                        <h5 style="font-weight: bold;">History and Cultural Studies</h5>
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
                    <div class="card-block table-border-style">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Course</th>
                                        <th>Description</th>
                                        <th>Session</th>
                                        <th>Duration</th>
                                        <th>Fee</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Course 5</td>
                                        <td>
                                            <ul>
                                                <li>Description 1</li>
                                                <li>Description 2</li>
                                                <li>Description 3</li>
                                                <li>Description 4</li>
                                            </ul>
                                        </td>
                                        <td>Session 5</td>
                                        <td>6 Months</td>
                                        <td>₹900</td>
                                    </tr>
                                    <!-- Add more rows as needed -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="collapse" id="button7" data-parent="#accordion">
                <div class="card">
                    <div class="card-header text-center">
                        <h5 style="font-weight: bold;">History and Cultural Studies</h5>
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
                    <div class="card-block table-border-style">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Course</th>
                                        <th>Description</th>
                                        <th>Session</th>
                                        <th>Duration</th>
                                        <th>Fee</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Course 6</td>
                                        <td>
                                            <ul>
                                                <li>Description 1</li>
                                                <li>Description 2</li>
                                                <li>Description 3</li>
                                                <li>Description 4</li>
                                            </ul>
                                        </td>
                                        <td>Session 6</td>
                                        <td>6 Months</td>
                                        <td>₹1000</td>
                                    </tr>
                                    <!-- Add more rows as needed -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="collapse" id="button8" data-parent="#accordion">
                <div class="card">
                    <div class="card-header text-center">
                        <h5 style="font-weight: bold;">History and Cultural Studies</h5>
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
                    <div class="card-block table-border-style">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Course</th>
                                        <th>Description</th>
                                        <th>Session</th>
                                        <th>Duration</th>
                                        <th>Fee</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Course 7</td>
                                        <td>
                                            <ul>
                                                <li>Description 1</li>
                                                <li>Description 2</li>
                                                <li>Description 3</li>
                                                <li>Description 4</li>
                                            </ul>
                                        </td>
                                        <td>Session 7</td>
                                        <td>7 Months</td>
                                        <td>₹1100</td>
                                    </tr>
                                    <!-- Add more rows as needed -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
        function addToCart(courseName, price) {
            axios.post('{{ route('cart.add') }}', {
                course_name: courseName,
                price: price
            })
            .then(function (response) {
                alert(response.data.success);
            })
            .catch(function (error) {
                console.log(error);
            });
        }
    </script>
<?php include('footer.php') ?>