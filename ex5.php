<?php
include("inc/header.php");
include("inc/menu.php");
session_start();
if (!isset($_SESSION['chiffreAl'])) {
    $_SESSION['chiffreAl'] = rand(1, 50);
    var_dump($_SESSION);
}
?>
<h1>Trouver le chiffre</h1>
<form action="" method="post" id="form">
    <label for="chiffre">chiffre : </label>
    <input type="number" name="chiffre" min="0" required>
    <input type="submit" value="Trouver">

</form>
<form action="" method="post">
    <input type="submit" name="Reinit"value="Reinit">
</form>
<div id="output">
    <?php
    if (isset($_POST['Reinit'])) {
        $_SESSION['chiffreAl'] = rand(1, 50);

    }
    $chiffreAl = $_SESSION["chiffreAl"];
    // var_dump($_SESSION["chiffreAl"]);


    if (isset($_POST["chiffre"])) {
        $chiffreDev = (int) $_POST["chiffre"];
        // var_dump($chiffreDev);
        if ($chiffreDev === $chiffreAl) {
            echo "c'est gagné";
        } else if ($chiffreDev > $chiffreAl) {
            echo "c'est plus petit";
        } else {
            echo "c'est plus grand";
        }


    }

    ?>
</div>


<?php
include("inc/footer.php");

?>