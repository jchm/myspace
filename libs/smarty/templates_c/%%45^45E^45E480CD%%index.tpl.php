<?php /* Smarty version 2.6.19, created on 2010-12-27 03:00:11
         compiled from index.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" href="./fav.png"/>
<meta name="keywords" content="Myspace, RSS, JSON, Feed, Event, Show, Shows, Events, List, Band, Bands" />
<meta name="description" content="Get a feed in RSS or JSON from your myspace band profile" />

<link rel="stylesheet" type="text/css" href="./css/main.css" />

<title>Get a RSS feed from your Myspace events / shows</title>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.microsoft.com/ajax/jquery.validate/1.7/jquery.validate.min.js"></script>
<?php echo '
<script type="text/javascript">
$(document).ready(function(){

var clearMePrevious = \'\';

// clear input on focus
	$(\'#ms_id\').focus(function()
	{	
		if($(this).val()==\'Enter your myspace id\')
		{
			clearMePrevious = $(this).val();
			$(this).val(\'\');
		}
	});

// if field is empty afterward, add text again
	$(\'#ms_id\').blur(function()
	{
		if($(this).val()==\'\')
		{
			$(this).val(clearMePrevious);
		}
	});
	
	 $("#add_form").validate({
	 	rules: {
	 		ms_id: {
		 		required: true,
			    number: true
			    
			}
 	 	},
 	 	messages: {
    		ms_id: "Please enter a valid id.",
    		
    	}
	 });
});
</script>
'; ?>


</head>
<body>

<div id="content" class="container_12">
	<div class="grid_6">
		<h1>Get a RSS feed from your Myspace Events</h1>
		<p>Here's an API for getting feeds from your Myspace events / shows. It's still in <em>beta</em>.</p>
		<p>Too keep your showlist up to date it's required to add your band to the system. I've set up a automated script that runs every night to get the latest data from your myspace. So keep in mind that shows added on your myspace will appear the next day in the results.</p>
		
		<h1>Add your band</h1>
		<?php if ($this->_tpl_vars['succes_message']): ?>
			<div class='success'><?php echo $this->_tpl_vars['succes_message']; ?>
</div>
		<?php else: ?>
			<?php if ($this->_tpl_vars['error_message']): ?><div class='error'><?php echo $this->_tpl_vars['error_message']; ?>
</div><?php endif; ?>
			<form action="/add_band" method="post" id="add_form">
			<p id="add" class="clearfix"><input id="ms_id" type="text" name="ms_id" value="Enter your myspace id" /><input class="submit" type="submit" name="submit" value="Add" /></p>
			<p class="info">Click view photos on your profile, then copy the value of the friendID parameter from the url. That's your Myspace id.</p>
			</form>
		<?php endif; ?>
		
		<h1>API Documentation</h1>
		<p>The API works fairly easy there is not authing or anything, just 1 call. The base url is http://myspace.jochemschutte.nl/api/ where you add your arguments defined below. There 2 response formats to choose from: <a href="http://en.wikipedia.org/wiki/RSS" title="More info about RSS on Wikipedia">RSS</a> & <a href="http://en.wikipedia.org/wiki/JSON" title="More info about JSON on Wikipedia">JSON</a></p>
		
			
		<h1>Arguments</h1>
		<dl class='arguments'>
			<dt>format <span class='required'>required</span></dt><dd>The format of the result in RSS or JSON</dd>
			<dt>myspace_id <span class='required'>required</span></dt><dd>The bands myspace id</dd>
			<dt>limit <span class='optional'>optional</span></dt><dd>Number of events to return, default is all</dd>
			<dt>callback <span class='required'>required for JSON</span></dt><dd>just add &callback=? at the end of the url for JSON</dd>
		</dl>
		
		<h1>Call example</h1>
		<pre>http://myspace.jochemschutte.nl/api/?format=rss&myspace_id=4459262</pre>
		
		<h1>Response example</h1>
<pre>&lt;channel&gt;
	&lt;item&gt;
		&lt;date&gt;Thu, 26 Nov 2009 20:00:00 +0100&lt;/date&gt;
		&lt;venue&gt;Roadmender&lt;/venue&gt;
		&lt;city&gt;Northampton, UK&lt;/city&gt;
		&lt;street&gt;&lt;/street&gt;
		&lt;description&gt;&lt;/description&gt;
		&lt;link&gt;http://events.myspace.com/Event/6357316/Peel&lt;/link&gt;
	&lt;/item&gt;
&lt;/channel&gt;</pre>

		<h1>Examples</h1>
		<ul>
			<li><a href='/example/json' title='View an example using JSON'>View an example using the API with JSON</a></li>
		</ul>
		

		<h1>To do list</h1>
		<ul>
			<li><del>Errors when there is a failed call</del></li>
			<li><del>Speed things up a little</del></li>
			<li>Collecting feedback from you</li>
		</ul>
		
		<h1>Got feedback?</h1>
		<p>Please contact me! I would love hear what you think or get suggestions. Email me at <a href='mailto:hi@jochemschutte.nl' title="Email me">hi@jochemschutte.nl</a> or twitter me <a href='http://twitter.com/jchm' title="I'm on twitter!">@jchm</a>.</p>
	</div>
</div>

<?php echo '
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src=\'" + gaJsHost + "google-analytics.com/ga.js\' type=\'text/javascript\'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-2006582-4");
pageTracker._trackPageview();
} catch(err) {}</script>
<script type="text/javascript" src="http://www.observerapp.com/record.js"></script>
<script type="text/javascript">
try { Observerapp.record("4c95dd6011e702c87b010b5f"); } catch(e) {};
</script>
'; ?>

</body>
</html>