<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class UploadMultiETDfilesServiceUnavailableException extends ServiceUnavailableException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\DocumentsV1EtdsMultiuploadPostResponse503
     */
    private $documentsV1EtdsMultiuploadPostResponse503;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\DocumentsV1EtdsMultiuploadPostResponse503 $documentsV1EtdsMultiuploadPostResponse503, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Service Unavailable');
        $this->documentsV1EtdsMultiuploadPostResponse503 = $documentsV1EtdsMultiuploadPostResponse503;
        $this->response = $response;
    }
    public function getDocumentsV1EtdsMultiuploadPostResponse503(): \AntibodiesOnline\FedEx\Api\Model\DocumentsV1EtdsMultiuploadPostResponse503
    {
        return $this->documentsV1EtdsMultiuploadPostResponse503;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}