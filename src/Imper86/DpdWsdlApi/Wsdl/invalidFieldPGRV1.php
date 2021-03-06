<?php

namespace Imper86\DpdWsdlApi\Wsdl;

class invalidFieldPGRV1
{

    /**
     * @var string $fieldName
     */
    protected $fieldName = null;

    /**
     * @var string $info
     */
    protected $info = null;

    /**
     * @var fieldValidationStatusPGREnumV1 $status
     */
    protected $status = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getFieldName()
    {
      return $this->fieldName;
    }

    /**
     * @param string $fieldName
     * @return \Imper86\DpdWsdlApi\Wsdl\invalidFieldPGRV1
     */
    public function setFieldName($fieldName)
    {
      $this->fieldName = $fieldName;
      return $this;
    }

    /**
     * @return string
     */
    public function getInfo()
    {
      return $this->info;
    }

    /**
     * @param string $info
     * @return \Imper86\DpdWsdlApi\Wsdl\invalidFieldPGRV1
     */
    public function setInfo($info)
    {
      $this->info = $info;
      return $this;
    }

    /**
     * @return fieldValidationStatusPGREnumV1
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param fieldValidationStatusPGREnumV1 $status
     * @return \Imper86\DpdWsdlApi\Wsdl\invalidFieldPGRV1
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

}
