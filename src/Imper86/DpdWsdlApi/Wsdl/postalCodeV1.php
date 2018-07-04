<?php

namespace Imper86\DpdWsdlApi\Wsdl;

class postalCodeV1
{

    /**
     * @var string $countryCode
     */
    protected $countryCode = null;

    /**
     * @var string $zipCode
     */
    protected $zipCode = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
      return $this->countryCode;
    }

    /**
     * @param string $countryCode
     * @return \Imper86\DpdWsdlApi\Wsdl\postalCodeV1
     */
    public function setCountryCode($countryCode)
    {
      $this->countryCode = $countryCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getZipCode()
    {
      return $this->zipCode;
    }

    /**
     * @param string $zipCode
     * @return \Imper86\DpdWsdlApi\Wsdl\postalCodeV1
     */
    public function setZipCode($zipCode)
    {
      $this->zipCode = $zipCode;
      return $this;
    }

}
