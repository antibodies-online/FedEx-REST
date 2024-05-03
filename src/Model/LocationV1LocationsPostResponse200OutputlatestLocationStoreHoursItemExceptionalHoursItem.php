<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Model;

class LocationV1LocationsPostResponse200OutputlatestLocationStoreHoursItemExceptionalHoursItem extends \ArrayObject
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
     * Start time. <br> Example: 20:00:00.
     *
     * @var string
     */
    protected $begins;
    /**
     * End time. <br> Example: 20:00:00.
     *
     * @var string
     */
    protected $ends;

    /**
     * Start time. <br> Example: 20:00:00.
     */
    public function getBegins(): string
    {
        return $this->begins;
    }

    /**
     * Start time. <br> Example: 20:00:00.
     */
    public function setBegins(string $begins): self
    {
        $this->initialized['begins'] = true;
        $this->begins = $begins;

        return $this;
    }

    /**
     * End time. <br> Example: 20:00:00.
     */
    public function getEnds(): string
    {
        return $this->ends;
    }

    /**
     * End time. <br> Example: 20:00:00.
     */
    public function setEnds(string $ends): self
    {
        $this->initialized['ends'] = true;
        $this->ends = $ends;

        return $this;
    }
}
