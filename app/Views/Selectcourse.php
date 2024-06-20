<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Website With Login & Registration</title>
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
</header>

<div class="wrapper active active-popup">
    <div class="form-box login" id="loginForm">
        <h2>Enroll In</h2>
        <div class="form-container">
            <form id="enrollForm" action="" method="post"> <!-- Added form tag -->
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="person-add"></ion-icon>
                    </span>
                    <select name="enrollin" id="enrollin" required>
                        <option value="" disabled selected>Select</option>
                        <option value="school">School Register</option> <!-- Removed unnecessary PHP code -->
                        <option value="abroad">Abroad Register</option>
                    </select>
                </div>
                <button type="submit" class="btn-register">Next</button>
                <div class="login-register">
                    <p>Already have an account?<a href="<?php echo base_url('loginpage')?>"> Login</a></p>
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
        $('#enrollForm').submit(function(e) {
            e.preventDefault();
            var enrollin = $('#enrollin').val();
            if (enrollin === 'school') {
                window.location.href = '<?php echo base_url("School_register") ?>';
            } else if (enrollin === 'abroad') {
                window.location.href = '<?php echo base_url("register") ?>';
            }
        });
    });
</script>

<style>
    .input-box input,
    .input-box select {
        width: 100%;
        padding: 11px;
        background-color: transparent;
        border: none;
    }
    .btn-register{
        width: 100%;
        border: none;
        color: white;
        height: 2.7rem;
        background-color: #212529;
        border-radius: 5px;
    }
</style>

</body>

</html>
