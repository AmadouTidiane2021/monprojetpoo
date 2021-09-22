<?php 

class Avis extends Db
{

    public static function create(array $data)
    {
       // die(var_dump($data));
        $request = "INSERT INTO avis (commentaire, note, utilisateur_id, produit_id, date)VALUES (:commentaire,:note,:utilisateur_id,:produit_id,:date)";
        $response = self::getDb()->prepare($request);
        $response->execute($data);
        return self::getDb()->lastInsertId();
    }

    public static function findByProduit($id)
    {

        $request = 'SELECT * FROM avis WHERE produit_id= :produit_id ORDER BY date DESC';
        $response = self::getDb()->prepare($request);
        $response->execute($id);

        return $response->fetch(PDO::FETCH_ASSOC);
    }


}