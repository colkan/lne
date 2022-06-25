<?php
    $pageTitle="SignUp | Tweet";
?>

<?php include 'backend/shared/header.php'; ?>

<section class="sign-container">

    <!------------
        NAVIGATION BAR
    ----------------->
    <nav class="nav-header-sign__up">
        <ul>
            <li><a href="">
            <i class="fa-solid fa-puzzle-piece"></i>
                Home
            </a></li>

            <li><a href="">
                About
            </a></li>

            <li><a href="">
                Language:English
            </a></li>
        </ul>
    </nav>

    <div class="form-container">

    <div class="form-content">
        <h2 class="header__form-content">
            Create your account
        </h2>
        <form action="" class="formField">
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

            <div class="form-btn-wrapper">
                <button type="submit" class="btn-form">Signup</button>
                <input type="checkbox" class="form-checkbox" id="check" name="remember">
                <label for="remember">Remember me</label>
            </div>
        </form>

        <footer class="form-footer">
            <p>Already have an account? <a href="login.php"> Login now</a></p>
        </footer>
    </div>
    </div>
</section>