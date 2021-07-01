<?php

interface Payment
{
    public function payAction(): void;
}

abstract class PaymentFactory
{
    abstract public function callPayAction(): Payment;
}

class ModelPayment implements Payment
{
    private $payment_type;

    /**
     * @param string $payment_type
     */
    public function __construct(string $payment_type)
    {
        $this->payment_type = $payment_type;
    }

    public function payAction(): void
    {
        echo $this->payment_type;
    }
}

class OvoPayment extends PaymentFactory
{
    public function callPayAction(): Payment
    {
        // Silahkan melakukan logika untuk payment
        return new ModelPayment('Ovo Payment Method');
    }
}

class CashPayment extends PaymentFactory
{
    public function callPayAction(): Payment
    {
        // Silahkan melakukan logika untuk payment
        return new ModelPayment('Cash Payment Method');
    }
}

class CreditCardPayment extends PaymentFactory
{
    public function callPayAction(): Payment
    {
        // Silahkan melakukan logika untuk payment
        return new ModelPayment('Credtcard Payment Method');
    }
}
