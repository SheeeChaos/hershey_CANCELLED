<?php 
include('./adminPartials/adminHeader.php');
?>

    <div class="adminPage flex">
       <?php 
         include('./adminPartials/sideMenu.php');
       ?>

         <div class="mainBody">
            <div class="topSection flex">
                <div class="title">
                    <span><strong>Archive</strong> Items</span>
                </div>

                <?php 
                  if(isset($_SESSION['addedFood'])){
                    echo $_SESSION['addedFood'];
                    unset ($_SESSION['addedFood']);
                  }
                  
                  if(isset($_SESSION['deletedFood'])){
                    echo $_SESSION['deletedFood'];
                    unset ($_SESSION['deletedFood']);
                  }

                  if(isset($_SESSION['updatedFood'])){
                    echo $_SESSION['updatedFood'];
                    unset ($_SESSION['updatedFood']);
                  }
                ?>

                <?php 
                    include('./adminPartials/headerAdminAccount.php');
                ?> 
            </div>
            <div class="mainBodyContentContainer">  
              <div class="menuContainer grid">
                
                <div class="foodCategoryDiv">
                    <div class="heading flex">
                        <span class="">Canned Goods Category</span>
                        <button class="btn">
                            <a href="adminMenu.php" class="flex">Back <i class="fa fa-arrow-left"></i></a>
                        </button>
                    </div>

                    <div class="itemsContainer flex">
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
                                      
            
                                      <div class="itemInfo">
                                          <span class="itemName"><?php echo $foodName?></span>
                                          <p class="desc"><?php echo $foodDesc?></p>
                                          <div class="itemBottom flex">
                                            <span class="price">₱<?php echo $foodPrice?></span>
                                            <div>
                                          </div>
                                          </div>
                                      </div>
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
         </div>
    </div>


<?php 
include('./adminPartials/adminFooter.php');
?>