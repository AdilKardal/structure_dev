<?php
$valeur = 5;
echo $valeur;
echo gettype($valeur);
$nom = "Adil <br>";
echo $nom;
$booleen = false;
echo gettype($booleen);
?>

<br>

<?php
$a = 12;
$b = 10;
$total = $a + $b;
echo $total
?>

<br>

<?php
$a = 5;
$b = 3;
$c = $a + $b;
echo $a, $b, $c;
$a = 2;
echo $a;
$c = $b - $a;
echo $a, $b, $c;
?>

<br>

<?php
$a = 15;
$b = 23;
echo $a, $b;
$a = $b;
$b = $a;
echo $a, $b;
?>

<br>

<?php
// print_r($argv);
//   var_dump($argv);
// $prix = ($argv[1] * $argv[2]);
// $total = ($prix / 100) * (100 + $argv[3]);
// echo $total
?>
 
<br>

<?php
$a = "bonjour";
echo "\$a" . $a
?>

<br>

<?php
$a = "Bon";
$b = "jour";
$c = 10;
echo $a . $b . $c + 1
?>

<?php
$a = "Bonjour";
echo "<p>" . $a . " l'adrar</p>";
?>

<br>

<?php
function soustraction($a, $b)
{
    return $a - $b;
}
echo soustraction(8, 5)
?>

<br>

<?php
function arrondi($a)
{
    return round($a);
}
echo arrondi(15.4)
?>

<br>

<?php
function addition($a, $b, $c)
{
    return $a + $b + $c;
}
echo addition(8, 10, 4)
?>

<br>

<?php
function moyenne($a, $b, $c)
{
    return round(($a + $b + $c) / 3);
}
echo moyenne(10, 5, 4)
?>

<br>

<?php
function test($a)
{
    if ($a < 0) {
        echo "$a est negatif";
    } else {
        echo "$a est positif";
    };
}
echo test(-8)
?>

<br>

<?php
function test2($a, $b, $c)
{
    if ($a > $b && $a > $c) {
        echo "$a";
    } elseif ($b > $a && $b > $c) {
        echo "$b";
    } else {
        echo "$c";
    }
}
echo test2(15, 9, 82)
?>

<br>

<?php
function test3($a, $b, $c)
{
    if ($a < $b && $a < $c) {
        echo "$a";
    } elseif ($b < $a && $b < $c) {
        echo "$b";
    } else {
        echo "$c";
    }
}
echo test3(2, 9, -5)
?>

<br>

<?php
function tab2(){
  $tableau = array(5,17,1,-4);  
  $val_max = $tableau[0];
foreach ($tableau as $value) {
    if ($val_max < $value) {
        $val_max = $value;
    }
}
return $val_max;
}
echo tab2()
?>

<br>

<?php
function tab(){
  $tableau = array(5,17,1,-4);  
  $val_min = $tableau[0];
foreach ($tableau as $value) {
    if ($val_min > $value) {
        $val_min = $value;
    }
}
return $val_min;
}
echo tab()
?>

<br>

<?php 
function moy(){
    $tableau = array(15,17,10,14);
    $result = 0;
    $taille = 0;
    
    foreach ($tableau as $value) {
      $result += $value;
      $taille++;
    }
    return $result/$taille;
}
echo moy()
?>

<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Formulaire</title>
    </head>
    <body>
        <form action="#" method="post">
            <p>Addition:</p>
            <input type="number" name="nombre1">
            <input type="number" name="nombre2">
            <br>
            <input type="submit" value="Envoyer">
        </form>

        <form action="#" method="get">
            <input type="number" placeholder="prix HT" name="ht">
            <input type="number" placeholder="qte" name="qte">
            <input type="number" placeholder="TVA" name="tva">
            <br>
            <input type="submit" value="Envoyer">
        </form>

        <form action="index.php" method="POST" enctype="multipart/form-data">
            <h2>importer une image</h2>
            <input type="file" name="file">
            <br>
            <button type="submit">importer</button>
        </form>

    </body>
</html>

<?php
    // La fonction isset permet de tester l'existence d'une variable et si elle est différente de NULL
    if(isset($_POST['nombre1']) && isset($_POST['nombre2'])){
        $nombre1 = $_POST['nombre1'];
        $nombre2 = $_POST['nombre2'];
        $total = $nombre1 + $nombre2;
        echo "La somme est : $total";
    }
?>

<?php
    // La fonction isset permet de tester l'existence d'une variable et si elle est différente de NULL
    if(isset($_GET['ht']) && isset($_GET['qte']) && isset($_GET['tva'])){
        $ht = $_GET['ht'];
        $qte = $_GET['qte'];
        $tva = $_GET['tva'];
        $prix = ($ht * $qte);
        $ttc = ($prix / 100) * (100 + $tva);
        echo "Le prix TTC est égal à : $ttc €";
    }
?>