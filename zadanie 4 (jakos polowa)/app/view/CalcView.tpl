<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator kredytowy</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    {if $msgs->getErrors()}
        <ul>
        {foreach from=$msgs->getErrors() item=msg}
            <li>{$msg}</li>
        {/foreach}
        </ul>
    {/if}

    <form method="post" action="{$_SERVER.PHP_SELF}">
        <label for="kwota">Kwota:</label>
        <input type="text" name="kwota" value="{$form->kwota}" />
        <br />

        <label for="procent">Procent:</label>
        <input type="text" name="procent" value="{$form->procent}" />
        <br />

        <label for="okres">Okres:</label>
        <input type="text" name="okres" value="{$form->okres}" />
        <br />

        <input type="submit" value="Oblicz" />
    </form>

    {if isset($result)}
        <div>
            <h2>Wynik obliczeń:</h2>
            <p>{$result}</p>
        </div>
    {/if}
</body>
</html>