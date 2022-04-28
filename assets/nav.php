 <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Home</a>
      </li> -->

    </ul>

    <ul class="navbar-nav ml-auto">
        <?php 
          if($usertype == 'Admin')
          {
        ?>
          <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge"><?php echo $cuser->totalReq() ?></span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header"><?php echo $cuser->totalReq() ?> Notifications</span>
          <div class="dropdown-divider"></div>
          <?php
          $Treq = $cuser->totalReq();
            if ($Treq != 0){
          ?>
          <a href="#" class="dropdown-item">
          <i class="fas fa-bell mr-2"></i> <?php echo $cuser->totalReq() ?> new request
          <span class="float-right text-muted text-sm">
            <!-- 3 mins -->
  
          </span>
          </a>
          
          <div class="dropdown-divider"></div>
          <a href="" class="dropdown-item dropdown-footer">See All Requests</a>
          </div>
          <?php }?>
          </li>
          <?php } ?>

                <div class="btn-group">
  <!-- <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Right-aligned menu
  </button> -->
  <button type="button" class="btn btn-link" data-toggle="dropdown">
  <?php echo $cemail; ?>
    </button>
  <div class="dropdown-menu dropdown-menu-right" style="width:250px;">
      <a class="dropdown-item" href="#">Profile</a>
      <a class="dropdown-item" href="logout.php">Log Out</a>

      <div class="dropdown-divider"></div>
      <a class="dropdown-item">Full Name : <?php echo $cname;?></a>
      <a class="dropdown-item">Last Login : <?php echo $lastlogin;?></a>
  </div>
</div>
        </ul>

  </nav>
