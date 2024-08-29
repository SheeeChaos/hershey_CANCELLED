<?php 
include('clientPartials/clientHeader.php');
ob_start();
?>

    <!-- Details Section -->
    <section class="details container section">
        <div class="secContent">

            <?php 
                $foodMenuId = $_GET['id'];
                $sql = "SELECT * FROM food where id = $foodMenuId";
                $res = mysqli_query($conn, $sql);
                if($res == TRUE){
                    $count = mysqli_num_rows($res);
                    if($count == 1){
                        while($row = mysqli_fetch_assoc($res)){
                            $id = $row['id'];
                            $img = $row['image'];
                            $foodName = $row['food_name'];
                            $foodDesc = $row['food_desc'];
                            $foodPrice = $row['price'];
                            $category = $row['category'];   
                        }
                    }

                    else{
                        echo '<span class="blank">something wrong</span>';
                    }
                }
            ?>
            <div class="sectionIntro">
                <h1 class="secTitle">Details Page</h1>
                <p class="subTitle">All about this item.</p>

                <img src="./Assests/basket.png" alt="Design Image">
            </div>

            <div class="mainContent grid">
               <div class="imgDiv_InfoDiv grid">
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
    
                    <h2 class="itemTitle"> Item name</h2>
    
                    <div class="status flex">
                       <span class="availability">
                         In stock
                       </span>
                       <span class="delivery">
                        Delivery In: 30 Min
                       </span>
                    </div>
                       
                     <div class="composition">
                        <span class="flex">
                            <small>Item Type:</small>
                            <small> Snacks</small>
                        </span>

                     </div>

                     <?php 
                        if(isset($_SESSION['qtyZero'])){
                            echo $_SESSION['qtyZero'];
                            unset ($_SESSION['qtyZero']);
                        }
                     ?>
   
                     <div class="actionBtn flex">
                          <span class="price flex">
                            <span>
                            ₱<?php echo $foodPrice?>
                            </span>
                          </span>

                          <form method="post" class="flex" style="gap: .5rem;">
                            <input type="number" name="qty" value="1">
                            <input type="hidden" name="sessionID" value="<?php echo session_id()?>">
                            <input type="hidden" name="foodID" value="<?php echo $id?>">
                            <input type="hidden" name="foodPrice" value="<?php echo $foodPrice?>">
                            <button class="btn flex" name="submit">
                            Add to cart <i class="uil uil-shopping-bag icon"></i>
                            </button>
                          </form>
                     </div>
                      
                   </div>
               </div>

               <div class="itemReview_Desc grid">
                
                <div class="itemDescription">
                    <h3 class="title">
                      Description
                    </h3>
                    <p>
                       <?php echo $foodDesc?>
                    </p>
                </div>

                

               </div>
            </div>

            <div class="otherItems">
                <h3 class="title flex">People also like <i class='bx bxs-heart icon' ></i></h3>
                <div class="swiper secContainer">
                        <div class="swiper-wrapper">
                        <?php 
                            $sql = "SELECT * FROM food where category = '$category' order by RAND()";
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


                                        ?>

                                        <div class="swiper-slide singleItem">
                                        
                                            <?php 
                                                if($img!=""){   
                                                    ?>
                                                    <div class="imgDiv flex">
                                                        <a href="<?php echo SITEURL?>details.php?id=<?php echo $id?>">
                                                        <img src="<?php echo SITEURL;?>databaseImages/foodie<?php echo $img;?>">
                                                        </a>
                                                    </div>
                                                    <?php
                                                    
                                                }
                                                else{
                                                    echo '<span class="fail" style="color:red; margin: 0px 10px;">No Image 1</span>';
                                                }
                                            ?>
                                            <h2 class="foodTitle">
                                                Item name
                                            </h2>

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
                        <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>

       
    </section>
    <!-- Details Section Ends -->

<?php 
include('clientPartials/clientFooter.php');
?>

<?php 

if(isset($_POST['submit'])){

  $qty = $_POST['qty'];
  $sessionID = $_POST['sessionID'];
  $foodID = $_POST['foodID'];
  $price = $_POST['foodPrice'];
  $totalPrice = $qty * $price;

  if($qty > 0){
    $sql = "INSERT INTO cart SET
    food_id = '$foodID',
    session_id = '$sessionID',
    qty = '$qty',
    total_cost = '$totalPrice'
    ";
  
    $result = mysqli_query($conn, $sql);
    if($result == TRUE){

        $_SESSION['addedToCart'] = '
         <div class="messageConatainer flex">
            <span class="messageCard">
                <img src="./Assests/shopping-cart.png" class="checkIcon">
                <small>Item Added to <strong>Cart</strong>, <br>
                Continue shopping or check-out now!</small>
            <br><br>
            - Thank you! -
        
            </span>
         </div>';

          header('location:'.SITEURL. 'menu.php');
        exit();
      }else{
        
      die('Failed to connect to database!');
    } 
  }
  else{
      echo '<script>alert("Item Quantity Cannot be Zero")</script>';;
  }
}
?>