<?php

trait Inventaire
{

    protected int $nombre = 0;

    public function plusUn()
    {
        $this->nombre++;
        echo $this->nombre . '<hr />';
    }
}

class User
{
    use Inventaire;

    public string $user_name;
    protected string $user_pass;
    public string $user_region;

    public function __construct($nom, $password, $region, $nombre)
    {
        $this->user_name = $nom;
        $this->user_pass = $password;
        $this->user_region = $region;
        $this->nombre = $nombre;
    }
}

final class SuperUser extends User // la class User est etendu à SuperUser, nécessité de reprendre les variables 
{
    public string $login = '';

    public function __construct($nom, $password, $region, $nombre, $log)
    {
        parent::__construct($nom, $password, $region, $nombre);
        $this->login = $log;
    }
}

class Group
{
    use Inventaire;
}

$monObjet = new SuperUser('Vincent', 'coucou', 'PACA', 5, 'gogo');

echo '<pre>';
print_r($monObjet);
echo '</pre>';

$monObjet->plusUn();

echo '<pre>';
var_dump($monObjet);
echo '</pre>';

$monObjet->plusUn();

echo '<pre>';
print_r($monObjet);
echo '</pre>';
