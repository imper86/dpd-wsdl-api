<?php

namespace Imper86\DpdWsdlApi\Wsdl;

class statusInfoPCRV2
{

    /**
     * @var errorDetailsPCRV2[] $errorDetails
     */
    protected $errorDetails = null;

    /**
     * @var string $status
     */
    protected $status = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return errorDetailsPCRV2[]
     */
    public function getErrorDetails()
    {
      return $this->errorDetails;
    }

    /**
     * @param errorDetailsPCRV2[] $errorDetails
     * @return \Imper86\DpdWsdlApi\Wsdl\statusInfoPCRV2
     */
    public function setErrorDetails(array $errorDetails = null)
    {
      $this->errorDetails = $errorDetails;
      return $this;
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
     * @return \Imper86\DpdWsdlApi\Wsdl\statusInfoPCRV2
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

}
