<?php

namespace Imper86\DpdWsdlApi\Wsdl;

class serviceDpdPickupOpenUMLFeV1
{

    /**
     * @var string $pudo
     */
    protected $pudo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getPudo()
    {
      return $this->pudo;
    }

    /**
     * @param string $pudo
     * @return \Imper86\DpdWsdlApi\Wsdl\serviceDpdPickupOpenUMLFeV1
     */
    public function setPudo($pudo)
    {
      $this->pudo = $pudo;
      return $this;
    }

}
