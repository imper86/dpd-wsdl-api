<?php

namespace Imper86\DpdWsdlApi\Wsdl;

class sessionDSPV2
{

    /**
     * @var Packages $Packages
     */
    protected $Packages = null;

    /**
     * @var int $SessionId
     */
    protected $SessionId = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Packages
     */
    public function getPackages()
    {
      return $this->Packages;
    }

    /**
     * @param Packages $Packages
     * @return \Imper86\DpdWsdlApi\Wsdl\sessionDSPV2
     */
    public function setPackages($Packages)
    {
      $this->Packages = $Packages;
      return $this;
    }

    /**
     * @return int
     */
    public function getSessionId()
    {
      return $this->SessionId;
    }

    /**
     * @param int $SessionId
     * @return \Imper86\DpdWsdlApi\Wsdl\sessionDSPV2
     */
    public function setSessionId($SessionId)
    {
      $this->SessionId = $SessionId;
      return $this;
    }

}
