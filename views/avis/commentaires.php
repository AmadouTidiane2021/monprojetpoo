<?php include(VIEWS . '_partials/header.php'); ?>

<a href="<?= BASE_PATH . 'avis/add?id=' . $_GET['id'] ?>">Ajouter commentaire</a>
<!-- <?php var_dump($_SESSION['panier']); ?> -->

<div class="row justify-content-center">
    <?php foreach ($commentaires as $commentaire) : ?>
        <div class="col-md-8">
            <div class="card border-secondary mb-3" style="max-width: 20rem;">
                <!--  nous sommes dans une boucle de commentaire dans tout les commentaires liés à ce produit
                et on accède ainsi à toutes les données de cette entrée en BDD  (id, commentaire, note, utilisateur_id
                produit_id et date ) -->
                <div class="card-header text-center"><?= date('d-m-Y', strtotime($commentaire['date'])) ?></div>
                <!-- Recuperation de l'utilisateur qui a posté un commentaire -->
                <p><?php $user = Utilisateur::findById(['id' => $commentaire['utilisateur_id']]); ?>

                <p class="text-center" colspan="6">Commentaire posté par : <?= strtoupper($user['prenom']) ?></p>
                </p>
                <div class="card-body">

                    <p><?= $commentaire['commentaire'] ?></p>

                </div>

                <div class="card-header text-center"><?= $commentaire['note'] . '/5' ?></div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<?php include(VIEWS . '_partials/footer.php'); ?>