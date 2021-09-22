<?php include(VIEWS . '_partials/header.php'); ?>

<form action="<?= BASE_PATH . 'avis/add' ?>" method="post" enctype="multipart/form-data">
    <fieldset>
        <input type="hidden" name="produit_id" value="<?php echo  $produit['id'] ?? 0; ?>">
        <div class="form-group">
            <label for="exampleTextarea" class="form-label mt-2">Commentaire</label>
            <textarea name="commentaire" type="text" value="<?php echo $produit['commentaire'] ?? ''; ?>" class="form-control" id="exampleTextarea" placeholder="Commentaire" rows="3"></textarea>
        </div>
        <!-- <div class="form-group">
            <label for="exampleInputPassword1" class="form-label mt-2">Note</label>
            <input name="note" type="number" value="<?php echo $produit['note'] ?? ''; ?>" class="form-control" id="exampleInputPassword1" placeholder="Note">
        </div> -->

        <div class="form-group">
            <label for="exampleSelect" class="form-label mt-2">Note</label>
            <select name="note" value="<?php echo $avis['note'] ?? ''; ?>" class="form-select" id="exampleSelect">

                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>

            </select>
        </div>




        <button type="submit" class="btn btn-light mt-2 mb-5">Ajouter un commentaire</button>
    </fieldset>
</form>


<?php include(VIEWS . '_partials/footer.php'); ?>