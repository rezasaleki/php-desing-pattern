<?php

interface PaymentInterface
{
    public function acceptCash();
}

class BitCoinPaymentMethod implements PaymentInterface
{
    public function acceptCash()
    {
        # code ...
    }
}

class CreditCardPaymentMethod implements PaymentInterface
{
    public function acceptCash()
    {
        # code ...
    }
}

/* 
   method convert class to open/close principle: 
   epreate extensible behavior behind an interface, and flip the dependency  
*/
class Payment
{
    public function begin(PaymentInterface $payment)
    {
        # code ...
        $payment->acceptCash();
    }

    function acceptCashViolation()
    {
        // violation of Open/Close standard
        // what should be done if other payment models are added?
        # code ...
    }
}
