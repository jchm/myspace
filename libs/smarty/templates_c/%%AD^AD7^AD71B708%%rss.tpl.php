<?php /* Smarty version 2.6.19, created on 2011-02-22 14:21:11
         compiled from rss.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'rss.tpl', 7, false),array('modifier', 'strip', 'rss.tpl', 7, false),)), $this); ?>
<?php echo '<?xml'; ?>
 version="1.0" encoding="utf-8"<?php echo '?>'; ?>

<rss version="2.0">
<channel>
	<?php $_from = $this->_tpl_vars['events']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['event']):
?><item>
		<date><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['event']['date'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall') : smarty_modifier_escape($_tmp, 'htmlall')))) ? $this->_run_mod_handler('strip', true, $_tmp) : smarty_modifier_strip($_tmp)); ?>
</date>
		<venue><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['event']['venue'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall') : smarty_modifier_escape($_tmp, 'htmlall')))) ? $this->_run_mod_handler('strip', true, $_tmp) : smarty_modifier_strip($_tmp)); ?>
</venue>
		<city><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['event']['city'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall') : smarty_modifier_escape($_tmp, 'htmlall')))) ? $this->_run_mod_handler('strip', true, $_tmp) : smarty_modifier_strip($_tmp)); ?>
</city>
		<country><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['event']['country'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall') : smarty_modifier_escape($_tmp, 'htmlall')))) ? $this->_run_mod_handler('strip', true, $_tmp) : smarty_modifier_strip($_tmp)); ?>
</country>
	</item>
	<?php endforeach; endif; unset($_from); ?>

</channel>
</rss>