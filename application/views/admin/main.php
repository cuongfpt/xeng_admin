<html>
    <head>
        <?php $this->load->view('admin/head')?>
    </head>
    
    <body class="main-body">
      <div id="page-header" class="bg-gradient-9">
    
    <div id="header-logo" class="logo-bg">
        <div class="sideProfile">
        <a href="#" title="" class="profileFace"><img src="<?php echo public_url('admin') ?>/images/logo_login.png"
                                                      width="40"></a>
        <?php if (isset($admin_info)) : ?>

            <span>Xin chào: <strong><?php echo $admin_info->UserName; ?></strong></span>
        <?php endif; ?>
        <div class="clear"></div>
    </div>
    </div>
    <div id="header-nav-left">
<div class="userNav">
      <ul>
                <li class="iconmenu"><a>
                        <img src="<?php echo public_url('admin/images/menuicon.png') ?>">
                    </a></li>
        <li><a target="_blank" href="<?php echo base_url('admin')?>">
          <img src="<?php echo public_url('admin')?>/images/icons/light/home.png" style="margin-top:30px;">
          <span>Trang chủ</span>
        </a></li>

        <!-- Logout -->
        <li><a href="<?php echo admin_url('admin/logout')?>">
          <img alt="" src="<?php echo public_url('admin')?>/images/icons/topnav/logout.png">
          <span>Đăng xuất</span>
        </a></li>

      </ul>
    </div>
    </div><!-- #header-nav-left -->

</div>
        <div id="page-sidebar" style="height: 634px;">
                <?php $this->load->view('admin/left')?>
          </div>
        <div id="page-content-wrapper">
              <div id="page-content" style="min-height: 634px;">
                   <?php  $this->load->view($temp, $this->data);?>
            </div>
         </div>
         
    </body>
</html>