<?php

class MaClass
{

    private $var1 = 5;
    private $var2 = 2;

    public function __set($var, $value)
    {
        echo '<hr />'.$var.':'.$value.'<hr />';
        $this->{$var} = $value;
    }

    public function getVar1(){
        self::test();
        return $this->var1;
    }

    // public function setVar1($valeur){
    //     $this->var1 = $valeur;
    // }

    static function test(){
        echo 'TEST OK <hr />';
    }
}

MaClass::test();

$monObjet = new MaClass;

//$monObjet->Var1 =10; -----> ne marche pas car var1 Private ou privated
$monObjet->var2 = 10;
//echo $monObjet->getVar1();


echo '<pre>';
print_r($monObjet);
echo '</pre>';

