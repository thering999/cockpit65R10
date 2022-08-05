<?php
  $page = get_page2($_SERVER['REQUEST_URI']); 
  $page_act[$page] = "active";
  $page2 = get_page($_SERVER['REQUEST_URI']); 
  $page_act2[$page2] = "active";
  ?>
   <!-- Google Font: Source Sans Pro -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
  <style>
body {
  font-family: "Prompt", sans-serif;
}
</style>

  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header  bg-warning">
          <h5 class="modal-title" id="exampleModalLabel">ออกจากระบบ?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">คลิกที่ปุ่ม "Logout" เพื่ออกจากระบบ</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-danger" href="login.php?logout=1">Logout</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Logout Modal-->
  
    <!-- Brand Logo -->
    <a href="" class="brand-link" style="pointer-events: none">
      <img src="image/icon/logo-สธ.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">COCKPIT-R10:2565</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) 
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>-->

      <!-- SidebarSearch Form -->
    
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library 
             <li class="" style="margin-bottom: 5px">
            <a href="index2.php" class="nav-link btn btn-warning btn-icon-split <?=$page_act['index2']?>" style="color:black">
              <i class="nav-icon fas fa-bookmark"></i>
              <p>
                HOME
              </p>
            </a></li>-->
            <li class="nav-item  menu-open">
            <a href="index.php" class="nav-link <?=$page_act2['index']?>">
              <i class="nav-icon fas fa-bookmark" style="margin-left: -10px;margin-right: 0px"></i>
              <p style="display: inline-block;">
                HOME
              </p>
            </a>
          </li>  
          <li class="nav-item  menu-open">
            <a href="monitorkpi.php" class="nav-link <?=$page_act2['monitorkpi']?>">
              <i class="nav-icon fas fa-flag" style="margin-left: -10px;margin-right: 0px"></i>
              <p style="display: inline-block;">
                ตัวชี้วัดติดตาม
              </p>
            </a>
          </li>  
          <?php
            $sql = "SELECT * FROM stg_group sg WHERE stg_group_status=1 ORDER BY stg_group_id";
            $res1 = mysqli_query($conn,$sql);
            while($data1 = mysqli_fetch_array($res1,MYSQLI_ASSOC)){
              ?>
                <li class="nav-item  menu-open">
            <a href="kpicockpit.php?kpicockpit_<?=$data1['stg_group_id']?>" class="nav-link <?=$page_act['kpicockpit_'.$data1['stg_group_id']]?>">
              <i class="nav-icon fas fa-chart-bar" style="margin-left: -15px;margin-right: -5px"></i>
              <p style="display: inline-block;">
                <?=str_replace("ปี ", "", $data1["stg_group_name"])?>
              </p>
            </a>
          </li>  
              <?php
            }
?>
        
          <Div class="" style="position: fixed;bottom: 10px">
            
             <li class="nav-item  menu-open">
            <a href="scriptversion.php" class="nav-link <?=$page_act2['scriptversion']?>">
              <i class="nav-icon fas fa-upload" style="margin-left: -10px;margin-right: 0px"></i>
              <p style="display: inline-block;">
                 Script Version
              </p>
            </a>
          </li>  
            <?php
              if(!empty($_SESSION["nigol_cockpit"])&&$_SESSION["nigol_cockpit"]){
                ?>
                <li class="nav-item  menu-open">
            <a href="notice.php" class="nav-link <?=$page_act2['notice']?>">
              <i class="nav-icon fas fa-terminal" style="margin-left: -10px;margin-right: 0px"></i>
              <p style="display: inline-block;">
                 ปัญหา/อุปสรรค/ข้อเสนอแนะ
              </p>
            </a>
          </li> 
          <li class="nav-item  menu-open">
           <a href="logout.php" class="nav-link" data-toggle="modal" data-target="#logoutModal">
              <i class="nav-icon fas fa-lock" style="color:#ADFF7B;margin-left: -10px;margin-right: 0px"></i>
              <i class=""></i>
              <p>Logout</p>
            </a> 
          </li>
                <?php
              }else{
                ?>
                <li class="nav-item  menu-open">
            <a href="login.php" class="nav-link">
              <i class="nav-icon fas fa-unlock text-warning" style="margin-left: -10px;margin-right: 0px"></i>
              <p>Login</p>
            </a>
          </li>
                <?php
              }
            ?>
           
          </Div> 
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>