<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class UploadETDFilesBadRequestException extends BadRequestException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\DocumentsV1EtdsUploadPostResponse400
     */
    private $documentsV1EtdsUploadPostResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\DocumentsV1EtdsUploadPostResponse400 $documentsV1EtdsUploadPostResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->documentsV1EtdsUploadPostResponse400 = $documentsV1EtdsUploadPostResponse400;
        $this->response = $response;
    }
    public function getDocumentsV1EtdsUploadPostResponse400(): \AntibodiesOnline\FedEx\Api\Model\DocumentsV1EtdsUploadPostResponse400
    {
        return $this->documentsV1EtdsUploadPostResponse400;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}