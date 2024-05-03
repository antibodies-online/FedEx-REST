<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class UploadETDFilesNotFoundException extends NotFoundException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\DocumentsV1EtdsUploadPostResponse404
     */
    private $documentsV1EtdsUploadPostResponse404;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\DocumentsV1EtdsUploadPostResponse404 $documentsV1EtdsUploadPostResponse404, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Not Found');
        $this->documentsV1EtdsUploadPostResponse404 = $documentsV1EtdsUploadPostResponse404;
        $this->response = $response;
    }
    public function getDocumentsV1EtdsUploadPostResponse404() : \AntibodiesOnline\FedEx\Api\Model\DocumentsV1EtdsUploadPostResponse404
    {
        return $this->documentsV1EtdsUploadPostResponse404;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}