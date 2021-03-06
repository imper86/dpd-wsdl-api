<?php

namespace Imper86\DpdWsdlApi\Wsdl;

class serviceDeclaredValueOpenUMLFeV1
{

    /**
     * @var string $amount
     */
    protected $amount = null;

    /**
     * @var serviceCurrencyEnum $currency
     */
    protected $currency = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getAmount()
    {
      return $this->amount;
    }

    /**
     * @param string $amount
     * @return \Imper86\DpdWsdlApi\Wsdl\serviceDeclaredValueOpenUMLFeV1
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
      return $this;
    }

    /**
     * @return serviceCurrencyEnum
     */
    public function getCurrency()
    {
      return $this->currency;
    }

    /**
     * @param serviceCurrencyEnum $currency
     * @return \Imper86\DpdWsdlApi\Wsdl\serviceDeclaredValueOpenUMLFeV1
     */
    public function setCurrency($currency)
    {
      $this->currency = $currency;
      return $this;
    }

}
