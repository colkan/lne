<?php
include_once "backend/initialize.php";
    $pageTitle="SignUp | Tweet";
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
            Create your account
        </h2>
        <form class="formField" action="<?php echo h($_SERVER['PHP_SELF']); ?>" method="POST">
            <div class="form-group">
                <label for="firstName">FirstName</label>
                <input type="text" name="firstName" id="firstName">
            </div>

            <div class="form-group">
                <label for="lastName">LastName</label>
                <input type="text" name="lastName" id="lastName">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" id="email">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
            </div>


            <div class="form-group">
                <label for="password2">Confirm Password</label>
                <input type="password" name="password2" id="password2">
            </div>

            <div class="s-password">
            <input type="checkbox" class="form-checkbox" id="s-password" onclick="showPassword()">
                <label for="s-password">Show Password</label>
            </div>


            <div class="form-btn-wrapper">
                <button type="submit" class="btn-form">Signup</button>
                <input type="checkbox" class="form-checkbox" id="check" name="remember">
                <label for="remember">Remember me</label>
            </div>
        </form>
    </div>
    <footer class="form-footer">
            <p>Already have an account? <a href="login.php"> Login now</a></p>
        </footer>
    </div>
</section>

<script src="frontend/assets/js/showPassword.js"></script>