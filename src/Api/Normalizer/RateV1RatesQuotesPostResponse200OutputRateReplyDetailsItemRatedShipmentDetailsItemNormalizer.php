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
    class RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItem';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItem';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItem();
            if (\array_key_exists('totalDutiesTaxesAndFees', $data) && \is_int($data['totalDutiesTaxesAndFees'])) {
                $data['totalDutiesTaxesAndFees'] = (double) $data['totalDutiesTaxesAndFees'];
            }
            if (\array_key_exists('totalDiscounts', $data) && \is_int($data['totalDiscounts'])) {
                $data['totalDiscounts'] = (double) $data['totalDiscounts'];
            }
            if (\array_key_exists('totalDutiesAndTaxes', $data) && \is_int($data['totalDutiesAndTaxes'])) {
                $data['totalDutiesAndTaxes'] = (double) $data['totalDutiesAndTaxes'];
            }
            if (\array_key_exists('totalAncillaryFeesAndTaxes', $data) && \is_int($data['totalAncillaryFeesAndTaxes'])) {
                $data['totalAncillaryFeesAndTaxes'] = (double) $data['totalAncillaryFeesAndTaxes'];
            }
            if (\array_key_exists('totalNetFedExCharge', $data) && \is_int($data['totalNetFedExCharge'])) {
                $data['totalNetFedExCharge'] = (double) $data['totalNetFedExCharge'];
            }
            if (\array_key_exists('totalVatCharge', $data) && \is_int($data['totalVatCharge'])) {
                $data['totalVatCharge'] = (double) $data['totalVatCharge'];
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
            if (\array_key_exists('rateType', $data)) {
                $object->setRateType($data['rateType']);
                unset($data['rateType']);
            }
            if (\array_key_exists('ratedWeightMethod', $data)) {
                $object->setRatedWeightMethod($data['ratedWeightMethod']);
                unset($data['ratedWeightMethod']);
            }
            if (\array_key_exists('totalDutiesTaxesAndFees', $data)) {
                $object->setTotalDutiesTaxesAndFees($data['totalDutiesTaxesAndFees']);
                unset($data['totalDutiesTaxesAndFees']);
            }
            if (\array_key_exists('totalDiscounts', $data)) {
                $object->setTotalDiscounts($data['totalDiscounts']);
                unset($data['totalDiscounts']);
            }
            if (\array_key_exists('totalDutiesAndTaxes', $data)) {
                $object->setTotalDutiesAndTaxes($data['totalDutiesAndTaxes']);
                unset($data['totalDutiesAndTaxes']);
            }
            if (\array_key_exists('variableHandlingCharges', $data)) {
                $object->setVariableHandlingCharges($this->denormalizer->denormalize($data['variableHandlingCharges'], 'AntibodiesOnline\\FedEx\\Api\\Model\\RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemVariableHandlingCharges', 'json', $context));
                unset($data['variableHandlingCharges']);
            }
            if (\array_key_exists('edtCharges', $data)) {
                $values = [];
                foreach ($data['edtCharges'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'AntibodiesOnline\\FedEx\\Api\\Model\\RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemEdtChargesItem', 'json', $context);
                }
                $object->setEdtCharges($values);
                unset($data['edtCharges']);
            }
            if (\array_key_exists('totalAncillaryFeesAndTaxes', $data)) {
                $object->setTotalAncillaryFeesAndTaxes($data['totalAncillaryFeesAndTaxes']);
                unset($data['totalAncillaryFeesAndTaxes']);
            }
            if (\array_key_exists('ratedPackages', $data)) {
                $values_1 = [];
                foreach ($data['ratedPackages'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'AntibodiesOnline\\FedEx\\Api\\Model\\RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemRatedPackagesItem', 'json', $context);
                }
                $object->setRatedPackages($values_1);
                unset($data['ratedPackages']);
            }
            if (\array_key_exists('totalNetFedExCharge', $data)) {
                $object->setTotalNetFedExCharge($data['totalNetFedExCharge']);
                unset($data['totalNetFedExCharge']);
            }
            if (\array_key_exists('quoteNumber', $data)) {
                $object->setQuoteNumber($data['quoteNumber']);
                unset($data['quoteNumber']);
            }
            if (\array_key_exists('shipmentLegRateDetails', $data)) {
                $values_2 = [];
                foreach ($data['shipmentLegRateDetails'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, 'AntibodiesOnline\\FedEx\\Api\\Model\\RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemShipmentLegRateDetailsItem', 'json', $context);
                }
                $object->setShipmentLegRateDetails($values_2);
                unset($data['shipmentLegRateDetails']);
            }
            if (\array_key_exists('freightChargeBasis', $data)) {
                $object->setFreightChargeBasis($data['freightChargeBasis']);
                unset($data['freightChargeBasis']);
            }
            if (\array_key_exists('totalVariableHandlingCharges', $data)) {
                $object->setTotalVariableHandlingCharges($this->denormalizer->denormalize($data['totalVariableHandlingCharges'], 'AntibodiesOnline\\FedEx\\Api\\Model\\RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemTotalVariableHandlingCharges', 'json', $context));
                unset($data['totalVariableHandlingCharges']);
            }
            if (\array_key_exists('totalVatCharge', $data)) {
                $object->setTotalVatCharge($data['totalVatCharge']);
                unset($data['totalVatCharge']);
            }
            if (\array_key_exists('ancillaryFeesAndTaxes', $data)) {
                $values_3 = [];
                foreach ($data['ancillaryFeesAndTaxes'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, 'AntibodiesOnline\\FedEx\\Api\\Model\\RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemAncillaryFeesAndTaxesItem', 'json', $context);
                }
                $object->setAncillaryFeesAndTaxes($values_3);
                unset($data['ancillaryFeesAndTaxes']);
            }
            if (\array_key_exists('preferredEdtCharges', $data)) {
                $values_4 = [];
                foreach ($data['preferredEdtCharges'] as $value_4) {
                    $values_4[] = $this->denormalizer->denormalize($value_4, 'AntibodiesOnline\\FedEx\\Api\\Model\\RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemPreferredEdtChargesItem', 'json', $context);
                }
                $object->setPreferredEdtCharges($values_4);
                unset($data['preferredEdtCharges']);
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
            if (\array_key_exists('shipmentRateDetail', $data)) {
                $object->setShipmentRateDetail($this->denormalizer->denormalize($data['shipmentRateDetail'], 'AntibodiesOnline\\FedEx\\Api\\Model\\RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemShipmentRateDetail', 'json', $context));
                unset($data['shipmentRateDetail']);
            }
            foreach ($data as $key => $value_5) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_5;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('rateType') && null !== $object->getRateType()) {
                $data['rateType'] = $object->getRateType();
            }
            if ($object->isInitialized('ratedWeightMethod') && null !== $object->getRatedWeightMethod()) {
                $data['ratedWeightMethod'] = $object->getRatedWeightMethod();
            }
            if ($object->isInitialized('totalDutiesTaxesAndFees') && null !== $object->getTotalDutiesTaxesAndFees()) {
                $data['totalDutiesTaxesAndFees'] = $object->getTotalDutiesTaxesAndFees();
            }
            if ($object->isInitialized('totalDiscounts') && null !== $object->getTotalDiscounts()) {
                $data['totalDiscounts'] = $object->getTotalDiscounts();
            }
            if ($object->isInitialized('totalDutiesAndTaxes') && null !== $object->getTotalDutiesAndTaxes()) {
                $data['totalDutiesAndTaxes'] = $object->getTotalDutiesAndTaxes();
            }
            if ($object->isInitialized('variableHandlingCharges') && null !== $object->getVariableHandlingCharges()) {
                $data['variableHandlingCharges'] = $this->normalizer->normalize($object->getVariableHandlingCharges(), 'json', $context);
            }
            if ($object->isInitialized('edtCharges') && null !== $object->getEdtCharges()) {
                $values = [];
                foreach ($object->getEdtCharges() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['edtCharges'] = $values;
            }
            if ($object->isInitialized('totalAncillaryFeesAndTaxes') && null !== $object->getTotalAncillaryFeesAndTaxes()) {
                $data['totalAncillaryFeesAndTaxes'] = $object->getTotalAncillaryFeesAndTaxes();
            }
            if ($object->isInitialized('ratedPackages') && null !== $object->getRatedPackages()) {
                $values_1 = [];
                foreach ($object->getRatedPackages() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['ratedPackages'] = $values_1;
            }
            if ($object->isInitialized('totalNetFedExCharge') && null !== $object->getTotalNetFedExCharge()) {
                $data['totalNetFedExCharge'] = $object->getTotalNetFedExCharge();
            }
            if ($object->isInitialized('quoteNumber') && null !== $object->getQuoteNumber()) {
                $data['quoteNumber'] = $object->getQuoteNumber();
            }
            if ($object->isInitialized('shipmentLegRateDetails') && null !== $object->getShipmentLegRateDetails()) {
                $values_2 = [];
                foreach ($object->getShipmentLegRateDetails() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['shipmentLegRateDetails'] = $values_2;
            }
            if ($object->isInitialized('freightChargeBasis') && null !== $object->getFreightChargeBasis()) {
                $data['freightChargeBasis'] = $object->getFreightChargeBasis();
            }
            if ($object->isInitialized('totalVariableHandlingCharges') && null !== $object->getTotalVariableHandlingCharges()) {
                $data['totalVariableHandlingCharges'] = $this->normalizer->normalize($object->getTotalVariableHandlingCharges(), 'json', $context);
            }
            if ($object->isInitialized('totalVatCharge') && null !== $object->getTotalVatCharge()) {
                $data['totalVatCharge'] = $object->getTotalVatCharge();
            }
            if ($object->isInitialized('ancillaryFeesAndTaxes') && null !== $object->getAncillaryFeesAndTaxes()) {
                $values_3 = [];
                foreach ($object->getAncillaryFeesAndTaxes() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['ancillaryFeesAndTaxes'] = $values_3;
            }
            if ($object->isInitialized('preferredEdtCharges') && null !== $object->getPreferredEdtCharges()) {
                $values_4 = [];
                foreach ($object->getPreferredEdtCharges() as $value_4) {
                    $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
                }
                $data['preferredEdtCharges'] = $values_4;
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
            if ($object->isInitialized('shipmentRateDetail') && null !== $object->getShipmentRateDetail()) {
                $data['shipmentRateDetail'] = $this->normalizer->normalize($object->getShipmentRateDetail(), 'json', $context);
            }
            foreach ($object as $key => $value_5) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_5;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItem' => false];
        }
    }
} else {
    class RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItem';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItem';
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItem();
            if (\array_key_exists('totalDutiesTaxesAndFees', $data) && \is_int($data['totalDutiesTaxesAndFees'])) {
                $data['totalDutiesTaxesAndFees'] = (double) $data['totalDutiesTaxesAndFees'];
            }
            if (\array_key_exists('totalDiscounts', $data) && \is_int($data['totalDiscounts'])) {
                $data['totalDiscounts'] = (double) $data['totalDiscounts'];
            }
            if (\array_key_exists('totalDutiesAndTaxes', $data) && \is_int($data['totalDutiesAndTaxes'])) {
                $data['totalDutiesAndTaxes'] = (double) $data['totalDutiesAndTaxes'];
            }
            if (\array_key_exists('totalAncillaryFeesAndTaxes', $data) && \is_int($data['totalAncillaryFeesAndTaxes'])) {
                $data['totalAncillaryFeesAndTaxes'] = (double) $data['totalAncillaryFeesAndTaxes'];
            }
            if (\array_key_exists('totalNetFedExCharge', $data) && \is_int($data['totalNetFedExCharge'])) {
                $data['totalNetFedExCharge'] = (double) $data['totalNetFedExCharge'];
            }
            if (\array_key_exists('totalVatCharge', $data) && \is_int($data['totalVatCharge'])) {
                $data['totalVatCharge'] = (double) $data['totalVatCharge'];
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
            if (\array_key_exists('rateType', $data)) {
                $object->setRateType($data['rateType']);
                unset($data['rateType']);
            }
            if (\array_key_exists('ratedWeightMethod', $data)) {
                $object->setRatedWeightMethod($data['ratedWeightMethod']);
                unset($data['ratedWeightMethod']);
            }
            if (\array_key_exists('totalDutiesTaxesAndFees', $data)) {
                $object->setTotalDutiesTaxesAndFees($data['totalDutiesTaxesAndFees']);
                unset($data['totalDutiesTaxesAndFees']);
            }
            if (\array_key_exists('totalDiscounts', $data)) {
                $object->setTotalDiscounts($data['totalDiscounts']);
                unset($data['totalDiscounts']);
            }
            if (\array_key_exists('totalDutiesAndTaxes', $data)) {
                $object->setTotalDutiesAndTaxes($data['totalDutiesAndTaxes']);
                unset($data['totalDutiesAndTaxes']);
            }
            if (\array_key_exists('variableHandlingCharges', $data)) {
                $object->setVariableHandlingCharges($this->denormalizer->denormalize($data['variableHandlingCharges'], 'AntibodiesOnline\\FedEx\\Api\\Model\\RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemVariableHandlingCharges', 'json', $context));
                unset($data['variableHandlingCharges']);
            }
            if (\array_key_exists('edtCharges', $data)) {
                $values = [];
                foreach ($data['edtCharges'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'AntibodiesOnline\\FedEx\\Api\\Model\\RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemEdtChargesItem', 'json', $context);
                }
                $object->setEdtCharges($values);
                unset($data['edtCharges']);
            }
            if (\array_key_exists('totalAncillaryFeesAndTaxes', $data)) {
                $object->setTotalAncillaryFeesAndTaxes($data['totalAncillaryFeesAndTaxes']);
                unset($data['totalAncillaryFeesAndTaxes']);
            }
            if (\array_key_exists('ratedPackages', $data)) {
                $values_1 = [];
                foreach ($data['ratedPackages'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'AntibodiesOnline\\FedEx\\Api\\Model\\RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemRatedPackagesItem', 'json', $context);
                }
                $object->setRatedPackages($values_1);
                unset($data['ratedPackages']);
            }
            if (\array_key_exists('totalNetFedExCharge', $data)) {
                $object->setTotalNetFedExCharge($data['totalNetFedExCharge']);
                unset($data['totalNetFedExCharge']);
            }
            if (\array_key_exists('quoteNumber', $data)) {
                $object->setQuoteNumber($data['quoteNumber']);
                unset($data['quoteNumber']);
            }
            if (\array_key_exists('shipmentLegRateDetails', $data)) {
                $values_2 = [];
                foreach ($data['shipmentLegRateDetails'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, 'AntibodiesOnline\\FedEx\\Api\\Model\\RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemShipmentLegRateDetailsItem', 'json', $context);
                }
                $object->setShipmentLegRateDetails($values_2);
                unset($data['shipmentLegRateDetails']);
            }
            if (\array_key_exists('freightChargeBasis', $data)) {
                $object->setFreightChargeBasis($data['freightChargeBasis']);
                unset($data['freightChargeBasis']);
            }
            if (\array_key_exists('totalVariableHandlingCharges', $data)) {
                $object->setTotalVariableHandlingCharges($this->denormalizer->denormalize($data['totalVariableHandlingCharges'], 'AntibodiesOnline\\FedEx\\Api\\Model\\RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemTotalVariableHandlingCharges', 'json', $context));
                unset($data['totalVariableHandlingCharges']);
            }
            if (\array_key_exists('totalVatCharge', $data)) {
                $object->setTotalVatCharge($data['totalVatCharge']);
                unset($data['totalVatCharge']);
            }
            if (\array_key_exists('ancillaryFeesAndTaxes', $data)) {
                $values_3 = [];
                foreach ($data['ancillaryFeesAndTaxes'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, 'AntibodiesOnline\\FedEx\\Api\\Model\\RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemAncillaryFeesAndTaxesItem', 'json', $context);
                }
                $object->setAncillaryFeesAndTaxes($values_3);
                unset($data['ancillaryFeesAndTaxes']);
            }
            if (\array_key_exists('preferredEdtCharges', $data)) {
                $values_4 = [];
                foreach ($data['preferredEdtCharges'] as $value_4) {
                    $values_4[] = $this->denormalizer->denormalize($value_4, 'AntibodiesOnline\\FedEx\\Api\\Model\\RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemPreferredEdtChargesItem', 'json', $context);
                }
                $object->setPreferredEdtCharges($values_4);
                unset($data['preferredEdtCharges']);
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
            if (\array_key_exists('shipmentRateDetail', $data)) {
                $object->setShipmentRateDetail($this->denormalizer->denormalize($data['shipmentRateDetail'], 'AntibodiesOnline\\FedEx\\Api\\Model\\RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItemShipmentRateDetail', 'json', $context));
                unset($data['shipmentRateDetail']);
            }
            foreach ($data as $key => $value_5) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_5;
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
            if ($object->isInitialized('rateType') && null !== $object->getRateType()) {
                $data['rateType'] = $object->getRateType();
            }
            if ($object->isInitialized('ratedWeightMethod') && null !== $object->getRatedWeightMethod()) {
                $data['ratedWeightMethod'] = $object->getRatedWeightMethod();
            }
            if ($object->isInitialized('totalDutiesTaxesAndFees') && null !== $object->getTotalDutiesTaxesAndFees()) {
                $data['totalDutiesTaxesAndFees'] = $object->getTotalDutiesTaxesAndFees();
            }
            if ($object->isInitialized('totalDiscounts') && null !== $object->getTotalDiscounts()) {
                $data['totalDiscounts'] = $object->getTotalDiscounts();
            }
            if ($object->isInitialized('totalDutiesAndTaxes') && null !== $object->getTotalDutiesAndTaxes()) {
                $data['totalDutiesAndTaxes'] = $object->getTotalDutiesAndTaxes();
            }
            if ($object->isInitialized('variableHandlingCharges') && null !== $object->getVariableHandlingCharges()) {
                $data['variableHandlingCharges'] = $this->normalizer->normalize($object->getVariableHandlingCharges(), 'json', $context);
            }
            if ($object->isInitialized('edtCharges') && null !== $object->getEdtCharges()) {
                $values = [];
                foreach ($object->getEdtCharges() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['edtCharges'] = $values;
            }
            if ($object->isInitialized('totalAncillaryFeesAndTaxes') && null !== $object->getTotalAncillaryFeesAndTaxes()) {
                $data['totalAncillaryFeesAndTaxes'] = $object->getTotalAncillaryFeesAndTaxes();
            }
            if ($object->isInitialized('ratedPackages') && null !== $object->getRatedPackages()) {
                $values_1 = [];
                foreach ($object->getRatedPackages() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['ratedPackages'] = $values_1;
            }
            if ($object->isInitialized('totalNetFedExCharge') && null !== $object->getTotalNetFedExCharge()) {
                $data['totalNetFedExCharge'] = $object->getTotalNetFedExCharge();
            }
            if ($object->isInitialized('quoteNumber') && null !== $object->getQuoteNumber()) {
                $data['quoteNumber'] = $object->getQuoteNumber();
            }
            if ($object->isInitialized('shipmentLegRateDetails') && null !== $object->getShipmentLegRateDetails()) {
                $values_2 = [];
                foreach ($object->getShipmentLegRateDetails() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['shipmentLegRateDetails'] = $values_2;
            }
            if ($object->isInitialized('freightChargeBasis') && null !== $object->getFreightChargeBasis()) {
                $data['freightChargeBasis'] = $object->getFreightChargeBasis();
            }
            if ($object->isInitialized('totalVariableHandlingCharges') && null !== $object->getTotalVariableHandlingCharges()) {
                $data['totalVariableHandlingCharges'] = $this->normalizer->normalize($object->getTotalVariableHandlingCharges(), 'json', $context);
            }
            if ($object->isInitialized('totalVatCharge') && null !== $object->getTotalVatCharge()) {
                $data['totalVatCharge'] = $object->getTotalVatCharge();
            }
            if ($object->isInitialized('ancillaryFeesAndTaxes') && null !== $object->getAncillaryFeesAndTaxes()) {
                $values_3 = [];
                foreach ($object->getAncillaryFeesAndTaxes() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['ancillaryFeesAndTaxes'] = $values_3;
            }
            if ($object->isInitialized('preferredEdtCharges') && null !== $object->getPreferredEdtCharges()) {
                $values_4 = [];
                foreach ($object->getPreferredEdtCharges() as $value_4) {
                    $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
                }
                $data['preferredEdtCharges'] = $values_4;
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
            if ($object->isInitialized('shipmentRateDetail') && null !== $object->getShipmentRateDetail()) {
                $data['shipmentRateDetail'] = $this->normalizer->normalize($object->getShipmentRateDetail(), 'json', $context);
            }
            foreach ($object as $key => $value_5) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_5;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\RateV1RatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsItem' => false];
        }
    }
}