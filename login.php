<?php
include_once "backend/initialize.php";
    $pageTitle="Login | Tweet";
?>

<?php require_once 'backend/shared/header.php'; ?>

<section class="sign-container">

    <!------------
        NAVIGATION BAR
    ----------------->
    <?php require_once 'backend/shared/loginNav.php';?>

    <div class="form-container">

    <div class="form-content">
        <h2 class="header__form-content">
            Login to Tweet
        </h2>
        <form action="<?php echo h($_SERVER['PHP_SELF']); ?>" class="formField" method="POST">
            <div class="form-group">
                <label for="username">Username or Email</label>
                <input type="text" name="username" id="username" required>
            </div>

            

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required>
            </div>

            <div class="s-password">
            <input type="checkbox" class="form-checkbox" id="s-password" onclick="showLoginPassword()">
                <label for="s-password">Show Password</label>
            </div>
           

            <div class="form-btn-wrapper">
                <button type="submit" class="btn-form">Log In</button>
                <input type="checkbox" class="form-checkbox" id="check" name="remember">
                <label for="remember">Remember me</label>
            </div>
        </form>
    </div>
    <footer class="form-footer">
            <p>New to Tweet? <a href="signUp.php"> Sign up to Tweet</a></p>
        </footer>
    </div>
</section>

<script src="frontend/assets/js/showPassword.js"></script>