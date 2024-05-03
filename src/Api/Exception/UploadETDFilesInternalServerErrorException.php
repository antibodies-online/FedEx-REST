<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class UploadETDFilesInternalServerErrorException extends InternalServerErrorException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\DocumentsV1EtdsUploadPostResponse500
     */
    private $documentsV1EtdsUploadPostResponse500;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\DocumentsV1EtdsUploadPostResponse500 $documentsV1EtdsUploadPostResponse500, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Failure');
        $this->documentsV1EtdsUploadPostResponse500 = $documentsV1EtdsUploadPostResponse500;
        $this->response = $response;
    }
    public function getDocumentsV1EtdsUploadPostResponse500() : \AntibodiesOnline\FedEx\Api\Model\DocumentsV1EtdsUploadPostResponse500
    {
        return $this->documentsV1EtdsUploadPostResponse500;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}