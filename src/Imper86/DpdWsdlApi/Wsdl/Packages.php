<?php

namespace Imper86\DpdWsdlApi\Wsdl;

class Packages
{

    /**
     * @var packageDGRV2 $Package
     */
    protected $Package = null;

    /**
     * @param packageDGRV2 $Package
     */
    public function __construct($Package = null)
    {
      $this->Package = $Package;
    }

    /**
     * @return packageDGRV2
     */
    public function getPackage()
    {
      return $this->Package;
    }

    /**
     * @param packageDGRV2 $Package
     * @return \Imper86\DpdWsdlApi\Wsdl\Packages
     */
    public function setPackage($Package)
    {
      $this->Package = $Package;
      return $this;
    }

}
