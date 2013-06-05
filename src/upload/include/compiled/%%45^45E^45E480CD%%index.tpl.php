<?php /* Smarty version 2.6.26, created on 2013-06-03 15:36:08
         compiled from index.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "navibar.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "sidebar.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<!--- START 以上内容不需更改，保证该TPL页内的标签匹配即可 --->

<?php echo $this->_tpl_vars['osadmin_action_alert']; ?>

<?php echo $this->_tpl_vars['osadmin_quick_note']; ?>


	<div class="block">
        <a href="#page-menu" class="block-heading" data-toggle="collapse">快捷菜单</a>
        <div id="page-menu" class="block-body collapse in">
		<h3>
		<?php if ($this->_tpl_vars['menus'] | @ count > 0): ?>
			<?php $_from = $this->_tpl_vars['menus']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['menu'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['menu']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['menu']):
        $this->_foreach['menu']['iteration']++;
?>
			<span>
				<a href="<?php echo @ADMIN_URL; ?>
<?php echo $this->_tpl_vars['menu']['menu_url']; ?>
">
					<?php echo $this->_tpl_vars['menu']['menu_name']; ?>

				</a>
			</span>&nbsp;
			<?php endforeach; endif; unset($_from); ?>
		<?php endif; ?>
		</h3>
		</div> 
    </div>
	
	<div class="block">
        <a href="#page-stats" class="block-heading" data-toggle="collapse">当前用户信息</a>
        <div id="page-stats" class="block-body collapse in">
			
               <table class="table">  
						    <tbody>
							 <tr>
						        <td>用户名</td>
						        <td>真实姓名</td>
						        <td>手机号</td>
						        <td>Email</td>
						        <td>登录时间</td>
						        <td>登录IP</td>
					          </tr>
						      <tr>
						        <td><?php echo $this->_tpl_vars['user_info']['user_name']; ?>
</td>
						        <td><?php echo $this->_tpl_vars['user_info']['real_name']; ?>
</td>
						        <td><?php echo $this->_tpl_vars['user_info']['mobile']; ?>
</td>
						        <td><?php echo $this->_tpl_vars['user_info']['email']; ?>
</td>
						        <td><?php echo $this->_tpl_vars['user_info']['login_time']; ?>
</td>
						        <td><?php echo $this->_tpl_vars['user_info']['login_ip']; ?>
</td>
					          </tr>
					        </tbody>
					      </table>
		</div>
		<div class="alert alert-success">
			<button type="button" class="close" data-dismiss="alert">×</button>
			<strong>注意！</strong>请保管好您的个人信息，一点发生密码泄露请紧急联系管理员。</div>
        </div>
    </div>
	
<!--- END 以下内容不需更改，请保证该TPL页内的标签匹配即可 --->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>