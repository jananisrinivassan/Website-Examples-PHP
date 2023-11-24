<?php
include("inc/header.php");
include("inc/menu.php");
?>
<h1>Exemple 2</h1>
<?php
if (isset($_POST["number"])) {
    ?>
    <h2>Voici la table de
        <?php echo $_POST["number"]; ?>
    </h2>
    <?php
} else {
    ?>
    <h2>Quel table de multiplication voulez vous ?</h2>
<?php }
?>


<?php
if (isset($_POST["number"])) {
    $num = $_POST["number"];
    define("Table", $num);
    echo "<table>";
    for ($i = 1; $i <= 12; $i++) {

        echo "<tr><td>" . Table . " X " . $i . " = " . $i * Table . "</td></tr>";    

    }
    echo "</table><br><p>une autre table ? </p><br>";
    ?>
        <form action="ex2.php" method="post">
        <label for="number">entrez votre valeur</label> 
        <input type="number" name="number" required min="1">
        <input type="submit" value="Envoyer">

    </form>
    <p><a href="ex2.php">effacer la table</a></p>

<?php } else {
    ?>
    <form action="ex2.php" method="post">
        <label for="number">entrez votre valeur</label>
        <input type="number" name="number" required min="1">
        <input type="submit" value="Envoyer">

    </form>
<?php } ?>
<?php
include("inc/footer.php");
?>