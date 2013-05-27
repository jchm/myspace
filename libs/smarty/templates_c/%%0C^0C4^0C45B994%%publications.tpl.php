<?php /* Smarty version 2.6.19, created on 2009-08-26 01:24:02
         compiled from admin/publications.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'debug', 'admin/publications.tpl', 3, false),array('modifier', 'escape', 'admin/publications.tpl', 18, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/header.tpl", 'smarty_include_vars' => array('p' => 'publications')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php echo smarty_function_debug(array(), $this);?>

	
	<h1><?php if ($this->_tpl_vars['data']['edit']): ?>Bericht aanpassen<?php else: ?>Nieuws bericht toevoegen<?php endif; ?></h1>
	<form method='post' action='' enctype="multipart/form-data">
	
	<input type='hidden' name='a' value='save' />
	<input type='hidden' name='id' value='<?php echo $this->_tpl_vars['data']['pub_id']; ?>
' />
	
	<table class='addForm'>
	<?php if ($this->_tpl_vars['data']['edit']): ?>
		<tr>
			<td class='delete' colspan='3'><a href='?page=publications&a=delete&id=<?php echo $this->_tpl_vars['data']['pub_id']; ?>
' onClick='return ask("Weet u zeker dat u dit bericht wilt verwijderen?");'>Verwijder dit bericht</a></td>
		</tr>
	<?php endif; ?>
		<tr>
			<td class='title'>Titel:</td><td class='form'><input type='text' name='title' value='<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
'/></td><td class='info'><?php if ($this->_tpl_vars['error']['title']): ?><span class='error'><?php echo $this->_tpl_vars['error']['title']; ?>
</span><?php else: ?>Een titel. (Verplicht)<?php endif; ?></td>
		</tr>
	
		<?php if ($this->_tpl_vars['data']['file']): ?>
			<?php if ($this->_tpl_vars['data']['type']['link'] == 0): ?>
				<td class='title'>Afbeelding:</td><td class='form'><img src='<?php echo $this->_tpl_vars['data']['file']['link']; ?>
'/></td><td class='info'></td>
			<?php elseif ($this->_tpl_vars['data']['type']['link'] == 1): ?>
				<td class='title'>PDF:</td><td class='form'><a href='<?php echo $this->_tpl_vars['data']['file']['link']; ?>
'>Download PDF bestand</a></td><td class='info'></td>
			<?php endif; ?>
			<tr>
				<td class='title'>Nieuw bestand:</td><td class='form'><input type='file' name='img' /></td><td class='info'><?php if ($this->_tpl_vars['error']['img']): ?><span class='error'><?php echo $this->_tpl_vars['error']['img']; ?>
</span><?php elseif ($this->_tpl_vars['error']['img2']): ?><span class='warning'><?php echo $this->_tpl_vars['error']['img2']; ?>
</span><?php else: ?>Alleen .jpg/.gif/.png of een pdf bestand.<?php endif; ?></td>
			</tr>
		<?php else: ?>
		<tr>
			<td class='title'>Bestand:</td><td class='form'><input type='file' name='img' /></td><td class='info'><?php if ($this->_tpl_vars['error']['img']): ?><span class='error'><?php echo $this->_tpl_vars['error']['img']; ?>
</span><?php elseif ($this->_tpl_vars['error']['img2']): ?><span class='warning'><?php echo $this->_tpl_vars['error']['img2']; ?>
</span><?php else: ?>Alleen .jpg/.gif/.png of een pdf bestand.<?php endif; ?></td>
		</tr>
		<?php endif; ?>
		
		<tr>
			<td class='title'>Content:</td><td class='form'><textarea name='body' id="hb"><?php echo $this->_tpl_vars['data']['body']; ?>
</textarea></td><td class='info'><?php if ($this->_tpl_vars['error']['body']): ?><span class='error'><?php echo $this->_tpl_vars['error']['body']; ?>
</span><?php else: ?>De inhoud van het bericht. (Eventueel)<?php endif; ?></td>
		</tr>
		<tr>
			<td class='title'>Link:</td><td class='form'><input type='text' name='link' value='<?php echo $this->_tpl_vars['data']['link']; ?>
'/></td><td class='info'><?php if ($this->_tpl_vars['error']['link']): ?><span class='error'><?php echo $this->_tpl_vars['error']['link']; ?>
</span><?php else: ?>Link naar een pagina/website. (Incl http:// voor externe websites, Eventueel)<?php endif; ?></td>
		</tr>
		<tr>
			<td class='title'>Link tekst:</td><td class='form'><input type='text' name='linkTekst' value='<?php echo $this->_tpl_vars['data']['linkTekst']; ?>
'/></td><td class='info'><?php if ($this->_tpl_vars['error']['linkTekst']): ?><span class='error'><?php echo $this->_tpl_vars['error']['linkTekst']; ?>
</span><?php else: ?>Tekst voor de link. (Verplicht als er een link woord toevgevoegd)<?php endif; ?></td>
		</tr>
		<tr>
			<td class='title'></td><td class='submit'><input type='submit' value='Opslaan' class='submit' /></td><td class='info'></td>
		</tr>
	</table>
	
	<h1>Geplaatste publicaties</h1>
	<table class='overview'>

	<tr>
		<th>Titel</th><th>Geplaatst op</th><th>&nbsp;</th>
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
			<td><?php echo $this->_tpl_vars['rs'][$this->_sections['i']['index']]['title']; ?>
</td><td><?php echo $this->_tpl_vars['rs'][$this->_sections['i']['index']]['nicedate']; ?>
</td><td class='edit'><a href='?page=publications&a=edit&id=<?php echo $this->_tpl_vars['rs'][$this->_sections['i']['index']]['pub_id']; ?>
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