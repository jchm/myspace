<?xml version="1.0" encoding="utf-8"?>
<rss version="2.0">
<channel>
	{foreach from=$events item=event}<item>
		<date>{$event.date|escape:'htmlall'|strip}</date>
		<venue>{$event.venue|escape:'htmlall'|strip}</venue>
		<city>{$event.city|escape:'htmlall'|strip}</city>
		<country>{$event.country|escape:'htmlall'|strip}</country>
	</item>
	{/foreach}

</channel>
</rss>