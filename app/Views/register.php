<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website With Login & Registration</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="public/assets/css/registerlogin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
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
                <button type="submit" class="btn-submit">Login</button>
                <div class="login-register">
                    <p>Don't have an account? <a href="#" class="register-link">Register</a></p>
                </div>
            </form>
        </div>

        <div class="form-box register" id="registrationForm">
            <h2 pt="none">Abroad Registration</h2>
            
            <form action="<?php echo base_url()?>userregister" method="post" id="registerForm">
                <div class="input-box">
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                    <input type="text" name="username" id="username" required pattern="[a-zA-Z]+" title="Username can only contain alphabetic characters">
                    <label>Candidate Name</label>
                    <span class="error-message" id="username-error"></span> <!-- Error message for username -->
                </div>

                <div class="input-box">
                        <span class="icon"><ion-icon name="calendar"></ion-icon></span>
                        <input type="number" name="age" id="age" min="1" required>
                        <label for="age">Age</label>
                        <span class="error-message" id="age-error"></span>
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

                <div class="input-box" id="mobile-box">
                        <span class="icon"><ion-icon name="call"></ion-icon></span>
                        <input type="tel" name="mobile" id="mobile" required>
                        <label for="mobile">Mobile</label>
                        <span class="error-message" id="mobile-error"></span>
                </div>

                <div class="input-box" id="email-box">
                        <span class="icon"><ion-icon name="mail"></ion-icon></span>
                        <input type="email" name="email" id="email" required>
                        <label for="email">Email</label>
                        <span class="error-message" id="email-error"></span>
                </div>

                
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" name="password" id="password" required minlength="8">
                    <label>Password</label>
                    <span class="error-message" id="password-error"></span>
                </div>

                <div class="input-box">
                    <span class="icon"><ion-icon name="country"></ion-icon></span>
                    <input type="text" name="visitcountry" id="visitcountry" required pattern="[a-zA-Z]+" title="Country name can only contain alphabetic characters">
                    <label>Visiting Country</label>
                    <span class="error-message" id="countryname-error"></span> <!-- Error message for username -->
                </div>

                <div class="dropdown-button">
                    <button class="btn btn-success dropdown-toggle underline-button"
                            type="button"
                            id="multiSelectDropdown"
                            name="selectedLanguages"
                            data-bs-toggle="dropdown"
                            aria-expanded="false">
                        Language Known<span id="selectedLanguages"></span>
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
                                Regional
                            </label>
                        </li>
                        <li id="otherLanguageInputContainer" style="display: none;">
                            <label>
                                <input type="text" id="otherLanguageInput" placeholder="Enter language">
                            </label>
                        </li>
                    </ul>
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
                    <input type="text" name="city" id="city" required pattern="[a-zA-Z]+" title="City name can only contain alphabetic characters">
                    <label>City</label>
                    <span class="error-message" id="cityname-error"></span>
                </div>

                <div class="input-box">
                    <span class="icon"><ion-icon name="location"></ion-icon></span>
                    <input type="text" name="area" id="area" required pattern="[a-zA-Z]+" title="Area can only contain alphabetic characters">
                    <label>Area / Location</label>
                    <span class="error-message" id="areaname-error"></span>
                </div>

                <div class="remember-forgot">
                    <label><input type="checkbox" required> I agree to the terms & conditions</label>
                </div>
                <button type="submit" class="btn-submit">Register</button>
                <div class="login-register">
                    <p>Already have an account?<a href="#" class="login-link"> Login</a></p>
                </div>
                <div>
                    <input type="hidden" name="student_type" value="abroad">
                </div>
            </form>
        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="script.js"></script>
    <script>
    $(document).ready(function() {
        $('#registerForm').validate({
            rules: {
                username: {
                    required: true,
                    pattern: /^[a-zA-Z]+$/
                },
                age: {
                    required: true,
                    number: true,
                    min: 1
                },
                gender: {
                    required: true
                },
                mobile: {
                    required: true,
                    pattern: /^[0-9]{10}$/
                },
                email: {
                    required: true,
                    email: true
                },
                password: {
                    required: true,
                    minlength: 8
                },
                visitcountry: {
                    required: true,
                    pattern: /^[a-zA-Z]+$/
                },
                state: {
                    required: true
                },
                city: {
                    required: true,
                    pattern: /^[a-zA-Z]+$/
                },
                area: {
                    required: true,
                    pattern: /^[a-zA-Z]+$/
                }
            },
            messages: {
                username: {
                    required: 'Please enter your username.',
                    pattern: 'Username can only contain alphabetic characters.'
                },
                age: {
                    required: 'Please enter your age.',
                    number: 'Age must be a number.',
                    min: 'Age must be at least 1.'
                },
                gender: {
                    required: 'Please select your gender.'
                },
                mobile: {
                    required: 'Please enter your mobile number.',
                    pattern: 'Mobile number must be exactly 10 digits.'
                },
                email: {
                    required: 'Please enter your email address.',
                    email: 'Please enter a valid email address.'
                },
                password: {
                    required: 'Please enter your password.',
                    minlength: 'Password must be at least 8 characters long.'
                },
                visitcountry: {
                    required: 'Please enter the visiting country.',
                    pattern: 'Country name can only contain alphabetic characters.'
                },
                state: {
                    required: 'Please select your state.'
                },
                city: {
                    required: 'Please enter your city.',
                    pattern: 'City name can only contain alphabetic characters.'
                },
                area: {
                    required: 'Please enter your area.',
                    pattern: 'Area can only contain alphabetic characters.'
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
    <script>
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

    document.addEventListener('DOMContentLoaded', function () {
        const languageCheckboxes = document.querySelectorAll('.languageCheckbox');
        const otherLanguageCheckbox = document.getElementById('otherLanguageCheckbox');
        const otherLanguageInputContainer = document.getElementById('otherLanguageInputContainer');
        const otherLanguageInput = document.getElementById('otherLanguageInput');
        const selectedLanguagesSpan = document.getElementById('selectedLanguages');

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
                .filter(language => language); 

            selectedLanguagesSpan.textContent = selectedLanguages.length ? `(${selectedLanguages.join(', ')})` : '';
        }
    });
    </script>
    <style>
        .form-box {
            max-height: 400px;
            overflow-y: auto;
            padding: 0px;
            -ms-overflow-style: none;
            scrollbar-width: none; 
        }
        .input-box input,
        .input-box select {
            width: 100%;
            padding: 11px;
            background-color: transparent;
            border: none;       
        }
        .input-box select, option {
            font-weight: 450;       
        }
        .input-box label{
            padding-left: 10px;
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
        .btn-submit{
            background-color: #212529;
            width: 100%;
            height: 2.7rem;
            border-radius: 5px;
            color: white;
            border: none;
        }
        .form-box.register {
            padding-top: 0; 
            margin-top: 0; 
            padding-bottom:0;
        }
        header {
            display: flex;
            justify-content: flex-end; 
            align-items: center;
        }
        .navigation {
            margin-left: 10px; 
        }
    </style>
</body>
</html>
