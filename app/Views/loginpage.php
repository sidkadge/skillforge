<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website With Login & Registration</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="public/assets/css/registerlogin.css">
    <link rel="stylesheet" href="public/assets/css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    
    <header>
        <h2 class="logo"></h2>
        <nav class="navigation">
            <a class="rd-nav-link" href="<?php echo base_url('/') ?>">Home</a>
        </nav>
        <nav class="navigation">
            <a href="<?php echo base_url('School_register')?>">School Register</a>
        </nav>
        <nav class="navigation">
            <a href="<?php echo base_url('loginpage')?>">Login</a>
        </nav>
    </header>
    

    <!-- Flash Message Display -->
    <div class="containerflashback mt-4">
        <?php if (session()->getFlashdata('success')): ?>
            <div class="alert alert-success">
                <?= session()->getFlashdata('success') ?>
            </div>
        <?php endif; ?>
        <?php if (session()->getFlashdata('error')): ?>
            <div class="alert alert-danger">
                <?= session()->getFlashdata('error') ?>
            </div>
        <?php endif; ?>
    </div>

    <div class="wrapper active active-popup">
        <span class="icon-close"><ion-icon name="close"></ion-icon></span>

        <div class="form-box login" id="loginForm">
            <h2>Login</h2>
            <div class="form-container">
                <form action="<?php echo base_url()?>internal_login" method="post">
                    <div class="input-box">
                        <span class="icon"><ion-icon name="mail"></ion-icon></span>
                        <input type="email" name="email" id="login-email" required>
                        <label>Email</label>
                        <span class="error-message" id="login-email-error"></span>
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                        <input type="password" name="password" id="login-password" required minlength="8">
                        <label>Password</label>
                        <span class="error-message" id="login-password-error"></span>
                    </div>
                    <div class="remember-forgot">
                        <label><input type="checkbox" name="remember"> Remember me</label>
                    </div>
                    <button type="submit" class="btn-register">Login</button>
                    <div class="login-register">
                        <p>Don't have an account?<a href="<?php echo base_url('register')?>" > Register</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>

    <script>
    $(document).ready(function() {
        $('#loginForm form').validate({
            rules: {
                email: {
                    required: true,
                    email: true
                },
                password: {
                    required: true,
                    minlength: 8
                }
            },
            messages: {
                email: {
                    required: 'Please enter your email address.',
                    email: 'Please enter a valid email address.'
                },
                password: {
                    required: 'Please enter your password.',
                    minlength: 'Password must be at least 8 characters long.'
                }
            },
            errorPlacement: function(error, element) {
                error.appendTo(element.siblings('.error-message'));
            },
            submitHandler: function(form) {
                form.submit();
            }
        });

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

    <style>
        .input-box {
            position: relative;
            margin-bottom: 20px;
        }
        .input-box input,
        .input-box select {
            width: 100%;
            padding: 10px;
            background-color: transparent;
            border: none;
        }
        .input-box label {
            position: absolute;
        }
        .input-box .error-message {
            color: red;
            font-size: 12px;
            position: absolute;
            bottom: -20px;
            left: 10px;
        }
        .form-container {
            max-height: 400px;
            overflow-y: auto;
            padding: 10px;
            -ms-overflow-style: none;
            scrollbar-width: none; 
        }
        .form-container::-webkit-scrollbar { 
            display: none;
        }
        .dropdown-button {
            margin-top: 35px;
            margin-bottom: 20px;
            border-bottom: 2px solid #000000;
        }
        .dropdown-menu {
            background-color: #6cb05c;
            padding-left: 20px;
        }
        .btn-register {
            background-color: #212529;
            width: 100%;
            height: 2.7rem;
            border-radius: 5px;
            color: white;
            border: none;
        }
        header {
            display: flex;
            justify-content: flex-end;
            align-items: center;
        }
        .navigation {
            margin-left: 10px;
        }
        .containerflashback {
            position: sticky;
        }
    </style>

</body>

</html>
