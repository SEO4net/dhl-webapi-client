<?php

namespace DHLClient;

use DHLClient\Model\ArrayOfItemtolabeldata;
use DHLClient\Model\ArrayOfItemtoprint;
use DHLClient\Model\ArrayOfReturnitemtoprint;
use DHLClient\Model\ArrayOfShipmentfulldata;
use DHLClient\Model\ArrayOfString;
use DHLClient\Model\AuthData;
use DHLClient\Model\bookCourier;
use DHLClient\Model\cancelCourierBooking;
use DHLClient\Model\CreateReturnShipmentRequest;
use DHLClient\Model\createShipment;
use DHLClient\Model\CreateShipmentRequest;
use DHLClient\Model\createShipmentReturn;
use DHLClient\Model\createShipments;
use DHLClient\Model\deleteShipment;
use DHLClient\Model\DeleteShipmentRequest;
use DHLClient\Model\deleteShipments;
use DHLClient\Model\DHL24WebapiService;
use DHLClient\Model\getInternationalParams;
use DHLClient\Model\getLabels;
use DHLClient\Model\getLabelsData;
use DHLClient\Model\getMyShipments;
use DHLClient\Model\getMyShipmentsCount;
use DHLClient\Model\getNearestServicepoints;
use DHLClient\Model\GetNearestServicepointsRequest;
use DHLClient\Model\getPnp;
use DHLClient\Model\getPostalCodeServices;
use DHLClient\Model\getReturnByWaybill;
use DHLClient\Model\getReturnParams;
use DHLClient\Model\getShipmentScan;
use DHLClient\Model\getTrackAndTraceInfo;
use DHLClient\Model\getVersion;
use DHLClient\Model\PnpRequest;
use DHLClient\Model\ShipmentOrderInfo;

class Client implements ClientInterface
{
    const WSDL_URL = 'https://dhl24.com.pl/webapi2';

    /** @var string|null */
    private $username;

    /** @var string|null */
    private $password;

    /** @var AuthData */
    private $authData;

    /** @var DHL24WebapiService */
    private $service;

    public function __construct($username = null, $password = null, $wsdl = null, $options = [])
    {
        if (!$wsdl) {
            $wsdl = self::WSDL_URL;
        }

        $this->username = $username;
        $this->password = $password;

        $this->authData = new AuthData();
        $this->authData->setUsername($username);
        $this->authData->setPassword($password);

        $this->service = new DHL24WebapiService($options, $wsdl);
    }

    /**
     * @return Model\getVersionResponse
     */
    public function getVersion()
    {
        return $this->service->getVersion(new getVersion());
    }

    /**
     * @param CreateShipmentRequest $shipmentRequest
     * @return Model\CreateShipmentResponse
     */
    public function createShipment(CreateShipmentRequest $shipmentRequest)
    {
        $shipment = new createShipment($this->authData, $shipmentRequest);

        return $this->service->createShipment($shipment);
    }

    /**
     * @param CreateReturnShipmentRequest $returnShipmentRequest
     * @return Model\createShipmentReturnResponse
     */
    public function createShipmentReturn(CreateReturnShipmentRequest $returnShipmentRequest)
    {
        $returnShipment = new createShipmentReturn($this->authData, $returnShipmentRequest);

        return $this->service->createShipmentReturn($returnShipment);
    }

    /**
     * @param ArrayOfShipmentfulldata $shipments
     * @return Model\createShipmentsResponse
     */
    public function createShipments(ArrayOfShipmentfulldata $shipments)
    {
        $createShipments = new createShipments($this->authData, $shipments);

        return $this->service->createShipments($createShipments);
    }

    /**
     * @param string $pickupDate
     * @param string $pickupTimeFrom
     * @param string $pickupTimeTo
     * @param string $additionalInfo
     * @param ArrayOfString $shipmentIdList
     * @param ShipmentOrderInfo $shipmentOrderInfo
     * @param boolean $courierWithLabel
     * @return Model\bookCourierResponse
     */
    public function bookCourier(
        $pickupDate,
        $pickupTimeFrom,
        $pickupTimeTo,
        $additionalInfo,
        $shipmentIdList,
        $shipmentOrderInfo,
        $courierWithLabel
    ) {
        $bookCourier = new bookCourier(
            $this->authData,
            $pickupDate,
            $pickupTimeFrom,
            $pickupTimeTo,
            $additionalInfo,
            $shipmentIdList,
            $shipmentOrderInfo,
            $courierWithLabel
        );

        return $this->service->bookCourier($bookCourier);
    }

    /**
     * @param DeleteShipmentRequest $shipmentRequest
     * @return Model\DeleteShipmentResponse
     */
    public function deleteShipment(DeleteShipmentRequest $shipmentRequest)
    {
        $shipment = new deleteShipment($this->authData, $shipmentRequest);

        return $this->service->deleteShipment($shipment);
    }

    /**
     * @param ArrayOfString $shipments
     * @return Model\deleteShipmentsResponse
     */
    public function deleteShipments(ArrayOfString $shipments)
    {
        $deleteShipments = new deleteShipments($this->authData, $shipments);

        return $this->service->deleteShipments($deleteShipments);
    }

    /**
     * @param ArrayOfString $orders
     * @return Model\cancelCourierBookingResponse
     */
    public function cancelCourierBooking(ArrayOfString $orders)
    {
        $cancelCourierBooking = new cancelCourierBooking($this->authData, $orders);

        return $this->service->cancelCourierBooking($cancelCourierBooking);
    }

    /**
     * @param string $createdFrom
     * @param string $createdTo
     * @param int $offset
     * @return Model\getMyShipmentsResponse
     */
    public function getMyShipments($createdFrom, $createdTo, $offset)
    {
        $getMyShipments = new getMyShipments($this->authData, $createdFrom, $createdTo, $offset);

        return $this->service->getMyShipments($getMyShipments);
    }

    /**
     * @param string $createdFrom
     * @param string $createdTo
     * @return Model\getMyShipmentsCountResponse
     */
    public function getMyShipmentsCount($createdFrom, $createdTo)
    {
        $getMyShipmentsCount = new getMyShipmentsCount($this->authData, $createdFrom, $createdTo);

        return $this->service->getMyShipmentsCount($getMyShipmentsCount);
    }

    /**
     * @param ArrayOfItemtoprint $items
     * @return Model\getLabelsResponse
     */
    public function getLabels(ArrayOfItemtoprint $items)
    {
        $labels = new getLabels($this->authData, $items);

        return $this->service->getLabels($labels);
    }

    /**
     * @param ArrayOfItemtolabeldata $items
     * @return Model\getLabelsDataResponse
     */
    public function getLabelsData(ArrayOfItemtolabeldata $items)
    {
        $labelsData = new getLabelsData($this->authData, $items);

        return $this->service->getLabelsData($labelsData);
    }

    /**
     * @param string $date
     * @param string $type
     * @return Model\getPnpResponse|mixed
     */
    public function getPnp($date, $type)
    {
        $pnpRequest = new PnpRequest();
        $pnpRequest->setAuthData($this->authData);
        $pnpRequest->setDate($date);
        $pnpRequest->setType($type);

        $method = new getPnp($pnpRequest);

        return $this->service->getPnp($method);
    }

    /**
     * @param string $shipmentId
     * @return Model\getShipmentScanResponse
     */
    public function getShipmentScan($shipmentId)
    {
        $method = new getShipmentScan($this->authData, $shipmentId);

        return $this->service->getShipmentScan($method);
    }

    /**
     * @param string $postCode
     * @param string $pickupDate
     * @return Model\getPostalCodeServicesResponse
     */
    public function getPostalCodeServices($postCode, $pickupDate)
    {
        $method = new getPostalCodeServices($this->authData, $postCode, $pickupDate);

        return $this->service->getPostalCodeServices($method);
    }

    /**
     * @return Model\GetReturnParamsResponse
     */
    public function getReturnParams()
    {
        $method = new getReturnParams($this->authData);

        return $this->service->getReturnParams($method);
    }

    /**
     * @param string $shipmentId
     * @return Model\getTrackAndTraceInfoResponse
     */
    public function getTrackAndTraceInfo($shipmentId)
    {
        $tracking = new getTrackAndTraceInfo($this->authData, $shipmentId);

        return $this->service->getTrackAndTraceInfo($tracking);
    }

    /**
     * @param string $city
     * @param string $postCode
     * @param string $country
     * @param int $radius
     * @return Model\GetNearestServicepointsResponse
     */
    public function getNearestServicepoints($city, $postCode, $country, $radius)
    {
        $request = new GetNearestServicepointsRequest();
        $request->setCity($city);
        $request->setPostcode($postCode);
        $request->setCountry($country);
        $request->setRadius($radius);

        $method = new getNearestServicepoints($this->authData, $request);

        return $this->service->getNearestServicepoints($method);
    }

    /**
     * @return Model\GetInternationalParamsResponse
     */
    public function getInternationalParams()
    {
        $method = new getInternationalParams($this->authData);

        return $this->service->getInternationalParams($method);
    }

    /**
     * @param ArrayOfReturnitemtoprint $items
     * @return Model\getReturnByWaybillResponse
     */
    public function getReturnByWaybill(ArrayOfReturnitemtoprint $items)
    {
        $method = new getReturnByWaybill($this->authData, $items);

        return $this->service->getReturnByWaybill($method);
    }

    /**
     * @return DHL24WebapiService
     */
    public function getService()
    {
        return $this->service;
    }
}
