<?php /* Smarty version 2.6.19, created on 2009-09-10 21:04:17
         compiled from video.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array('page' => 'media','sub' => 'video')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<div id='content'>
			
			<h1>Video: <?php echo $this->_tpl_vars['video']['name']; ?>
</h1>
			<?php if ($this->_tpl_vars['video']): ?>
			
			<div id='video'>
				<?php if ($this->_tpl_vars['selectedVideo']): ?>
					<object width="480" height="385"><param name="movie" value="http://www.youtube.com/v/<?php echo $this->_tpl_vars['video']['youtube_id']; ?>
&hl=nl&fs=1&autoplay=1"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/<?php echo $this->_tpl_vars['video']['youtube_id']; ?>
&hl=nl&fs=1&autoplay=1" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="480" height="385"></embed></object>
				<?php else: ?>
					<object width="480" height="385"><param name="movie" value="http://www.youtube.com/v/<?php echo $this->_tpl_vars['video']['youtube_id']; ?>
&hl=nl&fs=1&"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/<?php echo $this->_tpl_vars['video']['youtube_id']; ?>
&hl=nl&fs=1&" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="480" height="385"></embed></object>
				<?php endif; ?>
				<p><?php echo $this->_tpl_vars['video']['body']; ?>
</p>
			</div>
			<div id='videoList'>
			<ul>
				<?php $_from = $this->_tpl_vars['videos']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['video']):
?>
				
				<li class='clearfix'>
						<a href='<?php echo $this->_tpl_vars['video']['link']; ?>
'><img src='<?php echo $this->_tpl_vars['video']['image']; ?>
' alt='thumbnail'></a> <a href='<?php echo $this->_tpl_vars['video']['link']; ?>
'><?php echo $this->_tpl_vars['video']['name']; ?>
</a>
				</li>
				<?php endforeach; endif; unset($_from); ?>
			</ul>
			</div>
			<?php endif; ?>
		</div>	
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>