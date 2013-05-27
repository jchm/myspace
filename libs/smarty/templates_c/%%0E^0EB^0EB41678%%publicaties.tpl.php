<?php /* Smarty version 2.6.19, created on 2009-09-10 21:04:19
         compiled from publicaties.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array('page' => 'media','sub' => 'publicaties')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<div id='content'>
			
			<h1>Publicaties</h1>
			
			<?php if ($this->_tpl_vars['rs']): ?>
			<?php $_from = $this->_tpl_vars['rs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
				<div class='publication clearfix'>
					<?php if ($this->_tpl_vars['item']['type'] == '0'): ?>
					
						<div class='info'>
							<strong><?php echo $this->_tpl_vars['item']['title']; ?>
</strong>
							<p><?php echo $this->_tpl_vars['item']['body']; ?>
</p>
							<?php if ($this->_tpl_vars['item']['link']): ?><a href='<?php echo $this->_tpl_vars['item']['link']; ?>
' target='_blank'><?php echo $this->_tpl_vars['item']['linkTekst']; ?>
</a><?php endif; ?>
						</div>
						<div class='file'>
							<img src='<?php echo $this->_tpl_vars['item']['file']['link_full']; ?>
' alt='Afbeelding' />
						</div>
						
					<?php else: ?>
						<div class='info'>
							<a href='<?php echo $this->_tpl_vars['item']['file']['link']; ?>
' class='download'>Download PDF bestand</a>
						</div>
						<div class='file'>
							<strong><?php echo $this->_tpl_vars['item']['title']; ?>
</strong>
							<p><?php echo $this->_tpl_vars['item']['body']; ?>
</p>
						</div>
						
					<?php endif; ?>
				</div>
			
			<?php endforeach; endif; unset($_from); ?>
			
			<?php else: ?>
				Er zijn nog geen publicaties geplaatst.
			<?php endif; ?>
			
			
			<!--
			<div class='publication clearfix'>
				<div class='info'>
					<strong>titel</strong>
					<p>Tekst</p>
				</div>
				<div class='file'><img src='/static/photos/home.jpg' /></div>
			</div>
			
			<div class='publication clearfix'>
				<div class='info'>
					<strong>titel</strong>
					<p>Tekst</p>
				</div>
				<div class='file'><a href='' class='download'>Download PDF bestand</a></div>
			</div>
			-->
			
		</div>	
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>