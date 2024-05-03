<?php

namespace AntibodiesOnline\FedEx\Exception;

class ImageUploadServiceInfoBadRequestException extends BadRequestException
{
    /**
     * @var \AntibodiesOnline\FedEx\Model\DocumentsV1LhsimagesUploadPostResponse400
     */
    private $documentsV1LhsimagesUploadPostResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Model\DocumentsV1LhsimagesUploadPostResponse400 $documentsV1LhsimagesUploadPostResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->documentsV1LhsimagesUploadPostResponse400 = $documentsV1LhsimagesUploadPostResponse400;
        $this->response = $response;
    }
    public function getDocumentsV1LhsimagesUploadPostResponse400() : \AntibodiesOnline\FedEx\Model\DocumentsV1LhsimagesUploadPostResponse400
    {
        return $this->documentsV1LhsimagesUploadPostResponse400;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}