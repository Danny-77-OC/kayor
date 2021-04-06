<?php
//on vérifie si "vélo" est bien dans un texte
if (preg_match('#vélo#', 'conduire un vélo')) {
    echo "vrai";
}else{
    echo "faux";
}


?>



<?php
//vérifier qu'un mot est bien présent à la fin d'un texte avec "$"
if (preg_match('#PHP$#i', 'maitrise du php')) {
    echo "vrai";
}else{
    echo "faux";
}
?>

<?php
//vérifier qu'un mot est bien présent en début d'un texte avec "^"
if (preg_match('#^maitrise#i', 'maitrise du php')) {
    echo "vrai";
}else{
    echo "faux";
}
?>


<?php
//vérifier que un nombre compris entre[1-5] est bien présent dans un texte 
if (preg_match('#<h[1-5]>#i', '<h2>maitrise du php</h2>')) {
    echo "vrai";
}else{
    echo "faux";
}
?>

<?php
//compter la présence d'un caractère ou nombre
//on souhaite que çà commence par un nombre comris entre [0-9] grace à "^" et que çà finisse par de compter à {3} grace à "$"
if (preg_match('#^[0-9]{3}$#i', '888')) {
    echo "vrai";
}else{
    echo "faux";
}
?>

<?php
//vérifier si un point d'interrogation est bien présent dans une phrase avec l'antislash "\"
if (preg_match('#\?#i', 'comment ?')) {
    echo "vrai";
}else{
    echo "faux";
}
?>


<?php
//valider la forme d'une date
if (preg_match('#^[0-9]{2}/[0-9]{2}/[0-9]{4}$#i', '05/09/2010')) {
    echo "vrai";
}else{
    echo "faux";
}
?>


<?php
$time= preg_replace('#^([0-9]{2})/([0-9]{2})/([0-9]{4})$#', '$3','05/09/2010');
echo $time;
?>
