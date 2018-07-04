<?php

namespace Imper86\DpdWsdlApi\Wsdl;

class pickupCallSimplifiedDetailsDPPV1
{

    /**
     * @var pickupPackagesParamsDPPV1 $packagesParams
     */
    protected $packagesParams = null;

    /**
     * @var pickupCustomerDPPV1 $pickupCustomer
     */
    protected $pickupCustomer = null;

    /**
     * @var pickupPayerDPPV1 $pickupPayer
     */
    protected $pickupPayer = null;

    /**
     * @var pickupSenderDPPV1 $pickupSender
     */
    protected $pickupSender = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return pickupPackagesParamsDPPV1
     */
    public function getPackagesParams()
    {
      return $this->packagesParams;
    }

    /**
     * @param pickupPackagesParamsDPPV1 $packagesParams
     * @return \Imper86\DpdWsdlApi\Wsdl\pickupCallSimplifiedDetailsDPPV1
     */
    public function setPackagesParams($packagesParams)
    {
      $this->packagesParams = $packagesParams;
      return $this;
    }

    /**
     * @return pickupCustomerDPPV1
     */
    public function getPickupCustomer()
    {
      return $this->pickupCustomer;
    }

    /**
     * @param pickupCustomerDPPV1 $pickupCustomer
     * @return \Imper86\DpdWsdlApi\Wsdl\pickupCallSimplifiedDetailsDPPV1
     */
    public function setPickupCustomer($pickupCustomer)
    {
      $this->pickupCustomer = $pickupCustomer;
      return $this;
    }

    /**
     * @return pickupPayerDPPV1
     */
    public function getPickupPayer()
    {
      return $this->pickupPayer;
    }

    /**
     * @param pickupPayerDPPV1 $pickupPayer
     * @return \Imper86\DpdWsdlApi\Wsdl\pickupCallSimplifiedDetailsDPPV1
     */
    public function setPickupPayer($pickupPayer)
    {
      $this->pickupPayer = $pickupPayer;
      return $this;
    }

    /**
     * @return pickupSenderDPPV1
     */
    public function getPickupSender()
    {
      return $this->pickupSender;
    }

    /**
     * @param pickupSenderDPPV1 $pickupSender
     * @return \Imper86\DpdWsdlApi\Wsdl\pickupCallSimplifiedDetailsDPPV1
     */
    public function setPickupSender($pickupSender)
    {
      $this->pickupSender = $pickupSender;
      return $this;
    }

}
