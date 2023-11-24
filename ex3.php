<?php
include("inc/header.php");
include("inc/menu.php");
?>
<h1>Pyramide avec PHP</h1>
<form action="" method="get">
    <label for="hauteur">Hauteur : </label>
    <input type="number" name="hauteur" min="2" required max="10">
    <input type="submit" value="Afficher">
</form>
<?php
if (isset($_GET["hauteur"])) {
    $hauteur = $_GET["hauteur"];
    $txt = "";
    echo "<h2> Pyramide de hauteur : " . $hauteur . "</h2>";
    for ($i = 0; $i < $hauteur; $i++) {
        $txt .= "*";
        echo $txt . "<br>";
    }
    for ($i = 0; $i < $hauteur - 1; $i++) {
        $txt = substr($txt, 0, -1);
        echo $txt . "<br>";
    }
}
?>
<?php
include("inc/footer.php");
?>