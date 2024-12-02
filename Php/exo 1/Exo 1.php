<?php
// Question 1 : Afficher les détails de l'étudiant
$student = [
    'nom' => 'Snow',
    'prenom' => 'John',
    'matricule' => '12345'
];
echo "Nom : {$student['nom']}, Prénom : {$student['prenom']}, Matricule : {$student['matricule']}<br>";

// Question 2 : Ajouter et modifier la clé 'note'
$student['note'] = 15;
$student['note'] = 18; // Modification
echo "Note : {$student['note']}<br>";

// Question 3 : Afficher les produits avec leurs prix
$products = [
    'Produit1' => 10.5,
    'Produit2' => 25.3,
    'Produit3' => 7.8
];
foreach ($products as $name => $price) {
    echo "$name : $price €<br>";
}

// Question 4 : Calculer et afficher la moyenne des scores
$scores = [
    'Alice' => 15,
    'Bob' => 12,
    'Clara' => 18,
    'David' => 10,
    'Eve' => 14
];
$average = array_sum($scores) / count($scores);
echo "Moyenne : $average<br>";

// Question 5 : Afficher les pays et leurs populations par ordre décroissant
$countries = [
    'France' => 67000000,
    'Allemagne' => 83000000,
    'Italie' => 60000000
];
arsort($countries);
foreach ($countries as $name => $population) {
    echo "$name : $population habitants<br>";
}
?>

<!-- Question 6, 7, 8 : Formulaire pour collecter les informations utilisateur et valider l'âge -->
<form method="POST">
    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom" required><br>

    <label for="age">Âge :</label>
    <input type="number" id="age" name="age" required><br>

    <label for="couleur">Couleur préférée :</label>
    <select id="couleur" name="couleur" required>
        <option value="rouge">Rouge</option>
        <option value="vert">Vert</option>
        <option value="bleu">Bleu</option>
    </select><br>

    <button type="submit">Envoyer</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['nom']);
    $age = $_POST['age'];
    $color = htmlspecialchars($_POST['couleur']);

    // Validation de l'âge
    if (!is_numeric($age) || $age <= 0) {
        echo "Erreur : L'âge doit être un entier supérieur à 0.";
    } else {
        echo "Bienvenue, $name, vous avez $age ans, et votre couleur préférée est $color.";
    }
}
?>

<!-- Question 9 : Formulaire pour calculer la somme de deux nombres -->
<form method="GET">
    Nombre 1 : <input type="number" name="num1"><br>
    Nombre 2 : <input type="number" name="num2"><br>
    <button type="submit">Calculer</button>
</form>
<?php
if ($_GET) {
    $number1 = intval($_GET['num1']);
    $number2 = intval($_GET['num2']);
    echo "Somme : " . ($number1 + $number2);
}
?>

<!-- Question 10 : Formulaire pour sélectionner le type de compte et afficher un message de bienvenue -->
<form method="POST">
    Type de compte :
    <select name="type">
        <option value="admin">Administrateur</option>
        <option value="user">Utilisateur</option>
    </select>
    <button type="submit">Envoyer</button>
</form>
<?php
if ($_POST) {
    $accountType = htmlspecialchars($_POST['type']);
    echo $accountType === 'admin' ? "Bienvenue, administrateur !" : "Bienvenue, utilisateur simple !";
}
?>
