<?php
include("inc/header.php");
include("inc/menu.php");
$p1 = ["Ganesh", 53, true, 23];
$p2 = ["Sarah", 28, false, 5];
$p3 = ["Pascal", 63, true, 40];
$p4 = ["Imane", 29, false, 7];
?>
<h1>Personnage 1</h1>
<form action="" method="post">
    <select name="personnage">
        <option value="">Selectionner</option>
        <option value="p1">Ganesh</option>
        <option value="p2">Sarah</option>
        <option value="p3">Pascal</option>
        <option value="p4">Imane</option>
    </select>
    <input type="submit" value="Envoyer">
</form>

<h2>G2R FORMATION</h2>
<?php

if (isset($_POST['personnage'])) {
    $perso = $_POST['personnage'];
    echo "<table>";
    if ($perso === 'p1') {
        echo "<tr><td>";
        echo "<img src=\"img/a.png\" ></td><td>";
        afficher($p1);
        echo "</td></tr>";
        ;
    } else if ($perso === 'p2') {
        echo "<tr><td>";
        echo "<img src=\"img/b.png\" ></td><td>";
        afficher($p2);
        echo "</td></tr>";
        ;
    } else if ($perso === 'p3') {
        echo "<tr><td>";
        echo "<img src=\"img/c.png\" ></td><td>";
        afficher($p3);
        echo "</td></tr>";
        ;
    } else if ($perso === 'p4') {
        echo "<tr><td>";
        echo "<img src=\"img/d.png\" ></td><td>";
        afficher($p4);
        ;
        echo "</td></tr>";
        ;
    }
    echo "</table>";

}
function afficher($perso)
{
    echo "Nom : " . $perso[0] . "<br>";
    echo "Age : " . $perso[1] . " ans<br>";
    if ($perso[2]) {
        echo "Genre : Homme <br>";
    } else {
        echo "Genre : Femme <br>";
    }
    echo "Experiences : " . $perso[3] . " ans <br>";
}
?>

<?php
include("inc/footer.php");
?>