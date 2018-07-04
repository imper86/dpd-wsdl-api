<?php

namespace Imper86\DpdWsdlApi\Wsdl;

class generateProtocolsWithDestinationsV1Response
{

    /**
     * @var documentGenerationResponseV2 $return
     */
    protected $return = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return documentGenerationResponseV2
     */
    public function getReturn()
    {
      return $this->return;
    }

    /**
     * @param documentGenerationResponseV2 $return
     * @return \Imper86\DpdWsdlApi\Wsdl\generateProtocolsWithDestinationsV1Response
     */
    public function setReturn($return)
    {
      $this->return = $return;
      return $this;
    }

}
