<?php /* Smarty version 2.6.19, created on 2009-08-26 22:45:08
         compiled from admin/100.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/header.tpl", 'smarty_include_vars' => array('p' => 'clubvan100')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	

<h1>Club van 100 leden</h1>
<form id='contact_form' method='post' action=''>
			
	<input type='hidden' name='a' value='save'>
	
<table class='altOverview'>

	<tr>
		<td colspan='4' style='text-align:right;'><input type='submit' name='submit' value='opslaan' class='submit'/></td>
	</tr>
	<tr>
		<th>Naam</th><th>Email</th><th>Code</th><th>status</th>
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
			<td><?php echo $this->_tpl_vars['rs'][$this->_sections['i']['index']]['firstname']; ?>
 <?php echo $this->_tpl_vars['rs'][$this->_sections['i']['index']]['name']; ?>
</td><td><a href='mailto:<?php echo $this->_tpl_vars['rs'][$this->_sections['i']['index']]['email']; ?>
'><?php echo $this->_tpl_vars['rs'][$this->_sections['i']['index']]['email']; ?>
</a></td><td><?php echo $this->_tpl_vars['rs'][$this->_sections['i']['index']]['code']; ?>
</td>
			<td class='edit'><input type='radio' name='person[<?php echo $this->_tpl_vars['rs'][$this->_sections['i']['index']]['supporter_100_id']; ?>
]' value='1' <?php if ($this->_tpl_vars['rs'][$this->_sections['i']['index']]['status'] == '1'): ?>checked='checked'<?php endif; ?> id='<?php echo $this->_tpl_vars['rs'][$this->_sections['i']['index']]['supporter_100_id']; ?>
_b' /><label for='<?php echo $this->_tpl_vars['rs'][$this->_sections['i']['index']]['supporter_100_id']; ?>
_b'> Betaald</label> <input type='radio' name='person[<?php echo $this->_tpl_vars['rs'][$this->_sections['i']['index']]['supporter_100_id']; ?>
]' value='0' <?php if ($this->_tpl_vars['rs'][$this->_sections['i']['index']]['status'] == 0): ?>checked='checked'<?php endif; ?> id='<?php echo $this->_tpl_vars['rs'][$this->_sections['i']['index']]['supporter_100_id']; ?>
_n' /><label for='<?php echo $this->_tpl_vars['rs'][$this->_sections['i']['index']]['supporter_100_id']; ?>
_n'>Niet betaald</a></td>
		</tr>
		
	<?php endfor; endif; ?>
	<tr>
		<td colspan='4' style='text-align:right;'><input type='submit' name='submit' value='opslaan' class='submit'/></td>
	</tr>
	
</table>
</form>		

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>