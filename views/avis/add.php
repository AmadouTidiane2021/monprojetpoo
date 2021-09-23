<?php include(VIEWS . '_partials/header.php'); ?>

<form action="<?= BASE_PATH . 'avis/add' ?>" method="post" enctype="multipart/form-data">
    <fieldset>
        <input type="hidden" name="produit_id" value="<?php echo  $_GET['id']; ?>">
        <div class="form-group">
            <label for="exampleTextarea" class="form-label mt-2">Commentaire</label>
            <textarea name="commentaire" type="text" value="" class="form-control" id="exampleTextarea" placeholder="Commentaire" rows="3"></textarea>
        </div>
     

        <div class="form-group">
            <label for="exampleSelect" class="form-label mt-2">Note</label>
            <select name="note"  class="form-select" id="exampleSelect">

                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>

            </select>
        </div>




        <button type="submit" class="btn btn-light mt-2 mb-5">Valider</button>
    </fieldset>
</form>


<?php include(VIEWS . '_partials/footer.php'); ?>