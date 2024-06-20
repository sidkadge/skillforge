<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website With Login & Registration</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="public/assets/css/registerlogin.css">
</head>

    <link href=
"https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        rel="stylesheet">
    <script src=
"https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js">
    </script>

</head>
<body>

    <header>
        <h2 class="logo"></h2>
        <nav class="navigation">
            <a class="rd-nav-link" href="<?php echo base_url('/') ?>">Home</a>
        </nav>
        <nav class="navigation">
            <a href="<?php echo base_url('register')?>">Abroad Registration</a>
        </nav>
        <nav class="navigation">
            <a href="<?php echo base_url('loginpage')?>">Login</a>
        </nav>
    </header>
  

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

        <div class="form-box register" id="registrationForm">
            <h2>Vacational Courses</h2>
            <div class="form-container">
                <form action="<?php echo base_url()?>internal_register" method="post">
                    <div class="input-box">
                        <span class="icon"><ion-icon name="person"></ion-icon></span>
                        <input type="text" name="username" id="username" required pattern="[a-zA-Z]+" title="Username can only contain alphabetic characters">
                        <label>Student Name</label>
                        <span class="error-message" id="username-error"></span> <!-- Error message for username -->
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="person"></ion-icon></span>
                        <input type="text" name="parentname" id="parentname" required pattern="[a-zA-Z]+" title="Parent Name can only contain alphabetic characters">
                        <label>Parent Name</label>
                        <span class="error-message" id="parentname-error"></span> <!-- Error message for parent name -->
                    </div>
                    <div class="input-box" id="email-box">
                        <span class="icon"><ion-icon name="mail"></ion-icon></span>
                        <input type="email" name="email" id="email" required>
                        <label for="email">Email</label>
                        <span class="error-message" id="email-error"></span>
                    </div>
    
                    <div class="input-box" id="mobile-box">
                        <span class="icon"><ion-icon name="call"></ion-icon></span>
                        <input type="number" name="mobile" id="mobile" required maxlength="10" minlength="10"
                            title="Mobile number should exactly 10 digit.">
                        <label for="mobile">Mobile</label>
                        <span class="error-message" id="mobile-error"></span>
                    </div>
       
                    <div class="input-box">
                        <span class="icon"><ion-icon name="calendar"></ion-icon></span>
                        <input type="number" name="age" id="age" min="1" required>
                        <label for="age">Age</label>
                        <span class="error-message" id="age-error"></span>
                    </div>
    
                    <div class="input-box">
                        <span class="icon"><ion-icon name="school"></ion-icon></span>
                        <select name="school-standard" id="school-standard" required>
                            <option value="" disabled selected>School Grade</option>
                            <option value="1st">1st</option>
                            <option value="2nd">2nd</option>
                            <option value="3rd">3rd</option>
                            <option value="4th">4th</option>
                            <option value="5th">5th</option>
                            <option value="6th">6th</option>
                            <option value="7th">7th</option>
                            <option value="8th">8th</option>
                            <option value="9th">9th</option>
                            <option value="10th">10th</option>
                        </select>
                        <label for="school-standard"></label>
                        <span class="error-message" id="school-standard-error"></span>
                    </div>
    
                    <div class="input-box">
                        <span class="icon"><ion-icon name="transgender"></ion-icon></span>
                        <select name="gender" id="gender" required>
                            <option value="" disabled selected>Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                        <label for="gender"></label>
                        <span class="error-message" id="gender-error"></span>
                    </div>

                    <div class="input-box">
                        <span class="icon"><ion-icon name="school"></ion-icon></span>
                        <input type="text" name="schoolname" id="schoolname" required pattern="[a-zA-Z]+" title="schoolname can only contain alphabetic characters">
                        <label>School Name</label>
                        <span class="error-message" id="schoolname-error"></span>
                    </div>

                    <div class="dropdown-button">
                        <button class="btn btn-success dropdown-toggle underline-button"
                                type="button"
                                id="multiSelectDropdown"
                                data-bs-toggle="dropdown"
                                aria-expanded="false">
                            Language Known<span id="selectedLanguagesText"></span>
                        </button>
                        <ul class="dropdown-menu bc=#212529" aria-labelledby="multiSelectDropdown">
                            <li>
                                <label>
                                    <input type="checkbox" value="English" class="languageCheckbox">
                                    English
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox" value="Hindi" class="languageCheckbox">
                                    Hindi
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox" value="Other" id="otherLanguageCheckbox" class="languageCheckbox">
                                    Other
                                </label>
                            </li>
                            <li id="otherLanguageInputContainer" style="display: none;">
                                <label>
                                    <input type="text" id="otherLanguageInput" placeholder="Enter language">
                                </label>
                            </li>
                        </ul>
                        <input type="hidden" name="selectedLanguages" id="selectedLanguages" required>
                    </div>

                    <div class="input-box">
                        <span class="icon"><ion-icon name="location"></ion-icon></span>
                        <select name="state" id="state" required>
                            <option value="" disabled selected>State</option>
                            <option value="Andhra Pradesh">Andhra Pradesh</option>
                            <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                            <option value="Assam">Assam</option>
                            <option value="Bihar">Bihar</option>
                            <option value="Chhattisgarh">Chhattisgarh</option>
                            <option value="Goa">Goa</option>
                            <option value="Gujarat">Gujarat</option>
                            <option value="Haryana">Haryana</option>
                            <option value="Himachal Pradesh">Himachal Pradesh</option>
                            <option value="Jharkhand">Jharkhand</option>
                            <option value="Karnataka">Karnataka</option>
                            <option value="Kerala">Kerala</option>
                            <option value="Madhya Pradesh">Madhya Pradesh</option>
                            <option value="Maharashtra">Maharashtra</option>
                            <option value="Manipur">Manipur</option>
                            <option value="Meghalaya">Meghalaya</option>
                            <option value="Mizoram">Mizoram</option>
                            <option value="Nagaland">Nagaland</option>
                            <option value="Odisha">Odisha</option>
                            <option value="Punjab">Punjab</option>
                            <option value="Rajasthan">Rajasthan</option>
                            <option value="Sikkim">Sikkim</option>
                            <option value="Tamil Nadu">Tamil Nadu</option>
                            <option value="Telangana">Telangana</option>
                            <option value="Tripura">Tripura</option>
                            <option value="Uttar Pradesh">Uttar Pradesh</option>
                            <option value="Uttarakhand">Uttarakhand</option>
                            <option value="West Bengal">West Bengal</option>
                            <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                            <option value="Chandigarh">Chandigarh</option>
                            <option value="Dadra and Nagar Haveli and Daman and Diu">Dadra and Nagar Haveli and Daman and Diu</option>
                            <option value="Delhi">Delhi</option>
                            <option value="Lakshadweep">Lakshadweep</option>
                            <option value="Puducherry">Puducherry</option>
                        </select>
                        <label></label>
                        <span class="error-message" id="state-error"></span>
                    </div>

                    <div class="input-box">
                    <span class="icon"><ion-icon name="business"></ion-icon></span>
                        <input type="text" name="city" id="city" required pattern="[a-zA-Z]+" title="cityname can only contain alphabetic characters">
                        <label>City</label>
                        <span class="error-message" id="cityname-error"></span>
                    </div>

                    <div class="input-box">
                        <span class="icon"><ion-icon name="location"></ion-icon></span>
                        <input type="text" name="area" id="area" required pattern="[a-zA-Z]+" title="area can only contain alphabetic characters">
                        <label>Area / Location</label>
                        <span class="error-message" id="areaname-error"></span>
                    </div>

                    <div class="input-box">
                        <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                        <input type="password" name="password" id="password" required minlength="8">
                        <label>Password</label>
                        <span class="error-message" id="password-error"></span> 
                    </div>
                    <div class="remember-forgot">
                        <label><input type="checkbox" required> I agree to the terms & conditions</label>
                    </div>
                    <button type="submit" class="btn-register">Register</button>
                    <div>
                        <input type="hidden" name="student_type" value="student">
                    </div>
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
         setTimeout(function() {
            $('.flash-message').fadeOut('slow');
        }, 3000);
        document.addEventListener('DOMContentLoaded', function () {
        const languageCheckboxes = document.querySelectorAll('.languageCheckbox');
        const otherLanguageCheckbox = document.getElementById('otherLanguageCheckbox');
        const otherLanguageInputContainer = document.getElementById('otherLanguageInputContainer');
        const otherLanguageInput = document.getElementById('otherLanguageInput');
        const selectedLanguagesInput = document.getElementById('selectedLanguages');
        const selectedLanguagesText = document.getElementById('selectedLanguagesText');

        languageCheckboxes.forEach(checkbox => {
            checkbox.addEventListener('change', updateSelectedLanguages);
        });

        otherLanguageCheckbox.addEventListener('change', function () {
            if (this.checked) {
                otherLanguageInputContainer.style.display = 'block';
            } else {
                otherLanguageInputContainer.style.display = 'none';
                otherLanguageInput.value = '';
                updateSelectedLanguages();
            }
        });

        otherLanguageInput.addEventListener('input', updateSelectedLanguages);

        function updateSelectedLanguages() {
            const selectedLanguages = Array.from(languageCheckboxes)
                .filter(checkbox => checkbox.checked)
                .map(checkbox => checkbox.value === 'Other' ? otherLanguageInput.value : checkbox.value)
                .filter(language => language); // Remove empty strings

            selectedLanguagesInput.value = selectedLanguages.join(', ');
            selectedLanguagesText.textContent = selectedLanguages.length ? `(${selectedLanguages.join(', ')})` : '';
        }
        
        $(document).ready(function () {
    $("#mobile").on('input', function () {
        if (this.value.length > 10) {
            this.value = this.value.slice(0, 10);
        }
    })})
    });
</script>

<script>
    // jQuery function to hide the success message after 5 seconds
    $(document).ready(function() {
        setTimeout(function() {
            $(".toast").fadeOut(1000);
        }, 5000); // 5000 milliseconds = 5 seconds
    });
    </script>

    <style>
        .input-box {
            position: relative;
            margin-bottom: 20px;
            background-color: transparent;
        }
        .input-box input,
        .input-box select {
            width: 100%;
            padding: 11px;
            background-color: transparent;
            border: none;
        }
        .input-box select,
        option {
            font-weight: 450;
        }
        .input-box label {
            padding-left: 11px;
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
        .language-container {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        .language-container > div {
            margin-right: 20px;
        }
        .other-container {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }
        .other-container input[type="text"] {
            margin-left: 10px;
        }
        .dropdown-button{
            margin-top: 35px;
            margin-bottom: 20px;
            border-bottom: 2px solid #000000;
        }
        .dropdown-menu{
            background-color: #6cb05c;
            padding-left: 20px;
        }
        .btn-register{
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
        position: absolute;
        top: 10px;
        left: 50%;
        transform: translateX(-50%);
        width: 20%;
        z-index: 1000;
        }

        .alert {
            margin-bottom: 10px;
        }

        .alert-success {
            color: #155724;
            background-color: #d4edda;
            border-color: #c3e6cb;
            text-align: center;
        }

        .alert-danger {
            color: #721c24;
            background-color: #f8d7da;
            border-color: #f5c6cb;
            text-align: center;
        }
</style>

</body>

</html>
