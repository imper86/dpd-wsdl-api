<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 05.07.2018
 * Time: 18:59
 */

namespace Imper86\DpdWsdlApi\WsdlFixed;


class Packages
{
    /**
     * @var null|packagePGRV2[]
     */
    protected $Package;

    public function __construct($Package = null)
    {
        $this->Package = $Package;
    }

    /**
     * @return packagePGRV2[]|null
     */
    public function getPackage(): ?array
    {
        return $this->Package;
    }

    /**
     * @param packagePGRV2[]|null $Package
     */
    public function setPackage(?array $Package): void
    {
        $this->Package = $Package;
    }


}