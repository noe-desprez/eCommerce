<!DOCTYPE html>
<html>
    <body>
        <link rel="stylesheet" href="styles.css">
        <h2 class="">Nos produits</h2>
        <?php
        foreach ($tab_p as $p){
            $pNom=htmlspecialchars($p->get('nomProduit'));
            $pId=rawurlencode($p->get('idProduit'));
            $pImage=htmlspecialchars($p->get('imageProduit'));
            $pPrix=htmlspecialchars($p->get('prixProduit'));
            echo "<a id=$pId class=\"button\" href=#$pId><img class=\"img\" src=\"pictures/$pImage\"></a>
            <p><a class=\"button\" href=#$pId>$pNom - $pPrix €</a></p>";
        }
        ?>
    </body>
</html>
