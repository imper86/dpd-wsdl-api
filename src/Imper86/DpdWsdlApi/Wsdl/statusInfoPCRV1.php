<?php

namespace Imper86\DpdWsdlApi\Wsdl;

class statusInfoPCRV1
{

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var statusPCREnumV1 $status
     */
    protected $status = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \Imper86\DpdWsdlApi\Wsdl\statusInfoPCRV1
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return statusPCREnumV1
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param statusPCREnumV1 $status
     * @return \Imper86\DpdWsdlApi\Wsdl\statusInfoPCRV1
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

}
