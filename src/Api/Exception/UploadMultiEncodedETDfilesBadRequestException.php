<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class UploadMultiEncodedETDfilesBadRequestException extends BadRequestException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\DocumentsV1EtdsEncodedmultiuploadPostResponse400
     */
    private $documentsV1EtdsEncodedmultiuploadPostResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\DocumentsV1EtdsEncodedmultiuploadPostResponse400 $documentsV1EtdsEncodedmultiuploadPostResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Bad Request');
        $this->documentsV1EtdsEncodedmultiuploadPostResponse400 = $documentsV1EtdsEncodedmultiuploadPostResponse400;
        $this->response = $response;
    }
    public function getDocumentsV1EtdsEncodedmultiuploadPostResponse400(): \AntibodiesOnline\FedEx\Api\Model\DocumentsV1EtdsEncodedmultiuploadPostResponse400
    {
        return $this->documentsV1EtdsEncodedmultiuploadPostResponse400;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}