<?php
// Question 1 et 2 : Calculer la moyenne des notes pour chaque étudiant
$etudiants = [
    'Charlotte' => ['Math' => 15, 'Physique' => 14],
    'Lucas' => ['Math' => 10, 'Physique' => 12],
];

foreach ($etudiants as $nom => $notes) {
    $moyenne = array_sum($notes) / count($notes);
    echo "$nom : $moyenne<br>";
}

// Question 3 : Formulaire de connexion par email et mot de passe
?>

<!-- Formulaire pour la connexion -->
<form method="POST">
    Email : <input type="email" name="email" required><br>
    Mot de passe : <input type="password" name="password" required><br>
    <button type="submit">Se connecter</button>
</form>

<?php
$utilisateurs = [
    'charlotte@example.com' => '1234',
    'lucas@example.com' => 'abcd',
];
if ($_POST) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    if (isset($utilisateurs[$email]) && $utilisateurs[$email] === $password) {
        echo "Connexion réussie, bienvenue $email !";
    } else {
        echo "Email ou mot de passe incorrect.";
    }
}
?>

<?php
// Question 4 : Afficher la ville la plus chaude
$villes = ['Paris' => 24, 'Lyon' => 30, 'Marseille' => 35];
arsort($villes);
$plusChaud = key($villes);
echo "La ville la plus chaude est $plusChaud avec {$villes[$plusChaud]}°C.";
?>

<?php
// Question 5 : Formulaire de commentaire
?>
<!-- Formulaire pour soumettre un commentaire -->
<form method="POST">
    Commentaire : <textarea name="commentaire" required></textarea>
    <button type="submit">Soumettre</button>
</form>

<?php
$commentaires = [];
if ($_POST) {
    $commentaire = htmlspecialchars($_POST['commentaire']);
    $commentaires[] = ['texte' => $commentaire, 'date' => date('Y-m-d H:i:s')];
}

foreach ($commentaires as $c) {
    echo "{$c['texte']} ({$c['date']})<br>";
}
?>

<?php
// Question 6 : Afficher la ville la plus chaude (répétée)
$villes = ['Paris' => 24, 'Lyon' => 30, 'Marseille' => 35];
arsort($villes);
$plusChaud = key($villes);
echo "La ville la plus chaude est $plusChaud avec {$villes[$plusChaud]}°C.";
?>

