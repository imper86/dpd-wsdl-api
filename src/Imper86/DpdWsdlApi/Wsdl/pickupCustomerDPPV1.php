<?php

namespace Imper86\DpdWsdlApi\Wsdl;

class pickupCustomerDPPV1
{

    /**
     * @var string $customerFullName
     */
    protected $customerFullName = null;

    /**
     * @var string $customerName
     */
    protected $customerName = null;

    /**
     * @var string $customerPhone
     */
    protected $customerPhone = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCustomerFullName()
    {
      return $this->customerFullName;
    }

    /**
     * @param string $customerFullName
     * @return \Imper86\DpdWsdlApi\Wsdl\pickupCustomerDPPV1
     */
    public function setCustomerFullName($customerFullName)
    {
      $this->customerFullName = $customerFullName;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerName()
    {
      return $this->customerName;
    }

    /**
     * @param string $customerName
     * @return \Imper86\DpdWsdlApi\Wsdl\pickupCustomerDPPV1
     */
    public function setCustomerName($customerName)
    {
      $this->customerName = $customerName;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerPhone()
    {
      return $this->customerPhone;
    }

    /**
     * @param string $customerPhone
     * @return \Imper86\DpdWsdlApi\Wsdl\pickupCustomerDPPV1
     */
    public function setCustomerPhone($customerPhone)
    {
      $this->customerPhone = $customerPhone;
      return $this;
    }

}
