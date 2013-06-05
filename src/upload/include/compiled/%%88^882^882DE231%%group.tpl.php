<?php /* Smarty version 2.6.26, created on 2013-06-03 16:23:42
         compiled from admin/group.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'admin/group.tpl', 54, false),)), $this); ?>
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
      <li class="active"><a href="#home" data-toggle="tab">账号组成员列表</a></li>
    </ul>	
	
	<div id="myTabContent" class="tab-content">
		  <div class="tab-pane active in" id="home">

           <form id="tab" method="post" action="">
				 <table class="table table-striped">
              <thead>
                <tr>
					<th><input type="checkbox" id="checkAll" >全选</th>
					<th>#</th>
					<th>登录名</th>
					<th>姓名</th>
					<th>手机</th>
					<th >邮箱</th>
					<th >登录时间</th>
					<th >登录IP</th>
					<th >Group#</th>
					<th>描述</th>
                </tr>
              </thead>
              <tbody>							  
                <?php $_from = $this->_tpl_vars['user_infos']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['user'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['user']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['user_info']):
        $this->_foreach['user']['iteration']++;
?>
					 
					<tr>
					 
					
					<td><input type="checkbox" name="user_ids[]" value="<?php echo $this->_tpl_vars['user_info']['user_id']; ?>
" <?php if ($this->_tpl_vars['user_info']['user_id'] == 1): ?>disabled<?php endif; ?>></td>
					<td><?php echo $this->_tpl_vars['user_info']['user_id']; ?>
</td>
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
					<td><?php echo $this->_tpl_vars['user_info']['user_group']; ?>
</td>
					<td><?php echo $this->_tpl_vars['user_info']['user_desc']; ?>
</td>
					</tr>
				<?php endforeach; endif; unset($_from); ?>
              </tbody>
            </table> 
		
			<label>选择账号组</label>
				<?php echo smarty_function_html_options(array('name' => 'user_group','id' => 'DropDownTimezone','class' => "input-xlarge",'options' => $this->_tpl_vars['groupOptions'],'selected' => 0), $this);?>

				<div class="btn-toolbar">
					<button type="submit" class="btn btn-primary"><strong>修改账号组</strong></button>
				</div>
			</form>
        </div>
    </div>
	
<!---操作的确认层，相当于javascript:confirm函数--->
<?php echo $this->_tpl_vars['osadmin_action_confirm']; ?>


<script type="text/javascript">
$("#checkAll").click(function(){
     if($(this).attr("checked")){
		$("input[name='user_ids[]']").attr("checked",$(this).attr("checked"));
	 }else{
		$("input[name='user_ids[]']").attr("checked",false);
	 }
});
</script>

<!-- END 以下内容不需更改，请保证该TPL页内的标签匹配即可 -->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>