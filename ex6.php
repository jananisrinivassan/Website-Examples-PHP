<?php
include("inc/header.php");
include("inc/menu.php");
?>

<h1>Calculer une moyenne</h1>

<form action="" method="get">
    <label for="notes">Nombre de notes</label>
    <input type="number" name="numb" min="1" max="100" required>
    <input type="submit" value="Moyenne">
</form>


<?php
if (isset($_GET["numb"])) {
    $notes = $_GET["numb"];
    echo "<form action=\"\" method=\"post\">";
    for ($i = 1; $i <= $notes; $i++) {
        echo "<label for=\"note\">Note " . $i . " =   " . "</label>";
        echo "<input type=\"number\" name=\"note[]\" required min=\"0\"><br>";


    }
    echo "<input type=\"submit\" value=\"Envoyer\"><br>";
    echo "</form>";
}
if (isset($_POST["note"])) {
    $lesnotes = $_POST["note"];
    $somme = 0;
    foreach ($lesnotes as $value) {
        $somme += $value;
    }
    echo "La moyenne est : ".$somme/count($lesnotes);
}


?>
<?php
include("inc/footer.php");

?>