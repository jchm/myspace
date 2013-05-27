<?php /* Smarty version 2.6.19, created on 2009-09-09 13:38:12
         compiled from page.tpl */ ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array('page' => $this->_tpl_vars['data']['parent_menu_title'],'sub' => $this->_tpl_vars['data']['menu_title'],'meta_kw' => $this->_tpl_vars['data']['meta_keywords'],'meta_ds' => $this->_tpl_vars['data']['meta_description'],'meta_pt' => $this->_tpl_vars['data']['meta_page_title'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		
		<div id='content'>
			<?php if ($this->_tpl_vars['data']): ?>
			
			<h1><?php echo $this->_tpl_vars['data']['title']; ?>
</h1>
			
			<?php echo $this->_tpl_vars['data']['body']; ?>

			
			<?php else: ?>
				<h1>De pagina is niet gevonden</h1>
				
				<a href='/home'>Ga naar de home pagina</a>
			<?php endif; ?>
		</div>	
				
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>