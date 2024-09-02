<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<?php 
include('clientPartials/clientHeader.php');
ob_start();
?>
    <!-- Home Section -->
   <?php 
    if(isset($_SESSION['OrderAdded'])){
        echo $_SESSION['OrderAdded'];
        unset($_SESSION['OrderAdded']);
       }
    ?>
 
    <section id="#home" class="home">

        <div class="sectionContent grid">
            <div data-aos="fade-right"  class="homeText">
                <h1 class="title">
                    Enjoy <span>Groceries</span> At Your Door Step
                </h1>
    
                <p>We offer the best online portal that allows customers to order items online without visiting the Grocery Store.</p>
    
               
                <a href="menu.php" class="btn flex">  ORDER NOW  <i class="uil uil-arrow-right icon"></i> </a>

            </div>
            <div  class="homeImage">
                <img src="./Assests/Logo2.png" alt="Online Food Image">
            </div>

          
        </div>
       
    </section>
    <!-- Home Section Ends -->


    <!-- Category Section -->
    <div class="categoriesDiv container">
        <div class="sectionContent grid">

            <!-- Single Category -->
            <div data-aos="fade-right" data-aos-duration="2000" class="singleCat">
                <img src="./Assests/cans.png" alt="Food Website">

                <h2 class="catTitle">
                Cans 
                </h2>

                <p>
                There are so many varieties of cans.
                </p>

                <a class="btn" href="menu.php">
                   See Menu
                </a>

            </div>

            <!-- Single Category -->
            <div data-aos="fade-right" data-aos-duration="3000" class="singleCat">
                <img src="./Assests/drinks.png" alt="Food Website">

                <h2 class="catTitle">
                Drinks
                </h2>

                <p>
                There are so many varieties of drinks.
                </p>

                <a class="btn" href="menu.php">
                   See Menu
                </a>

            </div>

            <!-- Single Category -->
            <div data-aos="fade-right" data-aos-duration="4000" class="singleCat">
                <img src="./Assests/snacks.png" alt="Food Website">

                <h2 class="catTitle">
                Snacks
                </h2>

                <p>
                There are so many varieties of snacks.
                </p>

                <a class="btn" href="menu.php">
                   See Menu
                </a>

            </div>

            <!-- Single Category -->
            <div data-aos="fade-right" data-aos-duration="5000" class="singleCat">
                <img src="./Assests/essentials.png" alt="Food Website">

                <h2 class="catTitle">
                  Essentials
                </h2>

                <p>
                There are so many varieties of essentials.
                </p>

                <a class="btn" href="menu.php">
                   See Menu
                </a>

            </div>

        </div>
    </div>
    <!-- Category Section ends -->

    <!-- About Section -->
    <section id="about" class="about section container">

        <div class="sectionContent grid"> 
            <div class="aboutImage">
                <img src="./Assests/cart3.png" alt="Online food Image">
            </div>
            <div data-aos="fade-left" data-aos-duration="2000" class="aboutText">
                <h1 class="title">
                    Why People Choose Us!
                </h1>
    
                <div class="aboutList grid">
                  <div data-aos="fade-down" data-aos-duration="2000" class="singleInfo flex">

                    <div class="smallImage">
                    <img src="./Assests/snacks.png" alt="Food delivery">
                    </div>

                    <div class="desc">
                        <h5>Choose Your Favourite</h5>
                        <p>
                            There are so many varieties of snacks.
                        </p>
                        
                    </div>

                     
                  </div>
                  <div data-aos="fade-down" data-aos-duration="3000" class="singleInfo flex">

                    <div class="smallImage">
                    <img src="./Assests/delivery.png" alt="Food delivery">
                    </div>

                    <div class="desc">
                        <h5>We Deliver Your Items</h5>
                        <p>
                            We deliver faster and safest your items.
                        </p>
                        
                    </div>

                     
                  </div>

                  <div data-aos="fade-down" data-aos-duration="4000" class="singleInfo flex">

                    <div class="smallImage">
                    <img src="./Assests/carts.png" alt="Food delivery">
                    </div>

                    <div class="desc">
                        <h5>Grab Your Needed Items</h5>
                        <p>
                            Add to cart you needed items.
                        </p>
                        
                    </div>

                     
                  </div>
                </div>
    
                
            </div>
        </div>
       
    </section>
    <!-- About Section Ends -->

    <!-- Popular Food Items -->
    <section id="popular" class="section popular">
        <div class="sectionContent">
            <div data-aos="fade-down" data-aos-duration="4000" class="sectionIntro">
                <h2>Our Best Seller Items</h2>
                <p>This won't dissapoint you.</p>
            </div>
 
            <div class="contentWrapper">
                <div class="content swiper">
                    <div class="swiper-wrapper">
                        <?php 
                            $sql = "SELECT * FROM food order by RAND() LIMIT 0,6 ";
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
                                                Items
                                            </h2>

                                            
                                            <h4 class="priceDiv flex">
                                                <span class="price">₱<?php echo $foodPrice?> </span>
                                                <a href="<?php echo SITEURL?>details.php?id=<?php echo $id?>">
                                                   <span class="detailsLink"> Details <i class="uil uil-external-link-alt "></i></span>
                                                </a>
                                            </h4>
                                        </div>

                                        <?php 
                                        
                                    }
                                }

                                else{
                                    echo '<span class="blank">No local item in the database yet, please add!</span>';
                                }
                            }
                        ?>
                    </div>
                    
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Popular Food Items Ends -->
    <!-- Scroll to Top Button -->
    <button id="scrollToTopBtn" title="Go to top">
      <i class="bi bi-chevron-up"></i>
    </button>
    <!-- Scroll to Top Button END -->
    <script src="./scrollUp.js"></script>
<?php 
include('clientPartials/clientFooter.php');
?>

 