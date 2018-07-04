<?php

namespace Imper86\DpdWsdlApi\Wsdl;

class dpdParcelBusinessEventDataV1
{

    /**
     * @var string $code
     */
    protected $code = null;

    /**
     * @var string $value
     */
    protected $value = null;

    
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
     * @return \Imper86\DpdWsdlApi\Wsdl\dpdParcelBusinessEventDataV1
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param string $value
     * @return \Imper86\DpdWsdlApi\Wsdl\dpdParcelBusinessEventDataV1
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
