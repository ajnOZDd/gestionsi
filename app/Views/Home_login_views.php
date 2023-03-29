<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo base_url('assets/images/animi.png'); ?>" type="image/x-icon" >
    <link href="<?php echo base_url('assets/Font-Awesome-6.x/css/all.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/Login.css'); ?>" rel="stylesheet">
    <title><?= SITE_TITLE ?></title>
</head>

<body>
    <div class="logo">
        <img src="<?php echo base_url('assets/images/animi.png'); ?>" alt="" srcset="">
    </div>
    <div class="container">
        <input type="checkbox" id="flip">
        <div class="cover">
            <div class="front">
                <img src="<?php echo base_url('assets/images/back-image.jpg'); ?>" alt="">
            </div>
        </div>
        <div class="forms">
            <div class="form-content">
                <div class="login-form">
                    <div class="title">Login</div>

                    <div class="input-boxes">
                        <form action="<?= site_url('home/login'); ?>" method="post">
                            <div class="input-box">
                                <i class="fas fa-user"></i>
                                <input type="text" placeholder="nom" name="nom" required>
                            </div>
                            <div class="input-box">
                                <i class="fas fa-lock"></i>
                                <input type="password"  placeholder="Entrer un mot de passe" name="password" required>
                            </div>

                            <div class="button input-box">
                                <button type="submit">
                                    submit
                                </button>
                            </div>

                        </form>
                        <div class="text sign-up-text">Don't have an account? <label for="flip">Sigup now</label> </div>
                    </div>

                </div>
                <div class="signup-form">
                    <div class="title">Signup</div>
                    <div class="input-boxes">
                        <form action="<?= site_url('home/register'); ?>" method="post">
                            <div class="input-box">
                                <i class="fas fa-user"></i>
                                <input type="text" placeholder="nom" name="nom" required>
                            </div>
                            <div class="input-box">
                                <i class="fas fa-lock"></i>
                                <input type="password"  placeholder="Entrer un mot de passe" name="password" required>
                            </div>
                            <div class="input-box">
                                <i class="fas fa-location"></i>
                                <input type="text" placeholder="siege" name="siege" required>
                            </div>
                            <div class="input-box">
                                <i class="fas fa-envelope"></i>
                                <input type="email" placeholder="address exploitation" name="addressexploitation" required>
                            </div>

                            <div class="input-box">
                                <i class="fas fa-user-tie"></i>
                                <input type="text" placeholder="nomdirigeant" name="nomdirigeant" required>
                            </div>
                            <div class="input-box">
                                <i class="fa-solid fa-calendar-days"></i>
                                <input type="date" placeholder="debutexercice" name="debutexercice"required>
                            </div>
                            <div class="text"><a href="#">Forgot password?</a></div>
                            <div class="button input-box">
                                <button type="submit">
                                    submit
                                </button>
                            </div>
                            <div class="text sign-up-text">Already have an account? <label for="flip">Login now</label>
                            </div>
                        </form>
                    </div>


                </div>
            </div>
        </div>
    </div>

</body>

</html>