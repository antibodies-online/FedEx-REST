<?php

namespace AntibodiesOnline\FedEx\Model;

class TrackV1TrackingdocumentsPostResponse200Output extends \ArrayObject
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
     * Specifies the language details for email notification.
     *
     * @var TrackV1TrackingdocumentsPostResponse200OutputLocalization
     */
    protected $localization;
    /**
     * The types of tracking document.<br> Example: SIGNATURE_PROOF_OF_DELIVERY
     *
     * @var string
     */
    protected $documentType;
    /**
     * The format of the tracking document. <br>Valid values are PDF and PNG.
     *
     * @var string
     */
    protected $documentFormat;
    /**
     * This field holds the list of byte array(base64) which specifies the image of the recipient's signature (if the signature is available) once the shipment has been delivered. <br>Example: [iVBORw0KGgoAAAANSUhEUgAABX0AAAfECAIAAACJ1ysDAACAAElEQVR42uzdeXxM9/4/8EhC3ZZkskmotlpuq6227r1ur6KqrSXLZLHvhKyIndJy7ZLMlgiy2BJ71E4QewmCICUqJAiCIIgkM3P2M/P7nDkxHQm97b0339b9vZ6P92MeM3P2kX8+L5/FzgQAAAAAAAAAUDvs8BMAAAAAAAAAQC1B7gAAAAAAAAAAtQW5AwAAAAAAAADUFuQOAAAAAAAAAFBbkDsAAAAAAAAAQG1B7gAAAAAAAAAAtQW5AwAAAAAAAADUFuQOAAAAAAAAAFBbkDsAAAAAAAAAQG1B7gAAAAAAAAAAtQW5AwAAAAAAAADUFuQOAAAAAAAAAFBbkDsAAAAAAAAAQG1B7gAAAAAAAAAAtQW5AwAAAAAAAADUFuQOAAAAAAAAAFBbkDsAAAAAAAAAQG1B7gAAAAAAAAAAtQW5AwAAAAAAAADUFuQOAAAAAAAAAFBbkDsAAAAAAAAAQG1B7gAAAAAAAAAAtQW5AwAAAAAAAADUFuQOAAAAAAAAAFBbkDsAAAAAAAAAQG1B7gAAAAAAAAAAtQW5AwAAAAAAAADUFuQOAAAAAAAAAFBbkDsAAAAAAAAAQG1B7gAAAAAAAAAAtQW5AwAAAAAAAADUFuQO/6bl0/+dhCEfLh7eOonUsE8S5RouFfly8YD34od8lKAK23ruUKGhXO7v8CtzB1Mt5A6FP+cOLuRxrLmDLtBD1d9rtmWcxRf6Yba5g6MlenAwRdTlo5zoyU2N0/5snPYe9d179Hfvst+1YL9rznwrFT2pKf1tCyqlN3V8BVOcKxjLkDsAAAAAAAAgd4B/J3dQukiv/d5eGPH3ZdMCNySO27du/vH10cdXzzm6ek6Wba345+HUWT/sXZ17K/8uYzSIAmey5A6m58cKctwgWsry/tmbeXGL+l+nFKKcOwyTcodeTeOUUu6gepo7aAM9YmrmDqawuqYw6VUMqy+MUHD//J]
     *
     * @var list<string>
     */
    protected $document;
    /**
     * Specifies the alert received when the recipient's signature has been            taken as a proof of shipment delivery.<br>Example: TRACKING.DATA.NOTFOUND -  Tracking data unavailable
     *
     * @var list<TrackV1TrackingdocumentsPostResponse200OutputAlertsItem>
     */
    protected $alerts;
    /**
     * Specifies the language details for email notification.
     *
     * @return TrackV1TrackingdocumentsPostResponse200OutputLocalization
     */
    public function getLocalization() : TrackV1TrackingdocumentsPostResponse200OutputLocalization
    {
        return $this->localization;
    }
    /**
     * Specifies the language details for email notification.
     *
     * @param TrackV1TrackingdocumentsPostResponse200OutputLocalization $localization
     *
     * @return self
     */
    public function setLocalization(TrackV1TrackingdocumentsPostResponse200OutputLocalization $localization) : self
    {
        $this->initialized['localization'] = true;
        $this->localization = $localization;
        return $this;
    }
    /**
     * The types of tracking document.<br> Example: SIGNATURE_PROOF_OF_DELIVERY
     *
     * @return string
     */
    public function getDocumentType() : string
    {
        return $this->documentType;
    }
    /**
     * The types of tracking document.<br> Example: SIGNATURE_PROOF_OF_DELIVERY
     *
     * @param string $documentType
     *
     * @return self
     */
    public function setDocumentType(string $documentType) : self
    {
        $this->initialized['documentType'] = true;
        $this->documentType = $documentType;
        return $this;
    }
    /**
     * The format of the tracking document. <br>Valid values are PDF and PNG.
     *
     * @return string
     */
    public function getDocumentFormat() : string
    {
        return $this->documentFormat;
    }
    /**
     * The format of the tracking document. <br>Valid values are PDF and PNG.
     *
     * @param string $documentFormat
     *
     * @return self
     */
    public function setDocumentFormat(string $documentFormat) : self
    {
        $this->initialized['documentFormat'] = true;
        $this->documentFormat = $documentFormat;
        return $this;
    }
    /**
     * This field holds the list of byte array(base64) which specifies the image of the recipient's signature (if the signature is available) once the shipment has been delivered. <br>Example: [iVBORw0KGgoAAAANSUhEUgAABX0AAAfECAIAAACJ1ysDAACAAElEQVR42uzdeXxM9/4/8EhC3ZZkskmotlpuq6227r1ur6KqrSXLZLHvhKyIndJy7ZLMlgiy2BJ71E4QewmCICUqJAiCIIgkM3P2M/P7nDkxHQm97b0339b9vZ6P92MeM3P2kX8+L5/FzgQAAAAAAAAAUDvs8BMAAAAAAAAAQC1B7gAAAAAAAAAAtQW5AwAAAAAAAADUFuQOAAAAAAAAAFBbkDsAAAAAAAAAQG1B7gAAAAAAAAAAtQW5AwAAAAAAAADUFuQOAAAAAAAAAFBbkDsAAAAAAAAAQG1B7gAAAAAAAAAAtQW5AwAAAAAAAADUFuQOAAAAAAAAAFBbkDsAAAAAAAAAQG1B7gAAAAAAAAAAtQW5AwAAAAAAAADUFuQOAAAAAAAAAFBbkDsAAAAAAAAAQG1B7gAAAAAAAAAAtQW5AwAAAAAAAADUFuQOAAAAAAAAAFBbkDsAAAAAAAAAQG1B7gAAAAAAAAAAtQW5AwAAAAAAAADUFuQOAAAAAAAAAFBbkDsAAAAAAAAAQG1B7gAAAAAAAAAAtQW5AwAAAAAAAADUFuQOAAAAAAAAAFBbkDsAAAAAAAAAQG1B7gAAAAAAAAAAtQW5AwAAAAAAAADUFuQO/6bl0/+dhCEfLh7eOonUsE8S5RouFfly8YD34od8lKAK23ruUKGhXO7v8CtzB1Mt5A6FP+cOLuRxrLmDLtBD1d9rtmWcxRf6Yba5g6MlenAwRdTlo5zoyU2N0/5snPYe9d179Hfvst+1YL9rznwrFT2pKf1tCyqlN3V8BVOcKxjLkDsAAAAAAAAgd4B/J3dQukiv/d5eGPH3ZdMCNySO27du/vH10cdXzzm6ek6Wba345+HUWT/sXZ17K/8uYzSIAmey5A6m58cKctwgWsry/tmbeXGL+l+nFKKcOwyTcodeTeOUUu6gepo7aAM9YmrmDqawuqYw6VUMqy+MUHD//J]
     *
     * @return list<string>
     */
    public function getDocument() : array
    {
        return $this->document;
    }
    /**
     * This field holds the list of byte array(base64) which specifies the image of the recipient's signature (if the signature is available) once the shipment has been delivered. <br>Example: [iVBORw0KGgoAAAANSUhEUgAABX0AAAfECAIAAACJ1ysDAACAAElEQVR42uzdeXxM9/4/8EhC3ZZkskmotlpuq6227r1ur6KqrSXLZLHvhKyIndJy7ZLMlgiy2BJ71E4QewmCICUqJAiCIIgkM3P2M/P7nDkxHQm97b0339b9vZ6P92MeM3P2kX8+L5/FzgQAAAAAAAAAUDvs8BMAAAAAAAAAQC1B7gAAAAAAAAAAtQW5AwAAAAAAAADUFuQOAAAAAAAAAFBbkDsAAAAAAAAAQG1B7gAAAAAAAAAAtQW5AwAAAAAAAADUFuQOAAAAAAAAAFBbkDsAAAAAAAAAQG1B7gAAAAAAAAAAtQW5AwAAAAAAAADUFuQOAAAAAAAAAFBbkDsAAAAAAAAAQG1B7gAAAAAAAAAAtQW5AwAAAAAAAADUFuQOAAAAAAAAAFBbkDsAAAAAAAAAQG1B7gAAAAAAAAAAtQW5AwAAAAAAAADUFuQOAAAAAAAAAFBbkDsAAAAAAAAAQG1B7gAAAAAAAAAAtQW5AwAAAAAAAADUFuQOAAAAAAAAAFBbkDsAAAAAAAAAQG1B7gAAAAAAAAAAtQW5AwAAAAAAAADUFuQOAAAAAAAAAFBbkDsAAAAAAAAAQG1B7gAAAAAAAAAAtQW5AwAAAAAAAADUFuQO/6bl0/+dhCEfLh7eOonUsE8S5RouFfly8YD34od8lKAK23ruUKGhXO7v8CtzB1Mt5A6FP+cOLuRxrLmDLtBD1d9rtmWcxRf6Yba5g6MlenAwRdTlo5zoyU2N0/5snPYe9d179Hfvst+1YL9rznwrFT2pKf1tCyqlN3V8BVOcKxjLkDsAAAAAAAAgd4B/J3dQukiv/d5eGPH3ZdMCNySO27du/vH10cdXzzm6ek6Wba345+HUWT/sXZ17K/8uYzSIAmey5A6m58cKctwgWsry/tmbeXGL+l+nFKKcOwyTcodeTeOUUu6gepo7aAM9YmrmDqawuqYw6VUMqy+MUHD//J]
     *
     * @param list<string> $document
     *
     * @return self
     */
    public function setDocument(array $document) : self
    {
        $this->initialized['document'] = true;
        $this->document = $document;
        return $this;
    }
    /**
     * Specifies the alert received when the recipient's signature has been            taken as a proof of shipment delivery.<br>Example: TRACKING.DATA.NOTFOUND -  Tracking data unavailable
     *
     * @return list<TrackV1TrackingdocumentsPostResponse200OutputAlertsItem>
     */
    public function getAlerts() : array
    {
        return $this->alerts;
    }
    /**
     * Specifies the alert received when the recipient's signature has been            taken as a proof of shipment delivery.<br>Example: TRACKING.DATA.NOTFOUND -  Tracking data unavailable
     *
     * @param list<TrackV1TrackingdocumentsPostResponse200OutputAlertsItem> $alerts
     *
     * @return self
     */
    public function setAlerts(array $alerts) : self
    {
        $this->initialized['alerts'] = true;
        $this->alerts = $alerts;
        return $this;
    }
}