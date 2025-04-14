{extends file='../../templates/main_layout.tpl'}

{block name=content}

<div style="width:90%; margin: 2em auto;">
	<h2>To jest druga chroniona strona</h2>

	<p>Witaj na drugiej chronionej podstronie! 🎉</p>

	<a href="{$app_root}/controlers/calc.php" class="pure-button">Powrót do kalkulatora</a>
	<a href="{$app_root}/controlers/logout.php" class="pure-button pure-button-active">Wyloguj</a>
</div>

{/block}