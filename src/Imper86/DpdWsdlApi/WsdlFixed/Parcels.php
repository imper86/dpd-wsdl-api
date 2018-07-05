<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 05.07.2018
 * Time: 18:55
 */

namespace Imper86\DpdWsdlApi\WsdlFixed;


use Imper86\DpdWsdlApi\Wsdl\parcelPGRV2;

class Parcels
{
    /**
     * @var null|parcelPGRV2[]
     */
    protected $Parcel;

    public function __construct($Parcel = null)
    {
        $this->Parcel = $Parcel;
    }

    /**
     * @return parcelPGRV2[]|null
     */
    public function getParcel(): ?array
    {
        return $this->Parcel;
    }

    /**
     * @param parcelPGRV2[]|null $Parcel
     */
    public function setParcel(?array $Parcel): void
    {
        $this->Parcel = $Parcel;
    }

}