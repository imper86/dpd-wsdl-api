<?php

namespace Imper86\DpdWsdlApi\Wsdl;

class packageOpenUMLFeV1
{

    /**
     * @var parcelOpenUMLFeV1[] $parcels
     */
    protected $parcels = null;

    /**
     * @var payerTypeEnumOpenUMLFeV1 $payerType
     */
    protected $payerType = null;

    /**
     * @var packageAddressOpenUMLFeV1 $receiver
     */
    protected $receiver = null;

    /**
     * @var string $ref1
     */
    protected $ref1 = null;

    /**
     * @var string $ref2
     */
    protected $ref2 = null;

    /**
     * @var string $ref3
     */
    protected $ref3 = null;

    /**
     * @var string $reference
     */
    protected $reference = null;

    /**
     * @var packageAddressOpenUMLFeV1 $sender
     */
    protected $sender = null;

    /**
     * @var servicesOpenUMLFeV2 $services
     */
    protected $services = null;

    /**
     * @var int $thirdPartyFID
     */
    protected $thirdPartyFID = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return parcelOpenUMLFeV1[]
     */
    public function getParcels()
    {
      return $this->parcels;
    }

    /**
     * @param parcelOpenUMLFeV1[] $parcels
     * @return \Imper86\DpdWsdlApi\Wsdl\packageOpenUMLFeV1
     */
    public function setParcels(array $parcels = null)
    {
      $this->parcels = $parcels;
      return $this;
    }

    /**
     * @return payerTypeEnumOpenUMLFeV1
     */
    public function getPayerType()
    {
      return $this->payerType;
    }

    /**
     * @param payerTypeEnumOpenUMLFeV1 $payerType
     * @return \Imper86\DpdWsdlApi\Wsdl\packageOpenUMLFeV1
     */
    public function setPayerType($payerType)
    {
      $this->payerType = $payerType;
      return $this;
    }

    /**
     * @return packageAddressOpenUMLFeV1
     */
    public function getReceiver()
    {
      return $this->receiver;
    }

    /**
     * @param packageAddressOpenUMLFeV1 $receiver
     * @return \Imper86\DpdWsdlApi\Wsdl\packageOpenUMLFeV1
     */
    public function setReceiver($receiver)
    {
      $this->receiver = $receiver;
      return $this;
    }

    /**
     * @return string
     */
    public function getRef1()
    {
      return $this->ref1;
    }

    /**
     * @param string $ref1
     * @return \Imper86\DpdWsdlApi\Wsdl\packageOpenUMLFeV1
     */
    public function setRef1($ref1)
    {
      $this->ref1 = $ref1;
      return $this;
    }

    /**
     * @return string
     */
    public function getRef2()
    {
      return $this->ref2;
    }

    /**
     * @param string $ref2
     * @return \Imper86\DpdWsdlApi\Wsdl\packageOpenUMLFeV1
     */
    public function setRef2($ref2)
    {
      $this->ref2 = $ref2;
      return $this;
    }

    /**
     * @return string
     */
    public function getRef3()
    {
      return $this->ref3;
    }

    /**
     * @param string $ref3
     * @return \Imper86\DpdWsdlApi\Wsdl\packageOpenUMLFeV1
     */
    public function setRef3($ref3)
    {
      $this->ref3 = $ref3;
      return $this;
    }

    /**
     * @return string
     */
    public function getReference()
    {
      return $this->reference;
    }

    /**
     * @param string $reference
     * @return \Imper86\DpdWsdlApi\Wsdl\packageOpenUMLFeV1
     */
    public function setReference($reference)
    {
      $this->reference = $reference;
      return $this;
    }

    /**
     * @return packageAddressOpenUMLFeV1
     */
    public function getSender()
    {
      return $this->sender;
    }

    /**
     * @param packageAddressOpenUMLFeV1 $sender
     * @return \Imper86\DpdWsdlApi\Wsdl\packageOpenUMLFeV1
     */
    public function setSender($sender)
    {
      $this->sender = $sender;
      return $this;
    }

    /**
     * @return servicesOpenUMLFeV2
     */
    public function getServices()
    {
      return $this->services;
    }

    /**
     * @param servicesOpenUMLFeV2 $services
     * @return \Imper86\DpdWsdlApi\Wsdl\packageOpenUMLFeV1
     */
    public function setServices($services)
    {
      $this->services = $services;
      return $this;
    }

    /**
     * @return int
     */
    public function getThirdPartyFID()
    {
      return $this->thirdPartyFID;
    }

    /**
     * @param int $thirdPartyFID
     * @return \Imper86\DpdWsdlApi\Wsdl\packageOpenUMLFeV1
     */
    public function setThirdPartyFID($thirdPartyFID)
    {
      $this->thirdPartyFID = $thirdPartyFID;
      return $this;
    }

}
