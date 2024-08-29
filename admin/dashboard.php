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
                <span><strong>Hershey's Groceries</strong> Dashboard</span>
            </div>

            <?php 
                include('./adminPartials/headerAdminAccount.php');
            ?> 
        </div>

            <div class="mainBodyContentContainer">

            <?php 
                // Get the values from the database=========>
                $sql = "SELECT * FROM orders";
                $res = mysqli_query($conn, $sql);
                if($res==TRUE){
                    $count = mysqli_num_rows($res);
                }
            ?>

            <?php 
              // Get the values from the database=========>
              $sql = "SELECT * FROM orders WHERE order_status = 'delivered'";
              $res = mysqli_query($conn, $sql);
              $totalIncome = 0;
              if($res==TRUE){
                  $deliveredItems = mysqli_num_rows($res);
                  if($deliveredItems > 0){
                      while($eachRow = mysqli_fetch_assoc($res)){
                              $id = $eachRow['id'];
                              $eachItemTotalCost = $eachRow['total_cost'];
                              $totalIncome += $eachItemTotalCost; 
                      }
                  }
              }
            ?>
                <div class="summarySection grid">
                    <div class="summaryCard">
                      <span class="flex"> 
                          <img src="../Assests/cart.png" alt="">
                          <span class="cardTitle">
                               Total Orders
                          </span>
                      </span>
                      <h1 class="count">
                          <?php echo $count?>
                      </h1>
  
                      <span class="overlayText"><?php echo $count?></span>
                    </div>
  
                    <div class="summaryCard">
                      <span class="flex">
                          <img src="../Assests/clock.png" alt="">
                          <span class="cardTitle">
                            Delivered Orders
                       </span>
                      </span>
                      <h1 class="count">
                            <?php echo $deliveredItems?>
                      </h1>
  
                      <span class="overlayText"><?php echo $deliveredItems?></span>
                    </div>
  
                    
  
                    <div class="summaryCard incomeCard">
                      <span class="flex">
                          <img src="../Assests/customer.png" alt="">
                          <span class="cardTitle">
                            Total Income
                       </span>
                      </span>
                      <h1 class="count">
                      ₱<?php echo $totalIncome?>
                      </h1>
  
                      <span class="overlayText"><?php echo $totalIncome?></span>
                    </div>

                    <div class="summaryCard">
                      <span class="flex">
                          <img src="../Assests/rating.png" alt="">
                          <span class="cardTitle">
                            Total Items
                       </span>
                      </span>
                      <h1 class="count">
                        45
                      </h1>
  
                      <span class="overlayText">45</span>
                    </div>
              </div>
  
              <div class="categoriesSection ">
                 <div class="secHeader flex">
                  <div class="subTitle">
                      <h3><strong>Item</strong> Categories</h3>
                  </div>
                  
                  <div class="btn">
                      <a href="add_category_form.php">
                        Add Categories <i class="uil uil-angle-right icon"></i>
                      </a>
                  </div>

                  <div class="btn">
                      <a href="adminMenu.php">
                        See All <i class="uil uil-angle-right icon"></i>
                      </a>
                  </div>
                 </div>
  
                 <div class="optionMenu flex">
                  <div class=" option">
                    <img src="../Assests/cans.png" alt="different canned">
                    <small>Canned Goods</small>
                  </div>
                  <div class=" option">
                    <img src="../assests/drinks.png" alt="different drinks">
                    <small>Drinks</small>
                  </div>
                  <div class=" option" >
                    <img src="../assests/snacks.png" alt="junkfood">
                    <small>Snacks</small>
                  </div>
                  <div class=" option">
                    <img src="../assests/essentials.png" alt="different essentials">
                    <small>Essentials</small>
                  </div>
                  <div class=" option">
                    <img src="../assests/condiments.png" alt="different Sauce">
                    <small>Condiments</small>
                  </div>
                  <div class=" option">
                    <img src="../assests/ciggar.png" alt="different ciggarettes">
                    <small>Ciggarettes</small>
                  </div>
                  <div class=" option">
                    <img src="../assests/candy.png" alt="different candy">
                    <small>Candy</small>
                  </div>
                  <div class=" option">
                    <img src="../assests/coffee.png" alt="different coffee">
                    <small>Coffee</small>
                  </div>
                  <div class=" option">
                    <img src="../assests/canton.png" alt="different Pancit Canton">
                    <small>Pancit Canton</small>
                  </div>
                  
                  
              </div>
              

              </div>
              <?php 
                include('./sales_chart.php');
                ?> 
              <?php 
                include('./totalitems.php');
                ?>
              
            </div>

            
         </div>
    </div>

<?php 
include('./adminPartials/adminFooter.php');
?>
<script>
    function openAddCategoryForm() {
        // Example: You can use JavaScript to toggle visibility or redirect to a PHP page.
        // Here, you can decide whether to toggle a hidden form or redirect to a new PHP page.
        window.location.href = "add_category_form.php";
    }
</script>