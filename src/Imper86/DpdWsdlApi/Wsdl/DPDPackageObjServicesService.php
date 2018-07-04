<?php

namespace Imper86\DpdWsdlApi\Wsdl;

class DPDPackageObjServicesService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'generatePackagesNumbersV1' => 'Imper86\\DpdWsdlApi\\Wsdl\\generatePackagesNumbersV1',
      'openUMLFeV1' => 'Imper86\\DpdWsdlApi\\Wsdl\\openUMLFeV1',
      'packageOpenUMLFeV1' => 'Imper86\\DpdWsdlApi\\Wsdl\\packageOpenUMLFeV1',
      'parcelOpenUMLFeV1' => 'Imper86\\DpdWsdlApi\\Wsdl\\parcelOpenUMLFeV1',
      'packageAddressOpenUMLFeV1' => 'Imper86\\DpdWsdlApi\\Wsdl\\packageAddressOpenUMLFeV1',
      'servicesOpenUMLFeV2' => 'Imper86\\DpdWsdlApi\\Wsdl\\servicesOpenUMLFeV2',
      'serviceCarryInOpenUMLFeV1' => 'Imper86\\DpdWsdlApi\\Wsdl\\serviceCarryInOpenUMLFeV1',
      'serviceCODOpenUMLFeV1' => 'Imper86\\DpdWsdlApi\\Wsdl\\serviceCODOpenUMLFeV1',
      'serviceCUDOpenUMLeFV1' => 'Imper86\\DpdWsdlApi\\Wsdl\\serviceCUDOpenUMLeFV1',
      'serviceDeclaredValueOpenUMLFeV1' => 'Imper86\\DpdWsdlApi\\Wsdl\\serviceDeclaredValueOpenUMLFeV1',
      'serviceDedicatedDeliveryOpenUMLFeV1' => 'Imper86\\DpdWsdlApi\\Wsdl\\serviceDedicatedDeliveryOpenUMLFeV1',
      'servicePalletOpenUMLFeV1' => 'Imper86\\DpdWsdlApi\\Wsdl\\servicePalletOpenUMLFeV1',
      'serviceDutyOpenUMLeFV1' => 'Imper86\\DpdWsdlApi\\Wsdl\\serviceDutyOpenUMLeFV1',
      'serviceGuaranteeOpenUMLFeV1' => 'Imper86\\DpdWsdlApi\\Wsdl\\serviceGuaranteeOpenUMLFeV1',
      'serviceInPersOpenUMLFeV1' => 'Imper86\\DpdWsdlApi\\Wsdl\\serviceInPersOpenUMLFeV1',
      'servicePrivPersOpenUMLFeV1' => 'Imper86\\DpdWsdlApi\\Wsdl\\servicePrivPersOpenUMLFeV1',
      'serviceRODOpenUMLFeV1' => 'Imper86\\DpdWsdlApi\\Wsdl\\serviceRODOpenUMLFeV1',
      'serviceSelfColOpenUMLFeV1' => 'Imper86\\DpdWsdlApi\\Wsdl\\serviceSelfColOpenUMLFeV1',
      'serviceTiresOpenUMLFeV1' => 'Imper86\\DpdWsdlApi\\Wsdl\\serviceTiresOpenUMLFeV1',
      'serviceTiresExportOpenUMLFeV1' => 'Imper86\\DpdWsdlApi\\Wsdl\\serviceTiresExportOpenUMLFeV1',
      'authDataV1' => 'Imper86\\DpdWsdlApi\\Wsdl\\authDataV1',
      'generatePackagesNumbersV1Response' => 'Imper86\\DpdWsdlApi\\Wsdl\\generatePackagesNumbersV1Response',
      'packagesGenerationResponseV1' => 'Imper86\\DpdWsdlApi\\Wsdl\\packagesGenerationResponseV1',
      'sessionPGRV1' => 'Imper86\\DpdWsdlApi\\Wsdl\\sessionPGRV1',
      'packagePGRV1' => 'Imper86\\DpdWsdlApi\\Wsdl\\packagePGRV1',
      'invalidFieldPGRV1' => 'Imper86\\DpdWsdlApi\\Wsdl\\invalidFieldPGRV1',
      'parcelPGRV1' => 'Imper86\\DpdWsdlApi\\Wsdl\\parcelPGRV1',
      'DPDServiceException' => 'Imper86\\DpdWsdlApi\\Wsdl\\DPDServiceException',
      'packagesPickupCallV4' => 'Imper86\\DpdWsdlApi\\Wsdl\\packagesPickupCallV4',
      'dpdPickupCallParamsV3' => 'Imper86\\DpdWsdlApi\\Wsdl\\dpdPickupCallParamsV3',
      'pickupCallSimplifiedDetailsDPPV1' => 'Imper86\\DpdWsdlApi\\Wsdl\\pickupCallSimplifiedDetailsDPPV1',
      'pickupPackagesParamsDPPV1' => 'Imper86\\DpdWsdlApi\\Wsdl\\pickupPackagesParamsDPPV1',
      'pickupCustomerDPPV1' => 'Imper86\\DpdWsdlApi\\Wsdl\\pickupCustomerDPPV1',
      'pickupPayerDPPV1' => 'Imper86\\DpdWsdlApi\\Wsdl\\pickupPayerDPPV1',
      'pickupSenderDPPV1' => 'Imper86\\DpdWsdlApi\\Wsdl\\pickupSenderDPPV1',
      'packagesPickupCallV4Response' => 'Imper86\\DpdWsdlApi\\Wsdl\\packagesPickupCallV4Response',
      'packagesPickupCallResponseV3' => 'Imper86\\DpdWsdlApi\\Wsdl\\packagesPickupCallResponseV3',
      'statusInfoPCRV2' => 'Imper86\\DpdWsdlApi\\Wsdl\\statusInfoPCRV2',
      'errorDetailsPCRV2' => 'Imper86\\DpdWsdlApi\\Wsdl\\errorDetailsPCRV2',
      'packagesPickupCallV3' => 'Imper86\\DpdWsdlApi\\Wsdl\\packagesPickupCallV3',
      'packagesPickupCallV3Response' => 'Imper86\\DpdWsdlApi\\Wsdl\\packagesPickupCallV3Response',
      'getCourierOrderAvailabilityV1' => 'Imper86\\DpdWsdlApi\\Wsdl\\getCourierOrderAvailabilityV1',
      'senderPlaceV1' => 'Imper86\\DpdWsdlApi\\Wsdl\\senderPlaceV1',
      'getCourierOrderAvailabilityV1Response' => 'Imper86\\DpdWsdlApi\\Wsdl\\getCourierOrderAvailabilityV1Response',
      'getCourierOrderAvailabilityResponseV1' => 'Imper86\\DpdWsdlApi\\Wsdl\\getCourierOrderAvailabilityResponseV1',
      'courierOrderAvailabilityRangeV1' => 'Imper86\\DpdWsdlApi\\Wsdl\\courierOrderAvailabilityRangeV1',
      'Exception' => 'Imper86\\DpdWsdlApi\\Wsdl\\Exception',
      'packagesPickupCallV2' => 'Imper86\\DpdWsdlApi\\Wsdl\\packagesPickupCallV2',
      'dpdPickupCallParamsV2' => 'Imper86\\DpdWsdlApi\\Wsdl\\dpdPickupCallParamsV2',
      'packagesPickupCallV2Response' => 'Imper86\\DpdWsdlApi\\Wsdl\\packagesPickupCallV2Response',
      'packagesPickupCallResponseV2' => 'Imper86\\DpdWsdlApi\\Wsdl\\packagesPickupCallResponseV2',
      'generatePackagesNumbersV4' => 'Imper86\\DpdWsdlApi\\Wsdl\\generatePackagesNumbersV4',
      'openUMLFeV3' => 'Imper86\\DpdWsdlApi\\Wsdl\\openUMLFeV3',
      'packageOpenUMLFeV3' => 'Imper86\\DpdWsdlApi\\Wsdl\\packageOpenUMLFeV3',
      'servicesOpenUMLFeV4' => 'Imper86\\DpdWsdlApi\\Wsdl\\servicesOpenUMLFeV4',
      'serviceFlagOpenUMLF' => 'Imper86\\DpdWsdlApi\\Wsdl\\serviceFlagOpenUMLF',
      'serviceDpdPickupOpenUMLFeV1' => 'Imper86\\DpdWsdlApi\\Wsdl\\serviceDpdPickupOpenUMLFeV1',
      'serviceDutyOpenUMLeFV2' => 'Imper86\\DpdWsdlApi\\Wsdl\\serviceDutyOpenUMLeFV2',
      'generatePackagesNumbersV4Response' => 'Imper86\\DpdWsdlApi\\Wsdl\\generatePackagesNumbersV4Response',
      'packagesGenerationResponseV2' => 'Imper86\\DpdWsdlApi\\Wsdl\\packagesGenerationResponseV2',
      'sessionPGRV2' => 'Imper86\\DpdWsdlApi\\Wsdl\\sessionPGRV2',
      'Packages' => 'Imper86\\DpdWsdlApi\\Wsdl\\Packages',
      'packagePGRV2' => 'Imper86\\DpdWsdlApi\\Wsdl\\packagePGRV2',
      'ValidationDetails' => 'Imper86\\DpdWsdlApi\\Wsdl\\ValidationDetails',
      'Parcels' => 'Imper86\\DpdWsdlApi\\Wsdl\\Parcels',
      'validationInfoPGRV2' => 'Imper86\\DpdWsdlApi\\Wsdl\\validationInfoPGRV2',
      'parcelPGRV2' => 'Imper86\\DpdWsdlApi\\Wsdl\\parcelPGRV2',
      'packagesPickupCallV1' => 'Imper86\\DpdWsdlApi\\Wsdl\\packagesPickupCallV1',
      'dpdPickupCallParamsV1' => 'Imper86\\DpdWsdlApi\\Wsdl\\dpdPickupCallParamsV1',
      'contactInfoDPPV1' => 'Imper86\\DpdWsdlApi\\Wsdl\\contactInfoDPPV1',
      'pickupAddressDSPV1' => 'Imper86\\DpdWsdlApi\\Wsdl\\pickupAddressDSPV1',
      'protocolDPPV1' => 'Imper86\\DpdWsdlApi\\Wsdl\\protocolDPPV1',
      'packagesPickupCallV1Response' => 'Imper86\\DpdWsdlApi\\Wsdl\\packagesPickupCallV1Response',
      'packagesPickupCallResponseV1' => 'Imper86\\DpdWsdlApi\\Wsdl\\packagesPickupCallResponseV1',
      'protocolPCRV1' => 'Imper86\\DpdWsdlApi\\Wsdl\\protocolPCRV1',
      'statusInfoPCRV1' => 'Imper86\\DpdWsdlApi\\Wsdl\\statusInfoPCRV1',
      'generatePackagesNumbersV2' => 'Imper86\\DpdWsdlApi\\Wsdl\\generatePackagesNumbersV2',
      'generatePackagesNumbersV2Response' => 'Imper86\\DpdWsdlApi\\Wsdl\\generatePackagesNumbersV2Response',
      'appendParcelsToPackageV1' => 'Imper86\\DpdWsdlApi\\Wsdl\\appendParcelsToPackageV1',
      'parcelsAppendV1' => 'Imper86\\DpdWsdlApi\\Wsdl\\parcelsAppendV1',
      'parcelsAppendSearchCriteriaPAV1' => 'Imper86\\DpdWsdlApi\\Wsdl\\parcelsAppendSearchCriteriaPAV1',
      'parcelAppendPAV1' => 'Imper86\\DpdWsdlApi\\Wsdl\\parcelAppendPAV1',
      'appendParcelsToPackageV1Response' => 'Imper86\\DpdWsdlApi\\Wsdl\\appendParcelsToPackageV1Response',
      'parcelsAppendResponseV1' => 'Imper86\\DpdWsdlApi\\Wsdl\\parcelsAppendResponseV1',
      'invalidFieldPAV1' => 'Imper86\\DpdWsdlApi\\Wsdl\\invalidFieldPAV1',
      'parcelsAppendParcelPAV1' => 'Imper86\\DpdWsdlApi\\Wsdl\\parcelsAppendParcelPAV1',
      'generatePackagesNumbersV3' => 'Imper86\\DpdWsdlApi\\Wsdl\\generatePackagesNumbersV3',
      'openUMLFeV2' => 'Imper86\\DpdWsdlApi\\Wsdl\\openUMLFeV2',
      'packageOpenUMLFeV2' => 'Imper86\\DpdWsdlApi\\Wsdl\\packageOpenUMLFeV2',
      'servicesOpenUMLFeV3' => 'Imper86\\DpdWsdlApi\\Wsdl\\servicesOpenUMLFeV3',
      'generatePackagesNumbersV3Response' => 'Imper86\\DpdWsdlApi\\Wsdl\\generatePackagesNumbersV3Response',
      'importDeliveryBusinessEventV1' => 'Imper86\\DpdWsdlApi\\Wsdl\\importDeliveryBusinessEventV1',
      'dpdParcelBusinessEventV1' => 'Imper86\\DpdWsdlApi\\Wsdl\\dpdParcelBusinessEventV1',
      'dpdParcelBusinessEventDataV1' => 'Imper86\\DpdWsdlApi\\Wsdl\\dpdParcelBusinessEventDataV1',
      'importDeliveryBusinessEventV1Response' => 'Imper86\\DpdWsdlApi\\Wsdl\\importDeliveryBusinessEventV1Response',
      'importDeliveryBusinessEventResponseV1' => 'Imper86\\DpdWsdlApi\\Wsdl\\importDeliveryBusinessEventResponseV1',
      'DeniedAccessWSException' => 'Imper86\\DpdWsdlApi\\Wsdl\\DeniedAccessWSException',
      'SchemaValidationException' => 'Imper86\\DpdWsdlApi\\Wsdl\\SchemaValidationException',
      'generateSpedLabelsV1' => 'Imper86\\DpdWsdlApi\\Wsdl\\generateSpedLabelsV1',
      'dpdServicesParamsV1' => 'Imper86\\DpdWsdlApi\\Wsdl\\dpdServicesParamsV1',
      'sessionDSPV1' => 'Imper86\\DpdWsdlApi\\Wsdl\\sessionDSPV1',
      'packageDSPV1' => 'Imper86\\DpdWsdlApi\\Wsdl\\packageDSPV1',
      'parcelDSPV1' => 'Imper86\\DpdWsdlApi\\Wsdl\\parcelDSPV1',
      'generateSpedLabelsV1Response' => 'Imper86\\DpdWsdlApi\\Wsdl\\generateSpedLabelsV1Response',
      'documentGenerationResponseV1' => 'Imper86\\DpdWsdlApi\\Wsdl\\documentGenerationResponseV1',
      'sessionDGRV1' => 'Imper86\\DpdWsdlApi\\Wsdl\\sessionDGRV1',
      'packageDGRV1' => 'Imper86\\DpdWsdlApi\\Wsdl\\packageDGRV1',
      'parcelDGRV1' => 'Imper86\\DpdWsdlApi\\Wsdl\\parcelDGRV1',
      'statusInfoDGRV1' => 'Imper86\\DpdWsdlApi\\Wsdl\\statusInfoDGRV1',
      'findPostalCodeV1' => 'Imper86\\DpdWsdlApi\\Wsdl\\findPostalCodeV1',
      'postalCodeV1' => 'Imper86\\DpdWsdlApi\\Wsdl\\postalCodeV1',
      'findPostalCodeV1Response' => 'Imper86\\DpdWsdlApi\\Wsdl\\findPostalCodeV1Response',
      'findPostalCodeResponseV1' => 'Imper86\\DpdWsdlApi\\Wsdl\\findPostalCodeResponseV1',
      'generateProtocolV1' => 'Imper86\\DpdWsdlApi\\Wsdl\\generateProtocolV1',
      'generateProtocolV1Response' => 'Imper86\\DpdWsdlApi\\Wsdl\\generateProtocolV1Response',
      'generateProtocolsWithDestinationsV2' => 'Imper86\\DpdWsdlApi\\Wsdl\\generateProtocolsWithDestinationsV2',
      'dpdServicesParamsV2' => 'Imper86\\DpdWsdlApi\\Wsdl\\dpdServicesParamsV2',
      'DeliveryDestinations' => 'Imper86\\DpdWsdlApi\\Wsdl\\DeliveryDestinations',
      'sessionDSPV2' => 'Imper86\\DpdWsdlApi\\Wsdl\\sessionDSPV2',
      'packageDSPV2' => 'Imper86\\DpdWsdlApi\\Wsdl\\packageDSPV2',
      'parcelDSPV2' => 'Imper86\\DpdWsdlApi\\Wsdl\\parcelDSPV2',
      'pickupAddressDSPV2' => 'Imper86\\DpdWsdlApi\\Wsdl\\pickupAddressDSPV2',
      'deliveryDestination' => 'Imper86\\DpdWsdlApi\\Wsdl\\deliveryDestination',
      'DepotList' => 'Imper86\\DpdWsdlApi\\Wsdl\\DepotList',
      'protocolDepot' => 'Imper86\\DpdWsdlApi\\Wsdl\\protocolDepot',
      'generateProtocolsWithDestinationsV2Response' => 'Imper86\\DpdWsdlApi\\Wsdl\\generateProtocolsWithDestinationsV2Response',
      'documentGenerationResponseV2' => 'Imper86\\DpdWsdlApi\\Wsdl\\documentGenerationResponseV2',
      'DestinationDataList' => 'Imper86\\DpdWsdlApi\\Wsdl\\DestinationDataList',
      'destinationsData' => 'Imper86\\DpdWsdlApi\\Wsdl\\destinationsData',
      'nonMatchingData' => 'Imper86\\DpdWsdlApi\\Wsdl\\nonMatchingData',
      'sessionDGRV2' => 'Imper86\\DpdWsdlApi\\Wsdl\\sessionDGRV2',
      'packageDGRV2' => 'Imper86\\DpdWsdlApi\\Wsdl\\packageDGRV2',
      'parcelDGRV2' => 'Imper86\\DpdWsdlApi\\Wsdl\\parcelDGRV2',
      'statusInfoDGRV2' => 'Imper86\\DpdWsdlApi\\Wsdl\\statusInfoDGRV2',
      'generateSpedLabelsV4' => 'Imper86\\DpdWsdlApi\\Wsdl\\generateSpedLabelsV4',
      'generateSpedLabelsV4Response' => 'Imper86\\DpdWsdlApi\\Wsdl\\generateSpedLabelsV4Response',
      'generateProtocolV2' => 'Imper86\\DpdWsdlApi\\Wsdl\\generateProtocolV2',
      'generateProtocolV2Response' => 'Imper86\\DpdWsdlApi\\Wsdl\\generateProtocolV2Response',
      'generateProtocolsWithDestinationsV1' => 'Imper86\\DpdWsdlApi\\Wsdl\\generateProtocolsWithDestinationsV1',
      'generateProtocolsWithDestinationsV1Response' => 'Imper86\\DpdWsdlApi\\Wsdl\\generateProtocolsWithDestinationsV1Response',
      'generateSpedLabelsV3' => 'Imper86\\DpdWsdlApi\\Wsdl\\generateSpedLabelsV3',
      'generateSpedLabelsV3Response' => 'Imper86\\DpdWsdlApi\\Wsdl\\generateSpedLabelsV3Response',
      'generateSpedLabelsV2' => 'Imper86\\DpdWsdlApi\\Wsdl\\generateSpedLabelsV2',
      'generateSpedLabelsV2Response' => 'Imper86\\DpdWsdlApi\\Wsdl\\generateSpedLabelsV2Response',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      if (!$wsdl) {
        $wsdl = 'https://dpdservices.dpd.com.pl/DPDPackageObjServicesService/DPDPackageObjServices?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param getCourierOrderAvailabilityV1 $parameters
     * @return getCourierOrderAvailabilityV1Response
     */
    public function getCourierOrderAvailabilityV1(getCourierOrderAvailabilityV1 $parameters)
    {
      return $this->__soapCall('getCourierOrderAvailabilityV1', array($parameters));
    }

    /**
     * @param findPostalCodeV1 $parameters
     * @return findPostalCodeV1Response
     */
    public function findPostalCodeV1(findPostalCodeV1 $parameters)
    {
      return $this->__soapCall('findPostalCodeV1', array($parameters));
    }

    /**
     * @param packagesPickupCallV1 $parameters
     * @return packagesPickupCallV1Response
     */
    public function packagesPickupCallV1(packagesPickupCallV1 $parameters)
    {
      return $this->__soapCall('packagesPickupCallV1', array($parameters));
    }

    /**
     * @param packagesPickupCallV2 $parameters
     * @return packagesPickupCallV2Response
     */
    public function packagesPickupCallV2(packagesPickupCallV2 $parameters)
    {
      return $this->__soapCall('packagesPickupCallV2', array($parameters));
    }

    /**
     * @param packagesPickupCallV3 $parameters
     * @return packagesPickupCallV3Response
     */
    public function packagesPickupCallV3(packagesPickupCallV3 $parameters)
    {
      return $this->__soapCall('packagesPickupCallV3', array($parameters));
    }

    /**
     * @param appendParcelsToPackageV1 $parameters
     * @return appendParcelsToPackageV1Response
     */
    public function appendParcelsToPackageV1(appendParcelsToPackageV1 $parameters)
    {
      return $this->__soapCall('appendParcelsToPackageV1', array($parameters));
    }

    /**
     * @param generatePackagesNumbersV1 $parameters
     * @return generatePackagesNumbersV1Response
     */
    public function generatePackagesNumbersV1(generatePackagesNumbersV1 $parameters)
    {
      return $this->__soapCall('generatePackagesNumbersV1', array($parameters));
    }

    /**
     * @param generatePackagesNumbersV2 $parameters
     * @return generatePackagesNumbersV2Response
     */
    public function generatePackagesNumbersV2(generatePackagesNumbersV2 $parameters)
    {
      return $this->__soapCall('generatePackagesNumbersV2', array($parameters));
    }

    /**
     * @param generatePackagesNumbersV3 $parameters
     * @return generatePackagesNumbersV3Response
     */
    public function generatePackagesNumbersV3(generatePackagesNumbersV3 $parameters)
    {
      return $this->__soapCall('generatePackagesNumbersV3', array($parameters));
    }

    /**
     * @param generatePackagesNumbersV4 $parameters
     * @return generatePackagesNumbersV4Response
     */
    public function generatePackagesNumbersV4(generatePackagesNumbersV4 $parameters)
    {
      return $this->__soapCall('generatePackagesNumbersV4', array($parameters));
    }

    /**
     * @param generateSpedLabelsV1 $parameters
     * @return generateSpedLabelsV1Response
     */
    public function generateSpedLabelsV1(generateSpedLabelsV1 $parameters)
    {
      return $this->__soapCall('generateSpedLabelsV1', array($parameters));
    }

    /**
     * @param generateSpedLabelsV2 $parameters
     * @return generateSpedLabelsV2Response
     */
    public function generateSpedLabelsV2(generateSpedLabelsV2 $parameters)
    {
      return $this->__soapCall('generateSpedLabelsV2', array($parameters));
    }

    /**
     * @param generateSpedLabelsV3 $parameters
     * @return generateSpedLabelsV3Response
     */
    public function generateSpedLabelsV3(generateSpedLabelsV3 $parameters)
    {
      return $this->__soapCall('generateSpedLabelsV3', array($parameters));
    }

    /**
     * @param generateSpedLabelsV4 $parameters
     * @return generateSpedLabelsV4Response
     */
    public function generateSpedLabelsV4(generateSpedLabelsV4 $parameters)
    {
      return $this->__soapCall('generateSpedLabelsV4', array($parameters));
    }

    /**
     * @param generateProtocolV1 $parameters
     * @return generateProtocolV1Response
     */
    public function generateProtocolV1(generateProtocolV1 $parameters)
    {
      return $this->__soapCall('generateProtocolV1', array($parameters));
    }

    /**
     * @param generateProtocolV2 $parameters
     * @return generateProtocolV2Response
     */
    public function generateProtocolV2(generateProtocolV2 $parameters)
    {
      return $this->__soapCall('generateProtocolV2', array($parameters));
    }

    /**
     * @param generateProtocolsWithDestinationsV1 $parameters
     * @return generateProtocolsWithDestinationsV1Response
     */
    public function generateProtocolsWithDestinationsV1(generateProtocolsWithDestinationsV1 $parameters)
    {
      return $this->__soapCall('generateProtocolsWithDestinationsV1', array($parameters));
    }

    /**
     * @param generateProtocolsWithDestinationsV2 $parameters
     * @return generateProtocolsWithDestinationsV2Response
     */
    public function generateProtocolsWithDestinationsV2(generateProtocolsWithDestinationsV2 $parameters)
    {
      return $this->__soapCall('generateProtocolsWithDestinationsV2', array($parameters));
    }

    /**
     * @param packagesPickupCallV4 $parameters
     * @return packagesPickupCallV4Response
     */
    public function packagesPickupCallV4(packagesPickupCallV4 $parameters)
    {
      return $this->__soapCall('packagesPickupCallV4', array($parameters));
    }

    /**
     * @param importDeliveryBusinessEventV1 $parameters
     * @return importDeliveryBusinessEventV1Response
     */
    public function importDeliveryBusinessEventV1(importDeliveryBusinessEventV1 $parameters)
    {
      return $this->__soapCall('importDeliveryBusinessEventV1', array($parameters));
    }

}
