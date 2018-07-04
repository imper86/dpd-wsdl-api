<?php

namespace Imper86\DpdWsdlApi\Wsdl;

class sessionDSPV1
{

    /**
     * @var packageDSPV1[] $packages
     */
    protected $packages = null;

    /**
     * @var int $sessionId
     */
    protected $sessionId = null;

    /**
     * @var sessionTypeDSPEnumV1 $sessionType
     */
    protected $sessionType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return packageDSPV1[]
     */
    public function getPackages()
    {
      return $this->packages;
    }

    /**
     * @param packageDSPV1[] $packages
     * @return \Imper86\DpdWsdlApi\Wsdl\sessionDSPV1
     */
    public function setPackages(array $packages = null)
    {
      $this->packages = $packages;
      return $this;
    }

    /**
     * @return int
     */
    public function getSessionId()
    {
      return $this->sessionId;
    }

    /**
     * @param int $sessionId
     * @return \Imper86\DpdWsdlApi\Wsdl\sessionDSPV1
     */
    public function setSessionId($sessionId)
    {
      $this->sessionId = $sessionId;
      return $this;
    }

    /**
     * @return sessionTypeDSPEnumV1
     */
    public function getSessionType()
    {
      return $this->sessionType;
    }

    /**
     * @param sessionTypeDSPEnumV1 $sessionType
     * @return \Imper86\DpdWsdlApi\Wsdl\sessionDSPV1
     */
    public function setSessionType($sessionType)
    {
      $this->sessionType = $sessionType;
      return $this;
    }

}
