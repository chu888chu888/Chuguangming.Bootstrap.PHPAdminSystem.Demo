<?php /* Smarty version 2.6.26, created on 2013-06-03 15:36:08
         compiled from sidebar.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'sidebar.tpl', 3, false),array('modifier', 'in_array', 'sidebar.tpl', 43, false),)), $this); ?>
<div class="sidebar-nav">
		<?php $_from = $this->_tpl_vars['sidebar']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['module']):
?>
			<?php if (count($this->_tpl_vars['module']['menu_list']) != 0): ?>
			<a href="#sidebar_menu_<?php echo $this->_tpl_vars['module']['module_id']; ?>
" class="nav-header collapsed" data-toggle="collapse"><i class="icon-th"></i><?php echo $this->_tpl_vars['module']['module_name']; ?>
 <i class="icon-chevron-up"></i></a>
			<?php if ($this->_tpl_vars['module']['module_id'] == $this->_tpl_vars['current_module_id']): ?>
				<ul id="sidebar_menu_<?php echo $this->_tpl_vars['module']['module_id']; ?>
" class="nav nav-list collapse in">
			<?php else: ?>
				<ul id="sidebar_menu_<?php echo $this->_tpl_vars['module']['module_id']; ?>
" class="nav nav-list collapse">
			<?php endif; ?>
				
					<?php $_from = $this->_tpl_vars['module']['menu_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['menu_url_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['menu_url_list']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['menu_list']):
        $this->_foreach['menu_url_list']['iteration']++;
?>
					<li><a href="<?php echo @ADMIN_URL; ?>
<?php echo $this->_tpl_vars['menu_list']['menu_url']; ?>
"><?php echo $this->_tpl_vars['menu_list']['menu_name']; ?>
</a></li>
					<?php endforeach; endif; unset($_from); ?>
			</ul>
			<?php endif; ?>
			
		<?php endforeach; endif; unset($_from); ?>

        <a target="_blank" href="http://osadmin.org/help" class="nav-header" ><i class="icon-question-sign"></i>帮助</a>
</div>
	
	 <!--- 以上为左侧菜单栏 sidebar --->
	 
<div class="content">
        
        <div class="header">
            <div class="stats">
			<p class="stat"><!--span class="number"></span--></p>
			</div>

            <h1 class="page-title"><?php echo $this->_tpl_vars['content_header']['menu_name']; ?>
</h1>
        </div>
        
		<ul class="breadcrumb">
            <li><a href="<?php echo @ADMIN_URL; ?>
<?php echo $this->_tpl_vars['content_header']['module_url']; ?>
"> <?php echo $this->_tpl_vars['content_header']['module_name']; ?>
 </a> <span class="divider">/</span></li>
           
			<?php if ($this->_tpl_vars['content_header']['father_menu']): ?>
			<li><a href="<?php echo $this->_tpl_vars['content_header']['father_menu_url']; ?>
"> <?php echo $this->_tpl_vars['content_header']['father_menu_name']; ?>
 </a> <span class="divider">/</span></li>
			<?php endif; ?>
			
			<li class="active"><?php echo $this->_tpl_vars['content_header']['menu_name']; ?>
</li>
			<?php if ($this->_tpl_vars['content_header']['shortcut_allowed']): ?>
				<?php if (((is_array($_tmp=$this->_tpl_vars['content_header']['menu_id'])) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['user_info']['shortcuts_arr']) : in_array($_tmp, $this->_tpl_vars['user_info']['shortcuts_arr']))): ?>
					<a title= "移除快捷菜单" href="#"><li class="active"><i class="icon-minus" method="del" url="<?php echo @ADMIN_URL; ?>
/ajax/shortcut.php?menu_id=<?php echo $this->_tpl_vars['content_header']['menu_id']; ?>
"></i></li></a>
				<?php else: ?>
					<a title= "加入快捷菜单" href="#"><li class="active"><i class="icon-plus" method="add" url="<?php echo @ADMIN_URL; ?>
/ajax/shortcut.php?menu_id=<?php echo $this->_tpl_vars['content_header']['menu_id']; ?>
"></i></li></a>
				<?php endif; ?>
			<?php endif; ?>
			
        </ul>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="bb-alert alert alert-info" style="display: none;">
			<span>操作成功</span>
		</div>