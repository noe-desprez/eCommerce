<!DOCTYPE html>
<html>
    <body>
        <link rel="stylesheet" href="styles.css">
        <h2 class="">Détails du produit sélectionné</h2>
        <?php
            $p = ModelProduit::select($_GET['idProduit']);
            var_dump($p);
            $pNom=htmlspecialchars($p->get('nomProduit'));
            $pId=rawurlencode($p->get('idProduit'));
            $pImage=htmlspecialchars($p->get('imageProduit'));
            $pPrix=htmlspecialchars($p->get('prixProduit'));
            echo "<img class=\"img\" src=\"pictures/$pImage\">
            <p>".$pNom."</p>
            <p>".$pPrix." €</p>";
        ?>
    </body>
</html>