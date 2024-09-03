<?php
include('clientPartials/clientHeaderuser.php');
ob_start();
?>
<div class="section loginPage flex">
    <div class="pageContent">
        <h1 class="title">Customer Change Password</h1>
        <p>Please enter your new password.</p>

        <?php

        $msg = "";
        
        // include('./config/config.php'); // Update the path to include the config.php file
        
        if (isset($_GET['token'])) {
            $reset_code = mysqli_real_escape_string($conn, $_GET['token']);

            // Check if the reset code exists in the users table
            $user_query = mysqli_query($conn, "SELECT id FROM users WHERE verify_token='{$reset_code}'");

            if (mysqli_num_rows($user_query) > 0) {
                $user_row = mysqli_fetch_assoc($user_query);
                $user_id = $user_row['id'];

                if (isset($_POST['submit'])) {
                    $password = mysqli_real_escape_string($conn, $_POST['password']);
                    $confirm_password = mysqli_real_escape_string($conn, $_POST['confirm-password']);

                    if ($password === $confirm_password) {
                        // Hash the password before storing it in the database
                        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

                        // Update the password in the users table using the user_id
                        $query = mysqli_query($conn, "UPDATE users SET password='{$hashed_password}' WHERE id='{$user_id}'");

                        if ($query) {
                            // Clear the reset code in the users table
                            $clear_code_query = mysqli_query($conn, "UPDATE users SET verify_token='' WHERE id='{$user_id}'");

                            if ($clear_code_query) {
                                header("Location: loginuser.php");
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
        <?php echo $msg; ?>
        <form method="post">
            <div class="input">
                <label for="name">New password</label>
                <input type="password" class="password" name="password" placeholder="Enter New Password" required>
            </div>
            <div class="input">
                <label for="password">Confirm password</label>
                <input type="password" class="confirm-password" name="confirm-password"
                                placeholder="Confirm New Password" required>
            </div>
            <button name="submit" class="btn flex" type="submit">Reset Password</button>

            <div class="links">
                Back to! <a href="register.php">Login.</a>
            </div>
        </form>
    </div>
</div>

<?php
include('clientPartials/clientFooteruser.php');
?>