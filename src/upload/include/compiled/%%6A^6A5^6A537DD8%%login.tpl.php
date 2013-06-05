<?php /* Smarty version 2.6.26, created on 2013-06-03 15:37:21
         compiled from login.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "simple_header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  <body class=""> 
  <!--<![endif]-->
    
    <div class="navbar">
        <div class="navbar-inner">
                <ul class="nav pull-right">
                    
                </ul>
                <a class="brand" href="<?php echo @ADMIN_URL; ?>
/index.php"><span class="first"></span> <span class="second"><?php echo @COMPANY_NAME; ?>
</span></a>
        </div>
    </div>
    
    <div class="row-fluid">	
	
    <div class="dialog">
		<?php echo $this->_tpl_vars['osadmin_action_alert']; ?>
	
        <div class="block">
            <p class="block-heading">登入</p>
            <div class="block-body">
                <form name="loginForm" method="post" action="">
                    <label>账号</label>
                    <input type="text" class="span12" name="user_name" value=<?php echo $this->_tpl_vars['_POST']['user_name']; ?>
 >
                    <label>密码</label>
                    <input type="password" class="span12" name="password" value = <?php echo $this->_tpl_vars['_POST']['password']; ?>
 >
                    
                     <label>验证码</label>
					<input type="text" name="verify_code" class="span4" placeholder="输入验证码" autocomplete="off">
					<a href="#"><img title="验证码" id="verify_code" src="<?php echo @ADMIN_URL; ?>
/verify_code_cn.php" style="vertical-align:top"></a>
					<div class="clearfix"><input type="checkbox" name="remember" value="remember-me"> 记住我 
					<span class="label label-info"> 一个月内不用再次登录 admin/123456</span>
					<input type="submit" class="btn btn-primary pull-right" name="loginSubmit" value="登入"/></div>
					
                </form>
            </div>
        </div>
        <p class="pull-right" style=""><a href="http://osadmin.org" target="blank"></a></p>
        
    </div>
<script type="text/javascript">
$("#verify_code").click(function(){
	var d = new Date()
	var hour = d.getHours(); 
	var minute = d.getMinutes();
	var sec = d.getSeconds();
    $(this).attr("src","/verify_code_cn.php?"+hour+minute+sec);
});
</script>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

