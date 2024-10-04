<header class="header">

   <div class="flex">

      <a href="#" class="logo">Aloha</a>

      <nav class="navbar">
         <a href="uproducts.php">view products</a>
         
      <?php
      
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>

      <a href="cart.php" class="cart">cart <span><?php echo $row_count; ?></span> </a>
      <a href="/final/666/login.php" style="color: red;">logout</a></p>
      </nav>

      <div id="menu-btn" class="fas fa-bars"></div>

   </div>

</header>