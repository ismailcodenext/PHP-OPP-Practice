<?php
   
   class Bank_Account {

    private $blance;

    public function getBlance(){
       return $this->blance;
    }

    public function deposit($amount){

        if($amount > 0){
            $this->blance += $amount;
        }

        return $this;

    }

   }

   class Savings_Account extends Bank_Account{

     private  $interestRate = 0 ;

     public function setInterestRate($interestRate){

        $this->interestRate = $interestRate;

     }

     public function addInterest(){
        $interest = $this->interestRate * $this->getBlance();
        $this->deposit($interest);
     }


   }

   $account = new Savings_Account;

   $account->deposit(1000);
   $account->setInterestRate(0.05);
   $account->addInterest();
   echo $account->getBlance();

?>

