<?php /* Smarty version 2.6.26, created on 2013-06-03 16:23:21
         compiled from admin/menus.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'admin/menus.tpl', 23, false),)), $this); ?>
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
    <a href="menu_add.php"><button class="btn btn-primary"><i class="icon-plus"></i> 功能</button></a>
	<a class="a_search" id="fuck" href="#" title= "检索"><button class="btn btn-primary" style="margin-left:5px"><i class="icon-search"></i></button></a>
</div>

<?php if ($this->_tpl_vars['_GET']['search']): ?>
<div class="div_search">
<?php else: ?>
<div class="div_search" style="display:none">
<?php endif; ?>
<form class="form_search"  action="" method="GET" style="margin-bottom:0px">
	<div style="float:left;margin-right:5px">
		<label>选择菜单模块</label>
		<?php echo smarty_function_html_options(array('name' => 'module_id','id' => 'DropDownTimezone','class' => "input-xlarge",'options' => $this->_tpl_vars['module_options_list'],'selected' => $this->_tpl_vars['_GET']['module_id']), $this);?>

	</div>
	<div style="float:left;margin-right:5px">
		<label>查询所有请留空</label>
		<input type="text" name="menu_name" value="<?php echo $this->_tpl_vars['_GET']['menu_name']; ?>
" placeholder="输入菜单名称" > 
		<input type="hidden" name="search" value="1" >
	</div>
	<div class="btn-toolbar" style="padding-top:25px;padding-bottom:0px;margin-bottom:0px">
		<button type="submit" class="btn btn-primary">检索</button>
	</div>
	<div style="clear:both;"></div>
</form>
</div>

    <div class="block">
        <a href="#page-stats" class="block-heading" data-toggle="collapse">功能列表</a>
        <div id="page-stats" class="block-body collapse in">

               <table class="table table-striped">
              <thead>
                <tr>
					<th style="width:20px">#</th>
					<th style="width:90px">名称</th>
					<th style="width:180px">URL</th>
					<th style="width:80px">所属模块</th>
					<th style="width:80px">菜单</th>
					<th style="width:80px">所属菜单</th>
					<th style="width:80px">是否在线</th>
					<th style="width:80px">快捷菜单</th>
					<th style="width:180px">描述</th>
					<th style="width:80px">操作</th>
                </tr>
              </thead>
              <tbody>							  
                <?php $_from = $this->_tpl_vars['menus']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['menu'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['menu']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['menu']):
        $this->_foreach['menu']['iteration']++;
?>
					 
					<tr>
					 
					<td><?php echo $this->_tpl_vars['menu']['menu_id']; ?>
</td>
					<td><?php echo $this->_tpl_vars['menu']['menu_name']; ?>
</td>
					<td><?php echo $this->_tpl_vars['menu']['menu_url']; ?>
</td>
					<td><?php echo $this->_tpl_vars['module_options_list'][$this->_tpl_vars['menu']['module_id']]; ?>
</td>
					<td>
					<?php if ($this->_tpl_vars['menu']['is_show']): ?>
						是
					<?php else: ?>
						否
					<?php endif; ?>
					</td>
					<td><?php if ($this->_tpl_vars['menu']['father_menu'] > 0): ?><?php echo $this->_tpl_vars['menu']['father_menu_name']; ?>
<?php endif; ?></td>
					
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
				
					<td>
					<a href="menu_modify.php?menu_id=<?php echo $this->_tpl_vars['menu']['menu_id']; ?>
" title= "修改" ><i class="icon-pencil"></i></a>
					&nbsp;
					<a data-toggle="modal" href="#myModal" title= "删除" ><i class="icon-remove" href="menus.php?page_no=<?php echo $this->_tpl_vars['page_no']; ?>
&method=del&menu_id=<?php echo $this->_tpl_vars['menu']['menu_id']; ?>
" ></i></a>
					</td>
					</tr>
				<?php endforeach; endif; unset($_from); ?>
              </tbody>
            </table> 
<!--- START 分页模板 --->
               <?php echo $this->_tpl_vars['page_html']; ?>

<!--- END 分页--->			   
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