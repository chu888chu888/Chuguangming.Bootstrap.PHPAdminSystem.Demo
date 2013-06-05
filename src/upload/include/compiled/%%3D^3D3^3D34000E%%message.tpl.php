<?php /* Smarty version 2.6.26, created on 2013-06-03 15:37:20
         compiled from message.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "simple_header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  <body>

    <div class="navbar">
        <div class="navbar-inner">
                <ul class="nav pull-right">
                </ul>
                <a class="brand" href="<?php echo @ADMIN_URL; ?>
/index.php"><span class="first"></span> <span class="second"><?php echo @COMPANY_NAME; ?>
</span></a>
        </div>
    </div>
   <div class="container-fluid">
        <div class="row-fluid">
			<div class="http-error">
				
				<?php if ($this->_tpl_vars['type'] == 'success'): ?>
				<h1>Yep!</h1>
				<?php elseif ($this->_tpl_vars['type'] == 'error'): ?>
				<h1>Oops!</h1>
				<?php else: ?>
				<h1>O~!</h1>
				<?php endif; ?>
				<p class="info"><?php echo $this->_tpl_vars['message_detail']; ?>
</p>
				<h2>返回 <a href="<?php echo @ADMIN_URL; ?>
<?php echo $this->_tpl_vars['forward_url']; ?>
"><?php echo $this->_tpl_vars['forward_title']; ?>
</a></h2>
			</div>
	<div>	
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

