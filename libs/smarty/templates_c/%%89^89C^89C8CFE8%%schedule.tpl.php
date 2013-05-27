<?php /* Smarty version 2.6.19, created on 2009-09-10 10:34:24
         compiled from schedule.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'nl2br', 'schedule.tpl', 18, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array('page' => 'home','sub' => 'agenda')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>


<div id='content'>
			
			<h1>Agenda</h1>
			
			<table id='agenda'>
			<tr>
				<th>Datum</th><th>Event</th><th>Plaats</th><th>Info</th>
			</tr>
			<?php if ($this->_tpl_vars['rs']): ?>
			<?php $_from = $this->_tpl_vars['rs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['event']):
?>
				<tr>
					<td class='first' style='width:50px;'><?php echo $this->_tpl_vars['event']['nicedate']; ?>
</td>
					<td><?php echo $this->_tpl_vars['event']['title']; ?>
</td>
					<td><?php echo $this->_tpl_vars['event']['place']; ?>
</td>
					<td class='last'><?php echo ((is_array($_tmp=$this->_tpl_vars['event']['body'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
<?php if ($this->_tpl_vars['event']['link']): ?> <a href='<?php echo $this->_tpl_vars['event']['link']; ?>
' rel='external'><?php echo $this->_tpl_vars['event']['linkTekst']; ?>
</a><?php endif; ?></td>
				</tr>
				<?php endforeach; endif; unset($_from); ?>
			<?php else: ?>
			<tr>
				<td colspan='4' style='border:none;'>Er zijn geen aankomende evenementen, maar die worden geregeld toegevoegd!</td>
			</tr>
			<?php endif; ?>
		</table>
			
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
