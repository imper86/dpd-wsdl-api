<?php

namespace Imper86\DpdWsdlApi\Wsdl;

class parcelsAppendParcelPAV1
{

    /**
     * @var int $parcelId
     */
    protected $parcelId = null;

    /**
     * @var string $reference
     */
    protected $reference = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var string $waybill
     */
    protected $waybill = null;

    /**
     * @param int $parcelId
     */
    public function __construct($parcelId = null)
    {
      $this->parcelId = $parcelId;
    }

    /**
     * @return int
     */
    public function getParcelId()
    {
      return $this->parcelId;
    }

    /**
     * @param int $parcelId
     * @return \Imper86\DpdWsdlApi\Wsdl\parcelsAppendParcelPAV1
     */
    public function setParcelId($parcelId)
    {
      $this->parcelId = $parcelId;
      return $this;
    }

    /**
     * @return string
     */
    public function getReference()
    {
      return $this->reference;
    }

    /**
     * @param string $reference
     * @return \Imper86\DpdWsdlApi\Wsdl\parcelsAppendParcelPAV1
     */
    public function setReference($reference)
    {
      $this->reference = $reference;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param string $status
     * @return \Imper86\DpdWsdlApi\Wsdl\parcelsAppendParcelPAV1
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return string
     */
    public function getWaybill()
    {
      return $this->waybill;
    }

    /**
     * @param string $waybill
     * @return \Imper86\DpdWsdlApi\Wsdl\parcelsAppendParcelPAV1
     */
    public function setWaybill($waybill)
    {
      $this->waybill = $waybill;
      return $this;
    }

}
