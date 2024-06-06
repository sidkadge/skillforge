<meta name="csrf-token" content="<?= csrf_hash() ?>">
<link rel="stylesheet" href="<?= base_url('public/assets/css/about.css') ?>">
<link rel="stylesheet" href="<?= base_url('public/assets/css/courses.css') ?>">
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<?php include('header.php'); ?>

<script>
document.addEventListener('DOMContentLoaded', function () {
    // Function to get the cart count from the server
    function fetchCartCount() {
        axios.get('<?= base_url('cart/count') ?>')
            .then(response => {
                document.getElementById('cart-count').textContent = response.data.count;
            })
            .catch(error => {
                console.error('Error fetching cart count:', error);
            });
    }

    fetchCartCount(); // Fetch cart count on page load

    window.addToCart = function(courseName, price, session, duration) {
        console.log('Add to Cart clicked');
        const csrfTokenMeta = document.querySelector('meta[name="csrf-token"]');
        if (!csrfTokenMeta) {
            console.error('CSRF token meta tag not found');
            alert('Error: CSRF token not found');
            return;
        }

        const csrfToken = csrfTokenMeta.getAttribute('content');

        axios.post('<?= base_url('cart/add') ?>', {
                course_name: courseName,
                price: price,
                session: session,
                duration: duration
            }, {
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'X-CSRF-TOKEN': csrfToken
                }
            })
            .then(response => {
                console.log(response.data);
                alert(response.data.success);
                fetchCartCount(); // Update cart count after adding item
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Error adding course to cart');
            });
    }
});
</script>

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
                                        <td>10 session</td>
                                        <td>3 Months</td>
                                        <td>₹500</td>
                                        <td><button class="btn btn-primary"
                                                onclick="addToCart('Gardening Basics', 500, '10 session', '3 Months')">Add
                                                to Cart</button>
                                        </td>
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
                                        <td><button class="btn btn-primary"
                                                onclick="addToCart('Another Course', 700, 'Session 2', '6 Months')">Add to Cart</button></td>
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
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Basic Plumbing Techniques</td>
                                        <td>
                                            <ul>
                                                <li>Pipe Installation</li>
                                                <li>Leak Repairs</li>
                                                <li>Fixture Installation</li>
                                                <li>Safety Protocols</li>
                                            </ul>
                                        </td>
                                        <td>Home Plumbing</td>
                                        <td>2 Months</td>
                                        <td>₹1000</td>
                                        <td><button class="btn btn-primary"
                                                onclick="addToCart('Basic Plumbing Techniques', 1000)">Add to
                                                Cart</button></td>
                                    </tr>
                                    <tr>
                                        <td>Advanced Plumbing</td>
                                        <td>
                                            <ul>
                                                <li>Complex Pipe Systems</li>
                                                <li>Advanced Leak Detection</li>
                                                <li>Fixture Upgrades</li>
                                                <li>Professional Standards</li>
                                            </ul>
                                        </td>
                                        <td>Advanced Session</td>
                                        <td>4 Months</td>
                                        <td>₹2000</td>
                                        <td><button class="btn btn-primary"
                                                onclick="addToCart('Advanced Plumbing', 2000)">Add to Cart</button></td>
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
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.delete-item').forEach(function (btn) {
            btn.addEventListener('click', function () {
                const row = btn.closest('tr');
                row.remove();
                updateCartCount();
            });
        });

        function updateCartCount() {
            const cartCount = document.getElementById('cart-count');
            const cartItems = document.querySelectorAll('#cart-items tr');
            cartCount.textContent = cartItems.length;
        }

        updateCartCount();
    });
</script>
<?php include('footer.php'); ?>
