<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form method="POST">
        <label for="login">Login:</label>
        <input type="text" id="login" name="login" value="{$form.login}" required />
        <br />
        <label for="pass">Password:</label>
        <input type="password" id="pass" name="pass" value="{$form.pass}" required />
        <br />
        <input type="submit" value="Login" />
    </form>

    {if $msgs->hasErrors()}
        <ul>
            {foreach from=$msgs->getErrors() item=error}
                <li>{$error}</li>
            {/foreach}
        </ul>
    {/if}
</body>
</html>