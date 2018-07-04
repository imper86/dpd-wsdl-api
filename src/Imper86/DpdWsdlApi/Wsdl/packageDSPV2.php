<?php

namespace Imper86\DpdWsdlApi\Wsdl;

class packageDSPV2
{

    /**
     * @var int $PackageId
     */
    protected $PackageId = null;

    /**
     * @var Parcels $Parcels
     */
    protected $Parcels = null;

    /**
     * @var string $Reference
     */
    protected $Reference = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getPackageId()
    {
      return $this->PackageId;
    }

    /**
     * @param int $PackageId
     * @return \Imper86\DpdWsdlApi\Wsdl\packageDSPV2
     */
    public function setPackageId($PackageId)
    {
      $this->PackageId = $PackageId;
      return $this;
    }

    /**
     * @return Parcels
     */
    public function getParcels()
    {
      return $this->Parcels;
    }

    /**
     * @param Parcels $Parcels
     * @return \Imper86\DpdWsdlApi\Wsdl\packageDSPV2
     */
    public function setParcels($Parcels)
    {
      $this->Parcels = $Parcels;
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
     * @return \Imper86\DpdWsdlApi\Wsdl\packageDSPV2
     */
    public function setReference($Reference)
    {
      $this->Reference = $Reference;
      return $this;
    }

}
