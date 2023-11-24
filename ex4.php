<?php
include("inc/header.php");
include("inc/menu.php");
?>

<h1>Perimetre d'un cercle</h1>
<form action="" method="get">
    <input type="number" name="rayon" required>
    <input type="submit" value="Envoyer">
</form>

<?php
if (isset($_GET['rayon'])) {
    $rayon = $_GET['rayon'];
    $perimetre = round($rayon*M_PI);
    $aire = round($rayon*$rayon*M_PI);
    echo "<br>Le perimetre est de " .$perimetre."<br>";
    echo "<br>L'aire est de " .$aire;

}
?>

<?php
include("inc/footer.php");

?>