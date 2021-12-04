<!DOCTYPE html>
<html>
    <body>
        <link rel="stylesheet" href="styles.css">
        <h2 class="">Détails du produit sélectionné</h2>
        <?php
            $pId=$_GET['idProduit'];
            $pNom=htmlspecialchars($p->get('nomProduit'));
            echo "<a href=index.php?action=read&idProduit=$pId><img class=\"img\" src=\"pictures/$pImage\"></a>
            <p><a href=index.php?action=read&idProduit=$pId>$pNom</a></p>
            <p>$pPrix €</p>";
        ?>
    </body>
</html>