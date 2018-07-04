<?php

namespace Imper86\DpdWsdlApi\Wsdl;

class generateProtocolsWithDestinationsV1
{

    /**
     * @var dpdServicesParamsV2 $dpdServicesParamsV2
     */
    protected $dpdServicesParamsV2 = null;

    /**
     * @var authDataV1 $authDataV1
     */
    protected $authDataV1 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return dpdServicesParamsV2
     */
    public function getDpdServicesParamsV2()
    {
      return $this->dpdServicesParamsV2;
    }

    /**
     * @param dpdServicesParamsV2 $dpdServicesParamsV2
     * @return \Imper86\DpdWsdlApi\Wsdl\generateProtocolsWithDestinationsV1
     */
    public function setDpdServicesParamsV2($dpdServicesParamsV2)
    {
      $this->dpdServicesParamsV2 = $dpdServicesParamsV2;
      return $this;
    }

    /**
     * @return authDataV1
     */
    public function getAuthDataV1()
    {
      return $this->authDataV1;
    }

    /**
     * @param authDataV1 $authDataV1
     * @return \Imper86\DpdWsdlApi\Wsdl\generateProtocolsWithDestinationsV1
     */
    public function setAuthDataV1($authDataV1)
    {
      $this->authDataV1 = $authDataV1;
      return $this;
    }

}
