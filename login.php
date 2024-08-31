<?php
include('clientPartials/clientHeaderuser.php');
ob_start();
?>

<div class="section container loginPage flex">
    <div class="pageContent">
        <h1 class="title">Login Administrator Here!</h1>
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

        <form method="POST">
            <div class="input">
                <label for="name">Username</label>
                <input type="text" id="name" name="userName" placeholder="Enter Username">
            </div>
            <div class="input">
                <label for="password">Password</label>
                <input type="password" id="password" name="passWord" placeholder="Enter Password">
            </div>
            <button class="btn flex" name="submit"> Login <i class="uil uil-signin icon"></i></button>
        </form>
        <br><br>

        <div class="links">
            <a href="adminforgotpassword.php">Forgot Password?</a>
        </div>
    </div>
</div>

<?php
include('clientPartials/clientFooteruser.php');
?>

<?php

if (isset($_POST['submit'])) {

    $userName = $_POST['userName'];
    $loginPassword = $_POST['passWord'];

    $sql = "SELECT * FROM admins WHERE username='$userName'";

    $res = mysqli_query($conn, $sql);

    if (mysqli_num_rows($res) === 1) {
        $row = mysqli_fetch_assoc($res);
        $hashedPassword = $row['password'];

        // Verify the hashed password
        if (password_verify($loginPassword, $hashedPassword)) {
            
            $_SESSION['username'] = $userName;

            if ($row['role'] == 'manager') {
                $_SESSION['loginMessage'] = '<span class="success">Welcome ' . $row['name'] . '!</span>';
                header('location:' . SITEURL . 'admin/dashboard.php');
            } elseif ($row['role'] == 'admin') {
                $_SESSION['loginMessage'] = '<span class="success">Welcome ' . $row['name'] . '!</span>';
                header('location:' . SITEURL . 'dashboardU.php');
            }
            exit();

        } else {
            $_SESSION['noAdmin'] = '<span class="fail" style="color: red;">Incorrect Credentials!</span>';
            header('location:' . SITEURL . 'login.php');
            exit();
        }

    } else {
        $_SESSION['noAdmin'] = '<span class="fail" style="color: red;">Incorrect Credentials!</span>';
        header('location:' . SITEURL . 'login.php');
        exit();
    }
}

?>
