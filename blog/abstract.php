<?php

abstract class Produit
{

    protected float $tva = 0;
    protected float $prixHT = 0;
    protected float $prixTTC = 0;

    public abstract function getTVA();
    public abstract function getPrixHT();
    public abstract function getPrixTTC();

    public abstract function setTVA($tva);
    public abstract function setPrixHT($prixHT);
    public abstract function setPrixTTC($prixTTC);

    public abstract function CalculTTC();
}

class EProduit extends Produit
{

    public function getTVA()
    {
        return $this->tva;
    }
    public function getPrixHT()
    {
        return $this->prixHT;
    }
    public function getPrixTTC()
    {
        return $this->prixTTC;
    }

    public function setTVA($tva)
    {
        $this->tva = $tva;
    }
    public function setPrixHT($prixHT)
    {
        $this->prixHT = $prixHT;
    }
    public function setPrixTTC($prixTTC)
    {
        $this->prixTTC = $prixTTC;
    }


    public function CalculTTC()
    {
        $this->prixTTC = $this->tva/100*$this->prixHT + $this->prixHT;
    }
}

$mon = new NumberFormatter('fr_FR',NumberFormatter::CURRENCY);

$monObjet = new EProduit;

$monObjet->SetTVA(20);
$monObjet->SetPrixHT(234);
$monObjet->CalculTTC();
//$monObjet->SetPrixTTC(333);

//echo "<pre class='center'>";
echo 'TVA : '.$monObjet->getTVA().'% <br/>';
echo 'PRIX HT : '.$mon->formatCurrency($monObjet->getPrixHT(),"EUR").' <br/>';
echo 'PRIX UNITAIRE TTC : '.$mon->formatCurrency($monObjet->getPrixTTC(),"EUR").' <hr/>';

//echo '</pre>';