<?php

namespace Imper86\DpdWsdlApi\Wsdl;

class ValidationDetails
{

    /**
     * @var validationInfoPGRV2 $ValidationInfo
     */
    protected $ValidationInfo = null;

    /**
     * @param validationInfoPGRV2 $ValidationInfo
     */
    public function __construct($ValidationInfo = null)
    {
      $this->ValidationInfo = $ValidationInfo;
    }

    /**
     * @return validationInfoPGRV2
     */
    public function getValidationInfo()
    {
      return $this->ValidationInfo;
    }

    /**
     * @param validationInfoPGRV2 $ValidationInfo
     * @return \Imper86\DpdWsdlApi\Wsdl\ValidationDetails
     */
    public function setValidationInfo($ValidationInfo)
    {
      $this->ValidationInfo = $ValidationInfo;
      return $this;
    }

}
