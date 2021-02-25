<?php

declare(strict_types=1);


class BankAccount
{

    /** @var string */
    private $titulaire;

    /** @var integer */
    private $solde;

    /** @var integer */
    private $interest;

     /** @var string */
     private $devise;

    /**
     * Default constructor
     */
    public function __construct(string $t,int $s,float $i,string $d)
    {
        $this->titulaire = $t;
        $this->solde = $s;
        $this->interest = $i;
        $this->devise = $d;
        
    }


    /**
     * 
     */
    public function credit(int $amount)
    {
        $this->solde = $this->solde + $amount;
    }

    public function debit(int $amount)
    {
        $this->solde = $this->solde - $amount;
    }


    public function __getTitulaire($property) {
        return $this->titulaire;
    }

    public function __getSolde($property) {
        return $this->solde;
    }

    public function __getInterest($property) {
        return $this->interest;
    }

    public function __getDevise($property) {
        return $this->devise;
    }

    public function __setTitulaire($property,$value) {
        $this->titulaire = $value;
    }

    public function __setInterest($property,$value) {
        $this->interest = $value;
    }

    public function __setSolde($property,$value) {
        $this->solde = $value;
    }

    public function __setDevide($property,$value) {
        $this->devise = $value;
    }

}
?>