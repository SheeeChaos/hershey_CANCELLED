<?php

$msg = "";

include('config/config.php'); // Update the path to include the config.php file

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


<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>Reset Password</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Reset Password" />
    <link href="//fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/style.css" type="text/css" media="all" />
    <script src="https://kit.fontawesome.com/af562a2a63.js" crossorigin="anonymous"></script>
    <link rel="icon" href="img/logo.png" type="image/x-icon">
</head>
<body>
    <section class="w3l-mockup-form">
        <div class="container">
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
                            <input type="password" class="password" name="password" placeholder="Enter New Password" required>
                            <input type="password" class="confirm-password" name="confirm-password" placeholder="Confirm New Password" required>
                            <button name="submit" class="btn" type="submit">Reset Password</button>
                        </form>
                        <div class="social-icons">
                            <p>Back to! <a href="loginuser.php">Login</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
