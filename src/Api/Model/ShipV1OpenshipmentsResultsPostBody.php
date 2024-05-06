<?php

namespace AntibodiesOnline\FedEx\Api\Model;

class ShipV1OpenshipmentsResultsPostBody extends \ArrayObject
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
     * The use of this method is to retrieve the results of the CREATE, MODIFY and CONFIRM events of Asynchronous flow.<br><ul><li>CREATE- Customer will create Async shipment and will get jobId. Using the generated jobId in Get OpenShipment Results endpoint customer can retrieve the result of Create OpenShipment.</li><li>MODIFY- Customer will modify Async shipment and will get jobId. Using the generated jobId in Get OpenShipment Results endpoint customer can retrieve the result of Modify OpenShipment.</li><li>CONFIRM- Customer will confirm Async shipment and will get jobId. Using the generated jobId in Get OpenShipment Results endpoint customer can retrieve the result of Confirm OpenShipment.</li></ul>
     *
     * @var string
     */
    protected $resultMethodType;
    /**
     * Indicates the job under which the deferred shipment artifacts must be identified in the subsequent retrieval request.<br> Example: '89sxxxxx233ae24ff31xxxxx'
     *
     * @var string
     */
    protected $jobId;
    /**
     * The account number associated with the shipment. <br>Example: Your account number
     *
     * @var ShipV1OpenshipmentsResultsPostBodyAccountNumber
     */
    protected $accountNumber;
    /**
     * The use of this method is to retrieve the results of the CREATE, MODIFY and CONFIRM events of Asynchronous flow.<br><ul><li>CREATE- Customer will create Async shipment and will get jobId. Using the generated jobId in Get OpenShipment Results endpoint customer can retrieve the result of Create OpenShipment.</li><li>MODIFY- Customer will modify Async shipment and will get jobId. Using the generated jobId in Get OpenShipment Results endpoint customer can retrieve the result of Modify OpenShipment.</li><li>CONFIRM- Customer will confirm Async shipment and will get jobId. Using the generated jobId in Get OpenShipment Results endpoint customer can retrieve the result of Confirm OpenShipment.</li></ul>
     *
     * @return string
     */
    public function getResultMethodType() : string
    {
        return $this->resultMethodType;
    }
    /**
     * The use of this method is to retrieve the results of the CREATE, MODIFY and CONFIRM events of Asynchronous flow.<br><ul><li>CREATE- Customer will create Async shipment and will get jobId. Using the generated jobId in Get OpenShipment Results endpoint customer can retrieve the result of Create OpenShipment.</li><li>MODIFY- Customer will modify Async shipment and will get jobId. Using the generated jobId in Get OpenShipment Results endpoint customer can retrieve the result of Modify OpenShipment.</li><li>CONFIRM- Customer will confirm Async shipment and will get jobId. Using the generated jobId in Get OpenShipment Results endpoint customer can retrieve the result of Confirm OpenShipment.</li></ul>
     *
     * @param string $resultMethodType
     *
     * @return self
     */
    public function setResultMethodType(string $resultMethodType) : self
    {
        $this->initialized['resultMethodType'] = true;
        $this->resultMethodType = $resultMethodType;
        return $this;
    }
    /**
     * Indicates the job under which the deferred shipment artifacts must be identified in the subsequent retrieval request.<br> Example: '89sxxxxx233ae24ff31xxxxx'
     *
     * @return string
     */
    public function getJobId() : string
    {
        return $this->jobId;
    }
    /**
     * Indicates the job under which the deferred shipment artifacts must be identified in the subsequent retrieval request.<br> Example: '89sxxxxx233ae24ff31xxxxx'
     *
     * @param string $jobId
     *
     * @return self
     */
    public function setJobId(string $jobId) : self
    {
        $this->initialized['jobId'] = true;
        $this->jobId = $jobId;
        return $this;
    }
    /**
     * The account number associated with the shipment. <br>Example: Your account number
     *
     * @return ShipV1OpenshipmentsResultsPostBodyAccountNumber
     */
    public function getAccountNumber() : ShipV1OpenshipmentsResultsPostBodyAccountNumber
    {
        return $this->accountNumber;
    }
    /**
     * The account number associated with the shipment. <br>Example: Your account number
     *
     * @param ShipV1OpenshipmentsResultsPostBodyAccountNumber $accountNumber
     *
     * @return self
     */
    public function setAccountNumber(ShipV1OpenshipmentsResultsPostBodyAccountNumber $accountNumber) : self
    {
        $this->initialized['accountNumber'] = true;
        $this->accountNumber = $accountNumber;
        return $this;
    }
}