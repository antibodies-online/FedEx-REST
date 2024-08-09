<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class UploadMultiEncodedETDfilesForbiddenException extends ForbiddenException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\DocumentsV1EtdsEncodedmultiuploadPostResponse403
     */
    private $documentsV1EtdsEncodedmultiuploadPostResponse403;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\DocumentsV1EtdsEncodedmultiuploadPostResponse403 $documentsV1EtdsEncodedmultiuploadPostResponse403, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Forbidden');
        $this->documentsV1EtdsEncodedmultiuploadPostResponse403 = $documentsV1EtdsEncodedmultiuploadPostResponse403;
        $this->response = $response;
    }
    public function getDocumentsV1EtdsEncodedmultiuploadPostResponse403(): \AntibodiesOnline\FedEx\Api\Model\DocumentsV1EtdsEncodedmultiuploadPostResponse403
    {
        return $this->documentsV1EtdsEncodedmultiuploadPostResponse403;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}