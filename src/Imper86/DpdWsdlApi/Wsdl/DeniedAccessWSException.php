<?php

namespace Imper86\DpdWsdlApi\Wsdl;

class DeniedAccessWSException
{

    /**
     * @var int $errorCode
     */
    protected $errorCode = null;

    /**
     * @var string $exceptionDetails
     */
    protected $exceptionDetails = null;

    /**
     * @var string $message
     */
    protected $message = null;

    /**
     * @param int $errorCode
     */
    public function __construct($errorCode = null)
    {
      $this->errorCode = $errorCode;
    }

    /**
     * @return int
     */
    public function getErrorCode()
    {
      return $this->errorCode;
    }

    /**
     * @param int $errorCode
     * @return \Imper86\DpdWsdlApi\Wsdl\DeniedAccessWSException
     */
    public function setErrorCode($errorCode)
    {
      $this->errorCode = $errorCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getExceptionDetails()
    {
      return $this->exceptionDetails;
    }

    /**
     * @param string $exceptionDetails
     * @return \Imper86\DpdWsdlApi\Wsdl\DeniedAccessWSException
     */
    public function setExceptionDetails($exceptionDetails)
    {
      $this->exceptionDetails = $exceptionDetails;
      return $this;
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
     * @return \Imper86\DpdWsdlApi\Wsdl\DeniedAccessWSException
     */
    public function setMessage($message)
    {
      $this->message = $message;
      return $this;
    }

}
