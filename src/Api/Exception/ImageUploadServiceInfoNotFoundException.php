<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class ImageUploadServiceInfoNotFoundException extends NotFoundException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\DocumentsV1LhsimagesUploadPostResponse404
     */
    private $documentsV1LhsimagesUploadPostResponse404;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\DocumentsV1LhsimagesUploadPostResponse404 $documentsV1LhsimagesUploadPostResponse404, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Not Found');
        $this->documentsV1LhsimagesUploadPostResponse404 = $documentsV1LhsimagesUploadPostResponse404;
        $this->response = $response;
    }
    public function getDocumentsV1LhsimagesUploadPostResponse404() : \AntibodiesOnline\FedEx\Api\Model\DocumentsV1LhsimagesUploadPostResponse404
    {
        return $this->documentsV1LhsimagesUploadPostResponse404;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}