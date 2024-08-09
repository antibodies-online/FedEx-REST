<?php

namespace AntibodiesOnline\FedEx\Api\Exception;

class UploadMultiEncodedETDfilesInternalServerErrorException extends InternalServerErrorException
{
    /**
     * @var \AntibodiesOnline\FedEx\Api\Model\DocumentsV1EtdsEncodedmultiuploadPostResponse500
     */
    private $documentsV1EtdsEncodedmultiuploadPostResponse500;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\AntibodiesOnline\FedEx\Api\Model\DocumentsV1EtdsEncodedmultiuploadPostResponse500 $documentsV1EtdsEncodedmultiuploadPostResponse500, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('INTERNAL.SERVER.ERROR');
        $this->documentsV1EtdsEncodedmultiuploadPostResponse500 = $documentsV1EtdsEncodedmultiuploadPostResponse500;
        $this->response = $response;
    }
    public function getDocumentsV1EtdsEncodedmultiuploadPostResponse500(): \AntibodiesOnline\FedEx\Api\Model\DocumentsV1EtdsEncodedmultiuploadPostResponse500
    {
        return $this->documentsV1EtdsEncodedmultiuploadPostResponse500;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}