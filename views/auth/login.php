<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="id-ID">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Login | Toko Sayur 22</title>

        <link href="<?php echo get_theme_uri('custom/auth/login/css/style.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo get_theme_uri('custom/auth/login/css/fontawesome-all.css'); ?>" rel="stylesheet" />
        <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    </head>
    <body>
        <h1></h1>
        <div class=" w3l-login-form">
            <h2><b>LOGIN AKUN</b></h2>

            <?php echo form_open('auth/login/do_login'); ?>

            <div class=" w3l-form-group">
                <div class="group">
                    <i class="fas fa-user"></i>
                    <input type="text" name="username" value="<?php echo set_value('username', $old_username); ?>" class="form-control" placeholder="Username" minlength="4" maxlength="16" autocomplete="off" required>
                </div>
                <?php echo form_error('username'); ?>
            </div>
            <div class=" w3l-form-group">
                <div class="group">
                    <i class="fas fa-unlock"></i>
                    <input type="password" name="password" class="form-control" placeholder="Password" autocomplete="off" required>
                </div>
                <?php echo form_error('password'); ?>
            </div>
            <div class="forgot">
                <!-- <?php echo anchor('auth/forget-password', 'Lupa password?'); ?> -->
                <p><input type="checkbox" name="remember_me" value="1"> Ingat saya</p>
            </div>
            <button type="submit">Login</button>
            <?php echo form_close(); ?>
        </div>

        <footer>
            <p class="copyright-agileinfo"> Copyright &copy; 2022 <?php echo anchor(base_url(), get_store_name()); ?></p>
        </footer>

    </body>
</html>