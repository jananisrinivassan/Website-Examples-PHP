<?php
include("inc/header.php");
include("inc/menu.php");
?>
<h1>Exemple 1</h1>
<h2>Table de multiplication</h2>
<table>

<?php
    define("Table", "16");
    echo "<h3>La table de " . Table . "</h3>";
    for($i=1;$i<=12;$i++){

        echo"<tr><td>". Table. " X ". $i ." = ".$i*Table. "</td></tr>";
    }
?>
</table>
<?php
include("inc/footer.php");
?>