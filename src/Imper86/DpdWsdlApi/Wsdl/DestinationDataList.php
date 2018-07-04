<?php

namespace Imper86\DpdWsdlApi\Wsdl;

class DestinationDataList
{

    /**
     * @var destinationsData $DestinationsData
     */
    protected $DestinationsData = null;

    /**
     * @param destinationsData $DestinationsData
     */
    public function __construct($DestinationsData = null)
    {
      $this->DestinationsData = $DestinationsData;
    }

    /**
     * @return destinationsData
     */
    public function getDestinationsData()
    {
      return $this->DestinationsData;
    }

    /**
     * @param destinationsData $DestinationsData
     * @return \Imper86\DpdWsdlApi\Wsdl\DestinationDataList
     */
    public function setDestinationsData($DestinationsData)
    {
      $this->DestinationsData = $DestinationsData;
      return $this;
    }

}
