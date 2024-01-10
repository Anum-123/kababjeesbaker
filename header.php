<?php

$user_role = "user"; 
?>

<header class="header">
   <div class="flex">
      <nav>
         <?php if ($user_role === "admin"): ?>
            <!-- Admin options -->
            <a href="admin.php">add products</a>
            <!-- You can add more admin-specific options here -->
         <?php endif; ?>

         <a style="color:white; font-size:20px; text-decoration:none; background-color: #dcb658; padding:10px; border-radius:10px;" 
         href="products.php">view products</a>
         <a style='color:white; font-size:20px; text-decoration:none; background-color: #dcb658; margin-left:10px; padding:10px; border-radius:10px;' 
         href='logout.php' >Log Out</a>
      </nav>

      <a href="#" class="logo"><img height="70" width="70" style="border-radius: 50px; margin-left:250px;" src="kab logo.webp" alt="img1" class="logo"></a>

      <nav class="navbar">
         <?php if ($user_role === "admin"): ?>
            <!-- Admin options -->
            <!-- You can add more admin-specific options here -->
         <?php endif; ?>
      </nav>

      <?php
      $select_rows = mysqli_query($con, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);
      ?>

      <a style="background-color: #dcb658; padding:10px; border-radius:10px;" href="cart.php" class="cart">cart <span><?php echo $row_count; ?></span> </a>
      <div id="menu-btn" class="fas fa-bars"></div>
   </div>
</header>
