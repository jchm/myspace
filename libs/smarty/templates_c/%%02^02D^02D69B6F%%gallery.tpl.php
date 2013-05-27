<?php /* Smarty version 2.6.19, created on 2009-09-09 12:01:51
         compiled from gallery.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array('page' => 'media','sub' => 'fotos')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<div id='content'>
			<h1>Foto's</h1>
			
			<div class='stream'>
				<?php if ($this->_tpl_vars['stream']): ?>
					<?php $_from = $this->_tpl_vars['stream']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['photo']):
?>
						<a href='<?php echo $this->_tpl_vars['photo']['src_m']; ?>
' rel='group' title='<?php echo $this->_tpl_vars['photo']['name']; ?>
'><img src='<?php echo $this->_tpl_vars['photo']['src_s']; ?>
' /></a>
					<?php endforeach; endif; unset($_from); ?>
				<?php else: ?>
					Er zijn helaas nog geen foto's geplaatst.
				<?php endif; ?>
			</div>
			
		</div>	
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>