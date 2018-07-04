<?php

namespace Imper86\DpdWsdlApi\Wsdl;

class packagesPickupCallV3Response
{

    /**
     * @var packagesPickupCallResponseV3 $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return packagesPickupCallResponseV3
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param packagesPickupCallResponseV3 $return
     * @return \Imper86\DpdWsdlApi\Wsdl\packagesPickupCallV3Response
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
