<!-- On peut écrire du HTML dans un fichier avec l'extension '.php' MAIS l'inverse n'est pas possible -->
<style>
	h2{
		background: black;
		color: orange;
		text-align: center;
	}
	.rouge{color:red;}
</style>

<h2>Ecriture et affichage</h2>

<?php //balise ouvrante php

	//Ici, on ouvre un passage PHP pour y faire traitements PHP
	/*
		Commentaire sur 
		plusieurs lignes
	*/
	//CHAQUE INSTRUCTION DOIT SE TERMINER PAR UN POINT VIRGULE !!!

?> <!-- balise fermante php -->

<?php

	echo "Bonjour tout le monde"; 
	//echo est une instruction qui permet de faire un affichage

	echo '<p class="rouge">Hello</p>'; //on peut y inclure des balises HTML

	print "<strong>Hello</strong>";
	//print est aussi une instruction pour effectuer un affichage (similaire à 'echo')
?>

<?php echo "<p>On est lundi</p>"; ?>

<?= "<p>On est le matin</p>"; // le '=' remplace le 'php echo' ?>

<h2>Les variables : les types, déclaration et affectation</h2>

<?php
//Une variable : est un espace nommé qui permet de conserver une ou plusieurs valeurs

//déclaration d'un variable avec le symbole '$' ! 
//Par convention, on ne doit pas nommer une variable en commencant par une chiffre ou un underscore ( '_' )

$a = 345; //declaration d'une variable nommée '$a' et affectation de la valeur "345"

//echo $a; //Ici, affichage de la variable $a
echo gettype( $a ) . '<br>';
//gettype() : fonction prédéfinie de PHP qui permet de connaitre le type d'une variable, ici : integer

$a = "Chaine de caractères";
echo gettype( $a ) . '<br>'; //string

$a = "67";
echo gettype( $a ) . '<br>'; //string, car le nombre est entre guillemets (ou quotes) et sera donc interprété comme une chaine de caractères

$a = 1.2;
echo gettype( $a ) . '<br>'; //double (nombre à virgule)

$a = false; //ou 'true'
echo gettype( $a ) . '<br>'; //boolean

//-----------------------------------------------------------------------
echo "<h2>La concaténation </h2>";
//On concatène toujours avec le symble 'point' : '.' ! La concaténation permet de rassembler des chaines de caractères et des variables ( ou des fonctions du langages php)

$x = "Bonjour";
$y = 'tout le monde';

echo $x . ' => ' . $y . '<br>';

//-------------------------------------
// les doubles quotes (guillemets) permettent d'interpréter les variables ALORS que les quotes simples (apostrophes) n'interprétent pas les variables et renverra une chaine de caractères.

echo '$x $y <br>';  // affiche '$x $y' => quotes simples
echo "$x $y <br>";  // affiche 'Bonjour tout le monde' => doubles quotes

echo "<strong>" , $x , '</strong>'; //concaténatino possible avec le symbole virgule ','

//---------------------------------------------------------------------
echo "<h2>La concaténation lors de 'affectation</h2>";

$prenom = 'Marco'; //declaration + affectation
echo $prenom . '<br>'; //marco

$prenom = 'Polo'; //réaffectation (écrase et remplace)
echo $prenom . '<br>';  //polo


$pseudo = 'Anne'; 
echo $pseudo . '<br>'; //anne

$pseudo .= '-Marie'; //affectation de la valeur '-Marie' sur la variable $speudo MAIS cela s'ajoute SANS remplacer la valeur précédente grâce à l'opérateur '.='
echo $pseudo . '<br>';

//---------------------------------------------------------------------
echo '<h2>Les constantes et constantes magiques</h2>';
//Une constante : est un espace nommé qui permet de conserver une valeur SAUF QUE comme son nom l'indique, la valeur sera constante !

define('CAPITALE', 'Paris');
//par convention, une constante se déclare toujours en MAJUSCULE !
//define( arg1, arg2 );
	//arg1 : nom de la constante
	//arg2 : valeur de la constante

echo CAPITALE . '<br>'; //affiche 'Paris'

//------------------------------------
//Constantes magiques :

echo __FILE__ . '<br>'; //chemin complet vers le fichier courant (bases.php)
echo __LINE__ . '<br>'; //affiche le numéro de la ligne (ici, 114)
echo __DIR__ . '<br>'; //chemin complet vers le dossier courant (ici, PHP_Doranco)

//-----------------------------------------------------------------------
echo "<h2>EXERCICE</h2>";
// afficher : "bleu - blanc - rouge" (avec les tirets) en mettant chaque couleur dans une variable :

$a = 'bleu';
$b = 'blanc'; 
$c = 'rouge'; 

echo "$a - $b - $c <br>";
echo $a . ' - ' . $b . ' - ' . $c . '<br>';

	$couleur = 'bleu';
	$couleur .= ' - blanc';
	$couleur .= ' - rouge'; 
	echo $couleur;

//-----------------------------------------------------------------------
echo "<h2>Opérateurs arithmétiques</h2>";

$a = 10;
$b = 2;

echo $a + $b . '<br>'; //12
echo $a - $b . '<br>'; //8
echo $a * $b . '<br>'; //20
echo $a / $b . '<hr>'; //5

//opération et affectation :

$a += $b; // equivaut à : $a = $a + $b
echo $a . '<br>'; //12

$a -= $b; // equivaut à : $a = $a - $b
echo $a . '<br>'; //10

$a /= $b; // equivaut à : $a = $a / $b
echo $a . '<br>'; //5

$a *= $b; // equivaut à : $a = $a * $b
echo $a . '<br>'; //10

//-----------------------------------------------------------------------
echo "<h2>Structures conditionnelles (if/else)</h2>";

//isset() et empty() 
	//isset() : teste si ca existe (si c'est défini)
	//empty() : teste si c'est vide (0 ou non défini)

$vara = 0;
$varb = '';

if( empty( $vara ) ){ //SI c'est vide, 0 ou non défini ALORS j'exécute le code entre les accolades

	echo "La variable vara : 0, vide ou non défini <br>";
}

if( isset( $varb ) ){ //SI la variable $varb existe ALORS j'exécute le code entre les accolades

	echo "La variable varb : existe et est défini par rien <br>";
}

//----------------------------------------------
// if / elseif / else
$a = 10;
$b = 5;
$c = 2;

if( $a > $b ){ //Si $a (10) est supérieur à $b (5), ALORS j'exécute les instructions entre les accolades

	echo "A = $a est bien supérieur à B = $b <br>";
}
else{ //SINON... (cas par défaut)

	echo "A n'est pas supérieur à B <br>";
}

//----------------------------------------------
// => ET : &&
if( $a > $b && $b > $c ){ //SI $a (10) est supérieur à $b (5) ET QUE $b (5) est supérieur à $c (2)

	echo "Ok pour les deux conditions <br>";
}

//----------------------------------------------
// => OU : || (altGR+6)
if( $a == 8 || $b > $c ){ //SI $a (10) est égale à 8 OU QUE $b (5) est supérieur à $c (2)

	echo "Ok pour au moins une des deux conditions <br>";
}

//----------------------------------------------
// => XOR : seulement une des deux (ou plus) conditions doit etre vraie
if( $a == 8 XOR $b == 5 ){ //SI $a (10) est égal à 8 OU QUE $b (5) est égale à 5

	echo "Ok pour une seule condition exclusive <br>";
	//SI les deux conditions sont vraies OU que les deux conditions sont fausses, alors on ne rentrera pas dans le if
}

//----------------------------------------------
//If / elseif / else
if( $a == 8 ){ //SI $a (10) est égale à 8

	echo "1 - A est égal à 8 <br>";
}
elseif( $a != 10 ){ //SINON SI $a (10) est différent de 10

	// le point d'exclamation '!' signifie : "différent de" => c'est l'inverse de quelquechose 
	echo "2 - A est égal différent de 10 <br>";
}
else{ //SINON... (cas par défaut)

	echo "3 - Tout est faux ! <br>";
}

//----------------------------------------------
//Forme contractée : condition ternaire

echo ($a == 10) ? "A est égale à 10 <br>" : "A n'est pas égale à 10<br>";
//Ici, le '?' remplace le 'if' et les ':' remplacent le 'else'

//traduction If/else => LA MEME chose que la ligne du dessus
if( $a == 10 ){

	echo "A est égale à 10 <br>";
}
else{
	echo "A n'est pas égale à 10 <br>";
}

//----------------------------------------------
//comparaison : 

$vara = 1; //integer
echo '$vara est de type : ' . gettype( $vara ) . '<br>';

$varb = "1"; //string
echo '$varb est de type : ' . gettype( $varb ) . '<br>';

if( $vara == $varb ){ //renvoie 'true'

	echo "Il s'agit de la même chose car la valeur est la même !<br>";
}
//-------------------------

if( $vara === $varb ){ //renvoie false

	echo 'Il s\'agit de la même chose <br>';
}
else{

	echo "L'égalite est fausse puisque le type est différent alors que la valeur est la même <br>";
}

/*
Avec le triple égal '===', le test ne fonctionne pas car les types des variables sont différentes. L'un est entier (INTEGER) et l'autre est une chaine (STRING) donc ce n'est pas strictement égal.

	'='		: affectation
	'=='	: comparaison en valeur
	'==='	: comparaison en valeur ET en type
*/

//-----------------------------------------------------------------------
echo "<h2>Condition SWITCH</h2>";

$couleur = 'jaune';

switch( $couleur ){

	case 'bleu' :
		echo "Vous aimez le bleu <br>";
	break;

	case 'vert' : 
		echo "Vous aimez le vert<br>";
	break;

	case 'rouge' : 
		echo "Vous aimez le rouge";
	break;

	default : //cas par défaut si on ne rentre pas dans les cas précédents
		echo "Vous n'aimez pas la couleur <br>";
	break;
}

//---------------------------------------------------
//EXERCICE : retranscrire la condition switch ci-dessus en une condition if/else :
if( $couleur == 'bleu' ){

	echo "Vous aimez le bleu <br>";
}
elseif( $couleur == 'vert' ){

	echo "Vous aimez le vert<br>";
}
elseif( $couleur == 'rouge' ){

	echo "Vous aimez le rouge <br>";
}
else{
	echo "Vous n'aimez pas la couleur <br>";
}

//version ternaire :
echo ( $couleur == 'bleu' ) ? "Vous aimez le bleu <br>" : 
		( ( $couleur == 'vert' ) ? "Vous aimez le vert<br>" : 
			( ( $couleur == 'rouge' ) ? "Vous aimez le rouge<br>" : "Vous n'aimez pas la couleur<br>" ) );

//-----------------------------------------------------------------------
echo "<h2>Fonctions prédéfinies</h2>";

echo 'Date : ' . date("d/m/Y") . '<br>';

$mail = "jeremie@doranco.fr";

echo strpos( $mail, "@" ) . '<br>';
	//strpos( arg1, arg2) : indique la position d'un caractère dans une chaine
		//arg1 : lachaine à parcourir
		//arg2 : le caractère où l'on veut afficher la position

	// ATTENTION : Ici, on affiche 7 car on commence à compter à aprtir de zéro !

$phrase = "Voici une phrase";

echo iconv_strlen( $phrase ) . '<br>';
//iconv_strlen() : permet de retourner la taille de la chaine

$texte = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat nonproident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

echo substr( $texte, 0, 20 ) . "...<a href=''>Lire la suite</a><br>";

//substr( arg1, arg2, arg3)
	//arg1 : la chaine que l'on souahite couper
	//arg2 : la position de départ
	//arg3 : la longueur de la découpe

//------------------------------------------------------------------------------

function tva( $nombre ){

	return $nombre * 1.2;
}

echo "100€ avec un taux de 20% vaut : " . tva( 100 ) . " €<br>";

//------------------------------
//EXERCICE : Amélioration la fonction tva() afin que l'on puisse calcule un nombre avec un taux de choix : (BONUS : mettre un taux par défaut)
function tva2( $nombre, $taux = 1.2 ){
	//$taux = 1.2 correspond à un taux par défaut si cet argument ($taux) n'est pas renseigné lors de l'appel de la fonction

	return $nombre * $taux;
}

echo "La somme demandée est : " . tva2( 100, 1.055 ) . " €<br>";

// => IMPOSSIBLE de nommer deux fonctions de la même manière.

//------------------------------
//EXERCICE : Créer une fonction meteo qui attendra deux arguments (saison, temperature) qui permet d'afficher : 
	//" Nous sommes en saison et il fait temperature degrés <br>" :

	//-------------------------------------------------------
	//SUITE Exercice : Gérer l'article 'au' SI la saison est 'printemps' et gérer le 's' de degré SI on est strictement au dessus de 2° ou en dessous de -2°


	function meteo( $saison, $temperature){

		if( $saison == 'printemps' ){ //SI la saison est égale à 'printemps', ALORS je vais créer une variable avec la valeur 'au'
	
			$article = ' au ';
		}
		else{ //sinon, c'est que nous sommes en hiver, automne ou été
	
			$article = ' en ';
		}
		// ( $saison == 'printemps' ) ? $article = ' au ' : $article = ' en ';
	
		if( $temperature > 2 || $temperature < -2 ){ //SI la temperature est supérieure à 2 ou que la température est inférieure à -2 alors on déclare une variable avec un 's'
	
			$temp = ' degrés';
		}
		else{ // SINON, c'est que l'on se trouve dans l'intervalle ]-2 : 2[, alors on déclare une variable sans 's'
	
			$temp = " degré";
		}
	
		echo "Nous sommes $article $saison et il fait $temperature $temp<br>";
	}
	
	meteo( 'ete', 23 ); // appel et exécution de la fonction
	meteo( 'hiver', -4 );
	meteo( 'hiver', 1 );
	meteo( 'automne', 12.6 );
	meteo( 'printemps', 0);
	meteo( 'printemps', 18 );
	

	echo '<h2>Structures itératives : les boucles</h2>';

//Boucle WHILE :
$i = 0; //initialisation

while( $i < 5 ){ // TANT QUE $i est inférieur à 5, on exécute le code entre les accolades

	echo "$i => ";

	$i++; //incrémentation : $i++ <=> $i = $i + 1
}

//resultat : 0 => 1 => 2 => 3 => 4 =>
echo '<hr>';

//-------------------------------
//EXERCICE : Enlever la flêche à la fin
	// résultat : 0 => 1 => 2 => 3 => 4

$i = 0;

while( $i < 5 ) : //Ici, les ':' remplace l'accolade ouvrante de la boucle while

	if( $i == 4 ){
		echo $i;
	}
	else{
		echo "$i => ";	
	}
	$i++;

endwhile; //Ici, le 'endwhile' remplace l'accolade fermante de la boucle while

echo '<hr>';
//------------------------------------
//Boucle FOR :

for( $i = 0; $i < 11; $i++ ){ //initialisation; condition; incrémentation

	echo $i . '<br>';
}
/*
Une boucle 'for' va répéter un nombre de fois défini l'instruction que l'on demande à répéter

A la différence d'une boucle 'while' qui va répéter indéfiniment l'instruction TANT QUE la condition n'est pas réalisée

Si l'on doit faire une boucle MAIS que l'on ne sait pas combien de fois on va passer dans la boucle, on utilisera une boucle 'while' !!
*/
//-----------------------------------------------------------------------------

echo '<select>';
	
	for( $i = 31; $i > 0; $i--){ //31 tours boucles |  $i-- <=> $i = $i - 1

		echo "<option> $i </option>";
	}

echo '</select><br>';

?>
<select>
	<?php  for( $i = 31; $i > 0; $i-- ) : ?>

		<option><?php echo $i ?></option>

	<?php endfor ?>
</select><br>
<?php
//---------------------------------------------------
// EXERCICE : affichez les numéros de 1 à 10 dans un tableau sur UNE SEULE LIGNE !

echo '<table border="1">';
	echo "<tr>";

		for( $i = 1; $i < 11; $i++ ){

			echo "<td> $i </td>";
		}

	echo "</tr>";
echo '</table>';

//---------------------------------------------------
// EXERCICE : (boucles imbriquées) Créer un tableau avec 10 lignes contenant 10 cellules allant de 1 à 100 !


$compteur = 1;

echo "<table border='2'>";
	for( $i = 1; $i < 11; $i++ ){ //10 tours de boucles (pour les 10 lignes)

		echo "<tr>";

			for( $j = 1; $j < 11; $j++ ){ //10 tours de boucles (pour les 10 cellules)

				echo "<td> $compteur </td>";
				$compteur++;
			}

		echo "</tr>";
	}
echo "</table>";


//-------------------------------------------------------------------------------
echo '<h2>Les arrays (les tableaux)</h2>';

//declaration d'un array en utilisant la fonction array() :
$liste = array('marco', 'polo', 45, 'pomme');

$fruit = array('p' => 'pomme', 'c' => 'cerise', 'a' => 'abricot');

//parcourir un tableau :
echo '<pre>';
	var_dump( $liste );
	var_dump( $fruit );
echo '</pre>';

echo '<hr>';

echo '<pre>';
	print_r( $liste );
	print_r( $fruit );
echo '</pre>';

//Affichez 'marco' : on appelle le tableau et entre crochets, on précise l'indice de l'élément que l'on souhaite afficher
echo $liste[0] .'<br>';
//Affichez 'abricot' :
echo $fruit['a'] .'<br>';

//---------------------------------------------
//Autre manière de déclarer un tableau :

$tableau = ['carotte', 'courgette', 'artichaud' ];

$tableau[] = 'epinard'; //Ici, on rajoute une valeur à notre tableau

print '<pre>';
	print_r( $tableau );
print '</pre>';

//-----------------------------------------------------------------------------
echo '<h2>La boucle foreach()</h2>';
//La boucle foreach() fonctionne UNIQUEMENT sur les tableaux (ou objets). Elle retournera une erreur si l'on tente de l'exécuter sur una variable autre qu'un array (ou object)

//foreach() : permet de passer en revu les données d'un tableau

	// le mot clé 'AS' est OBLIGATOIRE, il fait parti de la boucle foreach!

//Si il a deux variables (ici, $key et $value) en argument APRES le mot clé "AS", la première ($key) parcours la colonne des indices et la seconde ($value) parcours la colonne des valeurs du tableau.
foreach( $tableau as $key => $value ){

	echo "L'indice : $key correspond à la valeur :  $value <br>";
}

//Si il n'y a qu'une seule variable en argument APRES le mot clé "AS", alors cette variable parcours la colonne des valeurs.
foreach( $tableau as $valeur ){

	echo $valeur . '<br>';
}

//---------------------------------------------
//Autre syntaxe -> On remplace l'accolade ouvrante par les ':' et l'accolade fermante par 'endforeach'
foreach( $tableau as $legume ) :

	echo $legume . " / ";

endforeach;

//-----------------------------------------------------------------------------

//-----------------------------------------------------------------------------
echo '<h2>Les arrays multidimentonnels</h2>';
//les arrays multidimentionnels sont des tableaux imbriqués dans un autre tableaux

$multi = array( 
				0 => array("prenom" => "Marco", "nom" => 'Polo' ) , 
				1 => array("prenom" => "Jean", "nom" => 'Jacques' ) , 
				2 => array("prenom" => "Bob", "nom" => 'Marley' ) 
			);

//echo $multi; // erreur, on ne peut pas afficher un tableau tel quel, il faut parcourir les données du tableau !

echo '<pre>';
	print_r( $multi );
echo '</pre>';

//affichez 'Bob' :
echo $multi[2]['prenom'];

//------------------------------------------------
//EXERCICE : Parcourir les infos de mes tableaux imbriqués ($multi) : grâce aux boucles foreach :

	foreach ($multi as $key => $sous_tableau) {
		//Ici, on parcours le tableau '$multi', $key parcours les indices (0,1,2) et $sous_tableau parcours les valeurs (les arrays avec les noms et prénoms)
		
			foreach( $sous_tableau as $indice => $valeur ){
			//Ici, on parcours les sous tableaux ($sous_tableau), $indice représente les indice (prenom, nom) et $valeur parcours les valeurs (ex: 'marco', 'polo' etc.)
		
				echo "$indice : $valeur <br>";
			}
		}
		//----------------------------------------
		foreach ($multi as $sous_tableau) {
		
			foreach( $sous_tableau as $valeur ){
		
				echo "$valeur <br>";
			}
		}
		//----------------------------------------
		echo '<hr>';
		
		//count() et sizeof() : permettent de renvoyer la taille d'un tableau
		echo "Taille du tableau liste : " . count( $liste ) . '<br>';
		echo "Taille du tableau multi : " . sizeof( $multi ) . '<br>'; //3
		
		//si on veut ressortir tous les prénoms du tableau $multi :
		for( $i = 0; $i < sizeof( $multi ); $i++ ){
		
			echo $multi[$i]['prenom'] . '<br>';
		}
		
		//------------------------------------------------------------------------------
		echo "<h2>Les objets</h2>";
		//les objets sont un autre types de données. Un peu à la manière des arrays, il permet de regrouper des informations.
		//Ici, on parlera de propriétés (=variables) et de méthodes (=fonctions)
		
		class Etudiant{
		
			public $prenom = 'Jeremie'; // 'public'  : permet de dire que la propriété est accessible PARTOUT ( il existe aussi : 'protected', 'private')
		
			public $age = 45;
		
			public function pays(){
		
				return 'France';
			}
		}
		
		//Un objet est un conteneur symbolique qui possède sa PROPRE existence et incorpore des informations (propriétés) et des mécanismes (méthodes)
		
		$etudiant1 = new Etudiant; //le mot clé "new" permet d'instancier (déployer) la classe Etudiant et d'en faire un objet. On se servira de ce qu'il a à l'intérieur de la classe via l'objet.
		
		print '<pre>';
			var_dump($etudiant1);
		
			print_r($etudiant1);
		print '</pre>';
		
		//Affiche 'jeremie'
		echo $etudiant1->prenom .'<br>'; // dans un array, on va piocher les infromations les crochets [] alors qu'ici, avec les objets on utilisera la fleche '->' pour accéder aux informations de la classe.
		
		echo $etudiant1->age . '<br>';
		
		print '<pre>';
			print_r( get_class_methods( $etudiant1 ) );
			//get_class_methods( $object) peremt de voir les méthodes disponibles sur un objet
		print '</pre>';
		
		//Appel de la méthode TOUJOURS avec des parenthèses
		echo $etudiant1->pays();
		
		//-----------------------------------------------------------------------------
		echo "<h2>Les inclusions</h2>";
		
		echo "Première fois : ";
include "exemple.inc.php"; 

echo 'Deuxième fois : ';
include_once "exemple.inc.php"; //Le 'once' permet de vérifier si le fichier a déjà été inclus. Si c'est la cas, il ne le ré-inclus pas !!

//-------------------------------------
echo "<hr>Première fois : ";
require "exemple.inc.php"; 

echo 'Deuxième fois : ';
require_once "exemple.inc.php";

//différence entre include et require :
	//include : fait une erreur et continue l'exécution du script
	//require : fait une erreur et STOP l'exécution du script









?>




















	
	
	
	





















