<?php

class AvisController
{
    

    public static function add()
    {


        if(!empty($_POST)):

            $utilisateur=$_SESSION['membre']['id'];
            $date=date_format(new DateTime(), 'Y-m-d');

            $reponse = Avis::create([
                'commentaire' => $_POST['commentaire'],
                'note' => $_POST['note'],
                'utilisateur_id' => $utilisateur,
                'produit_id' => $_POST['produit_id'],
                'date' => $date
            ]);


            $_SESSION['messages']['success'][] = 'Commentaire ajouté avec succès';
            header('location:../');
            exit();   

        endif;

      
        include(VIEWS . 'avis/add.php');


    }

    public static function commentaires()
    {
        $commentaires = Avis::findByProduit(['produit_id' => $_GET['id']]);
        include(VIEWS . 'avis/commentaires.php');
    }
   
}
