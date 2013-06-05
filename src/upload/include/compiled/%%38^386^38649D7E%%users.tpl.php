<?php /* Smarty version 2.6.26, created on 2013-06-03 16:23:17
         compiled from admin/users.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'admin/users.tpl', 22, false),)), $this); ?>
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


<div class="btn-toolbar">
    <a href="user_add.php"><button class="btn btn-primary"><i class="icon-plus"></i> 账号</button></a>
	<a class="a_search" id="fuck" href="#" title= "检索"><button class="btn btn-primary" style="margin-left:5px"><i class="icon-search"></i></button></a>
</div>
<?php if ($this->_tpl_vars['_GET']['search']): ?>
<div class="div_search">
<?php else: ?>
<div class="div_search" style="display:none">
<?php endif; ?>
<form class="form_search"  action="" method="GET" style="margin-bottom:0px">
	<div style="float:left;margin-right:5px">
		<label>选择账号组</label>
		<?php echo smarty_function_html_options(array('name' => 'user_group','id' => 'DropDownTimezone','class' => "input-xlarge",'options' => $this->_tpl_vars['group_options'],'selected' => $this->_tpl_vars['_GET']['user_group']), $this);?>

	</div>
	<div style="float:left;margin-right:5px">
		<label>查询所有用户请留空</label>
		<input type="text" name="user_name" value="<?php echo $this->_tpl_vars['_GET']['user_name']; ?>
" placeholder="输入登录名" > 
		<input type="hidden" name="search" value="1" > 
	</div>
	<div class="btn-toolbar" style="padding-top:25px;padding-bottom:0px;margin-bottom:0px">
		<button type="submit" class="btn btn-primary">检索</button>
	</div>
	<div style="clear:both;"></div>
</form>
</div>
    <div class="block">
        <a href="#page-stats" class="block-heading" data-toggle="collapse">账号列表</a>
        <div id="page-stats" class="block-body collapse in">

               <table class="table table-striped">
              <thead>
                <tr>
					<th style="width:20px">#</th>
					<th style="width:80px">登录名</th>
					<th style="width:100px">姓名</th>
					<th style="width:100px">手机</th>
					<th style="width:80px">邮箱</th>
					<th style="width:80px">登录时间</th>
					<th style="width:80px">登录IP</th>
					<th style="width:80px">Group#</th>
					<th style="width:80px">描述</th>
					<th style="width:80px">操作</th>
                </tr>
              </thead>
              <tbody>							  
                <?php $_from = $this->_tpl_vars['user_infos']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['user'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['user']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['user_info']):
        $this->_foreach['user']['iteration']++;
?>
				 
					<tr>
				 
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
					<td><?php echo $this->_tpl_vars['user_info']['group_name']; ?>
</td>
					<td><?php echo $this->_tpl_vars['user_info']['user_desc']; ?>
</td>
					<td>
					<a href="user_modify.php?user_id=<?php echo $this->_tpl_vars['user_info']['user_id']; ?>
" title= "修改" ><i class="icon-pencil"></i></a>
					&nbsp;
					<?php if ($this->_tpl_vars['user_info']['status'] == 1): ?>
					<a data-toggle="modal" href="#myModal"  title= "封停账号" ><i class="icon-pause" href="users.php?page_no=<?php echo $this->_tpl_vars['page_no']; ?>
&method=pause&user_id=<?php echo $this->_tpl_vars['user_info']['user_id']; ?>
"></i></a>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['user_info']['status'] == 0): ?>
					<a data-toggle="modal" href="#myModal" title= "解封账号" ><i class="icon-play" href="users.php?page_no=<?php echo $this->_tpl_vars['page_no']; ?>
&method=play&user_id=<?php echo $this->_tpl_vars['user_info']['user_id']; ?>
"></i></a>
					<?php endif; ?>
					&nbsp;
					<a data-toggle="modal" href="#myModal" title= "删除" ><i class="icon-remove" href="users.php?page_no=<?php echo $this->_tpl_vars['page_no']; ?>
&method=del&user_id=<?php echo $this->_tpl_vars['user_info']['user_id']; ?>
" ></i></a>
					</td>
					</tr>
				<?php endforeach; endif; unset($_from); ?>
              </tbody>
            </table> 
				<!--- START 分页模板 --->
				
               <?php echo $this->_tpl_vars['page_html']; ?>

					
			   <!--- END --->
        </div>
    </div>
<script type="text/javascript">
$(".a_search").click(function(){
	$(".div_search").toggle();				 	
})					
</script>
<!---操作的确认层，相当于javascript:confirm函数--->
<?php echo $this->_tpl_vars['osadmin_action_confirm']; ?>



<!--- END 以下内容不需更改，请保证该TPL页内的标签匹配即可 --->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>