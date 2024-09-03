<?php
include('clientPartials/clientHeaderuser.php');
ob_start();
?>

<div class="section loginPage flex">
    <div class="pageContent">
        <h1 class="title">Forgot Password</h1>


        <!-- Displaying the 'status' session message -->
        <?php if (isset($_SESSION['status'])): ?>
            <div class="alert alert-info">
                <?php
                echo $_SESSION['status'];
                unset($_SESSION['status']); // Unset the session after displaying it
                ?>
            </div>
        <?php endif; ?>

        <form method="POST" action="admin-forgot-password-reset-code.php">
            <div class="input">
                <label for="name">Email</label>
                <input type="text" id="email" name="email" placeholder="Enter email" autocomplete="off" required>

            </div>
            <button class="btn flex" name="password_reset_link"> Send <i class="uil uil-signin icon"></i></button>

            <div class="field">


            </div>

            <div class="links">
                <span>Back to </span><a href="login.php">login!</a>
            </div>
        </form>
    </div>
    <img src="./Assests/drinks.png" alt="" class="designImage1">
    <img src="./Assests/floating1.png" alt="" class="designImage2">
</div>

<?php
include('clientPartials/clientFooteruser.php');
?>