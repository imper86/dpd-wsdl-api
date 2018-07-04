<?php

namespace Imper86\DpdWsdlApi\Wsdl;

class DeliveryDestinations
{

    /**
     * @var deliveryDestination $DeliveryDestination
     */
    protected $DeliveryDestination = null;

    /**
     * @param deliveryDestination $DeliveryDestination
     */
    public function __construct($DeliveryDestination = null)
    {
      $this->DeliveryDestination = $DeliveryDestination;
    }

    /**
     * @return deliveryDestination
     */
    public function getDeliveryDestination()
    {
      return $this->DeliveryDestination;
    }

    /**
     * @param deliveryDestination $DeliveryDestination
     * @return \Imper86\DpdWsdlApi\Wsdl\DeliveryDestinations
     */
    public function setDeliveryDestination($DeliveryDestination)
    {
      $this->DeliveryDestination = $DeliveryDestination;
      return $this;
    }

}
