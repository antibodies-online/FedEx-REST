<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class UploadMultiETDfilesForbiddenException extends ForbiddenException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\DocumentsV1EtdsMultiuploadPostResponse403
     */
    private $documentsV1EtdsMultiuploadPostResponse403;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\DocumentsV1EtdsMultiuploadPostResponse403 $documentsV1EtdsMultiuploadPostResponse403, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Forbidden');
        $this->documentsV1EtdsMultiuploadPostResponse403 = $documentsV1EtdsMultiuploadPostResponse403;
        $this->response = $response;
    }
    public function getDocumentsV1EtdsMultiuploadPostResponse403(): \AntibodiesOnline\FedEx\Api\Model\DocumentsV1EtdsMultiuploadPostResponse403
    {
        return $this->documentsV1EtdsMultiuploadPostResponse403;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}