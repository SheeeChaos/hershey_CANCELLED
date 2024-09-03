<?php 
include('clientPartials/clientHeaderuser.php');
ob_start();
?>
           
    <div class="section loginPage flex">
          <div class="pageContent">
                <h1 class="title">Register Here!</h1>
            
                <?php 

                    include("php/configuser.php");
                    if(isset($_POST['submit'])){
                        $Fname = $_POST['Fname'];
                        $username = $_POST['username'];
                        $phone = $_POST['phone'];
                        $email = $_POST['email'];
                        $password = $_POST['password'];
                    
                        $location = $_POST['location'];
                        $role = $_POST['role'];
                        $houseNo = $_POST['houseNo'];
                        $street = $_POST['street'];
                        $image = $_POST['image'];
                       
                        if(isset($_FILES['image']['name'])){
                            //To upload the image we need the image name, source and destination.
                            $image = $_FILES['image']['name'];
                            // Source ================>
                            $imageSource = $_FILES['image']['tmp_name'];
                            // Destination ================>
                            $imageDestination = "../databaseImages/foodie".$image; 
                            // Finally upload the image ========>
                            $uploadImage = move_uploaded_file($imageSource, $imageDestination);
                        }
                    $verify_query = mysqli_query($con,"SELECT email FROM users WHERE email='$email'");

                        if(mysqli_num_rows($verify_query)!=0 ){    
                            $error = true;
                            $errorMessage = "This email is used, Try another One Please!";
                        }
                        else{

                            mysqli_query($con,"INSERT INTO users(Fname,username,email,password,phone,location,role,houseNo,street,image) VALUES('$Fname','$username','$email','$password','$phone','$location','$role','$houseNo','$street','$image')") or die("Error Occured");

                            $success = true;
                            $successMessage = "Registration successfully!";
                            
                        }
                    }

                    ?>

                    <?php if(!isset($success) && !isset($error)): ?>
                    <div id="registrationForm" >
                        <form action="register.php" method="POST">
                            <div class="input">
                                <label for="Fname">Full Name</label>
                                <input type="text" name="Fname" id="Fname"  placeholder="Enter Full Name" autocomplete="off" required>
                            </div>

                            <div class="input">
                                <label for="Fname">Name of Store</label>
                                <input type="text" name="Fname" id="Fname"  placeholder="Enter your store" autocomplete="off" required>
                            </div>

                            <div class="input">
                                <label for="username">Username</label>
                                <input type="text" id="username" name="username" placeholder="Enter Username" autocomplete="off" required>
                                
                            </div>
                            <div class="input">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email"  placeholder="Enter Email" autocomplete="off" required>
                            </div>
                            <div class="input">
                                <label for="password">Password</label>
                                <input type="password" id="password" name="password" placeholder="Enter Password" autocomplete="off" required>
                            </div>
                            
                            <div class="input">
                                <label for="phone">Contact Number</label>
                                <input type="text" name="phone" id="phone"  placeholder="Enter Contact Number" autocomplete="off" required>
                            </div>
                            <div class="input">
                                        <label for="location"> Pick Location</label>
                                        <select name="location" required id="location">
                                            <option value="TandangSora">Tandang Sora</option>
                                            <option value="Bagbag">Bagbag</option>
                                            <option value="Sauyo">Sauyo</option>
                                            <option value="PasongTamo">Pasong Tamo</option>
                                        </select>
                            </div>
                            <div class="input">
                                    <label for="houseNo">House Number</label>
                                    <input type="text" name="houseNo" placeholder="Enter House Number" required>
                                    <input type="hidden" name="orderStatus" value="ordered">
                            </div>
                            <div class="input">
                                    <label for="street">Street</label>
                                    <input type="text" name="street" placeholder="Enter Your Street" required>
                            </div>
                            <span class="flex span">
                                    <label for="image">Picture Of Store</label>
                                    <input type="file" name="image" required>
                                </span> 
                            
                            <button class="btn flex" name="submit" > Register <i class="fa fa-user-plus"></i></button>
                            <div class="links">
                                Already a member? <a href="loginuser.php">Sign In</a>
                            </div>
                            <span class="flex span">
                                            <label for="role">Role</label>
                                            <select name="role" required>
                                                <option value="user">User</option>
                                            </select>
                                        </span>   
                        </form>
                    </div>

                    

                    <?php elseif(isset($error)): ?>
                    <div class="message">
                        <p><?php echo $errorMessage; ?></p>
                    </div>
                    <a href='javascript:self.history.back()'><button class='btn'>Go Back</button>

                    <?php elseif(isset($success)): ?>
                    <div class="message">
                        <p><?php echo $successMessage; ?></p>
                    </div>
                    <a href='loginuser.php'><button class='btn'>Login Now</button>

                    <?php endif; ?>
          </div>
          
          
    </div>
    

<?php 
include('clientPartials/clientFooteruser.php');
?>


