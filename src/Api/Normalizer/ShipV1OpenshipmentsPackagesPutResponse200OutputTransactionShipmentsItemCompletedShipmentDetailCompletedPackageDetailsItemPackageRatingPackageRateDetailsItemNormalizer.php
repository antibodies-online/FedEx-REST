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
    class ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemPackageRatingPackageRateDetailsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemPackageRatingPackageRateDetailsItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemPackageRatingPackageRateDetailsItem::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemPackageRatingPackageRateDetailsItem();
            if (\array_key_exists('totalFreightDiscounts', $data) && \is_int($data['totalFreightDiscounts'])) {
                $data['totalFreightDiscounts'] = (double) $data['totalFreightDiscounts'];
            }
            if (\array_key_exists('totalTaxes', $data) && \is_int($data['totalTaxes'])) {
                $data['totalTaxes'] = (double) $data['totalTaxes'];
            }
            if (\array_key_exists('baseCharge', $data) && \is_int($data['baseCharge'])) {
                $data['baseCharge'] = (double) $data['baseCharge'];
            }
            if (\array_key_exists('totalRebates', $data) && \is_int($data['totalRebates'])) {
                $data['totalRebates'] = (double) $data['totalRebates'];
            }
            if (\array_key_exists('netFreight', $data) && \is_int($data['netFreight'])) {
                $data['netFreight'] = (double) $data['netFreight'];
            }
            if (\array_key_exists('totalSurcharges', $data) && \is_int($data['totalSurcharges'])) {
                $data['totalSurcharges'] = (double) $data['totalSurcharges'];
            }
            if (\array_key_exists('netFedExCharge', $data) && \is_int($data['netFedExCharge'])) {
                $data['netFedExCharge'] = (double) $data['netFedExCharge'];
            }
            if (\array_key_exists('netCharge', $data) && \is_int($data['netCharge'])) {
                $data['netCharge'] = (double) $data['netCharge'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('ratedWeightMethod', $data)) {
                $object->setRatedWeightMethod($data['ratedWeightMethod']);
                unset($data['ratedWeightMethod']);
            }
            if (\array_key_exists('totalFreightDiscounts', $data)) {
                $object->setTotalFreightDiscounts($data['totalFreightDiscounts']);
                unset($data['totalFreightDiscounts']);
            }
            if (\array_key_exists('totalTaxes', $data)) {
                $object->setTotalTaxes($data['totalTaxes']);
                unset($data['totalTaxes']);
            }
            if (\array_key_exists('minimumChargeType', $data)) {
                $object->setMinimumChargeType($data['minimumChargeType']);
                unset($data['minimumChargeType']);
            }
            if (\array_key_exists('baseCharge', $data)) {
                $object->setBaseCharge($data['baseCharge']);
                unset($data['baseCharge']);
            }
            if (\array_key_exists('totalRebates', $data)) {
                $object->setTotalRebates($data['totalRebates']);
                unset($data['totalRebates']);
            }
            if (\array_key_exists('rateType', $data)) {
                $object->setRateType($data['rateType']);
                unset($data['rateType']);
            }
            if (\array_key_exists('billingWeight', $data)) {
                $object->setBillingWeight($this->denormalizer->denormalize($data['billingWeight'], \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemPackageRatingPackageRateDetailsItemBillingWeight::class, 'json', $context));
                unset($data['billingWeight']);
            }
            if (\array_key_exists('netFreight', $data)) {
                $object->setNetFreight($data['netFreight']);
                unset($data['netFreight']);
            }
            if (\array_key_exists('surcharges', $data)) {
                $values = [];
                foreach ($data['surcharges'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemPackageRatingPackageRateDetailsItemSurchargesItem::class, 'json', $context);
                }
                $object->setSurcharges($values);
                unset($data['surcharges']);
            }
            if (\array_key_exists('totalSurcharges', $data)) {
                $object->setTotalSurcharges($data['totalSurcharges']);
                unset($data['totalSurcharges']);
            }
            if (\array_key_exists('netFedExCharge', $data)) {
                $object->setNetFedExCharge($data['netFedExCharge']);
                unset($data['netFedExCharge']);
            }
            if (\array_key_exists('netCharge', $data)) {
                $object->setNetCharge($data['netCharge']);
                unset($data['netCharge']);
            }
            if (\array_key_exists('currency', $data)) {
                $object->setCurrency($data['currency']);
                unset($data['currency']);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('ratedWeightMethod') && null !== $object->getRatedWeightMethod()) {
                $data['ratedWeightMethod'] = $object->getRatedWeightMethod();
            }
            if ($object->isInitialized('totalFreightDiscounts') && null !== $object->getTotalFreightDiscounts()) {
                $data['totalFreightDiscounts'] = $object->getTotalFreightDiscounts();
            }
            if ($object->isInitialized('totalTaxes') && null !== $object->getTotalTaxes()) {
                $data['totalTaxes'] = $object->getTotalTaxes();
            }
            if ($object->isInitialized('minimumChargeType') && null !== $object->getMinimumChargeType()) {
                $data['minimumChargeType'] = $object->getMinimumChargeType();
            }
            if ($object->isInitialized('baseCharge') && null !== $object->getBaseCharge()) {
                $data['baseCharge'] = $object->getBaseCharge();
            }
            if ($object->isInitialized('totalRebates') && null !== $object->getTotalRebates()) {
                $data['totalRebates'] = $object->getTotalRebates();
            }
            if ($object->isInitialized('rateType') && null !== $object->getRateType()) {
                $data['rateType'] = $object->getRateType();
            }
            if ($object->isInitialized('billingWeight') && null !== $object->getBillingWeight()) {
                $data['billingWeight'] = $this->normalizer->normalize($object->getBillingWeight(), 'json', $context);
            }
            if ($object->isInitialized('netFreight') && null !== $object->getNetFreight()) {
                $data['netFreight'] = $object->getNetFreight();
            }
            if ($object->isInitialized('surcharges') && null !== $object->getSurcharges()) {
                $values = [];
                foreach ($object->getSurcharges() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['surcharges'] = $values;
            }
            if ($object->isInitialized('totalSurcharges') && null !== $object->getTotalSurcharges()) {
                $data['totalSurcharges'] = $object->getTotalSurcharges();
            }
            if ($object->isInitialized('netFedExCharge') && null !== $object->getNetFedExCharge()) {
                $data['netFedExCharge'] = $object->getNetFedExCharge();
            }
            if ($object->isInitialized('netCharge') && null !== $object->getNetCharge()) {
                $data['netCharge'] = $object->getNetCharge();
            }
            if ($object->isInitialized('currency') && null !== $object->getCurrency()) {
                $data['currency'] = $object->getCurrency();
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemPackageRatingPackageRateDetailsItem::class => false];
        }
    }
} else {
    class ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemPackageRatingPackageRateDetailsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemPackageRatingPackageRateDetailsItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemPackageRatingPackageRateDetailsItem::class;
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemPackageRatingPackageRateDetailsItem();
            if (\array_key_exists('totalFreightDiscounts', $data) && \is_int($data['totalFreightDiscounts'])) {
                $data['totalFreightDiscounts'] = (double) $data['totalFreightDiscounts'];
            }
            if (\array_key_exists('totalTaxes', $data) && \is_int($data['totalTaxes'])) {
                $data['totalTaxes'] = (double) $data['totalTaxes'];
            }
            if (\array_key_exists('baseCharge', $data) && \is_int($data['baseCharge'])) {
                $data['baseCharge'] = (double) $data['baseCharge'];
            }
            if (\array_key_exists('totalRebates', $data) && \is_int($data['totalRebates'])) {
                $data['totalRebates'] = (double) $data['totalRebates'];
            }
            if (\array_key_exists('netFreight', $data) && \is_int($data['netFreight'])) {
                $data['netFreight'] = (double) $data['netFreight'];
            }
            if (\array_key_exists('totalSurcharges', $data) && \is_int($data['totalSurcharges'])) {
                $data['totalSurcharges'] = (double) $data['totalSurcharges'];
            }
            if (\array_key_exists('netFedExCharge', $data) && \is_int($data['netFedExCharge'])) {
                $data['netFedExCharge'] = (double) $data['netFedExCharge'];
            }
            if (\array_key_exists('netCharge', $data) && \is_int($data['netCharge'])) {
                $data['netCharge'] = (double) $data['netCharge'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('ratedWeightMethod', $data)) {
                $object->setRatedWeightMethod($data['ratedWeightMethod']);
                unset($data['ratedWeightMethod']);
            }
            if (\array_key_exists('totalFreightDiscounts', $data)) {
                $object->setTotalFreightDiscounts($data['totalFreightDiscounts']);
                unset($data['totalFreightDiscounts']);
            }
            if (\array_key_exists('totalTaxes', $data)) {
                $object->setTotalTaxes($data['totalTaxes']);
                unset($data['totalTaxes']);
            }
            if (\array_key_exists('minimumChargeType', $data)) {
                $object->setMinimumChargeType($data['minimumChargeType']);
                unset($data['minimumChargeType']);
            }
            if (\array_key_exists('baseCharge', $data)) {
                $object->setBaseCharge($data['baseCharge']);
                unset($data['baseCharge']);
            }
            if (\array_key_exists('totalRebates', $data)) {
                $object->setTotalRebates($data['totalRebates']);
                unset($data['totalRebates']);
            }
            if (\array_key_exists('rateType', $data)) {
                $object->setRateType($data['rateType']);
                unset($data['rateType']);
            }
            if (\array_key_exists('billingWeight', $data)) {
                $object->setBillingWeight($this->denormalizer->denormalize($data['billingWeight'], \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemPackageRatingPackageRateDetailsItemBillingWeight::class, 'json', $context));
                unset($data['billingWeight']);
            }
            if (\array_key_exists('netFreight', $data)) {
                $object->setNetFreight($data['netFreight']);
                unset($data['netFreight']);
            }
            if (\array_key_exists('surcharges', $data)) {
                $values = [];
                foreach ($data['surcharges'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemPackageRatingPackageRateDetailsItemSurchargesItem::class, 'json', $context);
                }
                $object->setSurcharges($values);
                unset($data['surcharges']);
            }
            if (\array_key_exists('totalSurcharges', $data)) {
                $object->setTotalSurcharges($data['totalSurcharges']);
                unset($data['totalSurcharges']);
            }
            if (\array_key_exists('netFedExCharge', $data)) {
                $object->setNetFedExCharge($data['netFedExCharge']);
                unset($data['netFedExCharge']);
            }
            if (\array_key_exists('netCharge', $data)) {
                $object->setNetCharge($data['netCharge']);
                unset($data['netCharge']);
            }
            if (\array_key_exists('currency', $data)) {
                $object->setCurrency($data['currency']);
                unset($data['currency']);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
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
            if ($object->isInitialized('ratedWeightMethod') && null !== $object->getRatedWeightMethod()) {
                $data['ratedWeightMethod'] = $object->getRatedWeightMethod();
            }
            if ($object->isInitialized('totalFreightDiscounts') && null !== $object->getTotalFreightDiscounts()) {
                $data['totalFreightDiscounts'] = $object->getTotalFreightDiscounts();
            }
            if ($object->isInitialized('totalTaxes') && null !== $object->getTotalTaxes()) {
                $data['totalTaxes'] = $object->getTotalTaxes();
            }
            if ($object->isInitialized('minimumChargeType') && null !== $object->getMinimumChargeType()) {
                $data['minimumChargeType'] = $object->getMinimumChargeType();
            }
            if ($object->isInitialized('baseCharge') && null !== $object->getBaseCharge()) {
                $data['baseCharge'] = $object->getBaseCharge();
            }
            if ($object->isInitialized('totalRebates') && null !== $object->getTotalRebates()) {
                $data['totalRebates'] = $object->getTotalRebates();
            }
            if ($object->isInitialized('rateType') && null !== $object->getRateType()) {
                $data['rateType'] = $object->getRateType();
            }
            if ($object->isInitialized('billingWeight') && null !== $object->getBillingWeight()) {
                $data['billingWeight'] = $this->normalizer->normalize($object->getBillingWeight(), 'json', $context);
            }
            if ($object->isInitialized('netFreight') && null !== $object->getNetFreight()) {
                $data['netFreight'] = $object->getNetFreight();
            }
            if ($object->isInitialized('surcharges') && null !== $object->getSurcharges()) {
                $values = [];
                foreach ($object->getSurcharges() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['surcharges'] = $values;
            }
            if ($object->isInitialized('totalSurcharges') && null !== $object->getTotalSurcharges()) {
                $data['totalSurcharges'] = $object->getTotalSurcharges();
            }
            if ($object->isInitialized('netFedExCharge') && null !== $object->getNetFedExCharge()) {
                $data['netFedExCharge'] = $object->getNetFedExCharge();
            }
            if ($object->isInitialized('netCharge') && null !== $object->getNetCharge()) {
                $data['netCharge'] = $object->getNetCharge();
            }
            if ($object->isInitialized('currency') && null !== $object->getCurrency()) {
                $data['currency'] = $object->getCurrency();
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\AntibodiesOnline\FedEx\Api\Model\ShipV1OpenshipmentsPackagesPutResponse200OutputTransactionShipmentsItemCompletedShipmentDetailCompletedPackageDetailsItemPackageRatingPackageRateDetailsItem::class => false];
        }
    }
}