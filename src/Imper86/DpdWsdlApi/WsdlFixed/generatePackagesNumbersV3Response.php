<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 05.07.2018
 * Time: 18:18
 */

namespace Imper86\DpdWsdlApi\WsdlFixed;


class generatePackagesNumbersV3Response extends \Imper86\DpdWsdlApi\Wsdl\generatePackagesNumbersV3Response
{
    /**
     * @var packagesGenerationResponseV2
     */
    protected $return;

    /**
     * @return packagesGenerationResponseV2
     */
    public function getReturn()
    {
        return $this->return;
    }

}