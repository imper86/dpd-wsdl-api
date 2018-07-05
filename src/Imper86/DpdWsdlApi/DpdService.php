<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 04.07.2018
 * Time: 13:48
 */

namespace Imper86\DpdWsdlApi;


use Imper86\DpdWsdlApi\Wsdl\DPDPackageObjServicesService;
use Imper86\DpdWsdlApi\Wsdl\generatePackagesNumbersV3;
use Imper86\DpdWsdlApi\WsdlFixed\generatePackagesNumbersV3Response;
use Imper86\DpdWsdlApi\WsdlFixed\packagePGRV2;
use Imper86\DpdWsdlApi\WsdlFixed\Packages;
use Imper86\DpdWsdlApi\WsdlFixed\packagesGenerationResponseV2;
use Imper86\DpdWsdlApi\WsdlFixed\Parcels;
use Imper86\DpdWsdlApi\WsdlFixed\sessionPGRV2;

class DpdService extends DPDPackageObjServicesService
{
    public function __construct(array $options = array(), ?string $wsdl = null)
    {
        $options['classmap']['generatePackagesNumbersV3Response'] = generatePackagesNumbersV3Response::class;
        $options['classmap']['packagePGRV2'] = packagePGRV2::class;
        $options['classmap']['Packages'] = Packages::class;
        $options['classmap']['packagesGenerationResponseV2'] = packagesGenerationResponseV2::class;
        $options['classmap']['Parcels'] = Parcels::class;
        $options['classmap']['sessionPGRV2'] = sessionPGRV2::class;

        parent::__construct($options, $wsdl);
    }

    /**
     * @param generatePackagesNumbersV3 $parameters
     * @return generatePackagesNumbersV3Response
     */
    public function generatePackagesNumbersV3(generatePackagesNumbersV3 $parameters)
    {
        return $this->__soapCall('generatePackagesNumbersV3', array($parameters));
    }
}