<?php

namespace Imper86\DpdWsdlApi\Wsdl;

class parcelDSPV2
{

    /**
     * @var int $ParcelId
     */
    protected $ParcelId = null;

    /**
     * @var string $Reference
     */
    protected $Reference = null;

    /**
     * @var string $Waybill
     */
    protected $Waybill = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getParcelId()
    {
      return $this->ParcelId;
    }

    /**
     * @param int $ParcelId
     * @return \Imper86\DpdWsdlApi\Wsdl\parcelDSPV2
     */
    public function setParcelId($ParcelId)
    {
      $this->ParcelId = $ParcelId;
      return $this;
    }

    /**
     * @return string
     */
    public function getReference()
    {
      return $this->Reference;
    }

    /**
     * @param string $Reference
     * @return \Imper86\DpdWsdlApi\Wsdl\parcelDSPV2
     */
    public function setReference($Reference)
    {
      $this->Reference = $Reference;
      return $this;
    }

    /**
     * @return string
     */
    public function getWaybill()
    {
      return $this->Waybill;
    }

    /**
     * @param string $Waybill
     * @return \Imper86\DpdWsdlApi\Wsdl\parcelDSPV2
     */
    public function setWaybill($Waybill)
    {
      $this->Waybill = $Waybill;
      return $this;
    }

}
