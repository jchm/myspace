<?php /* Smarty version 2.6.19, created on 2009-08-01 11:33:56
         compiled from admin/login.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>| Login</title>

<link rel="shortcut icon" href="/static/images/fav.gif" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="/css/admin.css" />

</head>

<body>

<div id='main' style='width: 450px;'>
<div id='content' class='clearfix' >
	<h1>Login</h1>
	<?php if ($this->_tpl_vars['error']): ?><div class='warning'><?php echo $this->_tpl_vars['error']; ?>
</div><?php endif; ?>
	<form action='' method='post'>
	<input type='hidden' name='a' value='checkLogin' />
	<input type='password' name='pwd' style='width: 400px;' />
	<input type='submit' name='submit' value='Log in' style='width: 75px; border: solid 1px #606060; margin-top: 5px; float: right;' />
	</form>
</div>
</div>

</body>
</html>