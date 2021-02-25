<?php
    include_once '../../../header.php';
    require_once '../../model/produitdb.php';
   
?>  
      $produit = getListProduit();
    ?>
    <div class="row-mt-4">
    <div class="col-md-4 offset-5">
    <a href="../../suiviStock" class="btn btn-primary btn-sm">NOUVEAU PRODUIT</a>
    </div>
</div>


<div class="card mt-4 container col-md-8">

    <h5 class="card-header aqua-gradient white-text text-center py-4">
    <strong>NOUVEAU PRODUIT</strong>
    </h5>

<!--Card content-->
    <div class="card-body px-lg-5 pt-0">
        <table class="table table-bordered">
        <tr>
        <th class="h4 text-center">#</th>
        <th class="h4 text-center">nom</th>
        <th class="h4 text-center">ref</th>
        <th class="h4 text-center">qStock</th>
        
        </tr>
        <?php
        foreach ($produits as $produit) {
            ?>
            <tr>
                <td><?= $produit['id'] ?></td>
                <td><?= $produit['nom'] ?></td>
                <td><?= $produit['ref'] ?></td>
                <td><?= $produit['qte'] ?></td>                
            </tr>
        <?php }
        ?>
        </table>

    </div>
</div>
