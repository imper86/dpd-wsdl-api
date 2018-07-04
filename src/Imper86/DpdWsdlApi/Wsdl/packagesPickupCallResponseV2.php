<?php

namespace Imper86\DpdWsdlApi\Wsdl;

class packagesPickupCallResponseV2
{

    /**
     * @var string $orderNumber
     */
    protected $orderNumber = null;

    /**
     * @var statusInfoPCRV2 $statusInfo
     */
    protected $statusInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getOrderNumber()
    {
      return $this->orderNumber;
    }

    /**
     * @param string $orderNumber
     * @return \Imper86\DpdWsdlApi\Wsdl\packagesPickupCallResponseV2
     */
    public function setOrderNumber($orderNumber)
    {
      $this->orderNumber = $orderNumber;
      return $this;
    }

    /**
     * @return statusInfoPCRV2
     */
    public function getStatusInfo()
    {
      return $this->statusInfo;
    }

    /**
     * @param statusInfoPCRV2 $statusInfo
     * @return \Imper86\DpdWsdlApi\Wsdl\packagesPickupCallResponseV2
     */
    public function setStatusInfo($statusInfo)
    {
      $this->statusInfo = $statusInfo;
      return $this;
    }

}
