<?php

namespace Imper86\DpdWsdlApi\Wsdl;

class generatePackagesNumbersV1Response
{

    /**
     * @var packagesGenerationResponseV1 $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return packagesGenerationResponseV1
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param packagesGenerationResponseV1 $return
     * @return \Imper86\DpdWsdlApi\Wsdl\generatePackagesNumbersV1Response
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
