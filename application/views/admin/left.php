<div class="scroll-sidebar" style="height: 634px;">
    <?php $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";?>
    
                <ul id="sidebar-menu" class="gw-nav gw-nav-list">
                    <li <?php if($actual_link ==  admin_url("") ){echo "class='active'";}else{echo "class='init-un-active'";} ?>> <a href="<?php echo admin_url("")?>"> <span class="gw-menu-text">Trang chủ</span> </a> </li>
                    <?php if (isset($admin_info)) :  ?>
                    <?php echo $menu_list; ?>
                    <?php endif; ?>
                </ul>
    </div>
