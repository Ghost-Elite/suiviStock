
<div class="row-mt-4">
    <div class="col-md-4 offset-5">
    <a href="" class="btn btn-primary btn-sm">LISTE DES PRODUITS</a>
    </div>
</div>

<!-- Material form login -->
<div class="card mt-4 container col-md-8">

    <h5 class="card-header aqua-gradient white-text text-center py-4">
        <strong>NOUVEAU PRODUIT</strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">

        <!-- Form -->
        <form method="post"  class="text-center" style="color: #757575;" action="#!">
        <div class="row mt-4">
           <div class="col-md-3">
           <label for="">ID</label>
           </div>
           <div class="col-md-6">
           <input type="text" name="libelle" class="form-control">
           </div>
        </div>

        <div class="row mt-4">
           <div class="col-md-3">
           <label for="">NOM</label>
           </div>
           <div class="col-md-6">
           <input type="number" name="prix" min="1" class="form-control">
           </div>
        </div>
        <div class="row mt-4">
           <div class="col-md-3"> 
           <label for="">REF</label>
           </div>
           <div class="col-md-6">
           <input type="number" name="quantite" min="1" class="form-control">
           </div>
        </div>
        <div class="row mt-4">
           <div class="col-md-3">
           <label for="">QUANTITE STOCK</label>
           </div>
           <div class="col-md-6">
        
        </div>

            <button class="btn blue-gradient btn-rounded my-4 waves-effect z-depth-0" type="submit" name="ajout">Enrigister</button>

        </form>
        <!-- Form -->

    </div>

</div>