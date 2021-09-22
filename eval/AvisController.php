<?php

class AvisController
{
    

    public static function add()
    {

        if (isset($_GET['id'])) :
            $avis = Avis::findByProduit([
                'id' => $_GET['id']
            ]);
        endif;
        include(VIEWS . 'avis/add.php');


    }

    public static function save()
    {
        


        $date = date_format(new DateTime('now'), 'Y-m-d');
        $reponse = Avis::create([
            'id' => ['$id'],
            'commentaire' => 0,
            'note' => $_POST['note'],
            'utilisateur_id' => $_POST['utilisateur_id'],
            'produit_id' => $_POST['produit_id'],
            'date' => $date
        ]);
        

        $_SESSION['messages']['success'][] = 'Commentaire ajouté avec succès';
        header('location:../avis/commentaires');
        exit();


        include(VIEWS . 'avis/add.php');
    }
   
}
