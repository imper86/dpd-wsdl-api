<?php

namespace Imper86\DpdWsdlApi\Wsdl;

class getCourierOrderAvailabilityResponseV1
{

    /**
     * @var courierOrderAvailabilityRangeV1[] $ranges
     */
    protected $ranges = null;

    /**
     * @var string $status
     */
    protected $status = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return courierOrderAvailabilityRangeV1[]
     */
    public function getRanges()
    {
      return $this->ranges;
    }

    /**
     * @param courierOrderAvailabilityRangeV1[] $ranges
     * @return \Imper86\DpdWsdlApi\Wsdl\getCourierOrderAvailabilityResponseV1
     */
    public function setRanges(array $ranges = null)
    {
      $this->ranges = $ranges;
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
     * @return \Imper86\DpdWsdlApi\Wsdl\getCourierOrderAvailabilityResponseV1
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

}
