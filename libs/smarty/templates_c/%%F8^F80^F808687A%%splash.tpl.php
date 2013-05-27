<?php /* Smarty version 2.6.19, created on 2009-09-01 23:42:09
         compiled from splash.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="keywords" content="Aziz, Mesaoudi, Aziz Mesaoudi, Judo, Judoka, 2009, WK, Wereld kampioenschap judo" />
<meta name="description" content="Website van Judoka Aziz Mesaoudi" />

<link rel="shortcut icon" href="./splash/fav.gif" type="image/x-icon" />


<link rel="stylesheet" type="text/css" href="css/splash.css" />


<title>Aziz Mesaoudi - Judoka</title>

</head>
<body>

<div id='wrapper' class='clearfix'>
	
	
	
	<div id='logo'>
		<img src='./splash/logo.gif' alt='Aziz Judo' />
	</div>
	
	<div id='right'>
		<div id='geduld'>Nog even geduld</div>
		<div id='tekst'>Aan deze site wordt momenteel gewerkt en zal spoedig na het WK JUDO 2009 online gaan.</div>
		<?php if ($this->_tpl_vars['success']): ?>
			<div id='launchTekst'>
				<strong>Bedankt!</strong>
				Je bent nu aangemeld voor de lanceerings email, hopelijk zien we je dan terug.
			</div>	
		<?php else: ?>
		
		<div id='launchTekst'>
		Wil je een email ontvangen zodra de website lanceert? Vul je email in het onderstaand formulier en wees als eerste op de hoogte van de lanceering.
			<div id='form'>
			 
				<form method='post' action='' enctype="multipart/form-data">
							
					<input type='hidden' name='a' value='save'>
					<label for='email'>Je email adres: </label><input id='email' type='text' name='email' />
					<input type='submit' value='Opslaan' class='submit' />
					<?php if ($this->_tpl_vars['message']): ?><span class='<?php echo $this->_tpl_vars['message']['class']; ?>
'><?php echo $this->_tpl_vars['message']['body']; ?>
</span><?php endif; ?>

				</form>
							</div>
		</div>
<?php endif; ?>
	</div>
	
</div>

</body>
</html>