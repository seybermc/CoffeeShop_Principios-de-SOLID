<?php

namespace App;

use MyBank\MyBankApi;

class MyBankPaymentProcessor implements PaymentProcessor
{
    
     @var MyBankApi
     
    protected $myBankApi;

    
     @param MyBankApi $myBankApi
    
    public function __construct(MyBankApi $myBankApi)
    {
        $this->myBankApi = $myBankApi;
    }

    @return void
     
    public function pay()
    {
        $this->myBankApi->charge();
    }
}