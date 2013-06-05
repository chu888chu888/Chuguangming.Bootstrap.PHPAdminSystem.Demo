<?php /* Smarty version 2.6.26, created on 2013-06-03 15:36:08
         compiled from navibar.tpl */ ?>
  <body class=""> 
  <!--<![endif]-->
<div class="navbar">
        <div class="navbar-inner">
                <ul class="nav pull-right">
                    
                    <!-- li><a href="#" class="hidden-phone visible-tablet visible-desktop" role="button">设置模板</a></li -->
					 
					<?php if ($this->_tpl_vars['user_info']['setting']): ?>
                    <li id="fat-menu" class="dropdown">
                        <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">设置<i class="icon-caret-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo @ADMIN_URL; ?>
/admin/setting.php">系统设置</a></li>
                        </ul>
                    </li>
					<?php endif; ?>
					
					<li id="fat-menu" class="dropdown">
                        <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">
                            选择模板
                            <i class="icon-caret-down"></i>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a href="<?php echo @ADMIN_URL; ?>
/admin/set.php?t=default">默认模板</a></li>
                            <li><a href="<?php echo @ADMIN_URL; ?>
/admin/set.php?t=blacktie">黑色领结</a></li>
                            <li><a href="<?php echo @ADMIN_URL; ?>
/admin/set.php?t=wintertide">冰雪冬季</a></li>
							<li><a href="<?php echo @ADMIN_URL; ?>
/admin/set.php?t=schoolpainting">青葱校园</a></li>
                        </ul>
                    </li>
					
					<li id="fat-menu" class="dropdown">
                        <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-user"></i> <?php echo $this->_tpl_vars['user_info']['user_name']; ?>

                            <i class="icon-caret-down"></i>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a tabindex="-1" href="<?php echo @ADMIN_URL; ?>
/admin/profile.php">我的账号</a></li>
                            <li><a tabindex="-1" href="<?php echo @ADMIN_URL; ?>
/logout.php">登出</a></li>
                        </ul>
                    </li>
                    
                </ul>
                <a class="brand" href="<?php echo @ADMIN_URL; ?>
/index.php"><span class="first"></span> <span class="second"><?php echo @COMPANY_NAME; ?>
</span></a>
        </div>
</div>