  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#">
      <i class="fas fa-motorcycle"></i> Motoparts
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-nav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div id="navbar-nav" class="collapse navbar-collapse">
      <ul class="navbar-nav ml-auto">
        <?php 
          if(!isset($_SESSION['user']) || (isset($_SESSION['user'])) && ($_SESSION['user']['roles_id'] == 2)) { 
        ?>

        <li class="nav-item">
          <a class="nav-link" href="./home.php"> <i class="fas fa-home"></i> Home </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="./catalog.php"> Catalog </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="./cart.php"> <i class="fas fa-shopping-cart"></i> Cart <span class="badge bg-light text-dark" id="cart-count">
            <?php
              if (isset($_SESSION['cart'])) {
                echo array_sum($_SESSION['cart']);
              } else {
                echo 0;
              }
             ?>
          </span> </a>
        </li>

      <?php } elseif(isset($_SESSION['user']) && ($_SESSION['user']['roles_id']==1)) { ?>
        <li class="nav-item">
          <a href="./items.php" class="nav-link">Items</a>
        </li>

         <li class="nav-item">
          <a class="nav-link" href="../views/orders.php"> Orders </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="../views/users.php"> Users </a>
        </li>

      <?php }; ?>


        <?php if(isset($_SESSION['user'])) { ?>

        <li class="nav-item">
          <a class="nav-link" href="./profile.php">Welcome, <?php echo $_SESSION['user']['firstname']; ?>
            
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="../controller/logout.php"> <i class="fas fa-sign-out-alt"></i> Logout </a>
        </li>

        <?php } else { ?>

        <li class="nav-item">
          <a class="nav-link" href="./login.php"> Login </a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="./register.php"> Register </a>
        </li>

        <?php }; ?>


      </ul>
    </div> <!-- end navbar nav -->
  </nav> <!-- end nav -->