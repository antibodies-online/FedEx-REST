<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class UploadMultiETDfilesUnauthorizedException extends UnauthorizedException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\DocumentsV1EtdsMultiuploadPostResponse401
     */
    private $documentsV1EtdsMultiuploadPostResponse401;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\DocumentsV1EtdsMultiuploadPostResponse401 $documentsV1EtdsMultiuploadPostResponse401, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Unauthorized');
        $this->documentsV1EtdsMultiuploadPostResponse401 = $documentsV1EtdsMultiuploadPostResponse401;
        $this->response = $response;
    }
    public function getDocumentsV1EtdsMultiuploadPostResponse401(): \AntibodiesOnline\FedEx\Api\Model\DocumentsV1EtdsMultiuploadPostResponse401
    {
        return $this->documentsV1EtdsMultiuploadPostResponse401;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}