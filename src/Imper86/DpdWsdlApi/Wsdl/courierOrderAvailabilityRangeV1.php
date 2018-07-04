<?php

namespace Imper86\DpdWsdlApi\Wsdl;

class courierOrderAvailabilityRangeV1
{

    /**
     * @var int $offset
     */
    protected $offset = null;

    /**
     * @var string $range
     */
    protected $range = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getOffset()
    {
      return $this->offset;
    }

    /**
     * @param int $offset
     * @return \Imper86\DpdWsdlApi\Wsdl\courierOrderAvailabilityRangeV1
     */
    public function setOffset($offset)
    {
      $this->offset = $offset;
      return $this;
    }

    /**
     * @return string
     */
    public function getRange()
    {
      return $this->range;
    }

    /**
     * @param string $range
     * @return \Imper86\DpdWsdlApi\Wsdl\courierOrderAvailabilityRangeV1
     */
    public function setRange($range)
    {
      $this->range = $range;
      return $this;
    }

}
