<?php

namespace Imper86\DpdWsdlApi\Wsdl;

class nonMatchingData
{

    /**
     * @var string $waybill
     */
    protected $waybill = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getWaybill()
    {
      return $this->waybill;
    }

    /**
     * @param string $waybill
     * @return \Imper86\DpdWsdlApi\Wsdl\nonMatchingData
     */
    public function setWaybill($waybill)
    {
      $this->waybill = $waybill;
      return $this;
    }

}
