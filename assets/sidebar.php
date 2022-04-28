<aside class="main-sidebar sidebar-dark-primary elevation-4">
<?php 
            if ($usertype == 'Admin') {
            ?>
              <a align="center" href="home.php" class="brand-link">
                <span class="brand-text font-weight-light">ADMIN SECTION</span>
              </a>
          <?php
            } else {   
          ?>
               <a align="center" href="home.php" class="brand-link">
                <span class="brand-text font-weight-light">EMPLOYEE SECTION</span>
              </a>
          <?php 

            }
          
          ?>

    <!-- Sidebar -->
    <div class="sidebar">


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          

              <li class="nav-item">
                <a href="home.php" class="nav-link">
                  <p>Dashboard</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="certificate.php" class="nav-link">
                  <p>Certificate</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="speedlimiter.php" class="nav-link">
                  <p>Speed Limiter</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="search.php" class="nav-link">
                  <p>Database2012 </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="search_2016.php" class="nav-link">
                  <p>Database2016 </p>
                </a>
              </li>
              <?php 
                if ($usertype == 'Admin') {
              ?>
              <li class="nav-item">
                <a href="request.php" class="nav-link">
                  <p>Request</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="user.php" class="nav-link">
                  <p>Users</p>
                </a>
              </li>
              <?php
                }  
              ?>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
