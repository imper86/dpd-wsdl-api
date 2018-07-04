<?php

namespace Imper86\DpdWsdlApi\Wsdl;

class sessionDGRV2
{

    /**
     * @var Packages $Packages
     */
    protected $Packages = null;

    /**
     * @var int $SessionId
     */
    protected $SessionId = null;

    /**
     * @var statusInfoDGRV2 $StatusInfo
     */
    protected $StatusInfo = null;

    
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
     * @return \Imper86\DpdWsdlApi\Wsdl\sessionDGRV2
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
     * @return \Imper86\DpdWsdlApi\Wsdl\sessionDGRV2
     */
    public function setSessionId($SessionId)
    {
      $this->SessionId = $SessionId;
      return $this;
    }

    /**
     * @return statusInfoDGRV2
     */
    public function getStatusInfo()
    {
      return $this->StatusInfo;
    }

    /**
     * @param statusInfoDGRV2 $StatusInfo
     * @return \Imper86\DpdWsdlApi\Wsdl\sessionDGRV2
     */
    public function setStatusInfo($StatusInfo)
    {
      $this->StatusInfo = $StatusInfo;
      return $this;
    }

}
