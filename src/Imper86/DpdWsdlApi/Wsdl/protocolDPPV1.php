<?php

namespace Imper86\DpdWsdlApi\Wsdl;

class protocolDPPV1
{

    /**
     * @var string $documentId
     */
    protected $documentId = null;

    
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
     * @return \Imper86\DpdWsdlApi\Wsdl\protocolDPPV1
     */
    public function setDocumentId($documentId)
    {
      $this->documentId = $documentId;
      return $this;
    }

}
