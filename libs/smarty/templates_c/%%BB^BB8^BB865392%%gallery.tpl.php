<?php /* Smarty version 2.6.19, created on 2009-08-26 23:08:13
         compiled from admin/gallery.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'admin/gallery.tpl', 23, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/header.tpl", 'smarty_include_vars' => array('p' => 'gallery')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php if ($this->_tpl_vars['uplMessage']): ?><div class='<?php echo $this->_tpl_vars['uplMessage']['class']; ?>
'><?php echo $this->_tpl_vars['uplMessage']['body']; ?>
</div><?php endif; ?>

<?php if ($this->_tpl_vars['failMessage']): ?><div class='<?php echo $this->_tpl_vars['failMessage']['class']; ?>
'><?php echo $this->_tpl_vars['failMessage']['body']; ?>
</div><?php endif; ?>

<?php if ($this->_tpl_vars['photo']): ?>
		<h1 id='test'>Foto aanpassen</h1>
		<form method='post' action='#' enctype="multipart/form-data">
		
		<input type='hidden' name='a' value='savePhoto' />	
		<input type='hidden' name='id' value='<?php echo $this->_tpl_vars['photo']['image_id']; ?>
' />	
		
		<table class='addForm' id='upldrform'>
		<tr>
			<td class='delete' colspan='3'><a href='?page=gallery&a=delete&id=<?php echo $this->_tpl_vars['photo']['image_id']; ?>
' onClick='return ask("Weet u zeker dat u deze foto wilt verwijderen?");'>Verwijder deze foto</a></td>
		</tr>
		<tr>
			<td class='title'>Foto:</td><td colspan='2'><img src='<?php echo $this->_tpl_vars['photo']['src_s']; ?>
' /></td>
		</tr>
	
		<tr>
			<td class='title'>Naam:</td><td class='form'><input type='text' name='name' value="<?php echo ((is_array($_tmp=$this->_tpl_vars['photo']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /></td><td class='info'><?php if ($this->_tpl_vars['error']['photo_name']): ?><span class='error'><?php echo $this->_tpl_vars['error']['photo_name']; ?>
</span><?php else: ?>De naam van de foto (Verplicht)<?php endif; ?></td>
		</tr>
	
		<tr>
			<td class='title'></td><td class='submit'><input type='submit' value='Opslaan' class='submit' /></td><td class='info'></td>
		</tr>
		
	</table>
	
	</form>	
	<?php endif; ?>

<h1 id='test'>Nieuwe foto's uploaden</h1>

<form method='post' action='#' enctype="multipart/form-data">
	
	<input type='hidden' name='a' value='savePhotos' />
	<input type='hidden' name='album_id' value='0' />
	
	<table class='addForm' id='upldrform'>
	
	<tr>
		<td class='title'>Foto's:</td><td class='form'>
			<input type='file' name='Filedata[]' style='margin-bottom:4px;' /> <br />
			<input type='file' name='Filedata[]' style='margin-bottom:4px;' /> <br />
			<input type='file' name='Filedata[]' style='margin-bottom:4px;' /> <br />
			<input type='file' name='Filedata[]' style='margin-bottom:4px;' /> <br />
			<input type='file' name='Filedata[]' style='margin-bottom:4px;' /> <br />
		</td>
		<td class='info'>Kies de foto's. Alleen jpg/gif/png bestanden. Max grootte is 1.5mb. (Verplicht)</td>
	</tr>
	
	<tr>
		<td class='title'></td><td class='submit'><input type='submit' value='Opslaan' class='submit' /></td><td class='info'></td>
	</tr>
	</table>

	</form>	
	
	
	
	
	<h1>Gallery</h1>

	<div id='galleryStream' class='clearfix'>
		
		<?php if ($this->_tpl_vars['stream']): ?>
			<?php $_from = $this->_tpl_vars['stream']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['photo']):
?>
				<div style='float: left; width: 75px; height: 75px; margin: 0 5px 5px 0; background:url(<?php echo $this->_tpl_vars['photo']['src_s']; ?>
) no-repeat;'><a href='?page=gallery&a=editPhoto&id=<?php echo $this->_tpl_vars['photo']['image_id']; ?>
&album=<?php echo $this->_tpl_vars['photo']['album_id']; ?>
'  title='Pas deze foto aan'>Aanpassen</a></div>	
			<?php endforeach; endif; unset($_from); ?>
		<?php else: ?>
			Er zijn nog geen foto's geupload.
		<?php endif; ?>
	</div>

	
	
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>