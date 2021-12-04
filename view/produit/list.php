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
            echo "<a href=index.php?action=read&idProduit=$pId><img class=\"img\" src=\"pictures/$pImage\"></a>
            <p><a href=index.php?action=read&idProduit=$pId>$pNom</a></p>";
        }
        ?>
    </body>
</html>
