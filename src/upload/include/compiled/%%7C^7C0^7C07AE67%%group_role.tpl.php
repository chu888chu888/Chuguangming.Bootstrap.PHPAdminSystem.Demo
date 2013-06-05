<?php /* Smarty version 2.6.26, created on 2013-06-03 16:23:39
         compiled from admin/group_role.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'admin/group_role.tpl', 9, false),array('function', 'html_checkboxes', 'admin/group_role.tpl', 25, false),)), $this); ?>
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
<!-- START 以上内容不需更改，保证该TPL页内的标签匹配即可 -->

<?php echo $this->_tpl_vars['osadmin_action_alert']; ?>

<?php echo $this->_tpl_vars['osadmin_quick_note']; ?>

<select name="group_id" onchange="javascript:location.replace('group_role.php?group_id='+this.options[this.selectedIndex].value)">
                       <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['group_option_list'],'selected' => $this->_tpl_vars['group_id']), $this);?>

                    </select>
					<form method="post" action="">
						<!-- Fieldset -->
						<?php $_from = $this->_tpl_vars['role_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['role']):
?>
<?php if ($this->_tpl_vars['role']['menu_info'] | count > 0): ?>
<!-- div class="btn-toolbar">
	<button type="button" class="btn" id="checkAll_<?php echo $this->_tpl_vars['role']['module_id']; ?>
" >全选/反选</button>
</div -->


					
						<div class="block">
	<a href="#page-stats_<?php echo $this->_tpl_vars['role']['module_id']; ?>
" class="block-heading" data-toggle="collapse"><?php echo $this->_tpl_vars['role']['module_name']; ?>
</a>
	<div id="page-stats_<?php echo $this->_tpl_vars['role']['module_id']; ?>
" class="block-body collapse in">
	
								<?php echo smarty_function_html_checkboxes(array('name' => 'menu_id','options' => $this->_tpl_vars['role']['menu_info'],'checked' => $this->_tpl_vars['group_role'],'separator' => "&nbsp;&nbsp;",'labels' => '1'), $this);?>

			
						
						</div>
</div>
<?php endif; ?>
						<?php endforeach; endif; unset($_from); ?>								
						
	<div>
					<button class="btn btn-primary">更新</button>
				</div>
					</form>
		


<!---操作的确认层，相当于javascript:confirm函数--->
<?php echo $this->_tpl_vars['osadmin_action_confirm']; ?>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>