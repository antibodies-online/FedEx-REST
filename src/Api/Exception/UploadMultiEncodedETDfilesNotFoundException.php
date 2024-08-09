<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class UploadMultiEncodedETDfilesNotFoundException extends NotFoundException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\DocumentsV1EtdsEncodedmultiuploadPostResponse404
     */
    private $documentsV1EtdsEncodedmultiuploadPostResponse404;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\DocumentsV1EtdsEncodedmultiuploadPostResponse404 $documentsV1EtdsEncodedmultiuploadPostResponse404, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Not Found');
        $this->documentsV1EtdsEncodedmultiuploadPostResponse404 = $documentsV1EtdsEncodedmultiuploadPostResponse404;
        $this->response = $response;
    }
    public function getDocumentsV1EtdsEncodedmultiuploadPostResponse404(): \AntibodiesOnline\FedEx\Api\Model\DocumentsV1EtdsEncodedmultiuploadPostResponse404
    {
        return $this->documentsV1EtdsEncodedmultiuploadPostResponse404;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}