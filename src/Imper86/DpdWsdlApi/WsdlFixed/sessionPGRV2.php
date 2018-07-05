<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 05.07.2018
 * Time: 18:52
 */

namespace Imper86\DpdWsdlApi\WsdlFixed;


class sessionPGRV2 extends \Imper86\DpdWsdlApi\Wsdl\sessionPGRV2
{
    /**
     * @var null|Packages
     */
    protected $Packages;

    /**
     * @return Packages|null
     */
    public function getPackages(): ?Packages
    {
        return $this->Packages;
    }

    /**
     * @param Packages|null $Packages
     */
    public function setPackages($Packages): void
    {
        $this->Packages = $Packages;
    }


}