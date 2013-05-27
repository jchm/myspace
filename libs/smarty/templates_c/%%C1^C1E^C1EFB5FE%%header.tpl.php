<?php /* Smarty version 2.6.19, created on 2009-09-23 15:06:33
         compiled from admin/header.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title> aziz-judo.nl | Beheer</title>

<link rel="shortcut icon" href="/static/fav.gif" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="/css/admin.css" />
<link rel="stylesheet" type="text/css" href="/css/smoothness/jquery-ui-1.7.1.custom.css" />


<script src="/ckeditor/ckeditor.js" type="text/javascript"></script>

<script src="/libs/js/1.3.2-jquery.min.js" type="text/javascript"></script>
<script src="/libs/js/1.3.2-jquery-ui.min.js" type="text/javascript"></script>
<script src="/libs/js/datepicker.js" type="text/javascript"></script>
<script src="/static/botr/swfobject.js" type="text/javascript"></script>

<?php echo '
<script type="text/javascript">
	//<![CDATA[
	function ask(message)
	{
		if(!confirm(message))
			return false;
	}
	
	 jQuery(document).ready(function($) {
	 
			$(\'#startdate\').datepicker({dateFormat: \'yy-mm-dd\'});
			$(\'#enddate\').datepicker({dateFormat: \'yy-mm-dd\'});
			

	});
	 //]]>
</script>
'; ?>






</head>

<body>

<div id='main'>
	<div id='top'><a href='?page=logout'>Uitloggen</a> <a href='http://aziz-judo.nl/home' target='_blank'>Bekijk website &raquo;</a></div>
	<div id='header' class='clearfix'>
		<div id='menu'><a href='?page=news' <?php if ($this->_tpl_vars['p'] == 'news'): ?>class='active'<?php endif; ?>>Nieuws</a> |  <a href='?page=schedule' <?php if ($this->_tpl_vars['p'] == 'schedule'): ?>class='active'<?php endif; ?>>Agenda</a> | <a href='?page=fotos' <?php if ($this->_tpl_vars['p'] == 'gallery'): ?>class='active'<?php endif; ?>>Foto's</a> | <a href='?page=video' <?php if ($this->_tpl_vars['p'] == 'video'): ?>class='active'<?php endif; ?>>Video</a> | <a href='?page=publications' <?php if ($this->_tpl_vars['p'] == 'publications'): ?>class='active'<?php endif; ?>>Publicaties</a> | <a href='?page=result' <?php if ($this->_tpl_vars['p'] == 'result'): ?>class='active'<?php endif; ?>>Resultaten</a> | <a href='?page=supporter' <?php if ($this->_tpl_vars['p'] == 'supporter'): ?>class='active'<?php endif; ?>>Supporters</a> | <a href='?page=clubvan100' <?php if ($this->_tpl_vars['p'] == 'clubvan100'): ?>class='active'<?php endif; ?>>Club van 100</a> </div> <div id='extras'><a href='?page=page&id=1' <?php if ($this->_tpl_vars['p'] == 'page'): ?>class='active'<?php endif; ?>>Overige pagina's aanpassen</a> <!--| <a href='http://anusch.nl/awstats/' target='_blank' title='Statistieken'>Stats</a>--> </div>
	</div>
	<div id='content'>
		
		<?php if ($this->_tpl_vars['message']): ?><div class='<?php echo $this->_tpl_vars['message']['class']; ?>
'><?php echo $this->_tpl_vars['message']['body']; ?>
</div><?php endif; ?>