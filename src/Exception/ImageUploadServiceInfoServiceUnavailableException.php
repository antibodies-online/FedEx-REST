<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Exception;

class ImageUploadServiceInfoServiceUnavailableException extends ServiceUnavailableException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\DocumentsV1LhsimagesUploadPostResponse503
     */
    private $documentsV1LhsimagesUploadPostResponse503;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\AntibodiesOnline\FedEx\Model\DocumentsV1LhsimagesUploadPostResponse503 $documentsV1LhsimagesUploadPostResponse503, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Service Unavailable');
        $this->documentsV1LhsimagesUploadPostResponse503 = $documentsV1LhsimagesUploadPostResponse503;
        $this->response = $response;
    }

    public function getDocumentsV1LhsimagesUploadPostResponse503(): \AntibodiesOnline\FedEx\Model\DocumentsV1LhsimagesUploadPostResponse503
    {
        return $this->documentsV1LhsimagesUploadPostResponse503;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}