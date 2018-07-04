<?php

namespace Imper86\DpdWsdlApi\Wsdl;

class packagesPickupCallV1Response
{

    /**
     * @var packagesPickupCallResponseV1 $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return packagesPickupCallResponseV1
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param packagesPickupCallResponseV1 $return
     * @return \Imper86\DpdWsdlApi\Wsdl\packagesPickupCallV1Response
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
