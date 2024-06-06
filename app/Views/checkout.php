<?php include('header.php'); ?>
<link rel="stylesheet" href="<?= base_url('public/assets/css/about.css') ?>">
<link rel="stylesheet" href="<?= base_url('public/assets/css/courses.css') ?>">
<link rel="stylesheet" href="<?= base_url('public/assets/css/checkout.css') ?>">

<main class="container cont-width">
    <!-- Add container class here -->

    <section class="checkout-form">
        <form action="#" method="get">
            <h6 class="heding">Contact information</h6>
            <div class="form-control">
                <label for="checkout-email">E-mail</label>
                <div>
                    <span class="fa fa-envelope"></span>
                    <input type="email" id="checkout-email" name="checkout-email" placeholder="Enter your email...">
                </div>
            </div>
            <div class="form-control">
                <label for="checkout-phone">Phone</label>
                <div>
                    <span class="fa fa-phone"></span>
                    <input type="tel" name="checkout-phone" id="checkout-phone" placeholder="Enter you phone...">
                </div>
            </div>
            <br>
            <h6 class="heding">Shipping address</h6>
            <div class="form-control">
                <label for="checkout-name">Full name</label>
                <div>
                    <span class="fa fa-user-circle"></span>
                    <input type="text" id="checkout-name" name="checkout-name" placeholder="Enter you name...">
                </div>
            </div>
            <div class="form-control">
                <label for="checkout-address">Address</label>
                <div>
                    <span class="fa fa-home"></span>
                    <input type="text" name="checkout-address" id="checkout-address" placeholder="Your address...">
                </div>
            </div>
            <div class="form-control">
                <label for="checkout-city">City</label>
                <div>
                    <span class="fa fa-building"></span>
                    <input type="text" name="checkout-city" id="checkout-city" placeholder="Your city...">
                </div>
            </div>
            <div class="form-group">
                <div class="form-control">
                    <label for="checkout-country">Country</label>
                    <div>
                        <span class="fa fa-globe"></span>
                        <input type="text" name="checkout-country" id="checkout-country" placeholder="Your country..."
                            list="country-list">
                        <datalist id="country-list">
                            <option value="India"></option>
                            <option value="USA"></option>
                            <option value="Russia"></option>
                            <option value="Japan"></option>
                            <option value="Egypt"></option>
                        </datalist>
                    </div>
                </div>
                <div class="form-control">
                    <label for="checkout-postal">Postal code</label>
                    <div>
                        <span class="fa fa-archive"></span>
                        <input type="numeric" name="checkout-postal" id="checkout-postal"
                            placeholder="Your postal code...">
                    </div>
                </div>
            </div>
            <div class="form-control checkbox-control">
                <input type="checkbox" name="checkout-checkbox" id="checkout-checkbox">
                <label for="checkout-checkbox">Save this information for next time</label>
            </div>
            <div class="form-control-btn">
                <button>Continue</button>
            </div>
        </form>
    </section>

    <section class="checkout-details">
        <div class="checkout-details-inner">
            <div class="checkout-lists">
                <div class="card">
                    <div class="card-image"><img src="https://rvs-checkout-page.onrender.com/photo1.png" alt=""></div>
                    <div class="card-details">
                        <div class="card-name">Vintage Backbag</div>
                        <div class="card-price">$54.99 <span>$94.99</span></div>
                        <div class="card-wheel">
                            <button>-</button>
                            <span>1</span>
                            <button>+</button>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-image"><img src="https://rvs-checkout-page.onrender.com/photo2.png" alt=""></div>
                    <div class="card-details">
                        <div class="card-name">Levi Shoes</div>
                        <div class="card-price">$74.99 <span>$124.99</span></div>
                        <div class="card-wheel">
                            <button>-</button>
                            <span>1</span>
                            <button>+</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="checkout-shipping">
                <h6 class="heding">Shipping</h6>
                <p>$19</p>
            </div>
            <div class="checkout-total">
                <h6 class="heding">Total</h6>
                <p>$148.98</p>
            </div>
        </div>
    </section>

</main>

<?php include('footer.php'); ?>