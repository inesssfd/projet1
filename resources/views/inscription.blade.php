<!-- resources/views/inscription.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Inscription</title>
</head>
<body>

<h2>Inscription</h2>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<form method="POST" action="{{ route('inscription.register') }}">
    @csrf
    <label for="nom">Nom:</label><br>
    <input type="text" id="nomVisiteur" name="nomVisiteur"><br>

    <label for="prenom">Prénom:</label><br>
    <input type="text" id="prenomVisiteur" name="prenomVisiteur"><br>

    <label for="login">Login:</label><br>
    <input type="text" id="login" name="login"><br>

    <label for="mdp">Mot de passe:</label><br>
    <input type="password" id="mdp" name="mdp"><br>

    <label for="adresse">Adresse:</label><br>
    <input type="text" id="adresseVisiteur" name="adresseVisiteur"><br>

    <label for="ville">Ville:</label><br>
    <input type="text" id="villeVisiteur" name="villeVisiteur"><br>

    <label for="cp">Code postal:</label><br>
    <input type="text" id="cp_visiteur" name="cp_visiteur"><br>

    <label for="date_embauche">Date d'embauche:</label><br>
    <input type="date" id="dateEmbaucheVisiteur" name="dateEmbaucheVisiteur"><br>

    <input type="submit" value="S'inscrire">
</form>

</body>
</html>
