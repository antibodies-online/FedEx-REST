<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class DocumentsV1EtdsUploadPostBodyDocument extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Indicate if this document is being uploaded for Pre-Shipment or Post-shipment.
     *
     * @var string
     */
    protected $workflowName;
    /**
     * Specify the four letter code of a FedEx operating company that meets your requirements.<br>Examples of FedEx Operating Companies are:<ul><li>FDXE - FedEx Express</li><li>FDXG - FedEx Ground</li><li>FXSP - FedEx SmartPost</li><li>FXCC - FedEx Custom Critical.</li></ul>
     *
     * @var string
     */
    protected $carrierCode;
    /**
     * Specify the file name of the document to be uploaded.<br><br>Example: COO.PDF
     *
     * @var string
     */
    protected $name;
    /**
     * Specify the file type or content type of the document to be uploaded.<br><a onclick='loadDocReference("contenttypes")'> Click here for available Content Types</a>
     *
     * @var string
     */
    protected $contentType;
    /**
     * 
     *
     * @var array<string, mixed>
     */
    protected $meta;
    /**
     * Indicate if this document is being uploaded for Pre-Shipment or Post-shipment.
     *
     * @return string
     */
    public function getWorkflowName() : string
    {
        return $this->workflowName;
    }
    /**
     * Indicate if this document is being uploaded for Pre-Shipment or Post-shipment.
     *
     * @param string $workflowName
     *
     * @return self
     */
    public function setWorkflowName(string $workflowName) : self
    {
        $this->initialized['workflowName'] = true;
        $this->workflowName = $workflowName;
        return $this;
    }
    /**
     * Specify the four letter code of a FedEx operating company that meets your requirements.<br>Examples of FedEx Operating Companies are:<ul><li>FDXE - FedEx Express</li><li>FDXG - FedEx Ground</li><li>FXSP - FedEx SmartPost</li><li>FXCC - FedEx Custom Critical.</li></ul>
     *
     * @return string
     */
    public function getCarrierCode() : string
    {
        return $this->carrierCode;
    }
    /**
     * Specify the four letter code of a FedEx operating company that meets your requirements.<br>Examples of FedEx Operating Companies are:<ul><li>FDXE - FedEx Express</li><li>FDXG - FedEx Ground</li><li>FXSP - FedEx SmartPost</li><li>FXCC - FedEx Custom Critical.</li></ul>
     *
     * @param string $carrierCode
     *
     * @return self
     */
    public function setCarrierCode(string $carrierCode) : self
    {
        $this->initialized['carrierCode'] = true;
        $this->carrierCode = $carrierCode;
        return $this;
    }
    /**
     * Specify the file name of the document to be uploaded.<br><br>Example: COO.PDF
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Specify the file name of the document to be uploaded.<br><br>Example: COO.PDF
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * Specify the file type or content type of the document to be uploaded.<br><a onclick='loadDocReference("contenttypes")'> Click here for available Content Types</a>
     *
     * @return string
     */
    public function getContentType() : string
    {
        return $this->contentType;
    }
    /**
     * Specify the file type or content type of the document to be uploaded.<br><a onclick='loadDocReference("contenttypes")'> Click here for available Content Types</a>
     *
     * @param string $contentType
     *
     * @return self
     */
    public function setContentType(string $contentType) : self
    {
        $this->initialized['contentType'] = true;
        $this->contentType = $contentType;
        return $this;
    }
    /**
     * 
     *
     * @return array<string, mixed>
     */
    public function getMeta() : iterable
    {
        return $this->meta;
    }
    /**
     * 
     *
     * @param array<string, mixed> $meta
     *
     * @return self
     */
    public function setMeta(iterable $meta) : self
    {
        $this->initialized['meta'] = true;
        $this->meta = $meta;
        return $this;
    }
}