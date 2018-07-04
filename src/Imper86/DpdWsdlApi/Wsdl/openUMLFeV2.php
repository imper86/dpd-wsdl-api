<?php

namespace Imper86\DpdWsdlApi\Wsdl;

class openUMLFeV2
{

    /**
     * @var packageOpenUMLFeV2[] $packages
     */
    protected $packages = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return packageOpenUMLFeV2[]
     */
    public function getPackages()
    {
      return $this->packages;
    }

    /**
     * @param packageOpenUMLFeV2[] $packages
     * @return \Imper86\DpdWsdlApi\Wsdl\openUMLFeV2
     */
    public function setPackages(array $packages = null)
    {
      $this->packages = $packages;
      return $this;
    }

}
