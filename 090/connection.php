<?php

namespace PALLAS\Post;

use PDO, PDOException;

class Post
{
    private PDO $dbh;
    public function __construct($conf)
    {
        try {
            $this->dbh = new PDO('mysql:host=' . $conf['db']['host'] . ';dbname=' . $conf['db']['database'], $conf['db']['user'], $conf['db']['password']);
        } catch (PDOException $e) {
            $message = 'ERREUR !!!' . $e->getMessage() . '<hr /r>';
            die($message);
        }
    }

    public function requete($sql, $fetchMetodo = 'fetchALL')
    {
        try {
            $resultat = $this->dbh->query($sql, PDO::FETCH_ASSOC)->{$fetchMetodo}();
        } catch (PDOException $e) {
            $message = 'ERREUR !!!' . $e->getMessage() . '<hr /r>';
            die($message);
        }
        return $resultat;
    }


    public function inserer($methode, $NwPoste)
    {
        $newposttab_keys = array_keys($NwPoste);
        $newposttab_values = array_values($NwPoste);

        $tab_keys = implode(',', $newposttab_keys);
        $tabvide = implode(',',array_fill(0, count($NwPoste),'?'));

        $requete = 'INSERT INTO ' . $methode . ' (' . $tab_keys . ') VALUES (' . $tabvide . ')';

        //echo $requete;
        $preparation = $this->dbh->prepare($requete);
        $preparation->execute($newposttab_values);

        // return $preparation;
        //echo $preparation;
        //return $requete;
    }

    
    public function delete($methode, $id_number)
    {

        $requete = 'DELETE FROM '.$methode.' WHERE `'.$methode.'`.`id` = ? ';
        echo $requete;
        $array_id_number = [];
        $array_id_number = $id_number;
        //echo $requete;
        $preparation = $this->dbh->prepare($requete);
        $preparation->execute($array_id_number);

        // return $preparation;
        //echo $preparation;
        //return $requete;
    }
}
