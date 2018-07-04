<?php


 function autoload_60bb137c732f37ad8798ccf5880462b9($class)
{
    $classes = array(
        'Imper86\DpdWsdlApi\Wsdl\DPDPackageObjServicesService' => __DIR__ .'/DPDPackageObjServicesService.php',
        'Imper86\DpdWsdlApi\Wsdl\generatePackagesNumbersV1' => __DIR__ .'/generatePackagesNumbersV1.php',
        'Imper86\DpdWsdlApi\Wsdl\openUMLFeV1' => __DIR__ .'/openUMLFeV1.php',
        'Imper86\DpdWsdlApi\Wsdl\packageOpenUMLFeV1' => __DIR__ .'/packageOpenUMLFeV1.php',
        'Imper86\DpdWsdlApi\Wsdl\parcelOpenUMLFeV1' => __DIR__ .'/parcelOpenUMLFeV1.php',
        'Imper86\DpdWsdlApi\Wsdl\packageAddressOpenUMLFeV1' => __DIR__ .'/packageAddressOpenUMLFeV1.php',
        'Imper86\DpdWsdlApi\Wsdl\servicesOpenUMLFeV2' => __DIR__ .'/servicesOpenUMLFeV2.php',
        'Imper86\DpdWsdlApi\Wsdl\serviceCarryInOpenUMLFeV1' => __DIR__ .'/serviceCarryInOpenUMLFeV1.php',
        'Imper86\DpdWsdlApi\Wsdl\serviceCODOpenUMLFeV1' => __DIR__ .'/serviceCODOpenUMLFeV1.php',
        'Imper86\DpdWsdlApi\Wsdl\serviceCUDOpenUMLeFV1' => __DIR__ .'/serviceCUDOpenUMLeFV1.php',
        'Imper86\DpdWsdlApi\Wsdl\serviceDeclaredValueOpenUMLFeV1' => __DIR__ .'/serviceDeclaredValueOpenUMLFeV1.php',
        'Imper86\DpdWsdlApi\Wsdl\serviceDedicatedDeliveryOpenUMLFeV1' => __DIR__ .'/serviceDedicatedDeliveryOpenUMLFeV1.php',
        'Imper86\DpdWsdlApi\Wsdl\servicePalletOpenUMLFeV1' => __DIR__ .'/servicePalletOpenUMLFeV1.php',
        'Imper86\DpdWsdlApi\Wsdl\serviceDutyOpenUMLeFV1' => __DIR__ .'/serviceDutyOpenUMLeFV1.php',
        'Imper86\DpdWsdlApi\Wsdl\serviceGuaranteeOpenUMLFeV1' => __DIR__ .'/serviceGuaranteeOpenUMLFeV1.php',
        'Imper86\DpdWsdlApi\Wsdl\serviceInPersOpenUMLFeV1' => __DIR__ .'/serviceInPersOpenUMLFeV1.php',
        'Imper86\DpdWsdlApi\Wsdl\servicePrivPersOpenUMLFeV1' => __DIR__ .'/servicePrivPersOpenUMLFeV1.php',
        'Imper86\DpdWsdlApi\Wsdl\serviceRODOpenUMLFeV1' => __DIR__ .'/serviceRODOpenUMLFeV1.php',
        'Imper86\DpdWsdlApi\Wsdl\serviceSelfColOpenUMLFeV1' => __DIR__ .'/serviceSelfColOpenUMLFeV1.php',
        'Imper86\DpdWsdlApi\Wsdl\serviceTiresOpenUMLFeV1' => __DIR__ .'/serviceTiresOpenUMLFeV1.php',
        'Imper86\DpdWsdlApi\Wsdl\serviceTiresExportOpenUMLFeV1' => __DIR__ .'/serviceTiresExportOpenUMLFeV1.php',
        'Imper86\DpdWsdlApi\Wsdl\authDataV1' => __DIR__ .'/authDataV1.php',
        'Imper86\DpdWsdlApi\Wsdl\generatePackagesNumbersV1Response' => __DIR__ .'/generatePackagesNumbersV1Response.php',
        'Imper86\DpdWsdlApi\Wsdl\packagesGenerationResponseV1' => __DIR__ .'/packagesGenerationResponseV1.php',
        'Imper86\DpdWsdlApi\Wsdl\sessionPGRV1' => __DIR__ .'/sessionPGRV1.php',
        'Imper86\DpdWsdlApi\Wsdl\packagePGRV1' => __DIR__ .'/packagePGRV1.php',
        'Imper86\DpdWsdlApi\Wsdl\invalidFieldPGRV1' => __DIR__ .'/invalidFieldPGRV1.php',
        'Imper86\DpdWsdlApi\Wsdl\parcelPGRV1' => __DIR__ .'/parcelPGRV1.php',
        'Imper86\DpdWsdlApi\Wsdl\DPDServiceException' => __DIR__ .'/DPDServiceException.php',
        'Imper86\DpdWsdlApi\Wsdl\packagesPickupCallV4' => __DIR__ .'/packagesPickupCallV4.php',
        'Imper86\DpdWsdlApi\Wsdl\dpdPickupCallParamsV3' => __DIR__ .'/dpdPickupCallParamsV3.php',
        'Imper86\DpdWsdlApi\Wsdl\pickupCallSimplifiedDetailsDPPV1' => __DIR__ .'/pickupCallSimplifiedDetailsDPPV1.php',
        'Imper86\DpdWsdlApi\Wsdl\pickupPackagesParamsDPPV1' => __DIR__ .'/pickupPackagesParamsDPPV1.php',
        'Imper86\DpdWsdlApi\Wsdl\pickupCustomerDPPV1' => __DIR__ .'/pickupCustomerDPPV1.php',
        'Imper86\DpdWsdlApi\Wsdl\pickupPayerDPPV1' => __DIR__ .'/pickupPayerDPPV1.php',
        'Imper86\DpdWsdlApi\Wsdl\pickupSenderDPPV1' => __DIR__ .'/pickupSenderDPPV1.php',
        'Imper86\DpdWsdlApi\Wsdl\packagesPickupCallV4Response' => __DIR__ .'/packagesPickupCallV4Response.php',
        'Imper86\DpdWsdlApi\Wsdl\packagesPickupCallResponseV3' => __DIR__ .'/packagesPickupCallResponseV3.php',
        'Imper86\DpdWsdlApi\Wsdl\statusInfoPCRV2' => __DIR__ .'/statusInfoPCRV2.php',
        'Imper86\DpdWsdlApi\Wsdl\errorDetailsPCRV2' => __DIR__ .'/errorDetailsPCRV2.php',
        'Imper86\DpdWsdlApi\Wsdl\packagesPickupCallV3' => __DIR__ .'/packagesPickupCallV3.php',
        'Imper86\DpdWsdlApi\Wsdl\packagesPickupCallV3Response' => __DIR__ .'/packagesPickupCallV3Response.php',
        'Imper86\DpdWsdlApi\Wsdl\getCourierOrderAvailabilityV1' => __DIR__ .'/getCourierOrderAvailabilityV1.php',
        'Imper86\DpdWsdlApi\Wsdl\senderPlaceV1' => __DIR__ .'/senderPlaceV1.php',
        'Imper86\DpdWsdlApi\Wsdl\getCourierOrderAvailabilityV1Response' => __DIR__ .'/getCourierOrderAvailabilityV1Response.php',
        'Imper86\DpdWsdlApi\Wsdl\getCourierOrderAvailabilityResponseV1' => __DIR__ .'/getCourierOrderAvailabilityResponseV1.php',
        'Imper86\DpdWsdlApi\Wsdl\courierOrderAvailabilityRangeV1' => __DIR__ .'/courierOrderAvailabilityRangeV1.php',
        'Imper86\DpdWsdlApi\Wsdl\Exception' => __DIR__ .'/Exception.php',
        'Imper86\DpdWsdlApi\Wsdl\packagesPickupCallV2' => __DIR__ .'/packagesPickupCallV2.php',
        'Imper86\DpdWsdlApi\Wsdl\dpdPickupCallParamsV2' => __DIR__ .'/dpdPickupCallParamsV2.php',
        'Imper86\DpdWsdlApi\Wsdl\packagesPickupCallV2Response' => __DIR__ .'/packagesPickupCallV2Response.php',
        'Imper86\DpdWsdlApi\Wsdl\packagesPickupCallResponseV2' => __DIR__ .'/packagesPickupCallResponseV2.php',
        'Imper86\DpdWsdlApi\Wsdl\generatePackagesNumbersV4' => __DIR__ .'/generatePackagesNumbersV4.php',
        'Imper86\DpdWsdlApi\Wsdl\openUMLFeV3' => __DIR__ .'/openUMLFeV3.php',
        'Imper86\DpdWsdlApi\Wsdl\packageOpenUMLFeV3' => __DIR__ .'/packageOpenUMLFeV3.php',
        'Imper86\DpdWsdlApi\Wsdl\servicesOpenUMLFeV4' => __DIR__ .'/servicesOpenUMLFeV4.php',
        'Imper86\DpdWsdlApi\Wsdl\serviceFlagOpenUMLF' => __DIR__ .'/serviceFlagOpenUMLF.php',
        'Imper86\DpdWsdlApi\Wsdl\serviceDpdPickupOpenUMLFeV1' => __DIR__ .'/serviceDpdPickupOpenUMLFeV1.php',
        'Imper86\DpdWsdlApi\Wsdl\serviceDutyOpenUMLeFV2' => __DIR__ .'/serviceDutyOpenUMLeFV2.php',
        'Imper86\DpdWsdlApi\Wsdl\generatePackagesNumbersV4Response' => __DIR__ .'/generatePackagesNumbersV4Response.php',
        'Imper86\DpdWsdlApi\Wsdl\packagesGenerationResponseV2' => __DIR__ .'/packagesGenerationResponseV2.php',
        'Imper86\DpdWsdlApi\Wsdl\sessionPGRV2' => __DIR__ .'/sessionPGRV2.php',
        'Imper86\DpdWsdlApi\Wsdl\Packages' => __DIR__ .'/Packages.php',
        'Imper86\DpdWsdlApi\Wsdl\packagePGRV2' => __DIR__ .'/packagePGRV2.php',
        'Imper86\DpdWsdlApi\Wsdl\ValidationDetails' => __DIR__ .'/ValidationDetails.php',
        'Imper86\DpdWsdlApi\Wsdl\Parcels' => __DIR__ .'/Parcels.php',
        'Imper86\DpdWsdlApi\Wsdl\validationInfoPGRV2' => __DIR__ .'/validationInfoPGRV2.php',
        'Imper86\DpdWsdlApi\Wsdl\parcelPGRV2' => __DIR__ .'/parcelPGRV2.php',
        'Imper86\DpdWsdlApi\Wsdl\packagesPickupCallV1' => __DIR__ .'/packagesPickupCallV1.php',
        'Imper86\DpdWsdlApi\Wsdl\dpdPickupCallParamsV1' => __DIR__ .'/dpdPickupCallParamsV1.php',
        'Imper86\DpdWsdlApi\Wsdl\contactInfoDPPV1' => __DIR__ .'/contactInfoDPPV1.php',
        'Imper86\DpdWsdlApi\Wsdl\pickupAddressDSPV1' => __DIR__ .'/pickupAddressDSPV1.php',
        'Imper86\DpdWsdlApi\Wsdl\protocolDPPV1' => __DIR__ .'/protocolDPPV1.php',
        'Imper86\DpdWsdlApi\Wsdl\packagesPickupCallV1Response' => __DIR__ .'/packagesPickupCallV1Response.php',
        'Imper86\DpdWsdlApi\Wsdl\packagesPickupCallResponseV1' => __DIR__ .'/packagesPickupCallResponseV1.php',
        'Imper86\DpdWsdlApi\Wsdl\protocolPCRV1' => __DIR__ .'/protocolPCRV1.php',
        'Imper86\DpdWsdlApi\Wsdl\statusInfoPCRV1' => __DIR__ .'/statusInfoPCRV1.php',
        'Imper86\DpdWsdlApi\Wsdl\generatePackagesNumbersV2' => __DIR__ .'/generatePackagesNumbersV2.php',
        'Imper86\DpdWsdlApi\Wsdl\generatePackagesNumbersV2Response' => __DIR__ .'/generatePackagesNumbersV2Response.php',
        'Imper86\DpdWsdlApi\Wsdl\appendParcelsToPackageV1' => __DIR__ .'/appendParcelsToPackageV1.php',
        'Imper86\DpdWsdlApi\Wsdl\parcelsAppendV1' => __DIR__ .'/parcelsAppendV1.php',
        'Imper86\DpdWsdlApi\Wsdl\parcelsAppendSearchCriteriaPAV1' => __DIR__ .'/parcelsAppendSearchCriteriaPAV1.php',
        'Imper86\DpdWsdlApi\Wsdl\parcelAppendPAV1' => __DIR__ .'/parcelAppendPAV1.php',
        'Imper86\DpdWsdlApi\Wsdl\appendParcelsToPackageV1Response' => __DIR__ .'/appendParcelsToPackageV1Response.php',
        'Imper86\DpdWsdlApi\Wsdl\parcelsAppendResponseV1' => __DIR__ .'/parcelsAppendResponseV1.php',
        'Imper86\DpdWsdlApi\Wsdl\invalidFieldPAV1' => __DIR__ .'/invalidFieldPAV1.php',
        'Imper86\DpdWsdlApi\Wsdl\parcelsAppendParcelPAV1' => __DIR__ .'/parcelsAppendParcelPAV1.php',
        'Imper86\DpdWsdlApi\Wsdl\generatePackagesNumbersV3' => __DIR__ .'/generatePackagesNumbersV3.php',
        'Imper86\DpdWsdlApi\Wsdl\openUMLFeV2' => __DIR__ .'/openUMLFeV2.php',
        'Imper86\DpdWsdlApi\Wsdl\packageOpenUMLFeV2' => __DIR__ .'/packageOpenUMLFeV2.php',
        'Imper86\DpdWsdlApi\Wsdl\servicesOpenUMLFeV3' => __DIR__ .'/servicesOpenUMLFeV3.php',
        'Imper86\DpdWsdlApi\Wsdl\generatePackagesNumbersV3Response' => __DIR__ .'/generatePackagesNumbersV3Response.php',
        'Imper86\DpdWsdlApi\Wsdl\importDeliveryBusinessEventV1' => __DIR__ .'/importDeliveryBusinessEventV1.php',
        'Imper86\DpdWsdlApi\Wsdl\dpdParcelBusinessEventV1' => __DIR__ .'/dpdParcelBusinessEventV1.php',
        'Imper86\DpdWsdlApi\Wsdl\dpdParcelBusinessEventDataV1' => __DIR__ .'/dpdParcelBusinessEventDataV1.php',
        'Imper86\DpdWsdlApi\Wsdl\importDeliveryBusinessEventV1Response' => __DIR__ .'/importDeliveryBusinessEventV1Response.php',
        'Imper86\DpdWsdlApi\Wsdl\importDeliveryBusinessEventResponseV1' => __DIR__ .'/importDeliveryBusinessEventResponseV1.php',
        'Imper86\DpdWsdlApi\Wsdl\DeniedAccessWSException' => __DIR__ .'/DeniedAccessWSException.php',
        'Imper86\DpdWsdlApi\Wsdl\SchemaValidationException' => __DIR__ .'/SchemaValidationException.php',
        'Imper86\DpdWsdlApi\Wsdl\generateSpedLabelsV1' => __DIR__ .'/generateSpedLabelsV1.php',
        'Imper86\DpdWsdlApi\Wsdl\dpdServicesParamsV1' => __DIR__ .'/dpdServicesParamsV1.php',
        'Imper86\DpdWsdlApi\Wsdl\sessionDSPV1' => __DIR__ .'/sessionDSPV1.php',
        'Imper86\DpdWsdlApi\Wsdl\packageDSPV1' => __DIR__ .'/packageDSPV1.php',
        'Imper86\DpdWsdlApi\Wsdl\parcelDSPV1' => __DIR__ .'/parcelDSPV1.php',
        'Imper86\DpdWsdlApi\Wsdl\generateSpedLabelsV1Response' => __DIR__ .'/generateSpedLabelsV1Response.php',
        'Imper86\DpdWsdlApi\Wsdl\documentGenerationResponseV1' => __DIR__ .'/documentGenerationResponseV1.php',
        'Imper86\DpdWsdlApi\Wsdl\sessionDGRV1' => __DIR__ .'/sessionDGRV1.php',
        'Imper86\DpdWsdlApi\Wsdl\packageDGRV1' => __DIR__ .'/packageDGRV1.php',
        'Imper86\DpdWsdlApi\Wsdl\parcelDGRV1' => __DIR__ .'/parcelDGRV1.php',
        'Imper86\DpdWsdlApi\Wsdl\statusInfoDGRV1' => __DIR__ .'/statusInfoDGRV1.php',
        'Imper86\DpdWsdlApi\Wsdl\findPostalCodeV1' => __DIR__ .'/findPostalCodeV1.php',
        'Imper86\DpdWsdlApi\Wsdl\postalCodeV1' => __DIR__ .'/postalCodeV1.php',
        'Imper86\DpdWsdlApi\Wsdl\findPostalCodeV1Response' => __DIR__ .'/findPostalCodeV1Response.php',
        'Imper86\DpdWsdlApi\Wsdl\findPostalCodeResponseV1' => __DIR__ .'/findPostalCodeResponseV1.php',
        'Imper86\DpdWsdlApi\Wsdl\generateProtocolV1' => __DIR__ .'/generateProtocolV1.php',
        'Imper86\DpdWsdlApi\Wsdl\generateProtocolV1Response' => __DIR__ .'/generateProtocolV1Response.php',
        'Imper86\DpdWsdlApi\Wsdl\generateProtocolsWithDestinationsV2' => __DIR__ .'/generateProtocolsWithDestinationsV2.php',
        'Imper86\DpdWsdlApi\Wsdl\dpdServicesParamsV2' => __DIR__ .'/dpdServicesParamsV2.php',
        'Imper86\DpdWsdlApi\Wsdl\DeliveryDestinations' => __DIR__ .'/DeliveryDestinations.php',
        'Imper86\DpdWsdlApi\Wsdl\sessionDSPV2' => __DIR__ .'/sessionDSPV2.php',
        'Imper86\DpdWsdlApi\Wsdl\packageDSPV2' => __DIR__ .'/packageDSPV2.php',
        'Imper86\DpdWsdlApi\Wsdl\parcelDSPV2' => __DIR__ .'/parcelDSPV2.php',
        'Imper86\DpdWsdlApi\Wsdl\pickupAddressDSPV2' => __DIR__ .'/pickupAddressDSPV2.php',
        'Imper86\DpdWsdlApi\Wsdl\deliveryDestination' => __DIR__ .'/deliveryDestination.php',
        'Imper86\DpdWsdlApi\Wsdl\DepotList' => __DIR__ .'/DepotList.php',
        'Imper86\DpdWsdlApi\Wsdl\protocolDepot' => __DIR__ .'/protocolDepot.php',
        'Imper86\DpdWsdlApi\Wsdl\generateProtocolsWithDestinationsV2Response' => __DIR__ .'/generateProtocolsWithDestinationsV2Response.php',
        'Imper86\DpdWsdlApi\Wsdl\documentGenerationResponseV2' => __DIR__ .'/documentGenerationResponseV2.php',
        'Imper86\DpdWsdlApi\Wsdl\DestinationDataList' => __DIR__ .'/DestinationDataList.php',
        'Imper86\DpdWsdlApi\Wsdl\destinationsData' => __DIR__ .'/destinationsData.php',
        'Imper86\DpdWsdlApi\Wsdl\nonMatchingData' => __DIR__ .'/nonMatchingData.php',
        'Imper86\DpdWsdlApi\Wsdl\sessionDGRV2' => __DIR__ .'/sessionDGRV2.php',
        'Imper86\DpdWsdlApi\Wsdl\packageDGRV2' => __DIR__ .'/packageDGRV2.php',
        'Imper86\DpdWsdlApi\Wsdl\parcelDGRV2' => __DIR__ .'/parcelDGRV2.php',
        'Imper86\DpdWsdlApi\Wsdl\statusInfoDGRV2' => __DIR__ .'/statusInfoDGRV2.php',
        'Imper86\DpdWsdlApi\Wsdl\generateSpedLabelsV4' => __DIR__ .'/generateSpedLabelsV4.php',
        'Imper86\DpdWsdlApi\Wsdl\generateSpedLabelsV4Response' => __DIR__ .'/generateSpedLabelsV4Response.php',
        'Imper86\DpdWsdlApi\Wsdl\generateProtocolV2' => __DIR__ .'/generateProtocolV2.php',
        'Imper86\DpdWsdlApi\Wsdl\generateProtocolV2Response' => __DIR__ .'/generateProtocolV2Response.php',
        'Imper86\DpdWsdlApi\Wsdl\generateProtocolsWithDestinationsV1' => __DIR__ .'/generateProtocolsWithDestinationsV1.php',
        'Imper86\DpdWsdlApi\Wsdl\generateProtocolsWithDestinationsV1Response' => __DIR__ .'/generateProtocolsWithDestinationsV1Response.php',
        'Imper86\DpdWsdlApi\Wsdl\generateSpedLabelsV3' => __DIR__ .'/generateSpedLabelsV3.php',
        'Imper86\DpdWsdlApi\Wsdl\generateSpedLabelsV3Response' => __DIR__ .'/generateSpedLabelsV3Response.php',
        'Imper86\DpdWsdlApi\Wsdl\generateSpedLabelsV2' => __DIR__ .'/generateSpedLabelsV2.php',
        'Imper86\DpdWsdlApi\Wsdl\generateSpedLabelsV2Response' => __DIR__ .'/generateSpedLabelsV2Response.php',
        'Imper86\DpdWsdlApi\Wsdl\payerTypeEnumOpenUMLFeV1' => __DIR__ .'/payerTypeEnumOpenUMLFeV1.php',
        'Imper86\DpdWsdlApi\Wsdl\serviceCurrencyEnum' => __DIR__ .'/serviceCurrencyEnum.php',
        'Imper86\DpdWsdlApi\Wsdl\serviceGuaranteeTypeEnumOpenUMLFeV1' => __DIR__ .'/serviceGuaranteeTypeEnumOpenUMLFeV1.php',
        'Imper86\DpdWsdlApi\Wsdl\serviceSelfColReceiverTypeEnumOpenUMLFeV1' => __DIR__ .'/serviceSelfColReceiverTypeEnumOpenUMLFeV1.php',
        'Imper86\DpdWsdlApi\Wsdl\pkgNumsGenerationPolicyV1' => __DIR__ .'/pkgNumsGenerationPolicyV1.php',
        'Imper86\DpdWsdlApi\Wsdl\fieldValidationStatusPGREnumV1' => __DIR__ .'/fieldValidationStatusPGREnumV1.php',
        'Imper86\DpdWsdlApi\Wsdl\validationStatusPGREnumV1' => __DIR__ .'/validationStatusPGREnumV1.php',
        'Imper86\DpdWsdlApi\Wsdl\pickupCallOperationTypeDPPEnumV1' => __DIR__ .'/pickupCallOperationTypeDPPEnumV1.php',
        'Imper86\DpdWsdlApi\Wsdl\pickupCallOrderTypeDPPEnumV1' => __DIR__ .'/pickupCallOrderTypeDPPEnumV1.php',
        'Imper86\DpdWsdlApi\Wsdl\pickupCallUpdateModeDPPEnumV1' => __DIR__ .'/pickupCallUpdateModeDPPEnumV1.php',
        'Imper86\DpdWsdlApi\Wsdl\policyDPPEnumV1' => __DIR__ .'/policyDPPEnumV1.php',
        'Imper86\DpdWsdlApi\Wsdl\statusPCREnumV1' => __DIR__ .'/statusPCREnumV1.php',
        'Imper86\DpdWsdlApi\Wsdl\importDeliveryBusinessEventStatusEnumV1' => __DIR__ .'/importDeliveryBusinessEventStatusEnumV1.php',
        'Imper86\DpdWsdlApi\Wsdl\policyDSPEnumV1' => __DIR__ .'/policyDSPEnumV1.php',
        'Imper86\DpdWsdlApi\Wsdl\sessionTypeDSPEnumV1' => __DIR__ .'/sessionTypeDSPEnumV1.php',
        'Imper86\DpdWsdlApi\Wsdl\outputDocFormatDSPEnumV1' => __DIR__ .'/outputDocFormatDSPEnumV1.php',
        'Imper86\DpdWsdlApi\Wsdl\outputDocPageFormatDSPEnumV1' => __DIR__ .'/outputDocPageFormatDSPEnumV1.php',
        'Imper86\DpdWsdlApi\Wsdl\statusDGREnumV1' => __DIR__ .'/statusDGREnumV1.php',
        'Imper86\DpdWsdlApi\Wsdl\policyDSPEnumV2' => __DIR__ .'/policyDSPEnumV2.php',
        'Imper86\DpdWsdlApi\Wsdl\outputLabelTypeEnumV1' => __DIR__ .'/outputLabelTypeEnumV1.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_60bb137c732f37ad8798ccf5880462b9');

// Do nothing. The rest is just leftovers from the code generation.
{
}
