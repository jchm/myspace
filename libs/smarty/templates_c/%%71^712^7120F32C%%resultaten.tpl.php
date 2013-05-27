<?php /* Smarty version 2.6.19, created on 2009-09-23 15:12:45
         compiled from resultaten.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'resultaten.tpl', 11, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array('page' => 'home','sub' => 'resultaten')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<div id='content'>
			<h1>Resultaten</h1>
			<?php if ($this->_tpl_vars['rs']): ?>
			<table>
				<tr>
					<th>Toernooi</th><th style='width:80px;'>Uitslag</th><th style='width:150px;'>Datum</th><th style='width:350px;'>Link</th>
				</tr>
				<?php $_from = $this->_tpl_vars['rs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
				<tr>
					<td><?php echo $this->_tpl_vars['item']['name']; ?>
, <?php echo $this->_tpl_vars['item']['place']; ?>
</td><td><?php echo $this->_tpl_vars['item']['rank']; ?>
 <span style='vertical-align:super;'>e</span></td><td><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['nicedate'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d/%m/%Y") : smarty_modifier_date_format($_tmp, "%d/%m/%Y")); ?>
</td><td><a href='<?php echo $this->_tpl_vars['item']['link']; ?>
' target='_blank'><?php echo $this->_tpl_vars['item']['link']; ?>
</a></td>
				</tr>
				<?php endforeach; endif; unset($_from); ?>
			</table>
			<?php endif; ?>
		</div>	
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>