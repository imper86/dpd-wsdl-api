<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 05.07.2018
 * Time: 18:58
 */

namespace Imper86\DpdWsdlApi\WsdlFixed;


class packagePGRV2 extends \Imper86\DpdWsdlApi\Wsdl\packagePGRV2
{
    /**
     * @var Parcels
     */
    protected $Parcels;

    /**
     * @return Parcels
     */
    public function getParcels(): Parcels
    {
        return $this->Parcels;
    }

    /**
     * @param Parcels $Parcels
     */
    public function setParcels($Parcels): void
    {
        $this->Parcels = $Parcels;
    }
}