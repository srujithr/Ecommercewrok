<?php include 'includes/header.php'; ?>

<style>
    /* Style for the form container */
.containers {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

/* Style for the form */
.signin-forms {
    background: #f8f9fa;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

/* Style for the form titles */
.form-titles {
    text-align: center;
    color: #333;
}

/* Style for form groups */
.form-groups {
    margin-bottom: 15px;
}

/* Style for labels */
.form-groups label {
    display: block;
    margin-bottom: 5px;
}

/* Style for input fields */
.form-groups input[type="text"],
.form-groups input[type="password"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

/* Style for remember me checkbox */
.agree-term {
    display: inline-block;
    margin-right: 5px;
}

.label-agree-term {
    font-size: 14px;
}

/* Style for submit button */
.form-submit {
    width: 100%;
    background: #007bff;
    color: #fff;
    border: none;
    padding: 10px;
    border-radius: 5px;
    cursor: pointer;
}

/* Style for social logins */
.social-logins {
    text-align: center;
    margin-top: 15px;
}

.social-label {
    font-size: 16px;
    margin-bottom: 10px;
}

.socials {
    list-style-type: none;
    padding: 0;
    margin: 0;
}

.socials li {
    display: inline-block;
    margin-right: 10px;
}

.socials li a {
    color: #333;
    text-decoration: none;
    font-size: 20px;
}

</style>
       <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="containers">
                <div class="signin-contents">
                    <div class="signin-images">
                        <figure><img src="assets/img/signin-image.jpg" alt="sing up image"></figure>
                        <a href="#" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-forms">
                        <h2 class="form-titles">Sign up</h2>
                        <form method="POST" class="register-form" id="login-form">
                            <div class="form-groups">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="your_name" id="your_name" placeholder="Your Name"/>
                            </div>
                            <div class="form-groups">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="your_pass" id="your_pass" placeholder="Password"/>
                            </div>
                            <div class="form-groups">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-groups form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                        <div class="social-logins">
                            <span class="social-label">Or login with</span>
                            <ul class="socials">
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include 'includes/footer.php'; ?>

