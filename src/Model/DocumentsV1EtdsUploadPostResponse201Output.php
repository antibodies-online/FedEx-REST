<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Model;

class DocumentsV1EtdsUploadPostResponse201Output extends \ArrayObject
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
     * This is the response indicating upload reference details.
     *
     * @var DocumentsV1EtdsUploadPostResponse201OutputMeta
     */
    protected $meta;

    /**
     * This is the response indicating upload reference details.
     */
    public function getMeta(): DocumentsV1EtdsUploadPostResponse201OutputMeta
    {
        return $this->meta;
    }

    /**
     * This is the response indicating upload reference details.
     */
    public function setMeta(DocumentsV1EtdsUploadPostResponse201OutputMeta $meta): self
    {
        $this->initialized['meta'] = true;
        $this->meta = $meta;

        return $this;
    }
}
