<?php /* Smarty version 2.6.19, created on 2009-08-01 12:29:29
         compiled from admin/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'admin/index.tpl', 16, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/header.tpl", 'smarty_include_vars' => array('p' => 'news')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<h1><?php if ($this->_tpl_vars['data']['edit']): ?>Bericht aanpassen<?php else: ?>Nieuws bericht toevoegen<?php endif; ?></h1>
	<form method='post' action='' enctype="multipart/form-data">
	
	<input type='hidden' name='a' value='save' />
	<input type='hidden' name='id' value='<?php echo $this->_tpl_vars['data']['news_id']; ?>
' />
	
	<table class='addForm'>
	<?php if ($this->_tpl_vars['data']['edit']): ?>
		<tr>
			<td class='delete' colspan='3'><a href='?page=news&a=delete&id=<?php echo $this->_tpl_vars['data']['news_id']; ?>
' onClick='return ask("Weet u zeker dat u dit bericht wilt verwijderen?");'>Verwijder dit bericht</a></td>
		</tr>
	<?php endif; ?>
		<tr>
			<td class='title'>Titel:</td><td class='form'><input type='text' name='title' value='<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
'/></td><td class='info'><?php if ($this->_tpl_vars['error']['title']): ?><span class='error'><?php echo $this->_tpl_vars['error']['title']; ?>
</span><?php else: ?>De titel voor het nieuws. (Verplicht)<?php endif; ?></td>
		</tr>
		
		
		
		<?php if ($this->_tpl_vars['data']['image']): ?>
			<tr>
				<td class='title'>Afbeelding:</td><td class='form' colspan='2'><img src='<?php echo $this->_tpl_vars['data']['image']; ?>
' /></td>
			</tr>
			<tr>
				<td class='title'>Verwijder:</td><td class='form' colspan='2'><input type='checkbox' name='delImage' id='di' value='1' style='width:20px;'><label for='di' style='cursor:pointer;'>Verwijder de afbeelding</label></td>
			</tr>
			<tr>
				<td class='title'>Nieuw:</td><td class='form'><input type='file' name='img' /></td><td class='info'><?php if ($this->_tpl_vars['error']['img']): ?><span class='error'><?php echo $this->_tpl_vars['error']['img']; ?>
</span><?php elseif ($this->_tpl_vars['error']['img2']): ?><span class='warning'><?php echo $this->_tpl_vars['error']['img2']; ?>
</span><?php else: ?>Alleen .jpg/.gif/.png bestanden.<?php endif; ?></td>
			</tr>
		
		<?php else: ?>	
			<tr>
				<td class='title'>Afbeelding:</td><td class='form'><input type='file' name='img' /></td><td class='info'><?php if ($this->_tpl_vars['error']['img']): ?><span class='error'><?php echo $this->_tpl_vars['error']['img']; ?>
</span><?php elseif ($this->_tpl_vars['error']['img2']): ?><span class='warning'><?php echo $this->_tpl_vars['error']['img2']; ?>
</span><?php else: ?>Alleen .jpg/.gif/.png bestanden.<?php endif; ?></td>
			</tr>
		<?php endif; ?>
		
		<tr>
			<td class='title'>Content:</td><td class='form'><textarea name='body' id="hb"><?php echo $this->_tpl_vars['data']['body']; ?>
</textarea></td><td class='info'><?php if ($this->_tpl_vars['error']['body']): ?><span class='error'><?php echo $this->_tpl_vars['error']['body']; ?>
</span><?php else: ?>De inhoud van het bericht. (Verplicht)<?php endif; ?></td>
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


<h1>Nieuws overzicht</h1>
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
</td><td class='edit'><a href='?page=news&a=edit&id=<?php echo $this->_tpl_vars['rs'][$this->_sections['i']['index']]['news_id']; ?>
'>aanpassen</a></td>
		</tr>
		
		<?php if ($this->_sections['i']['iteration'] == 3): ?>
			<tr><td colspan='3'><strong>Onderstaande berichten worden alleen nog op de archief pagina getoond.</strong></tr>
		<?php endif; ?>
	<?php endfor; else: ?>
  		<tr><td colspan='3'>Er is nog geen nieuws geplaatst.</tr>
	<?php endif; ?>

</table>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>