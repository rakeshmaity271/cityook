<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Payumoney_lib {
    private $merchantKey;
    private $salt;
    private $baseUrl;
    private $action;
    private $productionMode;
    private $sandboxMode;
    
    private $hash;
    private $hashSequence;
    private $formError;
    private $hashString;
    public function __construct() {
        //$this->setConfig();
        //$this->getMode();

        
        
    }
    
    protected function getSanboxMode() {
        return $this->sandboxMode;
    }
    protected function getProductionMode() {
        return $this->productionMode;
    }
   
    private function setBaseUrl() {
        
        
    }
    

    

   

    private function setHash($value) {
        $this->hash = $value;
    }
   
    public function getMerchant() {
        return $this->merchantKey = 'aJWHcza6';
    }
    public function getSalt() {
        return $this->salt = '7aTi2xctcB';
    }

    





}