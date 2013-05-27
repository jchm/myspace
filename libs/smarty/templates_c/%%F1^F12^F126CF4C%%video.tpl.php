<?php /* Smarty version 2.6.19, created on 2009-08-01 17:26:21
         compiled from admin/video.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'admin/video.tpl', 37, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/header.tpl", 'smarty_include_vars' => array('p' => 'video')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	
	
	
		<h1>Youtube video toevoegen</h1>
		  		
  		<form method='post' action='' enctype="multipart/form-data">

		<input type='hidden' name='a' value='save' />
		<input type='hidden' name='id' value='<?php echo $this->_tpl_vars['data']['video_id']; ?>
' />
		
  		<table class='addForm'>
  			<?php if ($this->_tpl_vars['data']['edit']): ?>
  			
  			<tr>
				<td class='delete' colspan='3'><a href='?page=video&a=delete&id=<?php echo $this->_tpl_vars['data']['video_id']; ?>
' onClick='return ask("Weet u zeker dat u deze video wilt verwijderen?");'>Verwijder deze video</a></td>
			</tr>
			
			<tr>
  				<td class='title'></td><td class='form'>
  					
  					<object width="200" height="166"><param name="movie" value="http://www.youtube.com/v/<?php echo $this->_tpl_vars['data']['youtube_id']; ?>
&hl=nl&fs=1&rel=0"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/<?php echo $this->_tpl_vars['data']['youtube_id']; ?>
&hl=nl&fs=1&rel=0" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="200" height="166"></embed></object>
  				
  				</td><td class='info'></td>
  			</tr>
  			
  			<?php else: ?>
  				<tr>
  					<td class='title'>Url:</td><td class='form'><input type='text' name='url' value='<?php echo $this->_tpl_vars['data']['url']; ?>
'/></td><td class='info'><?php if ($this->_tpl_vars['error']['url']): ?><span class='error'><?php echo $this->_tpl_vars['error']['url']; ?>
</span><?php else: ?>De youtube url van de video. (Verplicht)<?php endif; ?></td>
  				</tr>
			<?php endif; ?>
  			
  			
					  			
  			<tr>
				<td class='title'>Titel:</td><td class='form'><input type='text' name='name' value='<?php echo ((is_array($_tmp=$this->_tpl_vars['data']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
'/></td><td class='info'><?php if ($this->_tpl_vars['error']['name']): ?><span class='error'><?php echo $this->_tpl_vars['error']['name']; ?>
</span><?php else: ?>De titel van de video. (Verplicht)<?php endif; ?></td>
			</tr>
			
			<tr>
				<td class='title'>Beschrijving:</td><td class='form'><textarea name='body' id="hb"><?php echo $this->_tpl_vars['data']['body']; ?>
</textarea></td><td class='info'><?php if ($this->_tpl_vars['error']['body']): ?><span class='error'><?php echo $this->_tpl_vars['error']['body']; ?>
</span><?php else: ?>Een beschrijving. (Eventueel)<?php endif; ?></td>
			</tr>
			
			<tr>
				<td class='title'></td><td class='submit'><input type='submit' value='Opslaan' class='submit' /></td><td class='info'></td>
			</tr>

  		</table>
	
			
	
		<h1>Geplaatste video's</h1>
		<table class='overview'>
		<tr>
			<th>Naam video</th><th>&nbsp;</th>
		</tr>
		<?php unset($this->_sections['x']);
$this->_sections['x']['name'] = 'x';
$this->_sections['x']['loop'] = is_array($_loop=$this->_tpl_vars['rs']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['x']['show'] = true;
$this->_sections['x']['max'] = $this->_sections['x']['loop'];
$this->_sections['x']['step'] = 1;
$this->_sections['x']['start'] = $this->_sections['x']['step'] > 0 ? 0 : $this->_sections['x']['loop']-1;
if ($this->_sections['x']['show']) {
    $this->_sections['x']['total'] = $this->_sections['x']['loop'];
    if ($this->_sections['x']['total'] == 0)
        $this->_sections['x']['show'] = false;
} else
    $this->_sections['x']['total'] = 0;
if ($this->_sections['x']['show']):

            for ($this->_sections['x']['index'] = $this->_sections['x']['start'], $this->_sections['x']['iteration'] = 1;
                 $this->_sections['x']['iteration'] <= $this->_sections['x']['total'];
                 $this->_sections['x']['index'] += $this->_sections['x']['step'], $this->_sections['x']['iteration']++):
$this->_sections['x']['rownum'] = $this->_sections['x']['iteration'];
$this->_sections['x']['index_prev'] = $this->_sections['x']['index'] - $this->_sections['x']['step'];
$this->_sections['x']['index_next'] = $this->_sections['x']['index'] + $this->_sections['x']['step'];
$this->_sections['x']['first']      = ($this->_sections['x']['iteration'] == 1);
$this->_sections['x']['last']       = ($this->_sections['x']['iteration'] == $this->_sections['x']['total']);
?>
			<tr>
				<td><?php echo $this->_tpl_vars['rs'][$this->_sections['x']['index']]['name']; ?>
</td><td class='edit'><a href='?page=video&a=edit&id=<?php echo $this->_tpl_vars['rs'][$this->_sections['x']['index']]['video_id']; ?>
'>aanpassen</a></td>
			</tr>
		<?php endfor; else: ?>
			<tr>
				<td colspan='2'>Er zijn nog geen videos in deze categorie geplaatst.</td>
			</tr>
		<?php endif; ?>
		</table>		
				


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>