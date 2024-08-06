<!-- inclusion des variables et fonctions -->

BOULEZ
<?php
session_start();
require_once(__DIR__ . '/config/mysql.php');
require_once(__DIR__ . '/databaseconnect.php');
?>

<?php
// Récupération des variables à l'aide du client MySQL
$usersStatement = $mysqlClient->prepare('SELECT * FROM users');
$usersStatement->execute();
$users = $usersStatement->fetchAll(PDO::FETCH_ASSOC);

$recipesStatement = $mysqlClient->prepare('SELECT * FROM recipes WHERE author = :author');
$recipesStatement->execute(['author' => $_GET['author']]);
$recipes = $recipesStatement->fetchAll(PDO::FETCH_ASSOC);
?>

BOUM BOUM TAMBOUR

La la la la la partons, partons, partons
La la la la la partons, partons, partons
Oui partons partons partons partons partons
Plus de nectar, plus de ciel bleu


<?php /* echo '<pre>';
print_r($recipes);
echo '</pre>';
*/
?>

<?php foreach($recipes as $recipe): ?>
<?php echo $recipe['title']; ?><br>
<?php endforeach ?>

<h1>COURS GITHUB</h1>
<h2>version 6 oiseau</h2>
<p/> Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi 
ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit 
in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur 
sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim 
id est laborum.

Je vous salue Marie, pleine de grâce ;
Le Seigneur est avec vous.
Vous êtes bénie entre toutes les femmes
Et Jésus, le fruit de vos entrailles, est béni.
Sainte Marie, Mère de Dieu,
Priez pour nous pauvres pécheurs,
Maintenant et à l’heure de notre mort.git show

Notre père qui êtes aux cieux

Que votre nom soit sanctifié

Le printemps est venu ma belle
c'est le mois des amants béni

Et l'oiseau satinant son aile
dit des vers au rebord du nid

Ma belle amie est morte
Je pleurerai toujours
Sur la tombe elle emporte mon ame
et mes amours

O jour de deuil
O jour de larmes
</p>
h1 { color : blue}

Va pensiera sul l'alli dorate
Va ti posa sui clivi sui colli

L'amour est enfant de boheme


stockhausen
et
OSSELETS

