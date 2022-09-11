<?php

namespace PALLAS\Database;

use PDO, PDOException;


class Cx
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

    // public function inserertest($methode, $NwPoste)
    // {
    //     $res = 'INSERT INTO `' . $methode . '` (';
    //     $values = '';
    //     $i = 0;
    //     foreach ($NwPoste as $key => $value) {
    //         if ($i !== 0) {
    //             $res .= ',';
    //         };
    //         $res .= '`' . $key . '`';
    //         if ($i !== 0) {
    //             $values .= ',';
    //         };
    //         $values .= '`' . $value . '`';
    //         $i++;
    //     }
    //     $res = $res . ') VALUES (' . $values . ')';
    //     echo $res;
    //     return $res;
    // }

    public function inserer($methode, $NwPoste)
    {
        $newposttab = get_object_vars($NwPoste);
        $newposttab_keys = array_keys($newposttab);
        $newposttab_values = array_values($newposttab);

        $tab_keys = implode(',', $newposttab_keys);
        $tabvide =[];
        foreach ($newposttab_keys as $key){
            $tabvide[] = '?'; 
        };
        $tabvide = implode(',', $tabvide);

        $requete = 'INSERT INTO ' . $methode . ' (' . $tab_keys . ') VALUES (' . $tabvide . ')';

        echo $requete;
        $preparation = $this->dbh->prepare($requete);
        $preparation->execute($newposttab_values);

       // return $preparation;
        //echo $preparation;
        //return $requete;
    }

    public function __destruct()
    {
        echo '<p>hello ma class Cx a bien été utiliser</p>';
    }
}
