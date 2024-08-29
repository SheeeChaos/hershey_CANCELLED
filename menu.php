<?php 
include('clientPartials/clientHeader.php');
?>
       
    <!-- Menu Top Section -->
   <?php 

   if(isset($_SESSION['addedToCart'])){
    echo $_SESSION['addedToCart'];
    unset($_SESSION['addedToCart']);
   }
   ?>
    <section class="container section menuPage">
        <div class="secContent">
            <div class="sectionIntro">
                <h1 class="secTitle">All Products</h1>
                <p class="subTitle">Welcome to our Grocery List</p>

                <img src="./Assests/basket.png" alt="Design Image">
            </div>
            <div class="optionMenu flex">
                <div class=" option" data-filter="canned">
                  <img src="./Assests/cans.png" alt="different canned">
                  <small> Canned<br>Goods</small>
                </div>
                <div class=" option" data-filter="drinks">
                  <img src="./assests/drinks.png" alt="different drinks">
                  <small>Drinks</small>
                </div>
                <div class=" option" data-filter="snacks">
                  <img src="./assests/snacks.png" alt="snacks">
                  <small>Snacks</small>
                </div>
                <div class=" option" data-filter="essentials">
                  <img src="./assests/essentials.png" alt="different essentials">
                  <small>Essentials</small>
                </div>
                <div class=" option"  data-filter="condiments">
                  <img src="./assests/condiments.png" alt="different Sauce">
                  <small>Condiments</small>
                </div>
                <div class=" option"  data-filter="ciggar">
                  <img src="./assests/ciggar.png" alt="different ciggarettes">
                  <small>Ciggarettes</small>
                </div>
                <div class=" option"  data-filter="candy">
                  <img src="./assests/candy.png" alt="different candy">
                  <small>Candy</small>
                </div>
                <div class=" option"  data-filter="coffee">
                  <img src="./assests/coffee.png" alt="different coffee">
                  <small>Coffee</small>
                </div>
                <div class=" option"  data-filter="canton">
                  <img src="./assests/canton.png" alt="different Pancit Canton">
                  <small>Canton</small>
                </div>
            </div>

            <div class="allItems">
                <div class="categoryWrapper grid hide" data-target="canned">

                    <?php 
                        $sql = "SELECT * FROM food where category = 'canned'";
                        $res = mysqli_query($conn, $sql);
                        if($res == TRUE){
                            $count = mysqli_num_rows($res);
                            if($count > 0){
                                while($row = mysqli_fetch_assoc($res)){
                                    $id = $row['id'];
                                    $img = $row['image'];
                                    $foodName = $row['food_name'];
                                    $foodDesc = $row['food_desc'];
                                    $foodPrice = $row['price'];
                                    $category = $row['category'];

                                    ?>
                                        <!-- SingleItem -->
                                        <div class="singleItem">
                                            

                                            <?php 
                                                if($img!=""){   
                                                    ?>
                                                    <div class="imgDiv">
                                                        <img src="<?php echo SITEURL;?>databaseImages/foodie<?php echo $img;?>">
                                                    </div>
                                                    <?php
                                                    
                                                }
                                                else{
                                                    echo '<span class="fail" style="color:red; margin: 0px 10px;">No Image 1</span>';
                                                }
                                            ?>

                                            <h2 class="foodTitle">
                                            <?php echo $foodName?>
                                            </h2>

                                            <p>
                                            <?php echo $foodDesc?>
                                            </p>

                                            <h4 class="price flex">
                                                <span>₱<?php echo $foodPrice?></span>
                                                <a href="<?php echo SITEURL?>details.php?id=<?php echo $id?>" class="btn flex">View Details <i class="uil uil-shopping-bag icon"></i> </a>

                                            </h4>

                                        </div>

                                    <?php 
                                    
                                }
                            }

                            else{
                                echo '<span class="blank">No local food in the database yet, please add!</span>';
                            }
                        }
                    ?>

                </div>

                <div class="categoryWrapper grid hide" data-target="drinks">

                    <?php 
                        $sql = "SELECT * FROM food where category = 'drinks'";
                        $res = mysqli_query($conn, $sql);
                        if($res == TRUE){
                            $count = mysqli_num_rows($res);
                            if($count > 0){
                                while($row = mysqli_fetch_assoc($res)){
                                    $id = $row['id'];
                                    $img = $row['image'];
                                    $foodName = $row['food_name'];
                                    $foodDesc = $row['food_desc'];
                                    $foodPrice = $row['price'];
                                    $category = $row['category'];

                                    ?>
                                        <!-- SingleItem -->
                                        <div class="singleItem">
                                            

                                            <?php 
                                                if($img!=""){   
                                                    ?>
                                                    <div class="imgDiv">
                                                        <img src="<?php echo SITEURL;?>databaseImages/foodie<?php echo $img;?>">
                                                    </div>
                                                    <?php
                                                    
                                                }
                                                else{
                                                    echo '<span class="fail" style="color:red; margin: 0px 10px;">No Image 1</span>';
                                                }
                                            ?>

                                            <h2 class="foodTitle">
                                            <?php echo $foodName?>
                                            </h2>

                                            <p>
                                            <?php echo $foodDesc?>
                                            </p>

                                            <h4 class="price flex">
                                                <span>₱<?php echo $foodPrice?></span>
                                                <a href="<?php echo SITEURL?>details.php?id=<?php echo $id?>" class="btn flex">View Details <i class="uil uil-shopping-bag icon"></i> </a>

                                            </h4>

                                        </div>

                                    <?php 
                                    
                                }
                            }

                            else{
                                echo '<span class="blank">No local food in the database yet, please add!</span>';
                            }
                        }
                    ?>

                </div>

                <div class="categoryWrapper grid hide" data-target="snacks">

                    <?php 
                        $sql = "SELECT * FROM food where category = 'snacks'";
                        $res = mysqli_query($conn, $sql);
                        if($res == TRUE){
                            $count = mysqli_num_rows($res);
                            if($count > 0){
                                while($row = mysqli_fetch_assoc($res)){
                                    $id = $row['id'];
                                    $img = $row['image'];
                                    $foodName = $row['food_name'];
                                    $foodDesc = $row['food_desc'];
                                    $foodPrice = $row['price'];
                                    $category = $row['category'];

                                    ?>
                                        <!-- SingleItem -->
                                        <div class="singleItem">
                                            

                                            <?php 
                                                if($img!=""){   
                                                    ?>
                                                    <div class="imgDiv">
                                                        <img src="<?php echo SITEURL;?>databaseImages/foodie<?php echo $img;?>">
                                                    </div>
                                                    <?php
                                                    
                                                }
                                                else{
                                                    echo '<span class="fail" style="color:red; margin: 0px 10px;">No Image 1</span>';
                                                }
                                            ?>

                                            <h2 class="foodTitle">
                                            <?php echo $foodName?>
                                            </h2>

                                            <p>
                                            <?php echo $foodDesc?>
                                            </p>

                                            <h4 class="price flex">
                                                <span>₱<?php echo $foodPrice?></span>
                                                <a href="<?php echo SITEURL?>details.php?id=<?php echo $id?>" class="btn flex">View Details <i class="uil uil-shopping-bag icon"></i> </a>

                                            </h4>

                                        </div>

                                    <?php 
                                    
                                }
                            }

                            else{
                                echo '<span class="blank">No local food in the database yet, please add!</span>';
                            }
                        }
                    ?>

                </div>

                <div class="categoryWrapper grid hide" data-target="essentials">

                    <?php 
                        $sql = "SELECT * FROM food where category = 'essentials'";
                        $res = mysqli_query($conn, $sql);
                        if($res == TRUE){
                            $count = mysqli_num_rows($res);
                            if($count > 0){
                                while($row = mysqli_fetch_assoc($res)){
                                    $id = $row['id'];
                                    $img = $row['image'];
                                    $foodName = $row['food_name'];
                                    $foodDesc = $row['food_desc'];
                                    $foodPrice = $row['price'];
                                    $category = $row['category'];

                                    ?>
                                        <!-- SingleItem -->
                                        <div class="singleItem">
                                            

                                            <?php 
                                                if($img!=""){   
                                                    ?>
                                                    <div class="imgDiv">
                                                        <img src="<?php echo SITEURL;?>databaseImages/foodie<?php echo $img;?>">
                                                    </div>
                                                    <?php
                                                    
                                                }
                                                else{
                                                    echo '<span class="fail" style="color:red; margin: 0px 10px;">No Image 1</span>';
                                                }
                                            ?>

                                            <h2 class="foodTitle">
                                            <?php echo $foodName?>
                                            </h2>

                                            <p>
                                            <?php echo $foodDesc?>
                                            </p>

                                            <h4 class="price flex">
                                                <span>₱<?php echo $foodPrice?></span>
                                                <a href="<?php echo SITEURL?>details.php?id=<?php echo $id?>" class="btn flex">View Details <i class="uil uil-shopping-bag icon"></i> </a>

                                            </h4>

                                        </div>

                                    <?php 
                                    
                                }
                            }

                            else{
                                echo '<span class="blank">No local food in the database yet, please add!</span>';
                            }
                        }
                    ?>

                </div>

                <div class="categoryWrapper grid hide" data-target="condiments">

                    <?php 
                        $sql = "SELECT * FROM food where category = 'condiments'";
                        $res = mysqli_query($conn, $sql);
                        if($res == TRUE){
                            $count = mysqli_num_rows($res);
                            if($count > 0){
                                while($row = mysqli_fetch_assoc($res)){
                                    $id = $row['id'];
                                    $img = $row['image'];
                                    $foodName = $row['food_name'];
                                    $foodDesc = $row['food_desc'];
                                    $foodPrice = $row['price'];
                                    $category = $row['category'];

                                    ?>
                                        <!-- SingleItem -->
                                        <div class="singleItem">
                                          

                                            <?php 
                                                if($img!=""){   
                                                    ?>
                                                    <div class="imgDiv">
                                                        <img src="<?php echo SITEURL;?>databaseImages/foodie<?php echo $img;?>">
                                                    </div>
                                                    <?php
                                                    
                                                }
                                                else{
                                                    echo '<span class="fail" style="color:red; margin: 0px 10px;">No Image 1</span>';
                                                }
                                            ?>

                                            <h2 class="foodTitle">
                                            <?php echo $foodName?>
                                            </h2>

                                            <p>
                                            <?php echo $foodDesc?>
                                            </p>

                                            <h4 class="price flex">
                                                <span>₱<?php echo $foodPrice?></span>
                                                <a href="<?php echo SITEURL?>details.php?id=<?php echo $id?>" class="btn flex">View Details <i class="uil uil-shopping-bag icon"></i> </a>

                                            </h4>

                                        </div>

                                    <?php 
                                    
                                }
                            }

                            else{
                                echo '<span class="blank">No local food in the database yet, please add!</span>';
                            }
                        }
                    ?>

                </div>
                <div class="categoryWrapper grid hide" data-target="ciggar">

                    <?php 
                        $sql = "SELECT * FROM food where category = 'ciggar'";
                        $res = mysqli_query($conn, $sql);
                        if($res == TRUE){
                            $count = mysqli_num_rows($res);
                            if($count > 0){
                                while($row = mysqli_fetch_assoc($res)){
                                    $id = $row['id'];
                                    $img = $row['image'];
                                    $foodName = $row['food_name'];
                                    $foodDesc = $row['food_desc'];
                                    $foodPrice = $row['price'];
                                    $category = $row['category'];

                                    ?>
                                        <!-- SingleItem -->
                                        <div class="singleItem">
                                          

                                            <?php 
                                                if($img!=""){   
                                                    ?>
                                                    <div class="imgDiv">
                                                        <img src="<?php echo SITEURL;?>databaseImages/foodie<?php echo $img;?>">
                                                    </div>
                                                    <?php
                                                    
                                                }
                                                else{
                                                    echo '<span class="fail" style="color:red; margin: 0px 10px;">No Image 1</span>';
                                                }
                                            ?>

                                            <h2 class="foodTitle">
                                            <?php echo $foodName?>
                                            </h2>

                                            <p>
                                            <?php echo $foodDesc?>
                                            </p>

                                            <h4 class="price flex">
                                                <span>₱<?php echo $foodPrice?></span>
                                                <a href="<?php echo SITEURL?>details.php?id=<?php echo $id?>" class="btn flex">View Details <i class="uil uil-shopping-bag icon"></i> </a>

                                            </h4>

                                        </div>

                                    <?php 
                                    
                                }
                            }

                            else{
                                echo '<span class="blank">No local food in the database yet, please add!</span>';
                            }
                        }
                    ?>

                </div>
                <div class="categoryWrapper grid hide" data-target="candy">

                    <?php 
                        $sql = "SELECT * FROM food where category = 'candy'";
                        $res = mysqli_query($conn, $sql);
                        if($res == TRUE){
                            $count = mysqli_num_rows($res);
                            if($count > 0){
                                while($row = mysqli_fetch_assoc($res)){
                                    $id = $row['id'];
                                    $img = $row['image'];
                                    $foodName = $row['food_name'];
                                    $foodDesc = $row['food_desc'];
                                    $foodPrice = $row['price'];
                                    $category = $row['category'];

                                    ?>
                                        <!-- SingleItem -->
                                        <div class="singleItem">
                                          

                                            <?php 
                                                if($img!=""){   
                                                    ?>
                                                    <div class="imgDiv">
                                                        <img src="<?php echo SITEURL;?>databaseImages/foodie<?php echo $img;?>">
                                                    </div>
                                                    <?php
                                                    
                                                }
                                                else{
                                                    echo '<span class="fail" style="color:red; margin: 0px 10px;">No Image 1</span>';
                                                }
                                            ?>

                                            <h2 class="foodTitle">
                                            <?php echo $foodName?>
                                            </h2>

                                            <p>
                                            <?php echo $foodDesc?>
                                            </p>

                                            <h4 class="price flex">
                                                <span>₱<?php echo $foodPrice?></span>
                                                <a href="<?php echo SITEURL?>details.php?id=<?php echo $id?>" class="btn flex">View Details <i class="uil uil-shopping-bag icon"></i> </a>

                                            </h4>

                                        </div>

                                    <?php 
                                    
                                }
                            }

                            else{
                                echo '<span class="blank">No local food in the database yet, please add!</span>';
                            }
                        }
                    ?>

                </div>
                <div class="categoryWrapper grid hide" data-target="coffee">

                    <?php 
                        $sql = "SELECT * FROM food where category = 'coffee'";
                        $res = mysqli_query($conn, $sql);
                        if($res == TRUE){
                            $count = mysqli_num_rows($res);
                            if($count > 0){
                                while($row = mysqli_fetch_assoc($res)){
                                    $id = $row['id'];
                                    $img = $row['image'];
                                    $foodName = $row['food_name'];
                                    $foodDesc = $row['food_desc'];
                                    $foodPrice = $row['price'];
                                    $category = $row['category'];

                                    ?>
                                        <!-- SingleItem -->
                                        <div class="singleItem">
                                          

                                            <?php 
                                                if($img!=""){   
                                                    ?>
                                                    <div class="imgDiv">
                                                        <img src="<?php echo SITEURL;?>databaseImages/foodie<?php echo $img;?>">
                                                    </div>
                                                    <?php
                                                    
                                                }
                                                else{
                                                    echo '<span class="fail" style="color:red; margin: 0px 10px;">No Image 1</span>';
                                                }
                                            ?>

                                            <h2 class="foodTitle">
                                            <?php echo $foodName?>
                                            </h2>

                                            <p>
                                            <?php echo $foodDesc?>
                                            </p>

                                            <h4 class="price flex">
                                                <span>₱<?php echo $foodPrice?></span>
                                                <a href="<?php echo SITEURL?>details.php?id=<?php echo $id?>" class="btn flex">View Details <i class="uil uil-shopping-bag icon"></i> </a>

                                            </h4>

                                        </div>

                                    <?php 
                                    
                                }
                            }

                            else{
                                echo '<span class="blank">No local food in the database yet, please add!</span>';
                            }
                        }
                    ?>

                </div>
                <div class="categoryWrapper grid hide" data-target="canton">

                    <?php 
                        $sql = "SELECT * FROM food where category = 'canton'";
                        $res = mysqli_query($conn, $sql);
                        if($res == TRUE){
                            $count = mysqli_num_rows($res);
                            if($count > 0){
                                while($row = mysqli_fetch_assoc($res)){
                                    $id = $row['id'];
                                    $img = $row['image'];
                                    $foodName = $row['food_name'];
                                    $foodDesc = $row['food_desc'];
                                    $foodPrice = $row['price'];
                                    $category = $row['category'];

                                    ?>
                                        <!-- SingleItem -->
                                        <div class="singleItem">
                                          

                                            <?php 
                                                if($img!=""){   
                                                    ?>
                                                    <div class="imgDiv">
                                                        <img src="<?php echo SITEURL;?>databaseImages/foodie<?php echo $img;?>">
                                                    </div>
                                                    <?php
                                                    
                                                }
                                                else{
                                                    echo '<span class="fail" style="color:red; margin: 0px 10px;">No Image 1</span>';
                                                }
                                            ?>

                                            <h2 class="foodTitle">
                                            <?php echo $foodName?>
                                            </h2>

                                            <p>
                                            <?php echo $foodDesc?>
                                            </p>

                                            <h4 class="price flex">
                                                <span>₱<?php echo $foodPrice?></span>
                                                <a href="<?php echo SITEURL?>details.php?id=<?php echo $id?>" class="btn flex">View Details <i class="uil uil-shopping-bag icon"></i> </a>

                                            </h4>

                                        </div>

                                    <?php 
                                    
                                }
                            }

                            else{
                                echo '<span class="blank">No local food in the database yet, please add!</span>';
                            }
                        }
                    ?>

                </div>
            </div>
        </div>
    </section>
    <!-- Menu Top Section Ends -->

<?php 
include('clientPartials/clientFooter.php');
?>  