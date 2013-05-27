<?php /* Smarty version 2.6.19, created on 2009-09-23 15:02:21
         compiled from nieuws.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'nieuws.tpl', 37, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array('page' => 'home','sub' => 'news')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<div id='sidebarLeft'>
			<a href='#supporter' id='supporterBanner'>Supporter worden?</a>
			<a href='#supporter' id='talkBanner'>Binnenkort een spreekbeurt?</a>
		</div>
	
		<div id='homeContent'>
			<div id='home'>				
				<div id='news'>
				
				<?php if ($this->_tpl_vars['news']): ?>
					<?php $_from = $this->_tpl_vars['news']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
					
					<div class='title'><strong><?php echo $this->_tpl_vars['item']['title']; ?>
</strong></div>
					<div class='body clearfix'><?php if ($this->_tpl_vars['item']['image']): ?><img src='<?php echo $this->_tpl_vars['item']['image']; ?>
' alt='News foto' /><?php endif; ?> <?php echo $this->_tpl_vars['item']['body']; ?>
</div>
									
					<?php endforeach; endif; unset($_from); ?>
						
				<?php elseif ($this->_tpl_vars['item']): ?>
					<div class='title'><strong><?php echo $this->_tpl_vars['item']['title']; ?>
</strong></div>
					<div class='body clearfix'><?php if ($this->_tpl_vars['item']['image']): ?><img src='<?php echo $this->_tpl_vars['item']['image']; ?>
' alt='News foto' /><?php endif; ?> <?php echo $this->_tpl_vars['item']['body']; ?>
</div>
					<a href='/nieuws'>&laquo; Terug naar het archief</a>
				<?php else: ?>
					Er is nog geen nieuws geplaatst.
				<?php endif; ?>
				
				</div>
			</div>
				
		</div>
		
		<div id='sidebarRight'>
			
			<strong id='wwwBanner'>Wie? Wat? Waar?</strong>
			<div id='www'>
				<div id='wwwInner'>
					<?php echo ((is_array($_tmp=$this->_tpl_vars['www']['date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d/%m/%Y") : smarty_modifier_date_format($_tmp, "%d/%m/%Y")); ?>
<br />
					<a href='<?php echo $this->_tpl_vars['www']['link']; ?>
' rel='external' target='_blank'><?php echo $this->_tpl_vars['www']['description']; ?>
</a>
				</div>
			</div>
		</div>

		
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>