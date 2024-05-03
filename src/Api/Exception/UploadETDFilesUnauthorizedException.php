<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class UploadETDFilesUnauthorizedException extends UnauthorizedException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\DocumentsV1EtdsUploadPostResponse401
     */
    private $documentsV1EtdsUploadPostResponse401;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\DocumentsV1EtdsUploadPostResponse401 $documentsV1EtdsUploadPostResponse401, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Unauthorized');
        $this->documentsV1EtdsUploadPostResponse401 = $documentsV1EtdsUploadPostResponse401;
        $this->response = $response;
    }
    public function getDocumentsV1EtdsUploadPostResponse401() : \AntibodiesOnline\FedEx\Api\Model\DocumentsV1EtdsUploadPostResponse401
    {
        return $this->documentsV1EtdsUploadPostResponse401;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}