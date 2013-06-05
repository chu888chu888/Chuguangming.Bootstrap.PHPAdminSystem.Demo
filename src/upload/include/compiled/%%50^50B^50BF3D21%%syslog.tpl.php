<?php /* Smarty version 2.6.26, created on 2013-06-03 16:23:27
         compiled from admin/syslog.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'admin/syslog.tpl', 15, false),)), $this); ?>
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




<div style="border:0px;padding-bottom:5px;height:auto">
	<form action="" method="GET" style="margin-bottom:0px">
	<div style="float:left;margin-right:5px">
		<label>请选择操作记录类型</label>
		<?php echo smarty_function_html_options(array('name' => 'class_name','id' => 'DropDownTimezone','options' => $this->_tpl_vars['class_options'],'selected' => $this->_tpl_vars['_GET']['class_name']), $this);?>
 
	</div>
	<div style="float:left;margin-right:5px">
		<label> 选择起始时间 </label>
		<input type="text" id="start_date" name="start_date" value="<?php echo $this->_tpl_vars['_GET']['start_date']; ?>
" placeholder="起始时间" >
	</div>
	<div style="float:left;margin-right:5px">
		<label>选择结束时间</label>	
		<input type="text" id="end_date" name="end_date" value="<?php echo $this->_tpl_vars['_GET']['end_date']; ?>
" placeholder="结束时间" > 
	</div>
	<div style="float:left;margin-right:5px">
		<label>用户名，查询所有用户请留空</label>
		<input type="text" name="user_name" value="<?php echo $this->_tpl_vars['_GET']['user_name']; ?>
" placeholder="输入用户名" > 
	</div>
		<div class="btn-toolbar" style="padding-top:25px;padding-bottom:0px;margin-bottom:0px">
		<button type="submit" class="btn btn-primary"><strong>检索</strong></button>
	</div>
	<div style="clear:both;"></div>
	</form>
</div>

 
	
    <div class="block">
        <a href="#page-stats" class="block-heading" data-toggle="collapse">操作记录</a>
        <div id="page-stats" class="block-body collapse in">

               <table class="table table-striped">
              <thead>
                <tr>
					<th style="width:20px">#</th>
					<th style="width:50px">操作员</th>
					<th style="width:35px">行为</th>
					<th style="width:35px">类型</th>
					<th style="width:35px">对象</th>
					<th style="width:250px">操作结果</th>
					<th style="width:100px">操作时间</th>
                </tr>
              </thead>
              <tbody>							  
                <?php $_from = $this->_tpl_vars['sys_logs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['sys_log'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['sys_log']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['sys_log']):
        $this->_foreach['sys_log']['iteration']++;
?>
					 
					<tr>
					 
					<td><?php echo $this->_tpl_vars['sys_log']['op_id']; ?>
</td>
					<td><?php echo $this->_tpl_vars['sys_log']['user_name']; ?>
</td>
					<td><?php echo $this->_tpl_vars['sys_log']['action']; ?>
</td>
					<td><?php echo $this->_tpl_vars['sys_log']['class_name']; ?>
</td>
					<td><?php echo $this->_tpl_vars['sys_log']['class_obj']; ?>
</td>
					<td style = "word-break: break-all; word-wrap:break-word;"><?php echo $this->_tpl_vars['sys_log']['result']; ?>
</td>
					<td><?php echo $this->_tpl_vars['sys_log']['op_time']; ?>
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

<script>
$(function() {
	var date=$( "#start_date" );
	date.datepicker({ dateFormat: "yy-mm-dd" });
	date.datepicker( "option", "firstDay", 1 );
});
$(function() {
	var date=$( "#end_date" );
	date.datepicker({ dateFormat: "yy-mm-dd" });
	date.datepicker( "option", "firstDay", 1 );
});
</script>


<!---操作的确认层，相当于javascript:confirm函数--->
<?php echo $this->_tpl_vars['osadmin_action_confirm']; ?>

	
<!--- END 以下内容不需更改，请保证该TPL页内的标签匹配即可 --->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>