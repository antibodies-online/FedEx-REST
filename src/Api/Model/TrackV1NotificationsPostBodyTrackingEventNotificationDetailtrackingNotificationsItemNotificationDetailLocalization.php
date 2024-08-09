<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class TrackV1NotificationsPostBodyTrackingEventNotificationDetailtrackingNotificationsItemNotificationDetailLocalization extends \ArrayObject
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
     * Identifies two-letter code for the language (e.g. en/EN, fr/FR, es/ES etc..).<br> Example: en
     *
     * @var string
     */
    protected $languageCode;
    /**
     * Identifies the two-letter code for the region, used to further identify the requested language.  for example, if you request Spanish, you must include a locale code of <i>US</i> for North American Spanish, or <i>MX</i> for Mexico. <br> Example: US<br><a onclick='loadDocReference("locales")'>Click here to see Locales</a>
     *
     * @var string
     */
    protected $localeCode;
    /**
     * Identifies two-letter code for the language (e.g. en/EN, fr/FR, es/ES etc..).<br> Example: en
     *
     * @return string
     */
    public function getLanguageCode(): string
    {
        return $this->languageCode;
    }
    /**
     * Identifies two-letter code for the language (e.g. en/EN, fr/FR, es/ES etc..).<br> Example: en
     *
     * @param string $languageCode
     *
     * @return self
     */
    public function setLanguageCode(string $languageCode): self
    {
        $this->initialized['languageCode'] = true;
        $this->languageCode = $languageCode;
        return $this;
    }
    /**
     * Identifies the two-letter code for the region, used to further identify the requested language.  for example, if you request Spanish, you must include a locale code of <i>US</i> for North American Spanish, or <i>MX</i> for Mexico. <br> Example: US<br><a onclick='loadDocReference("locales")'>Click here to see Locales</a>
     *
     * @return string
     */
    public function getLocaleCode(): string
    {
        return $this->localeCode;
    }
    /**
     * Identifies the two-letter code for the region, used to further identify the requested language.  for example, if you request Spanish, you must include a locale code of <i>US</i> for North American Spanish, or <i>MX</i> for Mexico. <br> Example: US<br><a onclick='loadDocReference("locales")'>Click here to see Locales</a>
     *
     * @param string $localeCode
     *
     * @return self
     */
    public function setLocaleCode(string $localeCode): self
    {
        $this->initialized['localeCode'] = true;
        $this->localeCode = $localeCode;
        return $this;
    }
}