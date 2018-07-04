<?php

namespace Imper86\DpdWsdlApi\Wsdl;

class Parcels
{

    /**
     * @var parcelDSPV2 $Parcel
     */
    protected $Parcel = null;

    /**
     * @param parcelDSPV2 $Parcel
     */
    public function __construct($Parcel = null)
    {
      $this->Parcel = $Parcel;
    }

    /**
     * @return parcelDSPV2
     */
    public function getParcel()
    {
      return $this->Parcel;
    }

    /**
     * @param parcelDSPV2 $Parcel
     * @return \Imper86\DpdWsdlApi\Wsdl\Parcels
     */
    public function setParcel($Parcel)
    {
      $this->Parcel = $Parcel;
      return $this;
    }

}
