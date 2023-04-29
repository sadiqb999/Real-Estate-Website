<!-- header section starts  -->

<header class="header">

   <nav class="navbar nav-1">
      <section class="flex">
         <a href="home.php" class="logo"><i class="fa-solid fa-building-user fa-beat"></i>DSA Properties</a>

         <ul>
            <li><a href="post_property.php">Post Property<i class="fas fa-paper-plane"></i></a></li>
         </ul>
      </section>
   </nav>

   <nav class="navbar nav-2">
      <section class="flex">
         <div id="menu-btn" class="fas fa-bars"></div>

         <div class="menu">
            <ul>
               <li><a href="#">Listings<i class="fas fa-angle-down"></i></a>
                  <ul>
                     <li><a href="dashboard.php">Dashboard</a></li>
                     <li><a href="post_property.php">Post Property</a></li>
                     <li><a href="my_listings.php">My Listings</a></li>
                  </ul>
               </li>
               <li><a href="#">Properties<i class="fas fa-angle-down"></i></a>
                  <ul>
                     <li><a href="search.php">Filter search</a></li>
                     <li><a href="listings.php">All listings</a></li>
                  </ul>
               </li>
               <li><a href="#">Services<i class="fas fa-angle-down"></i></a>
                  <ul>
                     <li><a href="about.php">About Us</a></i></li>
                     <li><a href="contact.php">Contact</a></i></li>
                     <li><a href="contact.php#faq">FAQ</a></i></li>
                  </ul>
               </li>
            </ul>
         </div>

         <ul>
            <li><a href="saved.php">Saved <i class="far fa-heart"></i></a></li>
            <li><a href="#">Account <i class="fas fa-angle-down"></i></a>
               <ul>


                  <?php if($user_id != ''){ ?>
                  <li><a href="update.php">Update Profile</a></li>
                  <li><a href="components/user_logout.php" onclick="return confirm('logout from this website?');">Log Out</a>
                  <?php } ?></li>
                  <?php if($user_id == ''){ ?>
                     <li><a href="login.php">Log In</a></li>
                     <li><a href="register.php">Register</a></li>
                     <li><a href="admin/login.php">Admin</a></li>
                     <li><a href="agent/login.php">Agent</a></li>
                  <?php } ?></li>
               </ul>
            </li>
         </ul>
      </section>
   </nav>

</header>

<!-- header section ends -->