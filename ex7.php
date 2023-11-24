<?php
include("inc/header.php");
include("inc/menu.php");
?>


<h1>Personnage</h1>

<form action="" method="post">

    <label for="personnage">Personnage :</label>
    <select name="personnage">
        <option value="">Choisir un personnage</option>
        <option value="h" name="h">Homme</option>
        <option value="f" name="f">Femme</option>
        <input type="submit" value="Envoyer">
    </select>
</form>
<div id="output">
    <?php

    if (isset($_POST["personnage"])) {
        $perso = $_POST["personnage"];
        if ($perso === "h") {
            echo '<img src="img/a.png">';
        } else{
            echo '<img src="img/b.png">';
        }
    }
    ?>
</div>
<?php
include("inc/footer.php");

?>