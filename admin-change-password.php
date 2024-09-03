<?php
include('clientPartials/clientHeaderuser.php');
ob_start();
?>
<?php

$msg = "";

include('config/config.php'); // Update the path to include the config.php file

if (isset($_GET['token'])) {
    $reset_code = mysqli_real_escape_string($conn, $_GET['token']);

    // Check if the reset code exists in the admins table
    $admin_query = mysqli_query($conn, "SELECT id FROM admins WHERE verify_token='{$reset_code}'");

    if (mysqli_num_rows($admin_query) > 0) {
        $admin_row = mysqli_fetch_assoc($admin_query);
        $admin_id = $admin_row['id'];

        if (isset($_POST['submit'])) {
            $password = mysqli_real_escape_string($conn, $_POST['password']);
            $confirm_password = mysqli_real_escape_string($conn, $_POST['confirm-password']);

            if ($password === $confirm_password) {
                // Hash the password before storing it in the database
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);

                // Update the password in the admins table using the admin_id
                $query = mysqli_query($conn, "UPDATE admins SET password='{$hashed_password}' WHERE id='{$admin_id}'");

                if ($query) {
                    // Clear the reset code in the admins table
                    $clear_code_query = mysqli_query($conn, "UPDATE admins SET verify_token='' WHERE id='{$admin_id}'");

                    if ($clear_code_query) {
                        header("Location: login.php");
                        exit;
                    }
                }
            } else {
                $msg = "<div class='alert alert-danger'>Password and Confirm Password do not match.</div>";
            }
        }
    } else {
        $msg = "<div class='alert alert-danger'>Reset Link is invalid or expired.</div>";
    }
} else {
    header("Location: index.php");
    exit;
}

?>

<title>Hershey's Groceries | Reset Password</title>

<section class="section container loginPage flex">
    <div class="pageContent">
        <div class="workinghny-form-grid">
            <div class="main-mockup">
                <div class="w3l_form align-self">
                    <div class="left_grid_info">
                        <img src="img/image3.svg" alt="">
                    </div>
                </div>
                <div class="content-wthree">
                    <h2>Reset Password</h2>
                    <p>Please enter your new password.</p>
                    <?php echo $msg; ?>

                    <form action="" method="post">
                        <div class="input">
                            <input type="password" class="password" name="password" placeholder="Enter New Password"
                                required>
                            <input type="password" class="confirm-password" name="confirm-password"
                                placeholder="Confirm New Password" required>
                            <button name="submit" class="btn flex" type="submit">Reset Password</button>
                        </div>
                    </form>
                    <div class="social-icons">
                        <p>Back to! <a href="login.php">Login</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img src="./Assests/floating1.png" alt="" class="designImage2">
</section>

<?php
include('clientPartials/clientFooteruser.php');
?>