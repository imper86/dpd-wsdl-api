<?php

namespace Imper86\DpdWsdlApi\Wsdl;

class parcelDSPV1
{

    /**
     * @var int $parcelId
     */
    protected $parcelId = null;

    /**
     * @var string $reference
     */
    protected $reference = null;

    /**
     * @var string $waybill
     */
    protected $waybill = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getParcelId()
    {
      return $this->parcelId;
    }

    /**
     * @param int $parcelId
     * @return \Imper86\DpdWsdlApi\Wsdl\parcelDSPV1
     */
    public function setParcelId($parcelId)
    {
      $this->parcelId = $parcelId;
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
     * @return \Imper86\DpdWsdlApi\Wsdl\parcelDSPV1
     */
    public function setReference($reference)
    {
      $this->reference = $reference;
      return $this;
    }

    /**
     * @return string
     */
    public function getWaybill()
    {
      return $this->waybill;
    }

    /**
     * @param string $waybill
     * @return \Imper86\DpdWsdlApi\Wsdl\parcelDSPV1
     */
    public function setWaybill($waybill)
    {
      $this->waybill = $waybill;
      return $this;
    }

}
