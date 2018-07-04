<?php

namespace Imper86\DpdWsdlApi\Wsdl;

class errorDetailsPCRV2
{

    /**
     * @var string $code
     */
    protected $code = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var string $fields
     */
    protected $fields = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->code;
    }

    /**
     * @param string $code
     * @return \Imper86\DpdWsdlApi\Wsdl\errorDetailsPCRV2
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \Imper86\DpdWsdlApi\Wsdl\errorDetailsPCRV2
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return string
     */
    public function getFields()
    {
      return $this->fields;
    }

    /**
     * @param string $fields
     * @return \Imper86\DpdWsdlApi\Wsdl\errorDetailsPCRV2
     */
    public function setFields($fields)
    {
      $this->fields = $fields;
      return $this;
    }

}
