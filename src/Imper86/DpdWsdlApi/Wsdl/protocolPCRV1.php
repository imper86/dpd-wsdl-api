<?php

namespace Imper86\DpdWsdlApi\Wsdl;

class protocolPCRV1
{

    /**
     * @var string $documentId
     */
    protected $documentId = null;

    /**
     * @var statusInfoPCRV1 $statusInfo
     */
    protected $statusInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getDocumentId()
    {
      return $this->documentId;
    }

    /**
     * @param string $documentId
     * @return \Imper86\DpdWsdlApi\Wsdl\protocolPCRV1
     */
    public function setDocumentId($documentId)
    {
      $this->documentId = $documentId;
      return $this;
    }

    /**
     * @return statusInfoPCRV1
     */
    public function getStatusInfo()
    {
      return $this->statusInfo;
    }

    /**
     * @param statusInfoPCRV1 $statusInfo
     * @return \Imper86\DpdWsdlApi\Wsdl\protocolPCRV1
     */
    public function setStatusInfo($statusInfo)
    {
      $this->statusInfo = $statusInfo;
      return $this;
    }

}
