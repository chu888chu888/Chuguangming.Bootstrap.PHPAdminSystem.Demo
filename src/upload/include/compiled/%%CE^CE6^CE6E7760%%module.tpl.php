<?php /* Smarty version 2.6.26, created on 2013-06-03 16:23:48
         compiled from admin/module.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'admin/module.tpl', 68, false),)), $this); ?>
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

    
<div class="well">
    <ul class="nav nav-tabs">
      <li class="active"><a href="#home" data-toggle="tab">菜单模块链接列表</a></li>
    </ul>	
	
	<div id="myTabContent" class="tab-content">
		  <div class="tab-pane active in" id="home">

           <form id="tab" method="post" action="">
				 <table class="table table-striped">
              <thead>
                <tr>
					<th><input type="checkbox" id="checkAll" >全选</th>
					<th>#</th>
					<th>名称</th>
					<th>URL</th>
					<th>#Module</th>
					<th >菜单</th>
					<th >是否在线</th>
					<th >快捷菜单</th>
					<th>描述</th>
                </tr>
              </thead>
              <tbody>							  
                <?php $_from = $this->_tpl_vars['menus']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['menu'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['menu']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['menu']):
        $this->_foreach['menu']['iteration']++;
?>
					 
					<tr>
					 
					<td><input type="checkbox" name="menu_ids[]" value="<?php echo $this->_tpl_vars['menu']['menu_id']; ?>
" ></td>
					<td><?php echo $this->_tpl_vars['menu']['menu_id']; ?>
</td>
					<td><?php echo $this->_tpl_vars['menu']['menu_name']; ?>
</td>
					<td><?php echo $this->_tpl_vars['menu']['menu_url']; ?>
</td>
					<td><?php echo $this->_tpl_vars['menu']['module_id']; ?>
</td>
					<td>
					<?php if ($this->_tpl_vars['menu']['is_show']): ?>
						是
					<?php else: ?>
						否
					<?php endif; ?>
					</td>
					<td>
					<?php if ($this->_tpl_vars['menu']['online']): ?>
						在线
					<?php else: ?>
						已下线
					<?php endif; ?></td>
					<td>
					<?php if ($this->_tpl_vars['menu']['shortcut_allowed']): ?>
						允许
					<?php else: ?>
						不允许
					<?php endif; ?>
					</td>
					<td><?php echo $this->_tpl_vars['menu']['menu_desc']; ?>
</td>
					</tr>
				<?php endforeach; endif; unset($_from); ?>
              </tbody>
            </table> 
		
			<label>选择菜单模块</label>
				<?php echo smarty_function_html_options(array('name' => 'module','id' => 'DropDownTimezone','class' => "input-xlarge",'options' => $this->_tpl_vars['module_options_list'],'selected' => 0), $this);?>

				<div class="btn-toolbar">
					<button type="submit" class="btn btn-primary"><strong>修改菜单模块</strong></button>
				</div>
			</form>
        </div>
    </div>
	
<!---操作的确认层，相当于javascript:confirm函数--->
<?php echo $this->_tpl_vars['osadmin_action_confirm']; ?>


<script type="text/javascript">
$("#checkAll").click(function(){
     if($(this).attr("checked")){
		$("input[name='menu_ids[]']").attr("checked",$(this).attr("checked"));
	 }else{
		$("input[name='menu_ids[]']").attr("checked",false);
	 }
});
</script>

<!-- END 以下内容不需更改，请保证该TPL页内的标签匹配即可 -->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>