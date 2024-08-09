<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class UploadMultiETDfilesBadRequestException extends BadRequestException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\DocumentsV1EtdsMultiuploadPostResponse400
     */
    private $documentsV1EtdsMultiuploadPostResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\DocumentsV1EtdsMultiuploadPostResponse400 $documentsV1EtdsMultiuploadPostResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->documentsV1EtdsMultiuploadPostResponse400 = $documentsV1EtdsMultiuploadPostResponse400;
        $this->response = $response;
    }
    public function getDocumentsV1EtdsMultiuploadPostResponse400(): \AntibodiesOnline\FedEx\Api\Model\DocumentsV1EtdsMultiuploadPostResponse400
    {
        return $this->documentsV1EtdsMultiuploadPostResponse400;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}