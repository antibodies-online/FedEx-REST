<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class ImageUploadServiceInfoForbiddenException extends ForbiddenException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\DocumentsV1LhsimagesUploadPostResponse403
     */
    private $documentsV1LhsimagesUploadPostResponse403;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\DocumentsV1LhsimagesUploadPostResponse403 $documentsV1LhsimagesUploadPostResponse403, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Forbidden');
        $this->documentsV1LhsimagesUploadPostResponse403 = $documentsV1LhsimagesUploadPostResponse403;
        $this->response = $response;
    }
    public function getDocumentsV1LhsimagesUploadPostResponse403() : \AntibodiesOnline\FedEx\Api\Model\DocumentsV1LhsimagesUploadPostResponse403
    {
        return $this->documentsV1LhsimagesUploadPostResponse403;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}