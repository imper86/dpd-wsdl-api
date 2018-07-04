<?php

namespace Imper86\DpdWsdlApi\Wsdl;

class serviceDutyOpenUMLeFV2
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
     * @return \Imper86\DpdWsdlApi\Wsdl\serviceDutyOpenUMLeFV2
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
     * @return \Imper86\DpdWsdlApi\Wsdl\serviceDutyOpenUMLeFV2
     */
    public function setCurrency($currency)
    {
      $this->currency = $currency;
      return $this;
    }

}
