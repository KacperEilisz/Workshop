<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">

<head>
	<title>Aplikacja bazodanowa!</title>
	<meta charset="utf-8" />
	
       	<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css"
		integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
	<link rel="stylesheet" href="{$conf->app_url}/css/style.css">
        
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="{$app_url}/assets/css/main.css" />
	<noscript><link rel="stylesheet" href="{$app_url}/assets/css/noscript.css" /></noscript>
</head>

<body class="is-preload">

<div id="wrapper" class="fade-in">
	
                <!-- pasek z logo -->
                <header id="header">
			<a href="{$app_url}" class="logo">Projekt baza danych</a>
		</header>
    
                <!-- menu na pasku -->
                <nav id="nav">
			<ul class="links">
				<li class="inactive"><a href="{$conf->action_root}personList" class="pure-menu-heading pure-menu-link">Lista</a></li>
                                {if count($conf->roles)>0}
                                <a href="{$conf->action_root}personList" class="pure-menu-heading pure-menu-link">Wyloguj</a></li>
                                {else}	
                                <a href="{$conf->action_root}personList" class="pure-menu-heading pure-menu-link">Zaloguj</a></li>
                                {/if}
			</ul>
		</nav>
    
    
    <a href="{$conf->action_root}personList" class="pure-menu-heading pure-menu-link">Lista</a>
{if count($conf->roles)>0}
	<a href="{$conf->action_root}logout" class="pure-menu-heading pure-menu-link">Wyloguj</a>
{else}	
	<a href="{$conf->action_root}loginShow" class="pure-menu-heading pure-menu-link">Zaloguj</a>
{/if}
</div>

{block name=top} {/block}

{block name=messages}

{if $msgs->isMessage()}
<div class="messages bottom-margin">
	<ul>
	{foreach $msgs->getMessages() as $msg}
	{strip}
		<li class="msg {if $msg->isError()}error{/if} {if $msg->isWarning()}warning{/if} {if $msg->isInfo()}info{/if}">{$msg->text}</li>
	{/strip}
	{/foreach}
	</ul>
</div>
{/if}

{/block}

{block name=bottom} {/block}

</body>

</html>