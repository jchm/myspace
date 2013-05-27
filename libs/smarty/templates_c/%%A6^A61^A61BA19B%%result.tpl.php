<?php /* Smarty version 2.6.19, created on 2009-09-23 15:06:33
         compiled from admin/result.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'admin/result.tpl', 16, false),array('function', 'html_select_date', 'admin/result.tpl', 25, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/header.tpl", 'smarty_include_vars' => array('p' => 'result')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<h1><?php if ($this->_tpl_vars['data']['edit']): ?>Resultaar aanpassen<?php else: ?>Nieuw resultaat toevoegen<?php endif; ?></h1>
	<form method='post' action='' enctype="multipart/form-data">
	
	<input type='hidden' name='a' value='save' />
	<input type='hidden' name='id' value='<?php echo $this->_tpl_vars['data']['id']; ?>
' />
	
	<table class='addForm'>
	<?php if ($this->_tpl_vars['data']['edit']): ?>
		<tr>
			<td class='delete' colspan='3'><a href='?page=result&a=delete&id=<?php echo $this->_tpl_vars['data']['id']; ?>
' onClick='return ask("Weet u zeker dat u dit bericht wilt verwijderen?");'>Verwijder dit resultaat</a></td>
		</tr>
	<?php endif; ?>
		<tr>
			<td class='title'>Toernooi:</td><td class='form'><input type='text' name='name' value='<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
'/></td><td class='info'><?php if ($this->_tpl_vars['error']['name']): ?><span class='error'><?php echo $this->_tpl_vars['error']['name']; ?>
</span><?php else: ?>Naam van het toernooi. (Verplicht)<?php endif; ?></td>
		</tr>
		<tr>
			<td class='title'>Plaats:</td><td class='form'><input type='text' name='place' value='<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['place'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
'/></td><td class='info'><?php if ($this->_tpl_vars['error']['place']): ?><span class='error'><?php echo $this->_tpl_vars['error']['name']; ?>
</span><?php else: ?>Plaats van het toernooi. (Verplicht)<?php endif; ?></td>
		</tr>
		<tr>
			<td class='title'>Uitslag:</td><td class='form'><input type='text' name='rank' value='<?php echo $this->_tpl_vars['data']['rank']; ?>
' style='width: 30px;'/> <span style='vertical-align:super;'>e</span></td><td class='info'><?php if ($this->_tpl_vars['error']['rank']): ?><span class='error'><?php echo $this->_tpl_vars['error']['rank']; ?>
</span><?php else: ?>Uitslag. (Verplicht)<?php endif; ?></td>
		</tr>
		<tr>
			<td class='title'>Datum:</td><td class='form'><?php echo smarty_function_html_select_date(array('start_year' => '-3','time' => $this->_tpl_vars['data']['date']), $this);?>
</td><td class='info'><?php if ($this->_tpl_vars['error']['date']): ?><span class='error'><?php echo $this->_tpl_vars['error']['date']; ?>
</span><?php else: ?>Datum van het toernooi. (Verplicht)<?php endif; ?></td>
		</tr>
		<tr>
			<td class='title'>Link:</td><td class='form'><input type='text' name='link' value='<?php echo $this->_tpl_vars['data']['link']; ?>
'/></td><td class='info'><?php if ($this->_tpl_vars['error']['link']): ?><span class='error'><?php echo $this->_tpl_vars['error']['link']; ?>
</span><?php else: ?>Link naar een pagina/website. (Incl http:// voor externe websites, Eventueel)<?php endif; ?></td>
		</tr>
		<tr>
			<td class='title'></td><td class='submit'><input type='submit' value='Opslaan' class='submit' /></td><td class='info'></td>
		</tr>
	</table>

<h1>Resultaten</h1>
<table class='overview'>


	<tr>
		<th>Toernooi</th><th>Rank</th><th>Datum toernooi</th><th>&nbsp;</th>
	</tr>
	
	<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['rs']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
	
 
	  	<tr <?php if ($this->_sections['i']['index'] % 2): ?>class='alt'<?php endif; ?>>
			<td><?php echo $this->_tpl_vars['rs'][$this->_sections['i']['index']]['name']; ?>
, <?php echo $this->_tpl_vars['rs'][$this->_sections['i']['index']]['place']; ?>
</td><td><?php echo $this->_tpl_vars['rs'][$this->_sections['i']['index']]['rank']; ?>
 <span style='vertical-align:super;'>e</span></td><td><?php echo $this->_tpl_vars['rs'][$this->_sections['i']['index']]['nicedate']; ?>
</td><td class='edit'><a href='?page=result&a=edit&id=<?php echo $this->_tpl_vars['rs'][$this->_sections['i']['index']]['id']; ?>
'>aanpassen</a></td>
		</tr>
		
	<?php endfor; else: ?>
  		<tr><td colspan='3'>Er is nog geen nieuws geplaatst.</tr>
	<?php endif; ?>

</table>
		

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>