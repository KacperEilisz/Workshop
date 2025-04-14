<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
	<meta charset="utf-8" />
	<title>Kalkulator kredytowy</title>
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
</head>
<body>

<div style="width:90%; margin: 2em auto;">
	<a href="{$app_root}/controlers/inna_chroniona.php" class="pure-button">kolejna chroniona strona</a>
	<a href="{$app_root}/controlers/logout.php" class="pure-button pure-button-active">Wyloguj</a>
</div>

<div style="width:90%; margin: 2em auto;">

<form action="{$app_root}/controlers/calc.php" method="post" class="pure-form pure-form-stacked">
	<legend>Kalkulator kredytowy</legend>
	<fieldset>
		<label for="id_kwota">Kwota kredytu: </label>
		<input id="id_kwota" type="text" name="kwota" value="{$form->kwota}" />
		
		<label for="id_procent">Procent kredytu: </label>
		<input id="id_procent" type="text" name="procent" value="{$form->procent}" />
		
		<label for="id_okres">Okres kredytowania: </label>
		<input id="id_okres" type="text" name="okres" value="{$form->okres}" />
	</fieldset>	

	<input type="submit" value="Oblicz" class="pure-button pure-button-primary" />
</form>	

{if isset($msgs) && $msgs->isError()}
	<ol style="margin-top: 1em; padding: 1em 1em 1em 2em; border-radius: 0.5em; background-color: #f88; width:25em;">
		{foreach $msgs->getErrors() as $err}
			<li>{$err}</li>
		{/foreach}
	</ol>
{/if}

{if isset($res->result)}
	<div style="margin-top: 1em; padding: 1em; border-radius: 0.5em; background-color: #ff0; width:25em;">
		Wynik: {$res->result}
	</div>
{/if}

</div>

</body>
</html>