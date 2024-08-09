<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class UploadETDFilesForbiddenException extends ForbiddenException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\DocumentsV1EtdsUploadPostResponse403
     */
    private $documentsV1EtdsUploadPostResponse403;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\DocumentsV1EtdsUploadPostResponse403 $documentsV1EtdsUploadPostResponse403, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Forbidden');
        $this->documentsV1EtdsUploadPostResponse403 = $documentsV1EtdsUploadPostResponse403;
        $this->response = $response;
    }
    public function getDocumentsV1EtdsUploadPostResponse403(): \AntibodiesOnline\FedEx\Api\Model\DocumentsV1EtdsUploadPostResponse403
    {
        return $this->documentsV1EtdsUploadPostResponse403;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}