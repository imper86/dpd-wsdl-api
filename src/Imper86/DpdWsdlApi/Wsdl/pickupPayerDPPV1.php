<?php

namespace Imper86\DpdWsdlApi\Wsdl;

class pickupPayerDPPV1
{

    /**
     * @var string $payerCostCenter
     */
    protected $payerCostCenter = null;

    /**
     * @var string $payerName
     */
    protected $payerName = null;

    /**
     * @var int $payerNumber
     */
    protected $payerNumber = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getPayerCostCenter()
    {
      return $this->payerCostCenter;
    }

    /**
     * @param string $payerCostCenter
     * @return \Imper86\DpdWsdlApi\Wsdl\pickupPayerDPPV1
     */
    public function setPayerCostCenter($payerCostCenter)
    {
      $this->payerCostCenter = $payerCostCenter;
      return $this;
    }

    /**
     * @return string
     */
    public function getPayerName()
    {
      return $this->payerName;
    }

    /**
     * @param string $payerName
     * @return \Imper86\DpdWsdlApi\Wsdl\pickupPayerDPPV1
     */
    public function setPayerName($payerName)
    {
      $this->payerName = $payerName;
      return $this;
    }

    /**
     * @return int
     */
    public function getPayerNumber()
    {
      return $this->payerNumber;
    }

    /**
     * @param int $payerNumber
     * @return \Imper86\DpdWsdlApi\Wsdl\pickupPayerDPPV1
     */
    public function setPayerNumber($payerNumber)
    {
      $this->payerNumber = $payerNumber;
      return $this;
    }

}
