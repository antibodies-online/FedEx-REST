<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class UploadMultiEncodedETDfilesServiceUnavailableException extends ServiceUnavailableException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\DocumentsV1EtdsEncodedmultiuploadPostResponse503
     */
    private $documentsV1EtdsEncodedmultiuploadPostResponse503;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\DocumentsV1EtdsEncodedmultiuploadPostResponse503 $documentsV1EtdsEncodedmultiuploadPostResponse503, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Service Unavailable');
        $this->documentsV1EtdsEncodedmultiuploadPostResponse503 = $documentsV1EtdsEncodedmultiuploadPostResponse503;
        $this->response = $response;
    }
    public function getDocumentsV1EtdsEncodedmultiuploadPostResponse503(): \AntibodiesOnline\FedEx\Api\Model\DocumentsV1EtdsEncodedmultiuploadPostResponse503
    {
        return $this->documentsV1EtdsEncodedmultiuploadPostResponse503;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}