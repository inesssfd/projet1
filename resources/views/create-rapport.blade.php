<form action="{{ route('rapport.store') }}" method="POST">

    <!-- Champs pour saisir les détails du rapport -->
    <label for="dateRapport">Date du rapport :</label>
    <input type="date" name="dateRapport" required>
    <br>

    <label for="motif">Motif :</label>
    <input type="text" name="motif" required>
    <br>

    <label for="bilan">Bilan :</label>
    <textarea name="bilan" required></textarea>
    <br>

    <label for="idMedecin">Médecin :</label>
    <select name="idMedecin" required>
        @foreach($medecins as $medecin)
            <option value="{{ $medecin->id }}">{{ $medecin->nom }} {{ $medecin->prenom }}</option>
        @endforeach
    </select>
    <br>
    @csrf
    <button type="submit">Soumettre</button>
</form>
