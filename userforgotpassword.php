<?php 
include('clientPartials/clientHeaderuser.php');
ob_start();
?>
             
    <div class="section container loginPage flex">
          <div class="pageContent">
                <h1 class="title">Forgot Password</h1>
                 

                 

                 <form method="POST">
                    <div class="input">
                        <label for="name">Email</label>
                        <input type="text" id="email" name="email" placeholder="Enter email" autocomplete="off" required>
                        
                    </div>
                    <button class="btn flex" name="submit"> Send <i class="uil uil-signin icon"></i></button>

                    <div class="field">
                    
                    
                    </div>
                    
                    <div class="links">
                     <a href="loginuser.php">Canel Forgot Password?</a>
                    </div>
                 </form>
                 <img src="./Assests/logo2.png" alt="">
          </div>
          <img src="./Assests/drinks.png" alt="" class="designImage1">
          <img src="./Assests/floating1.png" alt="" class="designImage2">
    </div>

<?php 
include('clientPartials/clientFooteruser.php');
?>
 
