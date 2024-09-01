<?php 
include('clientPartials/clientHeader.php');
ob_start();
?>

    <!-- Check Out Page -->
    <section class="section container checkOut">
        <div class="secTitle">
            <h2 class="title flex">
                Checkout <img src="./Assests/trolley.png" alt="Icon">
            </h2>
        </div>

        <div class="secContent">
        <form method="POST">
            <div class="mainContent grid">
 
                <div class="rightDiv grid">
                <div class="cartDiv grid">
                        <h3 class="title flex">
                            Your order: <img src="./Assests/cart.png" alt="Icon">
                        </h3>
                        <?php 
                        if (isset($_SESSION['deletedCartItem'])) {
                            echo $_SESSION['deletedCartItem'];
                            unset($_SESSION['deletedCartItem']);
                        }
                        ?> 

                        <?php 
                            // Get the values from the database=========>
                            $currentSession = session_id();
                            $sql = "SELECT * FROM cart WHERE session_id = '$currentSession'";
                            $res = mysqli_query($conn, $sql);
                            $subTotal = 0;
                            $codPayment = 50;

                            if($res==TRUE){
                                $currentOrders = mysqli_num_rows($res);
                     
                                if($currentOrders > 0){
                                    while($eachRow = mysqli_fetch_assoc($res)){
                                        $cartID = $eachRow['id'];
                                        $foodID = $eachRow['food_id'];
                                        $sessionID = $eachRow['session_id'];
                                        $qty = $eachRow['qty'];
                                        $totalCost = $eachRow['total_cost'];
                                        $subTotal += $totalCost;

                                        ?>
                                            <?php 
                                                $sql = "SELECT * FROM food WHERE id =$foodID";
                                                $result = mysqli_query($conn, $sql);
            
                                                if($result ==TRUE){
                                                    $foodDetails = mysqli_num_rows($result);
                                                    if($foodDetails > 0){
                                                        while($eachRow = mysqli_fetch_assoc($result)){
                                                            $id = $eachRow['id'];
                                                            $foodName = $eachRow['food_name'];
                                                            $foodDesc = $eachRow['food_desc'];
                                                            $foodPrice = $eachRow['price'];
                                                            $category = $eachRow['category'];
                                                            ?>
                                                            <div class="singleCart flex">
                                                                <div class="foodDetails">
                                                                    <span class="name_closeIcon flex">
                                                                        <?php echo $foodName?>
                                                                        <a href="<?php echo SITEURL?>deleteCartItem.php?id=<?php echo $cartID?>" class="deleteCartItem"><i class='bx bx-x icon' ></i></a>
                                                                    </span>
                                                                    <span class="qty_price flex">
                                                                        <span>Quantity: <?php echo $qty?></span>
                                                                        <span>₱<?php echo $totalCost?></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <?php
                                                        }
                                                    }
                                                }
                                            ?>
                                        <?php
                                    }
                                } 
                            }
                        ?>
                    </div>
        
                    
        
                    
                </div>

                <div class="leftDiv grid">

                <!-- <div class="paymentOption">
                        <h3 class="title flex">Payment: <img src="./Assests/debit-card.png" alt="Icon"></h3>
                        <div class="optionDiv">
                            <div class="input flex">
                               <div class="radio">
                                <input type="radio" name="payment" id="cod" class="input1" value="C.O.D" required>
      
                               </div>
                                <label for="cod">Cash On Delivery: (Delivery fees: ₱50)</label>
                            </div>
                        </div>
                    </div> -->
    
                    <div class="amountDiv">
                        
                        <h3 class="title flex">
                           Order Fees: <img src="./Assests/order.png" alt="Icon">
                        </h3>
                
                        <span class="cartList flex">
                            <span class="subTitle">
                                Subtotal:
                            </span>
                            <span class="cost">
                            ₱<?php echo $subTotal?>
                            </span>
                           
                        </span>

                        <span class="cartList flex">
                            <span class="subTitle">
                                Shipping fee:
                            </span>
                            <span class="cost">
                            ₱<?php echo $codPayment?>
                            
                            </span>
                        </span>
        
                        <span class="cartList flex">
                            <span class="subTitle">
                                Total:
                            </span>
                            <span class="gradCost">
                            <input type="hidden" name="cartID" value="<?php echo $cartID?>">
                            <input type="hidden" name="subTotal" value="<?php echo $subTotal?>">
                            <input type="hidden" name="codPayment" value="<?php echo $codPayment?>">
                            ₱<?php echo $subTotal + $codPayment?>
                            </span>
                        </span>
                         
                        <button type="submit" name="submit" class="btn">Order Now</button> 
                    </div>
                </div>
            </div>
        </form>


         
       
        </div>
    </section>
    <!-- Check Out Page End -->

<?php 
include('clientPartials/clientFooter.php');
?>



<?php 
if(isset($_POST['submit'])){

  
  $payment = $_POST['payment'];
  $cartID = $_POST['cartID'];
  $orderStatus = $_POST['orderStatus'];
  $subTotal = $_POST['subTotal'];
  $tableNo = $_POST['tableNo'];


  $sql = "INSERT INTO orders SET
  cart_ID = '$cartID',
  total_cost = '$subTotal',
  order_status = '$orderStatus',
  payment = '$payment'
  ";

  $result = mysqli_query($conn, $sql);

  if($result == TRUE){
    $_SESSION['OrderAdded'] = '
        <div class="messageConatainerHome flex">
        <span class="messageCard">
            <img src="./Assests/checkIcon.png" class="checkIconHome">
            <small>Your order has been submitted successfully! <br>So glad to serve you!</small>
        <br><br>
        - Thank you! -

        </span>
    </div>';
      header('location:'.SITEURL. 'closeSession.php');
      exit();
  }
  else{
    
  die('Failed to connect to database!');
  } 

}
?>