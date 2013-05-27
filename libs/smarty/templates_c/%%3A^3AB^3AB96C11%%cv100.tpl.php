<?php /* Smarty version 2.6.19, created on 2009-09-11 16:52:52
         compiled from cv100.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array('page' => 'supporter','sub' => 'clubvan100')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<div id='content'>
			
			<h1 class='blue'>Club van 100</h1>
			
			 
			
			<?php if (! $this->_tpl_vars['code']): ?>
			
			<p>Club van honderd is voor de volwassen mensen die willen supporten. Hetgeen waar men dan recht op heeft is in een ander jasje gestoken.  Na de georganiseerde clinics zal er gelegenheid zijn om  een hapje en een drankje te doen, tijdens die avond zullen VIP-arrangement kaarten voor de Nederlandse Kampioenschappen verloot gaan worden. Er zal ook een lezing plaats vinden door de sporter die voornamelijk zal gaan over de beleving als topsporter. Daarna is er tijd om lekker bij te praten en vragen te stellen aan de sporter. Uiteraard is dit een mooie gelegenheid om nieuwe mensen te ontmoeten. Dit zal eens per jaar plaats vinden. Onthoud goed je toegewezen code voor die avond, want dat zal uw lotnummer zijn. </p>
			
			<form id='contact_form' method='post' action=''>
			
			<input type='hidden' name='a' value='save'>
			
			<table id='form'>
			
				<tr>
					<td class='title'></td><td class='header' colspan='2'>Persoonlijk</td>
				</tr>
				
				<tr>
					<td class='title'>Voornaam:</td><td class='form'><input type='text' name='firstname' value='<?php echo $this->_tpl_vars['data']['firstname']; ?>
'/></td><td class='info'><?php if ($this->_tpl_vars['error']['firstname']): ?><span class='error'><?php echo $this->_tpl_vars['error']['firstname']; ?>
</span><?php else: ?><?php endif; ?></td>
				</tr>
				
				<tr>
					<td class='title'>Achternaam:</td><td class='form'><input type='text' name='name' value='<?php echo $this->_tpl_vars['data']['name']; ?>
'/></td><td class='info'><?php if ($this->_tpl_vars['error']['name']): ?><span class='error'><?php echo $this->_tpl_vars['error']['name']; ?>
</span><?php else: ?><?php endif; ?></td>
				</tr>
				
				<tr>
					<td class='title'>Email:</td><td class='form'><input type='text' name='email' value='<?php echo $this->_tpl_vars['data']['email']; ?>
'/></td><td class='info'><?php if ($this->_tpl_vars['error']['email']): ?><span class='error'><?php echo $this->_tpl_vars['error']['email']; ?>
</span><?php else: ?><?php endif; ?></td>
				</tr>
				
				<tr>
					<td class='title'></td><td class='header' colspan='2'>Adres gegevens</td>
				</tr>
				
				<tr>
					<td class='title'>Straatnaam & nummer:</td><td class='form'><input type='text' name='street' value='<?php echo $this->_tpl_vars['data']['street']; ?>
' style='width:244px;'/> <input type='text' name='housenr' value='<?php echo $this->_tpl_vars['data']['housenr']; ?>
' style='width:40px;'/></td><td class='info'><?php if ($this->_tpl_vars['error']['street']): ?><span class='error'><?php echo $this->_tpl_vars['error']['street']; ?>
</span><?php else: ?><?php endif; ?></td>
				</tr>
				
				<tr>
					<td class='title'>Plaats & postcode:</td><td class='form'><input type='text' name='city' value='<?php echo $this->_tpl_vars['data']['city']; ?>
' style='width:214px;' /> <input type='text' name='zipcode' value='<?php echo $this->_tpl_vars['data']['zipcode']; ?>
' style='width:70px;' maxlength='7'/></td><td class='info'><?php if ($this->_tpl_vars['error']['city']): ?><span class='error'><?php echo $this->_tpl_vars['error']['city']; ?>
</span><?php else: ?><?php endif; ?></td>
				</tr>
				
				<tr>
					<td class='title'></td><td class='form text'><span class='txtwarning'>Let op!</span> Alle velden moeten worden ingevuld. Op de volgende pagina word de aanmelding afgerond.</td><td class='info'></td>
				</tr>
				
				<tr>
					<td class='title'></td><td class='form'><input type='submit' name='submit' value='Verder &raquo;' class='submit'/></td><td class='info'></td>
				</tr>
			
			</table>
			
			</form>
			
			<?php else: ?>
				
				<p>U bent <strong>bijna</strong> lid van de club van 100, de volgende stap is het om het bedrag van &euro; <<25>> over te maken. Hieronder vind u al de gegevens die u nodig heeft voor de transactie. Dezelfde gegevens zijn ook naar uw email adres gestuurd, bewaar deze gegevens goed.</p>
					
				<table id='paymentDetails'>
					<tr>
						<td class="info">Rekeningnummer</td><td class='spacer'>:</td><td>46.68.64.116</td>
					</tr>
					<tr>
						<td class="info">Bank</td><td class='spacer'>:</td><td>ABN-AMRO</td>
					</tr>
					<tr>
						<td class="info">Plaats</td><td class='spacer'>:</td><td>Alphen aan den Rijn</td>
					</tr>
					<tr>
						<td class="info">Ter name van</td><td class='spacer'>:</td><td>Aziz-judo.nl</td>
					</tr>
					<tr>
						<td class="info noBorder">Betalingskenmerk</td><td class='spacer noBorder'>:</td><td class="noBorder"><?php echo $this->_tpl_vars['code']; ?>
</td>
					</tr>
				</table>
							
			<?php endif; ?>
		</div>	
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>