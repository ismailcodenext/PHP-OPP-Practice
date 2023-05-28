<?php

    class Fund {
        private $fund;
        public function __construct($initialValue = 0){
            $this->fund = $initialValue;

        }

        public function addFund($money){
            $this->fund +=$money;
        }

        public function deductFund($money){
            $this->fund -=$money;
        }

        public function totalFund(){
            echo "Total Fund is : {$this->fund}\n";
        }

    }

    $ourFund = new Fund(100);
    $ourFund->totalFund();
    $ourFund->addFund(50);
    $ourFund->totalFund();
    $ourFund->deductFund(10);
    $ourFund->totalFund();

?>