<?php /* Smarty version 2.6.19, created on 2009-09-10 21:13:28
         compiled from admin/page.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/header.tpl", 'smarty_include_vars' => array('p' => $this->_tpl_vars['data']['section'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	
<div class='clearfix' style='margin-bottom: 10px;'><div id='subMenu'><a href='?page=page&id=1'>Biografie</a> | <a href='?page=page&id=2'>Ranking</a>  | <a href='?page=page&id=3'>Werk</a> | <a href='?page=page&id=4'>Studie</a> | <a href='?page=page&id=5'>Familie</a> | <a href='?page=page&id=6'>Religie</a> | <a href='?page=page&id=7'>Ambassadeur</a>     </div></div>	
			
<h1><?php echo $this->_tpl_vars['data']['title']; ?>
 pagina aanpassen</h1>
				
<form method='post' action='' enctype="multipart/form-data">

<input type='hidden' name='a' value='save' />
<input type='hidden' name='id' value='<?php echo $this->_tpl_vars['data']['page_id']; ?>
' />

<table class='addForm'>

	<tr>
		<td class='title'>Titel:</td><td class='form'><input type='text' name='title' value='<?php echo $this->_tpl_vars['data']['title']; ?>
'/></td><td class='info'><?php if ($this->_tpl_vars['error']['title']): ?><span class='error'><?php echo $this->_tpl_vars['error']['title']; ?>
</span><?php else: ?>De titel voor de pagina. (Verplicht)<?php endif; ?></td>
	</tr>
	<tr>
		<td class='title'>Content:</td><td class='form'>
			<!--<textarea id="hb" name='body'><?php echo $this->_tpl_vars['data']['body']; ?>
</textarea>-->
			<textarea class="ckeditor" name="body"><?php echo $this->_tpl_vars['data']['body']; ?>
</textarea>
		
		</td><td class='info'><?php if ($this->_tpl_vars['error']['body']): ?><span class='error'><?php echo $this->_tpl_vars['error']['body']; ?>
</span><?php else: ?>De inhoud van de pagina. (Verplicht)<?php endif; ?></td>
	</tr>
	<tr>
		<td class='title'></td><td class='submit'><input type='submit' value='Opslaan' class='submit' /></td><td class='info'></td>
	</tr>
</table>
		
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>