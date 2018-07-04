<?php

namespace Imper86\DpdWsdlApi\Wsdl;

class generatePackagesNumbersV2Response
{

    /**
     * @var packagesGenerationResponseV2 $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return packagesGenerationResponseV2
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param packagesGenerationResponseV2 $return
     * @return \Imper86\DpdWsdlApi\Wsdl\generatePackagesNumbersV2Response
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
