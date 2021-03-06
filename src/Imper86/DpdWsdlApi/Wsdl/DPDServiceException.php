<?php

namespace Imper86\DpdWsdlApi\Wsdl;

class DPDServiceException
{

    /**
     * @var string $message
     */
    protected $message = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getMessage()
    {
      return $this->message;
    }

    /**
     * @param string $message
     * @return \Imper86\DpdWsdlApi\Wsdl\DPDServiceException
     */
    public function setMessage($message)
    {
      $this->message = $message;
      return $this;
    }

}
