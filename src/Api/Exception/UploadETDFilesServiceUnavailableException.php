<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class UploadETDFilesServiceUnavailableException extends ServiceUnavailableException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\DocumentsV1EtdsUploadPostResponse503
     */
    private $documentsV1EtdsUploadPostResponse503;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\DocumentsV1EtdsUploadPostResponse503 $documentsV1EtdsUploadPostResponse503, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Service Unavailable');
        $this->documentsV1EtdsUploadPostResponse503 = $documentsV1EtdsUploadPostResponse503;
        $this->response = $response;
    }
    public function getDocumentsV1EtdsUploadPostResponse503(): \AntibodiesOnline\FedEx\Api\Model\DocumentsV1EtdsUploadPostResponse503
    {
        return $this->documentsV1EtdsUploadPostResponse503;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}