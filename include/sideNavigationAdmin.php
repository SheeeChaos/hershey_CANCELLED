
<?php

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="../include/nav.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <script src="script.js"></script>
  
    
    <link rel="icon" href="img/logo.png" type="image/x-icon">
    <title>Dashboard</title>


  </head>
  <body>
    <nav class="my-nav">
      <ul>
        <li style="margin-top:20px">
          <a href="#" class="logo">
            <img src="img/logo.png" alt="mamap" />
            <span class="nav-item-list">Username</span>
          </a>
        </li>
        <li style="margin-top:20px;">
          <a href="Dashboard.php">
            <i class="fa-solid fa-gauge"></i>
         <span class="nav-item-list">Dashboard</span>
          </a>
        </li>

        <li>
          <a href="MainCalendar.php">
            <i class="fa-regular fa-calendar-days"></i>
            <span class="nav-item-list">Orders</span>
          </a>
        </li>

        <li>
          <a href="Calendar.php">
            <i class="fa-solid fa-thumbtack"></i>
            <span class="nav-item-list">Products</span>
          </a>
        </li>
        
        <li>
          <a href="category.php">
            <i class="fa-solid fa-door-open"></i>
            <span class="nav-item-list">Category</span>
          </a>
        </li>
        
        <li>
          <a href="Tasks.php">
            <i class="fa-solid fa-list"></i>
            <span class="nav-item-list">Inventory</span>
          </a>
        </li>

        <li>
          <a href="Rooms.php">
            <i class="fa-solid fa-door-closed"></i>
            <span class="nav-item-list">Sales</span>
          </a>
        </li>
        <li>
          <a href="Changepassword_modal.php">
            <i class="fa-solid fa-sink"></i>
            <span class="nav-item-list">Change Password</span>
          </a>
        </li>

          <a href="logout.php">
            <i class="fa-solid fa-right-from-bracket"></i>
            <span class="nav-item-list">Log out</span>
          </a>
        </li>
      </ul>
    </nav>
  </body>
</html>