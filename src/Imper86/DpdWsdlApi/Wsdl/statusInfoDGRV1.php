<?php

namespace Imper86\DpdWsdlApi\Wsdl;

class statusInfoDGRV1
{

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var statusDGREnumV1 $status
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
     * @return \Imper86\DpdWsdlApi\Wsdl\statusInfoDGRV1
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return statusDGREnumV1
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param statusDGREnumV1 $status
     * @return \Imper86\DpdWsdlApi\Wsdl\statusInfoDGRV1
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

}
