<form method="POST" action="{{ route('login') }}">
    @csrf

    <label for="login">Login:</label><br>
    <input type="text" id="login" name="login"><br>

    <label for="mdp">Mot de passe:</label><br>
    <input type="password" id="mdp" name="mdp"><br>

    <input type="submit" value="Se connecter">
</form>
