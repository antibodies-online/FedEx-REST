<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Model;

class GlobaltradeV1ShipmentsRegulatorydetailsRetrievePostResponse200OutputCountryDetailsshipmentDetailsregulatoryDocumentsLocalizedAttributesLocalization extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Two letter language code. <br> Example: EN<br><a onclick='loadDocReference("locales")'>click here to see Locales</a>.
     *
     * @var string
     */
    protected $localization;
    /**
     * Two letter region code. <br> Example: us<br><a onclick='loadDocReference("locales")'>click here to see Locales</a>.
     *
     * @var string
     */
    protected $localeCode;

    /**
     * Two letter language code. <br> Example: EN<br><a onclick='loadDocReference("locales")'>click here to see Locales</a>.
     */
    public function getLocalization(): string
    {
        return $this->localization;
    }

    /**
     * Two letter language code. <br> Example: EN<br><a onclick='loadDocReference("locales")'>click here to see Locales</a>.
     */
    public function setLocalization(string $localization): self
    {
        $this->initialized['localization'] = true;
        $this->localization = $localization;

        return $this;
    }

    /**
     * Two letter region code. <br> Example: us<br><a onclick='loadDocReference("locales")'>click here to see Locales</a>.
     */
    public function getLocaleCode(): string
    {
        return $this->localeCode;
    }

    /**
     * Two letter region code. <br> Example: us<br><a onclick='loadDocReference("locales")'>click here to see Locales</a>.
     */
    public function setLocaleCode(string $localeCode): self
    {
        $this->initialized['localeCode'] = true;
        $this->localeCode = $localeCode;

        return $this;
    }
}
