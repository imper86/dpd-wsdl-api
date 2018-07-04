<?php

namespace Imper86\DpdWsdlApi\Wsdl;

class serviceSelfColOpenUMLFeV1
{

    /**
     * @var serviceSelfColReceiverTypeEnumOpenUMLFeV1 $receiver
     */
    protected $receiver = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return serviceSelfColReceiverTypeEnumOpenUMLFeV1
     */
    public function getReceiver()
    {
      return $this->receiver;
    }

    /**
     * @param serviceSelfColReceiverTypeEnumOpenUMLFeV1 $receiver
     * @return \Imper86\DpdWsdlApi\Wsdl\serviceSelfColOpenUMLFeV1
     */
    public function setReceiver($receiver)
    {
      $this->receiver = $receiver;
      return $this;
    }

}
