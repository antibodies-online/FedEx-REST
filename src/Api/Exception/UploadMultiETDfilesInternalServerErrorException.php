<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class UploadMultiETDfilesInternalServerErrorException extends InternalServerErrorException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\DocumentsV1EtdsMultiuploadPostResponse500
     */
    private $documentsV1EtdsMultiuploadPostResponse500;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\DocumentsV1EtdsMultiuploadPostResponse500 $documentsV1EtdsMultiuploadPostResponse500, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('INTERNAL.SERVER.ERROR');
        $this->documentsV1EtdsMultiuploadPostResponse500 = $documentsV1EtdsMultiuploadPostResponse500;
        $this->response = $response;
    }
    public function getDocumentsV1EtdsMultiuploadPostResponse500(): \AntibodiesOnline\FedEx\Api\Model\DocumentsV1EtdsMultiuploadPostResponse500
    {
        return $this->documentsV1EtdsMultiuploadPostResponse500;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}