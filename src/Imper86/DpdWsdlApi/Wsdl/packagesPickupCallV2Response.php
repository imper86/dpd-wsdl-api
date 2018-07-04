<?php

namespace Imper86\DpdWsdlApi\Wsdl;

class packagesPickupCallV2Response
{

    /**
     * @var packagesPickupCallResponseV2 $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return packagesPickupCallResponseV2
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param packagesPickupCallResponseV2 $return
     * @return \Imper86\DpdWsdlApi\Wsdl\packagesPickupCallV2Response
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
