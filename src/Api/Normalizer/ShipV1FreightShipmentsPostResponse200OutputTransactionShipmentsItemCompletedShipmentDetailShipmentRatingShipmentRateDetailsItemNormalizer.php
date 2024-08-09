<?php

namespace AntibodiesOnline\FedEx\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use AntibodiesOnline\FedEx\Api\Runtime\Normalizer\CheckArray;
use AntibodiesOnline\FedEx\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItem::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItem();
            if (\array_key_exists('totalDutiesTaxesAndFees', $data) && \is_int($data['totalDutiesTaxesAndFees'])) {
                $data['totalDutiesTaxesAndFees'] = (double) $data['totalDutiesTaxesAndFees'];
            }
            if (\array_key_exists('totalFreightDiscounts', $data) && \is_int($data['totalFreightDiscounts'])) {
                $data['totalFreightDiscounts'] = (double) $data['totalFreightDiscounts'];
            }
            if (\array_key_exists('totalTaxes', $data) && \is_int($data['totalTaxes'])) {
                $data['totalTaxes'] = (double) $data['totalTaxes'];
            }
            if (\array_key_exists('totalDutiesAndTaxes', $data) && \is_int($data['totalDutiesAndTaxes'])) {
                $data['totalDutiesAndTaxes'] = (double) $data['totalDutiesAndTaxes'];
            }
            if (\array_key_exists('totalAncillaryFeesAndTaxes', $data) && \is_int($data['totalAncillaryFeesAndTaxes'])) {
                $data['totalAncillaryFeesAndTaxes'] = (double) $data['totalAncillaryFeesAndTaxes'];
            }
            if (\array_key_exists('totalRebates', $data) && \is_int($data['totalRebates'])) {
                $data['totalRebates'] = (double) $data['totalRebates'];
            }
            if (\array_key_exists('fuelSurchargePercent', $data) && \is_int($data['fuelSurchargePercent'])) {
                $data['fuelSurchargePercent'] = (double) $data['fuelSurchargePercent'];
            }
            if (\array_key_exists('totalNetFreight', $data) && \is_int($data['totalNetFreight'])) {
                $data['totalNetFreight'] = (double) $data['totalNetFreight'];
            }
            if (\array_key_exists('totalNetFedExCharge', $data) && \is_int($data['totalNetFedExCharge'])) {
                $data['totalNetFedExCharge'] = (double) $data['totalNetFedExCharge'];
            }
            if (\array_key_exists('totalSurcharges', $data) && \is_int($data['totalSurcharges'])) {
                $data['totalSurcharges'] = (double) $data['totalSurcharges'];
            }
            if (\array_key_exists('totalNetCharge', $data) && \is_int($data['totalNetCharge'])) {
                $data['totalNetCharge'] = (double) $data['totalNetCharge'];
            }
            if (\array_key_exists('totalBaseCharge', $data) && \is_int($data['totalBaseCharge'])) {
                $data['totalBaseCharge'] = (double) $data['totalBaseCharge'];
            }
            if (\array_key_exists('totalNetChargeWithDutiesAndTaxes', $data) && \is_int($data['totalNetChargeWithDutiesAndTaxes'])) {
                $data['totalNetChargeWithDutiesAndTaxes'] = (double) $data['totalNetChargeWithDutiesAndTaxes'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('rateZone', $data)) {
                $object->setRateZone($data['rateZone']);
                unset($data['rateZone']);
            }
            if (\array_key_exists('ratedWeightMethod', $data)) {
                $object->setRatedWeightMethod($data['ratedWeightMethod']);
                unset($data['ratedWeightMethod']);
            }
            if (\array_key_exists('totalDutiesTaxesAndFees', $data)) {
                $object->setTotalDutiesTaxesAndFees($data['totalDutiesTaxesAndFees']);
                unset($data['totalDutiesTaxesAndFees']);
            }
            if (\array_key_exists('pricingCode', $data)) {
                $object->setPricingCode($data['pricingCode']);
                unset($data['pricingCode']);
            }
            if (\array_key_exists('totalFreightDiscounts', $data)) {
                $object->setTotalFreightDiscounts($data['totalFreightDiscounts']);
                unset($data['totalFreightDiscounts']);
            }
            if (\array_key_exists('totalTaxes', $data)) {
                $object->setTotalTaxes($data['totalTaxes']);
                unset($data['totalTaxes']);
            }
            if (\array_key_exists('totalDutiesAndTaxes', $data)) {
                $object->setTotalDutiesAndTaxes($data['totalDutiesAndTaxes']);
                unset($data['totalDutiesAndTaxes']);
            }
            if (\array_key_exists('totalAncillaryFeesAndTaxes', $data)) {
                $object->setTotalAncillaryFeesAndTaxes($data['totalAncillaryFeesAndTaxes']);
                unset($data['totalAncillaryFeesAndTaxes']);
            }
            if (\array_key_exists('taxes', $data)) {
                $values = [];
                foreach ($data['taxes'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItemTaxesItem::class, 'json', $context);
                }
                $object->setTaxes($values);
                unset($data['taxes']);
            }
            if (\array_key_exists('totalRebates', $data)) {
                $object->setTotalRebates($data['totalRebates']);
                unset($data['totalRebates']);
            }
            if (\array_key_exists('fuelSurchargePercent', $data)) {
                $object->setFuelSurchargePercent($data['fuelSurchargePercent']);
                unset($data['fuelSurchargePercent']);
            }
            if (\array_key_exists('currencyExchangeRate', $data)) {
                $object->setCurrencyExchangeRate($this->denormalizer->denormalize($data['currencyExchangeRate'], \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItemCurrencyExchangeRate::class, 'json', $context));
                unset($data['currencyExchangeRate']);
            }
            if (\array_key_exists('totalNetFreight', $data)) {
                $object->setTotalNetFreight($data['totalNetFreight']);
                unset($data['totalNetFreight']);
            }
            if (\array_key_exists('totalNetFedExCharge', $data)) {
                $object->setTotalNetFedExCharge($data['totalNetFedExCharge']);
                unset($data['totalNetFedExCharge']);
            }
            if (\array_key_exists('shipmentLegRateDetails', $data)) {
                $values_1 = [];
                foreach ($data['shipmentLegRateDetails'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItemShipmentLegRateDetailsItem::class, 'json', $context);
                }
                $object->setShipmentLegRateDetails($values_1);
                unset($data['shipmentLegRateDetails']);
            }
            if (\array_key_exists('dimDivisor', $data)) {
                $object->setDimDivisor($data['dimDivisor']);
                unset($data['dimDivisor']);
            }
            if (\array_key_exists('rateType', $data)) {
                $object->setRateType($data['rateType']);
                unset($data['rateType']);
            }
            if (\array_key_exists('surcharges', $data)) {
                $values_2 = [];
                foreach ($data['surcharges'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItemSurchargesItem::class, 'json', $context);
                }
                $object->setSurcharges($values_2);
                unset($data['surcharges']);
            }
            if (\array_key_exists('totalSurcharges', $data)) {
                $object->setTotalSurcharges($data['totalSurcharges']);
                unset($data['totalSurcharges']);
            }
            if (\array_key_exists('totalBillingWeight', $data)) {
                $object->setTotalBillingWeight($this->denormalizer->denormalize($data['totalBillingWeight'], \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItemTotalBillingWeight::class, 'json', $context));
                unset($data['totalBillingWeight']);
            }
            if (\array_key_exists('freightDiscounts', $data)) {
                $values_3 = [];
                foreach ($data['freightDiscounts'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItemFreightDiscountsItem::class, 'json', $context);
                }
                $object->setFreightDiscounts($values_3);
                unset($data['freightDiscounts']);
            }
            if (\array_key_exists('rateScale', $data)) {
                $object->setRateScale($data['rateScale']);
                unset($data['rateScale']);
            }
            if (\array_key_exists('totalNetCharge', $data)) {
                $object->setTotalNetCharge($data['totalNetCharge']);
                unset($data['totalNetCharge']);
            }
            if (\array_key_exists('totalBaseCharge', $data)) {
                $object->setTotalBaseCharge($data['totalBaseCharge']);
                unset($data['totalBaseCharge']);
            }
            if (\array_key_exists('totalNetChargeWithDutiesAndTaxes', $data)) {
                $object->setTotalNetChargeWithDutiesAndTaxes($data['totalNetChargeWithDutiesAndTaxes']);
                unset($data['totalNetChargeWithDutiesAndTaxes']);
            }
            if (\array_key_exists('currency', $data)) {
                $object->setCurrency($data['currency']);
                unset($data['currency']);
            }
            foreach ($data as $key => $value_4) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_4;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('rateZone') && null !== $object->getRateZone()) {
                $data['rateZone'] = $object->getRateZone();
            }
            if ($object->isInitialized('ratedWeightMethod') && null !== $object->getRatedWeightMethod()) {
                $data['ratedWeightMethod'] = $object->getRatedWeightMethod();
            }
            if ($object->isInitialized('totalDutiesTaxesAndFees') && null !== $object->getTotalDutiesTaxesAndFees()) {
                $data['totalDutiesTaxesAndFees'] = $object->getTotalDutiesTaxesAndFees();
            }
            if ($object->isInitialized('pricingCode') && null !== $object->getPricingCode()) {
                $data['pricingCode'] = $object->getPricingCode();
            }
            if ($object->isInitialized('totalFreightDiscounts') && null !== $object->getTotalFreightDiscounts()) {
                $data['totalFreightDiscounts'] = $object->getTotalFreightDiscounts();
            }
            if ($object->isInitialized('totalTaxes') && null !== $object->getTotalTaxes()) {
                $data['totalTaxes'] = $object->getTotalTaxes();
            }
            if ($object->isInitialized('totalDutiesAndTaxes') && null !== $object->getTotalDutiesAndTaxes()) {
                $data['totalDutiesAndTaxes'] = $object->getTotalDutiesAndTaxes();
            }
            if ($object->isInitialized('totalAncillaryFeesAndTaxes') && null !== $object->getTotalAncillaryFeesAndTaxes()) {
                $data['totalAncillaryFeesAndTaxes'] = $object->getTotalAncillaryFeesAndTaxes();
            }
            if ($object->isInitialized('taxes') && null !== $object->getTaxes()) {
                $values = [];
                foreach ($object->getTaxes() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['taxes'] = $values;
            }
            if ($object->isInitialized('totalRebates') && null !== $object->getTotalRebates()) {
                $data['totalRebates'] = $object->getTotalRebates();
            }
            if ($object->isInitialized('fuelSurchargePercent') && null !== $object->getFuelSurchargePercent()) {
                $data['fuelSurchargePercent'] = $object->getFuelSurchargePercent();
            }
            if ($object->isInitialized('currencyExchangeRate') && null !== $object->getCurrencyExchangeRate()) {
                $data['currencyExchangeRate'] = $this->normalizer->normalize($object->getCurrencyExchangeRate(), 'json', $context);
            }
            if ($object->isInitialized('totalNetFreight') && null !== $object->getTotalNetFreight()) {
                $data['totalNetFreight'] = $object->getTotalNetFreight();
            }
            if ($object->isInitialized('totalNetFedExCharge') && null !== $object->getTotalNetFedExCharge()) {
                $data['totalNetFedExCharge'] = $object->getTotalNetFedExCharge();
            }
            if ($object->isInitialized('shipmentLegRateDetails') && null !== $object->getShipmentLegRateDetails()) {
                $values_1 = [];
                foreach ($object->getShipmentLegRateDetails() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['shipmentLegRateDetails'] = $values_1;
            }
            if ($object->isInitialized('dimDivisor') && null !== $object->getDimDivisor()) {
                $data['dimDivisor'] = $object->getDimDivisor();
            }
            if ($object->isInitialized('rateType') && null !== $object->getRateType()) {
                $data['rateType'] = $object->getRateType();
            }
            if ($object->isInitialized('surcharges') && null !== $object->getSurcharges()) {
                $values_2 = [];
                foreach ($object->getSurcharges() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['surcharges'] = $values_2;
            }
            if ($object->isInitialized('totalSurcharges') && null !== $object->getTotalSurcharges()) {
                $data['totalSurcharges'] = $object->getTotalSurcharges();
            }
            if ($object->isInitialized('totalBillingWeight') && null !== $object->getTotalBillingWeight()) {
                $data['totalBillingWeight'] = $this->normalizer->normalize($object->getTotalBillingWeight(), 'json', $context);
            }
            if ($object->isInitialized('freightDiscounts') && null !== $object->getFreightDiscounts()) {
                $values_3 = [];
                foreach ($object->getFreightDiscounts() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['freightDiscounts'] = $values_3;
            }
            if ($object->isInitialized('rateScale') && null !== $object->getRateScale()) {
                $data['rateScale'] = $object->getRateScale();
            }
            if ($object->isInitialized('totalNetCharge') && null !== $object->getTotalNetCharge()) {
                $data['totalNetCharge'] = $object->getTotalNetCharge();
            }
            if ($object->isInitialized('totalBaseCharge') && null !== $object->getTotalBaseCharge()) {
                $data['totalBaseCharge'] = $object->getTotalBaseCharge();
            }
            if ($object->isInitialized('totalNetChargeWithDutiesAndTaxes') && null !== $object->getTotalNetChargeWithDutiesAndTaxes()) {
                $data['totalNetChargeWithDutiesAndTaxes'] = $object->getTotalNetChargeWithDutiesAndTaxes();
            }
            if ($object->isInitialized('currency') && null !== $object->getCurrency()) {
                $data['currency'] = $object->getCurrency();
            }
            foreach ($object as $key => $value_4) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_4;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItem::class => false];
        }
    }
} else {
    class ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItem::class;
        }
        /**
         * @return mixed
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItem();
            if (\array_key_exists('totalDutiesTaxesAndFees', $data) && \is_int($data['totalDutiesTaxesAndFees'])) {
                $data['totalDutiesTaxesAndFees'] = (double) $data['totalDutiesTaxesAndFees'];
            }
            if (\array_key_exists('totalFreightDiscounts', $data) && \is_int($data['totalFreightDiscounts'])) {
                $data['totalFreightDiscounts'] = (double) $data['totalFreightDiscounts'];
            }
            if (\array_key_exists('totalTaxes', $data) && \is_int($data['totalTaxes'])) {
                $data['totalTaxes'] = (double) $data['totalTaxes'];
            }
            if (\array_key_exists('totalDutiesAndTaxes', $data) && \is_int($data['totalDutiesAndTaxes'])) {
                $data['totalDutiesAndTaxes'] = (double) $data['totalDutiesAndTaxes'];
            }
            if (\array_key_exists('totalAncillaryFeesAndTaxes', $data) && \is_int($data['totalAncillaryFeesAndTaxes'])) {
                $data['totalAncillaryFeesAndTaxes'] = (double) $data['totalAncillaryFeesAndTaxes'];
            }
            if (\array_key_exists('totalRebates', $data) && \is_int($data['totalRebates'])) {
                $data['totalRebates'] = (double) $data['totalRebates'];
            }
            if (\array_key_exists('fuelSurchargePercent', $data) && \is_int($data['fuelSurchargePercent'])) {
                $data['fuelSurchargePercent'] = (double) $data['fuelSurchargePercent'];
            }
            if (\array_key_exists('totalNetFreight', $data) && \is_int($data['totalNetFreight'])) {
                $data['totalNetFreight'] = (double) $data['totalNetFreight'];
            }
            if (\array_key_exists('totalNetFedExCharge', $data) && \is_int($data['totalNetFedExCharge'])) {
                $data['totalNetFedExCharge'] = (double) $data['totalNetFedExCharge'];
            }
            if (\array_key_exists('totalSurcharges', $data) && \is_int($data['totalSurcharges'])) {
                $data['totalSurcharges'] = (double) $data['totalSurcharges'];
            }
            if (\array_key_exists('totalNetCharge', $data) && \is_int($data['totalNetCharge'])) {
                $data['totalNetCharge'] = (double) $data['totalNetCharge'];
            }
            if (\array_key_exists('totalBaseCharge', $data) && \is_int($data['totalBaseCharge'])) {
                $data['totalBaseCharge'] = (double) $data['totalBaseCharge'];
            }
            if (\array_key_exists('totalNetChargeWithDutiesAndTaxes', $data) && \is_int($data['totalNetChargeWithDutiesAndTaxes'])) {
                $data['totalNetChargeWithDutiesAndTaxes'] = (double) $data['totalNetChargeWithDutiesAndTaxes'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('rateZone', $data)) {
                $object->setRateZone($data['rateZone']);
                unset($data['rateZone']);
            }
            if (\array_key_exists('ratedWeightMethod', $data)) {
                $object->setRatedWeightMethod($data['ratedWeightMethod']);
                unset($data['ratedWeightMethod']);
            }
            if (\array_key_exists('totalDutiesTaxesAndFees', $data)) {
                $object->setTotalDutiesTaxesAndFees($data['totalDutiesTaxesAndFees']);
                unset($data['totalDutiesTaxesAndFees']);
            }
            if (\array_key_exists('pricingCode', $data)) {
                $object->setPricingCode($data['pricingCode']);
                unset($data['pricingCode']);
            }
            if (\array_key_exists('totalFreightDiscounts', $data)) {
                $object->setTotalFreightDiscounts($data['totalFreightDiscounts']);
                unset($data['totalFreightDiscounts']);
            }
            if (\array_key_exists('totalTaxes', $data)) {
                $object->setTotalTaxes($data['totalTaxes']);
                unset($data['totalTaxes']);
            }
            if (\array_key_exists('totalDutiesAndTaxes', $data)) {
                $object->setTotalDutiesAndTaxes($data['totalDutiesAndTaxes']);
                unset($data['totalDutiesAndTaxes']);
            }
            if (\array_key_exists('totalAncillaryFeesAndTaxes', $data)) {
                $object->setTotalAncillaryFeesAndTaxes($data['totalAncillaryFeesAndTaxes']);
                unset($data['totalAncillaryFeesAndTaxes']);
            }
            if (\array_key_exists('taxes', $data)) {
                $values = [];
                foreach ($data['taxes'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItemTaxesItem::class, 'json', $context);
                }
                $object->setTaxes($values);
                unset($data['taxes']);
            }
            if (\array_key_exists('totalRebates', $data)) {
                $object->setTotalRebates($data['totalRebates']);
                unset($data['totalRebates']);
            }
            if (\array_key_exists('fuelSurchargePercent', $data)) {
                $object->setFuelSurchargePercent($data['fuelSurchargePercent']);
                unset($data['fuelSurchargePercent']);
            }
            if (\array_key_exists('currencyExchangeRate', $data)) {
                $object->setCurrencyExchangeRate($this->denormalizer->denormalize($data['currencyExchangeRate'], \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItemCurrencyExchangeRate::class, 'json', $context));
                unset($data['currencyExchangeRate']);
            }
            if (\array_key_exists('totalNetFreight', $data)) {
                $object->setTotalNetFreight($data['totalNetFreight']);
                unset($data['totalNetFreight']);
            }
            if (\array_key_exists('totalNetFedExCharge', $data)) {
                $object->setTotalNetFedExCharge($data['totalNetFedExCharge']);
                unset($data['totalNetFedExCharge']);
            }
            if (\array_key_exists('shipmentLegRateDetails', $data)) {
                $values_1 = [];
                foreach ($data['shipmentLegRateDetails'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItemShipmentLegRateDetailsItem::class, 'json', $context);
                }
                $object->setShipmentLegRateDetails($values_1);
                unset($data['shipmentLegRateDetails']);
            }
            if (\array_key_exists('dimDivisor', $data)) {
                $object->setDimDivisor($data['dimDivisor']);
                unset($data['dimDivisor']);
            }
            if (\array_key_exists('rateType', $data)) {
                $object->setRateType($data['rateType']);
                unset($data['rateType']);
            }
            if (\array_key_exists('surcharges', $data)) {
                $values_2 = [];
                foreach ($data['surcharges'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItemSurchargesItem::class, 'json', $context);
                }
                $object->setSurcharges($values_2);
                unset($data['surcharges']);
            }
            if (\array_key_exists('totalSurcharges', $data)) {
                $object->setTotalSurcharges($data['totalSurcharges']);
                unset($data['totalSurcharges']);
            }
            if (\array_key_exists('totalBillingWeight', $data)) {
                $object->setTotalBillingWeight($this->denormalizer->denormalize($data['totalBillingWeight'], \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItemTotalBillingWeight::class, 'json', $context));
                unset($data['totalBillingWeight']);
            }
            if (\array_key_exists('freightDiscounts', $data)) {
                $values_3 = [];
                foreach ($data['freightDiscounts'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, \AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItemFreightDiscountsItem::class, 'json', $context);
                }
                $object->setFreightDiscounts($values_3);
                unset($data['freightDiscounts']);
            }
            if (\array_key_exists('rateScale', $data)) {
                $object->setRateScale($data['rateScale']);
                unset($data['rateScale']);
            }
            if (\array_key_exists('totalNetCharge', $data)) {
                $object->setTotalNetCharge($data['totalNetCharge']);
                unset($data['totalNetCharge']);
            }
            if (\array_key_exists('totalBaseCharge', $data)) {
                $object->setTotalBaseCharge($data['totalBaseCharge']);
                unset($data['totalBaseCharge']);
            }
            if (\array_key_exists('totalNetChargeWithDutiesAndTaxes', $data)) {
                $object->setTotalNetChargeWithDutiesAndTaxes($data['totalNetChargeWithDutiesAndTaxes']);
                unset($data['totalNetChargeWithDutiesAndTaxes']);
            }
            if (\array_key_exists('currency', $data)) {
                $object->setCurrency($data['currency']);
                unset($data['currency']);
            }
            foreach ($data as $key => $value_4) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_4;
                }
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('rateZone') && null !== $object->getRateZone()) {
                $data['rateZone'] = $object->getRateZone();
            }
            if ($object->isInitialized('ratedWeightMethod') && null !== $object->getRatedWeightMethod()) {
                $data['ratedWeightMethod'] = $object->getRatedWeightMethod();
            }
            if ($object->isInitialized('totalDutiesTaxesAndFees') && null !== $object->getTotalDutiesTaxesAndFees()) {
                $data['totalDutiesTaxesAndFees'] = $object->getTotalDutiesTaxesAndFees();
            }
            if ($object->isInitialized('pricingCode') && null !== $object->getPricingCode()) {
                $data['pricingCode'] = $object->getPricingCode();
            }
            if ($object->isInitialized('totalFreightDiscounts') && null !== $object->getTotalFreightDiscounts()) {
                $data['totalFreightDiscounts'] = $object->getTotalFreightDiscounts();
            }
            if ($object->isInitialized('totalTaxes') && null !== $object->getTotalTaxes()) {
                $data['totalTaxes'] = $object->getTotalTaxes();
            }
            if ($object->isInitialized('totalDutiesAndTaxes') && null !== $object->getTotalDutiesAndTaxes()) {
                $data['totalDutiesAndTaxes'] = $object->getTotalDutiesAndTaxes();
            }
            if ($object->isInitialized('totalAncillaryFeesAndTaxes') && null !== $object->getTotalAncillaryFeesAndTaxes()) {
                $data['totalAncillaryFeesAndTaxes'] = $object->getTotalAncillaryFeesAndTaxes();
            }
            if ($object->isInitialized('taxes') && null !== $object->getTaxes()) {
                $values = [];
                foreach ($object->getTaxes() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['taxes'] = $values;
            }
            if ($object->isInitialized('totalRebates') && null !== $object->getTotalRebates()) {
                $data['totalRebates'] = $object->getTotalRebates();
            }
            if ($object->isInitialized('fuelSurchargePercent') && null !== $object->getFuelSurchargePercent()) {
                $data['fuelSurchargePercent'] = $object->getFuelSurchargePercent();
            }
            if ($object->isInitialized('currencyExchangeRate') && null !== $object->getCurrencyExchangeRate()) {
                $data['currencyExchangeRate'] = $this->normalizer->normalize($object->getCurrencyExchangeRate(), 'json', $context);
            }
            if ($object->isInitialized('totalNetFreight') && null !== $object->getTotalNetFreight()) {
                $data['totalNetFreight'] = $object->getTotalNetFreight();
            }
            if ($object->isInitialized('totalNetFedExCharge') && null !== $object->getTotalNetFedExCharge()) {
                $data['totalNetFedExCharge'] = $object->getTotalNetFedExCharge();
            }
            if ($object->isInitialized('shipmentLegRateDetails') && null !== $object->getShipmentLegRateDetails()) {
                $values_1 = [];
                foreach ($object->getShipmentLegRateDetails() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['shipmentLegRateDetails'] = $values_1;
            }
            if ($object->isInitialized('dimDivisor') && null !== $object->getDimDivisor()) {
                $data['dimDivisor'] = $object->getDimDivisor();
            }
            if ($object->isInitialized('rateType') && null !== $object->getRateType()) {
                $data['rateType'] = $object->getRateType();
            }
            if ($object->isInitialized('surcharges') && null !== $object->getSurcharges()) {
                $values_2 = [];
                foreach ($object->getSurcharges() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['surcharges'] = $values_2;
            }
            if ($object->isInitialized('totalSurcharges') && null !== $object->getTotalSurcharges()) {
                $data['totalSurcharges'] = $object->getTotalSurcharges();
            }
            if ($object->isInitialized('totalBillingWeight') && null !== $object->getTotalBillingWeight()) {
                $data['totalBillingWeight'] = $this->normalizer->normalize($object->getTotalBillingWeight(), 'json', $context);
            }
            if ($object->isInitialized('freightDiscounts') && null !== $object->getFreightDiscounts()) {
                $values_3 = [];
                foreach ($object->getFreightDiscounts() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['freightDiscounts'] = $values_3;
            }
            if ($object->isInitialized('rateScale') && null !== $object->getRateScale()) {
                $data['rateScale'] = $object->getRateScale();
            }
            if ($object->isInitialized('totalNetCharge') && null !== $object->getTotalNetCharge()) {
                $data['totalNetCharge'] = $object->getTotalNetCharge();
            }
            if ($object->isInitialized('totalBaseCharge') && null !== $object->getTotalBaseCharge()) {
                $data['totalBaseCharge'] = $object->getTotalBaseCharge();
            }
            if ($object->isInitialized('totalNetChargeWithDutiesAndTaxes') && null !== $object->getTotalNetChargeWithDutiesAndTaxes()) {
                $data['totalNetChargeWithDutiesAndTaxes'] = $object->getTotalNetChargeWithDutiesAndTaxes();
            }
            if ($object->isInitialized('currency') && null !== $object->getCurrency()) {
                $data['currency'] = $object->getCurrency();
            }
            foreach ($object as $key => $value_4) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_4;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\FedEx\Api\Model\ShipV1FreightShipmentsPostResponse200OutputTransactionShipmentsItemCompletedShipmentDetailShipmentRatingShipmentRateDetailsItem::class => false];
        }
    }
}