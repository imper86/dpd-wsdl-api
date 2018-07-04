<?php

namespace Imper86\DpdWsdlApi\Wsdl;

class DepotList
{

    /**
     * @var protocolDepot $ProtocolDepot
     */
    protected $ProtocolDepot = null;

    /**
     * @param protocolDepot $ProtocolDepot
     */
    public function __construct($ProtocolDepot = null)
    {
      $this->ProtocolDepot = $ProtocolDepot;
    }

    /**
     * @return protocolDepot
     */
    public function getProtocolDepot()
    {
      return $this->ProtocolDepot;
    }

    /**
     * @param protocolDepot $ProtocolDepot
     * @return \Imper86\DpdWsdlApi\Wsdl\DepotList
     */
    public function setProtocolDepot($ProtocolDepot)
    {
      $this->ProtocolDepot = $ProtocolDepot;
      return $this;
    }

}
