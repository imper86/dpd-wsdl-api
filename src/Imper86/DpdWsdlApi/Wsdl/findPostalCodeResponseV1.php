<?php

namespace Imper86\DpdWsdlApi\Wsdl;

class findPostalCodeResponseV1
{

    /**
     * @var string $status
     */
    protected $status = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param string $status
     * @return \Imper86\DpdWsdlApi\Wsdl\findPostalCodeResponseV1
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

}
