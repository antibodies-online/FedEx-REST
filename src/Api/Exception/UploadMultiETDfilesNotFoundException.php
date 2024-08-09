<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class UploadMultiETDfilesNotFoundException extends NotFoundException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\DocumentsV1EtdsMultiuploadPostResponse404
     */
    private $documentsV1EtdsMultiuploadPostResponse404;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\DocumentsV1EtdsMultiuploadPostResponse404 $documentsV1EtdsMultiuploadPostResponse404, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Not Found');
        $this->documentsV1EtdsMultiuploadPostResponse404 = $documentsV1EtdsMultiuploadPostResponse404;
        $this->response = $response;
    }
    public function getDocumentsV1EtdsMultiuploadPostResponse404(): \AntibodiesOnline\FedEx\Api\Model\DocumentsV1EtdsMultiuploadPostResponse404
    {
        return $this->documentsV1EtdsMultiuploadPostResponse404;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}