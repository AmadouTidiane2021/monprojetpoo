<?php include(VIEWS . '_partials/header.php'); ?>

<a class="btn btn-warning" href="<?= BASE_PATH . 'email/send'  ?>">Envoyer</a>

<!-- <?php var_dump($_SESSION['panier']); ?> -->

<div class="row">
    <?php foreach ($produits as $produit) : ?>
        <div class="col-md-4">
            <div class="card border-secondary mb-3" style="max-width: 20rem;">
                <div class="card-header text-center"><?= $produit['commentaire'] ?></div>
                <div class="card-header text-center"><?= date('d-m-Y', strtotime($produit['date'])) ?></div>
                <div class="card-header text-center"><?php $user = Utilisateur::findById(['id' => $produit['utilisateur_id']]); ?>
                    <p class="text-center" colspan="6">Commande passée par : <?= strtoupper($user['prenom']) ?></p>
                </div>
                <div class="card-header text-center"><?= $produit['note'] ?></div>
                <div class="card-body text-center">
                    <img src="<?= PHOTO . $produit['photo'] ?>" width="150" height="150" alt="">
                    <h4 class="card-title text-center"><?= $produit['prix'] ?> €</h4>
                    <p class="card-text text-center"><?= $produit['descriptif'] ?></p>
                    <p><a href="<?= BASE_PATH . 'avis/add' ?>">Ajouter commentaire</a></p>
                </div>
                <div class="card-footer">
                    <form action="<?= BASE_PATH . 'panier/add' ?>" method="post">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="hidden" name="id" value="<?= $produit['id'] ?>">
                                    <select name="quantite" class="form-select" id="exampleSelect1">
                                        <?php for ($i = 1; $i <= $produit['stock']; $i++) : ?>
                                            <option value="<?= $i ?>"><?= $i ?></option>
                                        <?php endfor; ?>

                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <button class="btn btn-warning btn-sm " type="submit">Ajouter au panier</button>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<?php include(VIEWS . '_partials/footer.php'); ?>