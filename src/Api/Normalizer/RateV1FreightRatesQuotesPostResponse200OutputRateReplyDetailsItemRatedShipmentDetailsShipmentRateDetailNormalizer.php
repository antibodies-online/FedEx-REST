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
    class RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsShipmentRateDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsShipmentRateDetail';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsShipmentRateDetail';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsShipmentRateDetail();
            if (\array_key_exists('totalFreightDiscount', $data) && \is_int($data['totalFreightDiscount'])) {
                $data['totalFreightDiscount'] = (double) $data['totalFreightDiscount'];
            }
            if (\array_key_exists('totalSurcharges', $data) && \is_int($data['totalSurcharges'])) {
                $data['totalSurcharges'] = (double) $data['totalSurcharges'];
            }
            if (\array_key_exists('fuelSurchargePercent', $data) && \is_int($data['fuelSurchargePercent'])) {
                $data['fuelSurchargePercent'] = (double) $data['fuelSurchargePercent'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('currencyExchangeRate', $data)) {
                $object->setCurrencyExchangeRate($this->denormalizer->denormalize($data['currencyExchangeRate'], 'AntibodiesOnline\\FedEx\\Api\\Model\\RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsShipmentRateDetailCurrencyExchangeRate', 'json', $context));
                unset($data['currencyExchangeRate']);
            }
            if (\array_key_exists('currency', $data)) {
                $object->setCurrency($data['currency']);
                unset($data['currency']);
            }
            if (\array_key_exists('rateZone', $data)) {
                $object->setRateZone($data['rateZone']);
                unset($data['rateZone']);
            }
            if (\array_key_exists('pricingCode', $data)) {
                $object->setPricingCode($data['pricingCode']);
                unset($data['pricingCode']);
            }
            if (\array_key_exists('totalFreightDiscount', $data)) {
                $object->setTotalFreightDiscount($data['totalFreightDiscount']);
                unset($data['totalFreightDiscount']);
            }
            if (\array_key_exists('specialRatingApplied', $data)) {
                $values = [];
                foreach ($data['specialRatingApplied'] as $value) {
                    $values[] = $value;
                }
                $object->setSpecialRatingApplied($values);
                unset($data['specialRatingApplied']);
            }
            if (\array_key_exists('totalSurcharges', $data)) {
                $object->setTotalSurcharges($data['totalSurcharges']);
                unset($data['totalSurcharges']);
            }
            if (\array_key_exists('freightDiscount', $data)) {
                $values_1 = [];
                foreach ($data['freightDiscount'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'AntibodiesOnline\\FedEx\\Api\\Model\\RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsShipmentRateDetailFreightDiscountItem', 'json', $context);
                }
                $object->setFreightDiscount($values_1);
                unset($data['freightDiscount']);
            }
            if (\array_key_exists('fuelSurchargePercent', $data)) {
                $object->setFuelSurchargePercent($data['fuelSurchargePercent']);
                unset($data['fuelSurchargePercent']);
            }
            if (\array_key_exists('totalBillingWeight', $data)) {
                $object->setTotalBillingWeight($this->denormalizer->denormalize($data['totalBillingWeight'], 'AntibodiesOnline\\FedEx\\Api\\Model\\RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsShipmentRateDetailTotalBillingWeight', 'json', $context));
                unset($data['totalBillingWeight']);
            }
            if (\array_key_exists('totalDimWeight', $data)) {
                $object->setTotalDimWeight($this->denormalizer->denormalize($data['totalDimWeight'], 'AntibodiesOnline\\FedEx\\Api\\Model\\RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsShipmentRateDetailTotalDimWeight', 'json', $context));
                unset($data['totalDimWeight']);
            }
            if (\array_key_exists('dimDivisor', $data)) {
                $object->setDimDivisor($data['dimDivisor']);
                unset($data['dimDivisor']);
            }
            if (\array_key_exists('surCharges', $data)) {
                $values_2 = [];
                foreach ($data['surCharges'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, 'AntibodiesOnline\\FedEx\\Api\\Model\\RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsShipmentRateDetailSurChargesItem', 'json', $context);
                }
                $object->setSurCharges($values_2);
                unset($data['surCharges']);
            }
            foreach ($data as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_3;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('currencyExchangeRate') && null !== $object->getCurrencyExchangeRate()) {
                $data['currencyExchangeRate'] = $this->normalizer->normalize($object->getCurrencyExchangeRate(), 'json', $context);
            }
            if ($object->isInitialized('currency') && null !== $object->getCurrency()) {
                $data['currency'] = $object->getCurrency();
            }
            if ($object->isInitialized('rateZone') && null !== $object->getRateZone()) {
                $data['rateZone'] = $object->getRateZone();
            }
            if ($object->isInitialized('pricingCode') && null !== $object->getPricingCode()) {
                $data['pricingCode'] = $object->getPricingCode();
            }
            if ($object->isInitialized('totalFreightDiscount') && null !== $object->getTotalFreightDiscount()) {
                $data['totalFreightDiscount'] = $object->getTotalFreightDiscount();
            }
            if ($object->isInitialized('specialRatingApplied') && null !== $object->getSpecialRatingApplied()) {
                $values = [];
                foreach ($object->getSpecialRatingApplied() as $value) {
                    $values[] = $value;
                }
                $data['specialRatingApplied'] = $values;
            }
            if ($object->isInitialized('totalSurcharges') && null !== $object->getTotalSurcharges()) {
                $data['totalSurcharges'] = $object->getTotalSurcharges();
            }
            if ($object->isInitialized('freightDiscount') && null !== $object->getFreightDiscount()) {
                $values_1 = [];
                foreach ($object->getFreightDiscount() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['freightDiscount'] = $values_1;
            }
            if ($object->isInitialized('fuelSurchargePercent') && null !== $object->getFuelSurchargePercent()) {
                $data['fuelSurchargePercent'] = $object->getFuelSurchargePercent();
            }
            if ($object->isInitialized('totalBillingWeight') && null !== $object->getTotalBillingWeight()) {
                $data['totalBillingWeight'] = $this->normalizer->normalize($object->getTotalBillingWeight(), 'json', $context);
            }
            if ($object->isInitialized('totalDimWeight') && null !== $object->getTotalDimWeight()) {
                $data['totalDimWeight'] = $this->normalizer->normalize($object->getTotalDimWeight(), 'json', $context);
            }
            if ($object->isInitialized('dimDivisor') && null !== $object->getDimDivisor()) {
                $data['dimDivisor'] = $object->getDimDivisor();
            }
            if ($object->isInitialized('surCharges') && null !== $object->getSurCharges()) {
                $values_2 = [];
                foreach ($object->getSurCharges() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['surCharges'] = $values_2;
            }
            foreach ($object as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_3;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsShipmentRateDetail' => false];
        }
    }
} else {
    class RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsShipmentRateDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'AntibodiesOnline\\FedEx\\Api\\Model\\RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsShipmentRateDetail';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'AntibodiesOnline\\FedEx\\Api\\Model\\RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsShipmentRateDetail';
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
            $object = new \AntibodiesOnline\FedEx\Api\Model\RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsShipmentRateDetail();
            if (\array_key_exists('totalFreightDiscount', $data) && \is_int($data['totalFreightDiscount'])) {
                $data['totalFreightDiscount'] = (double) $data['totalFreightDiscount'];
            }
            if (\array_key_exists('totalSurcharges', $data) && \is_int($data['totalSurcharges'])) {
                $data['totalSurcharges'] = (double) $data['totalSurcharges'];
            }
            if (\array_key_exists('fuelSurchargePercent', $data) && \is_int($data['fuelSurchargePercent'])) {
                $data['fuelSurchargePercent'] = (double) $data['fuelSurchargePercent'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('currencyExchangeRate', $data)) {
                $object->setCurrencyExchangeRate($this->denormalizer->denormalize($data['currencyExchangeRate'], 'AntibodiesOnline\\FedEx\\Api\\Model\\RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsShipmentRateDetailCurrencyExchangeRate', 'json', $context));
                unset($data['currencyExchangeRate']);
            }
            if (\array_key_exists('currency', $data)) {
                $object->setCurrency($data['currency']);
                unset($data['currency']);
            }
            if (\array_key_exists('rateZone', $data)) {
                $object->setRateZone($data['rateZone']);
                unset($data['rateZone']);
            }
            if (\array_key_exists('pricingCode', $data)) {
                $object->setPricingCode($data['pricingCode']);
                unset($data['pricingCode']);
            }
            if (\array_key_exists('totalFreightDiscount', $data)) {
                $object->setTotalFreightDiscount($data['totalFreightDiscount']);
                unset($data['totalFreightDiscount']);
            }
            if (\array_key_exists('specialRatingApplied', $data)) {
                $values = [];
                foreach ($data['specialRatingApplied'] as $value) {
                    $values[] = $value;
                }
                $object->setSpecialRatingApplied($values);
                unset($data['specialRatingApplied']);
            }
            if (\array_key_exists('totalSurcharges', $data)) {
                $object->setTotalSurcharges($data['totalSurcharges']);
                unset($data['totalSurcharges']);
            }
            if (\array_key_exists('freightDiscount', $data)) {
                $values_1 = [];
                foreach ($data['freightDiscount'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'AntibodiesOnline\\FedEx\\Api\\Model\\RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsShipmentRateDetailFreightDiscountItem', 'json', $context);
                }
                $object->setFreightDiscount($values_1);
                unset($data['freightDiscount']);
            }
            if (\array_key_exists('fuelSurchargePercent', $data)) {
                $object->setFuelSurchargePercent($data['fuelSurchargePercent']);
                unset($data['fuelSurchargePercent']);
            }
            if (\array_key_exists('totalBillingWeight', $data)) {
                $object->setTotalBillingWeight($this->denormalizer->denormalize($data['totalBillingWeight'], 'AntibodiesOnline\\FedEx\\Api\\Model\\RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsShipmentRateDetailTotalBillingWeight', 'json', $context));
                unset($data['totalBillingWeight']);
            }
            if (\array_key_exists('totalDimWeight', $data)) {
                $object->setTotalDimWeight($this->denormalizer->denormalize($data['totalDimWeight'], 'AntibodiesOnline\\FedEx\\Api\\Model\\RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsShipmentRateDetailTotalDimWeight', 'json', $context));
                unset($data['totalDimWeight']);
            }
            if (\array_key_exists('dimDivisor', $data)) {
                $object->setDimDivisor($data['dimDivisor']);
                unset($data['dimDivisor']);
            }
            if (\array_key_exists('surCharges', $data)) {
                $values_2 = [];
                foreach ($data['surCharges'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, 'AntibodiesOnline\\FedEx\\Api\\Model\\RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsShipmentRateDetailSurChargesItem', 'json', $context);
                }
                $object->setSurCharges($values_2);
                unset($data['surCharges']);
            }
            foreach ($data as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_3;
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
            if ($object->isInitialized('currencyExchangeRate') && null !== $object->getCurrencyExchangeRate()) {
                $data['currencyExchangeRate'] = $this->normalizer->normalize($object->getCurrencyExchangeRate(), 'json', $context);
            }
            if ($object->isInitialized('currency') && null !== $object->getCurrency()) {
                $data['currency'] = $object->getCurrency();
            }
            if ($object->isInitialized('rateZone') && null !== $object->getRateZone()) {
                $data['rateZone'] = $object->getRateZone();
            }
            if ($object->isInitialized('pricingCode') && null !== $object->getPricingCode()) {
                $data['pricingCode'] = $object->getPricingCode();
            }
            if ($object->isInitialized('totalFreightDiscount') && null !== $object->getTotalFreightDiscount()) {
                $data['totalFreightDiscount'] = $object->getTotalFreightDiscount();
            }
            if ($object->isInitialized('specialRatingApplied') && null !== $object->getSpecialRatingApplied()) {
                $values = [];
                foreach ($object->getSpecialRatingApplied() as $value) {
                    $values[] = $value;
                }
                $data['specialRatingApplied'] = $values;
            }
            if ($object->isInitialized('totalSurcharges') && null !== $object->getTotalSurcharges()) {
                $data['totalSurcharges'] = $object->getTotalSurcharges();
            }
            if ($object->isInitialized('freightDiscount') && null !== $object->getFreightDiscount()) {
                $values_1 = [];
                foreach ($object->getFreightDiscount() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['freightDiscount'] = $values_1;
            }
            if ($object->isInitialized('fuelSurchargePercent') && null !== $object->getFuelSurchargePercent()) {
                $data['fuelSurchargePercent'] = $object->getFuelSurchargePercent();
            }
            if ($object->isInitialized('totalBillingWeight') && null !== $object->getTotalBillingWeight()) {
                $data['totalBillingWeight'] = $this->normalizer->normalize($object->getTotalBillingWeight(), 'json', $context);
            }
            if ($object->isInitialized('totalDimWeight') && null !== $object->getTotalDimWeight()) {
                $data['totalDimWeight'] = $this->normalizer->normalize($object->getTotalDimWeight(), 'json', $context);
            }
            if ($object->isInitialized('dimDivisor') && null !== $object->getDimDivisor()) {
                $data['dimDivisor'] = $object->getDimDivisor();
            }
            if ($object->isInitialized('surCharges') && null !== $object->getSurCharges()) {
                $values_2 = [];
                foreach ($object->getSurCharges() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['surCharges'] = $values_2;
            }
            foreach ($object as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_3;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['AntibodiesOnline\\FedEx\\Api\\Model\\RateV1FreightRatesQuotesPostResponse200OutputRateReplyDetailsItemRatedShipmentDetailsShipmentRateDetail' => false];
        }
    }
}