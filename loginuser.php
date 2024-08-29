<?php 
include('clientPartials/clientHeaderuser.php');
ob_start();
?>
             
    <div class="section container loginPage flex">
          <div class="pageContent">
                <h1 class="title">Login Here!</h1>
                 <p>Please be authentic!</p>

                 <?php 
                        if(isset($_SESSION['noAdmin'])){
                            echo $_SESSION['noAdmin'];
                            unset($_SESSION['noAdmin']);
                        }

                        if(isset($_SESSION['notLoggedIn'])){
                            echo $_SESSION['notLoggedIn'];
                            unset ($_SESSION['notLoggedIn']);
                        }
            
                        if(isset($_SESSION['settings'])){
                        echo $_SESSION['settings'];
                        unset($_SESSION['settings']);
                        }
                    ?> 
                  <?php 

                        if(isset($_POST['submit'])){

                            $userName = $_POST['userName'];
                            $loginPassword = $_POST['passWord'];

                        $sql = "SELECT * FROM users WHERE username='$userName' AND password= '$loginPassword'";

                        $res = mysqli_query($conn,$sql);

                            $count = mysqli_num_rows($res);
                            $row = mysqli_fetch_assoc($res);
                            if($count==1 && $row['role']=='user'){
                                $_SESSION['loginMessage'] = '<span class="success">Welcome ' .$userName. '!</span>';
                                $_SESSION['username'] = $userName;
                                header('location:' .SITEURL. 'index.php');
                                exit();
                                
                            }
                            
                            else{
                                $_SESSION['noAdmin'] = '<span class="fail" style="color: red;">Incorrect Credentials!</span>';
                                header('location:' .SITEURL. 'loginuser.php');
                               
                            }
                        
                        }


                    ?>

                 <form method="POST">
                    <div class="input">
                        <label for="name">Username</label>
                        <input type="text" id="username" name="userName" placeholder="Enter Username">
                        
                    </div>
                    <div class="input">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="passWord" placeholder="Enter Password">
                    </div>
                    <button class="btn flex" name="submit"> Login <i class="uil uil-signin icon"></i></button>

                    
                    <div class="links">
                        Don't have account? <a href="register.php">Sign Up Now</a>
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
 
