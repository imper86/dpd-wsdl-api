<?php

namespace Imper86\DpdWsdlApi\Wsdl;

class pickupSenderDPPV1
{

    /**
     * @var string $senderAddress
     */
    protected $senderAddress = null;

    /**
     * @var string $senderCity
     */
    protected $senderCity = null;

    /**
     * @var string $senderFullName
     */
    protected $senderFullName = null;

    /**
     * @var string $senderName
     */
    protected $senderName = null;

    /**
     * @var string $senderPhone
     */
    protected $senderPhone = null;

    /**
     * @var string $senderPostalCode
     */
    protected $senderPostalCode = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getSenderAddress()
    {
      return $this->senderAddress;
    }

    /**
     * @param string $senderAddress
     * @return \Imper86\DpdWsdlApi\Wsdl\pickupSenderDPPV1
     */
    public function setSenderAddress($senderAddress)
    {
      $this->senderAddress = $senderAddress;
      return $this;
    }

    /**
     * @return string
     */
    public function getSenderCity()
    {
      return $this->senderCity;
    }

    /**
     * @param string $senderCity
     * @return \Imper86\DpdWsdlApi\Wsdl\pickupSenderDPPV1
     */
    public function setSenderCity($senderCity)
    {
      $this->senderCity = $senderCity;
      return $this;
    }

    /**
     * @return string
     */
    public function getSenderFullName()
    {
      return $this->senderFullName;
    }

    /**
     * @param string $senderFullName
     * @return \Imper86\DpdWsdlApi\Wsdl\pickupSenderDPPV1
     */
    public function setSenderFullName($senderFullName)
    {
      $this->senderFullName = $senderFullName;
      return $this;
    }

    /**
     * @return string
     */
    public function getSenderName()
    {
      return $this->senderName;
    }

    /**
     * @param string $senderName
     * @return \Imper86\DpdWsdlApi\Wsdl\pickupSenderDPPV1
     */
    public function setSenderName($senderName)
    {
      $this->senderName = $senderName;
      return $this;
    }

    /**
     * @return string
     */
    public function getSenderPhone()
    {
      return $this->senderPhone;
    }

    /**
     * @param string $senderPhone
     * @return \Imper86\DpdWsdlApi\Wsdl\pickupSenderDPPV1
     */
    public function setSenderPhone($senderPhone)
    {
      $this->senderPhone = $senderPhone;
      return $this;
    }

    /**
     * @return string
     */
    public function getSenderPostalCode()
    {
      return $this->senderPostalCode;
    }

    /**
     * @param string $senderPostalCode
     * @return \Imper86\DpdWsdlApi\Wsdl\pickupSenderDPPV1
     */
    public function setSenderPostalCode($senderPostalCode)
    {
      $this->senderPostalCode = $senderPostalCode;
      return $this;
    }

}
