<?php


namespace DHLClient\Model\Response;


use DHLClient\Model\Label;

class CreateShipmentResult
{
    /** @var string */
    protected $shipmentNotificationNumber;

    /** @var string */
    protected $shipmentTrackingNumber;

    /** @var string|null */
    protected $packagesTrackingNumbers;

    /** @var string|null */
    protected $dispatchNotificationNumber;

    /** @var Label */
    protected $label;

    /**
     * @return string
     */
    public function getShipmentNotificationNumber()
    {
        return $this->shipmentNotificationNumber;
    }

    /**
     * @param string $shipmentNotificationNumber
     */
    public function setShipmentNotificationNumber($shipmentNotificationNumber)
    {
        $this->shipmentNotificationNumber = $shipmentNotificationNumber;
    }

    /**
     * @return string
     */
    public function getShipmentTrackingNumber()
    {
        return $this->shipmentTrackingNumber;
    }

    /**
     * @param string $shipmentTrackingNumber
     */
    public function setShipmentTrackingNumber($shipmentTrackingNumber)
    {
        $this->shipmentTrackingNumber = $shipmentTrackingNumber;
    }

    /**
     * @return string|null
     */
    public function getPackagesTrackingNumbers()
    {
        return $this->packagesTrackingNumbers;
    }

    /**
     * @param string|null $packagesTrackingNumbers
     */
    public function setPackagesTrackingNumbers($packagesTrackingNumbers)
    {
        $this->packagesTrackingNumbers = $packagesTrackingNumbers;
    }

    /**
     * @return string|null
     */
    public function getDispatchNotificationNumber()
    {
        return $this->dispatchNotificationNumber;
    }

    /**
     * @param string|null $dispatchNotificationNumber
     */
    public function setDispatchNotificationNumber($dispatchNotificationNumber)
    {
        $this->dispatchNotificationNumber = $dispatchNotificationNumber;
    }

    /**
     * @return Label
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param Label $label
     */
    public function setLabel($label)
    {
        $this->label = $label;
    }
}
