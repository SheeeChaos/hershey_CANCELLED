<?php
include('clientPartials/clientHeaderuser.php');
ob_start();
?>

<div class="section container loginPage flex">
    <div class="pageContent">
        <h1 class="title">Login Here!</h1>
        <p>Please be authentic!</p>

        <?php
        if (isset($_SESSION['noAdmin'])) {
            echo $_SESSION['noAdmin'];
            unset($_SESSION['noAdmin']);
        }

        if (isset($_SESSION['notLoggedIn'])) {
            echo $_SESSION['notLoggedIn'];
            unset($_SESSION['notLoggedIn']);
        }

        if (isset($_SESSION['settings'])) {
            echo $_SESSION['settings'];
            unset($_SESSION['settings']);
        }
        ?>

        <?php
        if (isset($_POST['submit'])) {
            $userName = $_POST['userName'];
            $loginPassword = $_POST['passWord'];

            // Fetch the user's data from the database
            $sql = "SELECT * FROM users WHERE username='$userName'";
            $res = mysqli_query($conn, $sql);

            if ($res && mysqli_num_rows($res) == 1) {
                $row = mysqli_fetch_assoc($res);

                // Verify the hashed password
                if (password_verify($loginPassword, $row['password']) && $row['role'] == 'user') {
                    $_SESSION['loginMessage'] = '<span class="success">Welcome ' . $userName . '!</span>';
                    $_SESSION['username'] = $userName;
                    header('location:' . SITEURL . 'index.php');
                    exit();
                } else {
                    $_SESSION['noAdmin'] = '<span class="fail" style="color: red;">Incorrect Credentials!</span>';
                    header('location:' . SITEURL . 'loginuser.php');
                    exit();
                }
            } else {
                $_SESSION['noAdmin'] = '<span class="fail" style="color: red;">Incorrect Credentials!</span>';
                header('location:' . SITEURL . 'loginuser.php');
                exit();
            }
        }
        ?>

        <form method="POST">
            <div class="input">
                <label for="name">Username</label>
                <input type="text" id="username" name="userName" placeholder="Enter Username" required>
            </div>
            <div class="input">
                <label for="password">Password</label>
                <input type="password" id="password" name="passWord" placeholder="Enter Password" required>
            </div>
            <button class="btn flex" name="submit">Login <i class="uil uil-signin icon"></i></button>

            <div class="links">
                Don't have an account? <a href="register.php">Sign Up Now</a>
            </div>
            <div class="links">
                <a href="userforgotpassword.php">Forgot Password?</a>
            </div>
        </form>

    </div>

</div>

<?php
include('clientPartials/clientFooteruser.php');
?>
