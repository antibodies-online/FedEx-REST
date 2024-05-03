<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace AntibodiesOnline\FedEx\Exception;

class ImageUploadServiceInfoInternalServerErrorException extends InternalServerErrorException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\DocumentsV1LhsimagesUploadPostResponse500
     */
    private $documentsV1LhsimagesUploadPostResponse500;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;

    public function __construct(\AntibodiesOnline\FedEx\Model\DocumentsV1LhsimagesUploadPostResponse500 $documentsV1LhsimagesUploadPostResponse500, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Failure');
        $this->documentsV1LhsimagesUploadPostResponse500 = $documentsV1LhsimagesUploadPostResponse500;
        $this->response = $response;
    }

    public function getDocumentsV1LhsimagesUploadPostResponse500(): \AntibodiesOnline\FedEx\Model\DocumentsV1LhsimagesUploadPostResponse500
    {
        return $this->documentsV1LhsimagesUploadPostResponse500;
    }

    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}
