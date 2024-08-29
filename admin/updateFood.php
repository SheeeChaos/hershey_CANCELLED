<?php 
include('./adminPartials/adminHeader.php');
ob_start();
?>

    <div class="adminPage flex">
       <?php 
       include('./adminPartials/sideMenu.php');
       ?>

         <div class="mainBody">
            <div class="topSection flex">
                <div class="title">
                    <span><strong>Add Items</strong></span>
                </div>


                <?php 
                    include('./adminPartials/headerAdminAccount.php');
                ?> 
            </div>

           <div class="mainBodyContentContainer">
                <div class="settingsPage updateSettings">
                    <div class="heading flex">
                        <span>Fill the form below</span>
                        <button class="btn">
                            <a href="menu.php" class="flex">All Items <i class="uil uil-arrow-right icon"></i></a>
                        </button>
                    </div>

                    <div class="informationContainer flex">

                    <?php 
                        // Get the values from the database=========>
                        $singleFoodID = $_GET['id'];
                        $sql = "SELECT * FROM food WHERE id =$singleFoodID";
                        $res = mysqli_query($conn, $sql);
                        if($res==TRUE){
                            $count = mysqli_num_rows($res);
                            if($count==1){
                                while($row = mysqli_fetch_assoc($res)){
                                    $id = $row['id'];
                                    $foodName = $row['food_name'];
                                    $foodDesc = $row['food_desc'];
                                    $category = $row['category'];
                                    $price = $row['price'];
                                    $foodImage = $row['image'];
                                }

                            }
                            else{
                                header('location:' .SITEURL. 'admin/adminMenu.php');
                                exit();
                            }
                        }
                            
                    ?>
                        <form method="post" enctype="multipart/form-data" class="flex">
                            <div class="grid">
                               <span class="flex span">
                                <label for="name">Item Name</label>
                                <input type="text" name="foodName" value="<?php echo $foodName?>">
                               </span>
                               <span class="flex span ">
                                <label for="Username">Description</label>
                                <textarea name="desc"><?php echo $foodDesc?></textarea>
                               </span>
                               <span class="flex span">
                                <label for="nationality">Price</label>
                                <input type="number" name="price" value="<?php echo $price?>">
                               </span>

                            </div>
    
                            <div class="grid">     
                                <span class="flex span">
                                    <label for="Picture">Food Image</label>
                                    <input type="file" name="foodImage">
                                </span>

                                <span class="flex span">
                                    <label for="Picture">Food Category</label>
                                    <select name="category" value="<?php echo $category?>">
                                        <option value="canned">Canned Goods</option>
                                        <option value="drinks">Drinks</option>
                                        <option value="snacks">Snacks</option>
                                        <option value="essentials">Essentials</option>
                                        <option value="condiments">Condiments</option>
                                        <option value="ciggar">Ciggarettes</option>
                                        <option value="candy">Candy</option>
                                        <option value="coffee">Coffee</option>
                                        <option value="canton">Canton</option>
                                    </select>
                                </span>
                                <button class="btn bg" name="submit">Update Item</button>
                            </div>
                        </form>
                        
                    </div>
                </div>
           </div>

         </div>
    </div>


<?php 
include('./adminPartials/adminFooter.php');
?>

<?php 
if(isset($_POST['submit'])){

  $foodName = $_POST['foodName'];
  $foodDesc = $_POST['desc'];
  $foodPrice = $_POST['price'];
  $category = $_POST['category'];


   //  Uploading Image 1 to the database =======================>
     
   if(isset($_FILES['foodImage']['name'])){
    //To upload the image we need the image name, source and destination.
    $image = $_FILES['foodImage']['name'];
    // Source ================>
    $imageSource = $_FILES['foodImage']['tmp_name'];
    // Destination ================>
    $imageDestination = "../databaseImages/foodie".$image; 
    // Finally upload the image ========>
    $uploadImage = move_uploaded_file($imageSource, $imageDestination);

    if($uploadImage == false){
      $_SESSION['imgUpload']  = '<span class="fail">Failed to upload image!</span>';
            // header('location:' .SITEURL. '.php');
   
    }
  }else{
    
    $image ="";
    }

  $sql = "UPDATE food SET
  food_name = '$foodName',
  image = '$image',
  food_desc = '$foodDesc',
  price = '$foodPrice',
  category = '$category'
  WHERE id = $singleFoodID
  ";

  $result = mysqli_query($conn, $sql);

  if($result == TRUE){
    $_SESSION['updatedFood'] = '<span class="success">Item Details Updated Successfully!</span>';
      header('location:'.SITEURL. 'admin/adminMenu.php');
      exit();
  }
  else{
    
  die('Failed to connect to database!');
  } 

}
?>