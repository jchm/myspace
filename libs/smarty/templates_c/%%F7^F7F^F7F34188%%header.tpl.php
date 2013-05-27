<?php /* Smarty version 2.6.19, created on 2009-11-01 14:38:47
         compiled from header.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="keywords" content="<?php if ($this->_tpl_vars['meta_kw']): ?><?php echo $this->_tpl_vars['meta_kw']; ?>
<?php else: ?>Abdel Aziz Mesaoudi, judo, Judoka, Nederland<?php endif; ?>" />
<meta name="description" content="<?php if ($this->_tpl_vars['meta_ds']): ?><?php echo $this->_tpl_vars['meta_ds']; ?>
<?php else: ?>Website van de Nederlandse judoka Abdel Aziz Mesaoudi.<?php endif; ?>" />

<link rel="shortcut icon" href="./splash/fav.gif" type="image/x-icon" />

<link rel="stylesheet" type="text/css" href="/css/main.css" />

<script type="text/javascript" src="/libs/js/1.3.2-jquery.min.js"></script>
<script type="text/javascript" src="/libs/jquery.fancybox/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="/libs/jquery.fancybox/jquery.fancybox-1.2.1.pack.js"></script>

<link rel="stylesheet" type="text/css" href="/libs/jquery.fancybox/jquery.fancybox.css" media="screen" />
<?php echo '
<script type=\'text/javascript\'>
  jQuery(document).ready(function($) {
    $(".stream a").fancybox({
			\'overlayShow\'			: false,
			\'zoomSpeedIn\'			: 600,
			\'zoomSpeedOut\'			: 500,
			\'easingIn\'				: \'easeOutBack\',
			\'easingOut\'				: \'easeInBack\'
		});
		
		
	$(".stream img").css({ opacity: "1" });
	
	$(".stream img").hover(
	  
	  function () {
        $(this).animate({ opacity: "0.5" }, 500);
      }, 
      function () {
        $(this).animate({ opacity: "1" }, 500);
      }

	);

  })      
</script>
'; ?>


<title><?php if ($this->_tpl_vars['meta_pt']): ?><?php echo $this->_tpl_vars['meta_pt']; ?>
 | <?php else: ?><?php endif; ?>Aziz judoka</title>

</head>
<body>

<div id='wrapper' class='clearfix'>
	<div id='header' class="clearfix">
		<a href='/home' title='Home' id='logo'><img src='/static/logo.png' alt='Aziz'/></a>
		
		<div id='menu'>
			
			<a href='/home' class='home <?php if ($this->_tpl_vars['page'] == 'home'): ?>active<?php endif; ?>'><span>Home</span></a>
			<a href='/werk' class='prive <?php if ($this->_tpl_vars['page'] == 'prive'): ?>active<?php endif; ?>'><span>Prive</span></a>
			<a href='/sponsor' class='sponsors <?php if ($this->_tpl_vars['page'] == 'sponsor'): ?>active<?php endif; ?>'><span>Sponsors</span></a>
			<a href='/fotos' class='media <?php if ($this->_tpl_vars['page'] == 'media'): ?>active<?php endif; ?>'><span>Media</span></a>
			<a href='/support' class='supporter <?php if ($this->_tpl_vars['page'] == 'supporter'): ?>active<?php endif; ?>'><span>Supporter</span></a>
			<a href='/ambassadeur' class='ambassadeur <?php if ($this->_tpl_vars['page'] == 'ambassadeur'): ?>active<?php endif; ?>'><span>Ambassadeur</span></a>
		
		</div>
	
	</div>
	
	<?php if ($this->_tpl_vars['page'] == 'home' || $this->_tpl_vars['page'] == 'media' || $this->_tpl_vars['page'] == 'prive' || $this->_tpl_vars['page'] == 'supporter'): ?>
	<div id='subMenu' class="clearfix">
		<?php if ($this->_tpl_vars['page'] == 'media'): ?>
			<a href='/fotos' <?php if ($this->_tpl_vars['sub'] == 'fotos'): ?>class='active'<?php endif; ?>>Foto's</a> <a href='/video' <?php if ($this->_tpl_vars['sub'] == 'video'): ?>class='active'<?php endif; ?>>Videos</a> <a href='/publicaties' class='noBg  <?php if ($this->_tpl_vars['sub'] == 'publicaties'): ?>active<?php endif; ?>'>Publicaties</a>
		<?php elseif ($this->_tpl_vars['page'] == 'sponsor'): ?>
			<a href='/sponsor' <?php if ($this->_tpl_vars['sub'] == 'mijnsponsors'): ?>class='active'<?php endif; ?>>Mijn sponsors</a> <!--<a href='/sponsorplan' class='noBg <?php if ($this->_tpl_vars['sub'] == 'sponsorplan'): ?>active<?php endif; ?>'>Sponsorplan</a>-->
		<?php elseif ($this->_tpl_vars['page'] == 'prive'): ?>
			<a href='/werk' <?php if ($this->_tpl_vars['sub'] == 'werk'): ?>class='active'<?php endif; ?>>Werk</a> <a href='/studie' <?php if ($this->_tpl_vars['sub'] == 'studie'): ?>class='active'<?php endif; ?>>Studie</a> <a href='/familie' <?php if ($this->_tpl_vars['sub'] == 'familie'): ?>class='active'<?php endif; ?>>Familie</a> <a href='/religie' class='noBg <?php if ($this->_tpl_vars['sub'] == 'religie'): ?>active<?php endif; ?>'>Religie</a>
		<?php elseif ($this->_tpl_vars['page'] == 'supporter'): ?>
			<a href='/support' <?php if ($this->_tpl_vars['sub'] == 'supporter'): ?>class='active'<?php endif; ?>>Supporter</a> <a href='/clubvan100' class='noBg <?php if ($this->_tpl_vars['sub'] == 'clubvan100'): ?>active<?php endif; ?>'>Club van 100</a>
		<?php else: ?>
			<a href='/biografie' <?php if ($this->_tpl_vars['sub'] == 'biografie'): ?>class='active'<?php endif; ?>>Biografie</a> <a href='/resultaten' <?php if ($this->_tpl_vars['sub'] == 'resultaten'): ?>class='active'<?php endif; ?>>Resultaten</a> <a href='/agenda'  <?php if ($this->_tpl_vars['sub'] == 'agenda'): ?>class='active'<?php endif; ?>>Agenda</a> <a href='/ranking'  class='noBg <?php if ($this->_tpl_vars['sub'] == 'ranking'): ?>active<?php endif; ?>'>Ranking</a>
		<?php endif; ?>
	</div>
	<?php else: ?>
		<div>&nbsp;</div>
	<?php endif; ?>
		
	<div id='middle' class="clearfix">