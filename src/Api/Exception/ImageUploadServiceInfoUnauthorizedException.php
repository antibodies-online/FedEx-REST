<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class ImageUploadServiceInfoUnauthorizedException extends UnauthorizedException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\DocumentsV1LhsimagesUploadPostResponse401
     */
    private $documentsV1LhsimagesUploadPostResponse401;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\DocumentsV1LhsimagesUploadPostResponse401 $documentsV1LhsimagesUploadPostResponse401, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Unauthorized');
        $this->documentsV1LhsimagesUploadPostResponse401 = $documentsV1LhsimagesUploadPostResponse401;
        $this->response = $response;
    }
    public function getDocumentsV1LhsimagesUploadPostResponse401(): \AntibodiesOnline\FedEx\Api\Model\DocumentsV1LhsimagesUploadPostResponse401
    {
        return $this->documentsV1LhsimagesUploadPostResponse401;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}