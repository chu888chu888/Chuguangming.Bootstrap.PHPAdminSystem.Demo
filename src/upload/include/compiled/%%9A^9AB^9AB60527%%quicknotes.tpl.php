<?php /* Smarty version 2.6.26, created on 2013-06-03 15:36:11
         compiled from admin/quicknotes.tpl */ ?>
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
<!-- TPLSTART 以上内容不需更改，保证该TPL页内的标签匹配即可 -->

<?php echo $this->_tpl_vars['osadmin_action_alert']; ?>

<?php echo $this->_tpl_vars['osadmin_quick_note']; ?>

<div class="btn-toolbar">
	<a href="quicknote_add.php"><button class="btn btn-primary"><i class="icon-plus"></i> Quick Note</button></a>
</div>
<div class="block">
	<a href="#page-stats" class="block-heading" data-toggle="collapse">Quick Note列表</a>
	<div id="page-stats" class="block-body collapse in">
		<table class="table">
			<thead>
			<tr>
				<th>#</th>
				<th>所有者</th>
				<th>内容</th>
				<th width="80px">操作</th>
			</tr>
			</thead>
			<tbody>							  
			<?php $_from = $this->_tpl_vars['quicknotes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['note'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['note']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['note']):
        $this->_foreach['note']['iteration']++;
?>
				<?php if (($this->_foreach['note']['iteration']-1) % 2 == 0): ?>
				<tr>
				<?php else: ?>
				<tr class="odd">
				<?php endif; ?>
				<td><?php echo $this->_tpl_vars['note']['note_id']; ?>
</td>
				<td><?php echo $this->_tpl_vars['note']['owner_name']; ?>
</td>
				<td><?php echo $this->_tpl_vars['note']['note_content']; ?>
</td>
				<td>
				<?php if ($this->_tpl_vars['user_group'] == 1 || $this->_tpl_vars['note']['owner_id'] == $this->_tpl_vars['current_user_id']): ?>
				<a href="quicknote_modify.php?note_id=<?php echo $this->_tpl_vars['note']['note_id']; ?>
" title= "修改" ><i class="icon-pencil"></i></a>
				&nbsp;
				<a data-toggle="modal" href="#myModal"  title= "删除" ><i class="icon-remove" href="quicknotes.php?method=del&note_id=<?php echo $this->_tpl_vars['note']['note_id']; ?>
#myModal" data-toggle="modal" ></i></a>
				<?php endif; ?>
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

<!---操作的确认层，相当于javascript:confirm函数--->
<?php echo $this->_tpl_vars['osadmin_action_confirm']; ?>

	
<!-- TPLEND 以下内容不需更改，请保证该TPL页内的标签匹配即可 -->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>