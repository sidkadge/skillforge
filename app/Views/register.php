<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IF-edge">
    <meta name="viewport" content="width-device-width,initial-scale=1.0">
    <title>Website With login & registration | shyzu</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="public/assets/css/registerlogin.css">
</head>

<body>

    <header>
        <h2 class="logo"></h2>
        <nav class="navigation">
            <a class="rd-nav-link" href="<?php echo base_url('/') ?>">Home</a>
        </nav>
    </header>

    <div class="wrapper active active-popup">
        <span class="icon-close"><ion-icon name="close"></ion-icon></span>
        <div class="form-box login">
            <h2>Login</h2>
            <form action="<?php echo base_url()?>userlogin" method="post">
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" name="email" required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" name="password" required>
                    <label>Password</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox"> Remember me</label>
                    <a href="#">Forgot Password?</a>
                </div>
                <button type="submit" class="btn">Login</button>
                <div class="login-register">
                    <p>Don't have an account? <a href="#" class="register-link">Register</a></p>
                </div>
            </form>
        </div>

        <div class="form-box register" id="registrationForm">
            <h2>Registration</h2>
            <form action="<?php echo base_url()?>userregister" method="post">
            <div class="input-box">
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                    <input type="text" name="username" id="username" required pattern="[a-zA-Z]+" title="Username can only contain alphabetic characters">
                    <label>Username</label>
                    <span class="error-message" id="username-error"></span> <!-- Error message for username -->
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" name="email" id="email" required>
                    <label>Email</label>
                    <span class="error-message" id="email-error"></span> <!-- Error message for email -->
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" name="password" id="password" required minlength="8">
                    <label>Password</label>
                    <span class="error-message" id="password-error"></span> <!-- Error message for password -->
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox" required> I agree to the terms & conditions</label>
                </div>
                <button type="submit" class="btn">Register</button>
                <div class="login-register">
                    <p>Already have an account?<a href="#" class="login-link"> Login</a></p>
                </div>
            </form>
        </div>

    </div>

    <script src="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <div class="watermark">by shyzu</div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#registrationForm').validate({
            rules: {
                username: {
                    required: true,
                    pattern: /^[a-zA-Z]+$/ // Only allow alphabetic characters
                },
                email: {
                    required: true,
                    email: true
                },
                password: {
                    required: true,
                    minlength: 8 // Minimum length of 8 characters
                }
            },
            messages: {
                username: {
                    required: 'Please enter your username.',
                    pattern: 'Username cannot contain numeric values.'
                },
                email: {
                    required: 'Please enter your email address.',
                    email: 'Please enter a valid email address.'
                },
                password: {
                    required: 'Please enter your password.',
                    minlength: 'Password must be at least 8 characters long.'
                },
            },
            errorPlacement: function(error, element) {
                // Display error message in the adjacent span element
                error.appendTo(element.siblings('.error-message'));
            },
            submitHandler: function(form) {
                // Submit the form via Ajax or any other method
                form.submit();
            }
        });

        // Add event listener for toggling between login and registration forms
        $('.login-link').click(function(e) {
            e.preventDefault();
            $('.form-box.login').show();
            $('.form-box.register').hide();
        });

        $('.register-link').click(function(e) {
            e.preventDefault();
            $('.form-box.login').hide();
            $('.form-box.register').show();
        });
    });
</script>
<script>
    // @codehal
    // @shyzu
    // github.com/lucky5isuru

    const wrapper = document.querySelector('.wrapper');
    const loginLink = document.querySelector('.login-link');
    const registerLink = document.querySelector('.register-link');
    const iconClose = document.querySelector('.icon-close');

    registerLink.addEventListener('click', () => {
        wrapper.classList.add('active');
    });

    loginLink.addEventListener('click', () => {
        wrapper.classList.remove('active');
    });

    // Comment out or remove the btnPopup event listener to keep the login form always visible
    // const btnPopup = document.querySelector('.btnLogin-popup');
    // btnPopup.addEventListener('click', () => {
    //     wrapper.classList.add('active-popup');
    // });

    iconClose.addEventListener('click', () => {
        wrapper.classList.remove('active-popup');
    });
</script>
</body>

</html>
