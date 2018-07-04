<?php

namespace Imper86\DpdWsdlApi\Wsdl;

class findPostalCodeV1Response
{

    /**
     * @var findPostalCodeResponseV1 $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return findPostalCodeResponseV1
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param findPostalCodeResponseV1 $return
     * @return \Imper86\DpdWsdlApi\Wsdl\findPostalCodeV1Response
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
