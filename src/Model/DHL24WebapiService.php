<?php

namespace DHLClient\Model;

class DHL24WebapiService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array(
        'getVersion' => 'DHLClient\\Model\\getVersion',
        'getVersionResponse' => 'DHLClient\\Model\\getVersionResponse',
        'AuthData' => 'DHLClient\\Model\\AuthData',
        'AddressData' => 'DHLClient\\Model\\AddressData',
        'ReceiverAddressData' => 'DHLClient\\Model\\ReceiverAddressData',
        'NeighbourAddress' => 'DHLClient\\Model\\NeighbourAddress',
        'PieceDefinition' => 'DHLClient\\Model\\PieceDefinition',
        'ArrayOfPiecedefinition' => 'DHLClient\\Model\\ArrayOfPiecedefinition',
        'PaymentData' => 'DHLClient\\Model\\PaymentData',
        'ServiceDefinition' => 'DHLClient\\Model\\ServiceDefinition',
        'ShipmentFullData' => 'DHLClient\\Model\\ShipmentFullData',
        'ArrayOfShipmentfulldata' => 'DHLClient\\Model\\ArrayOfShipmentfulldata',
        'createShipments' => 'DHLClient\\Model\\createShipments',
        'ShipmentBasicData' => 'DHLClient\\Model\\ShipmentBasicData',
        'ArrayOfShipmentbasicdata' => 'DHLClient\\Model\\ArrayOfShipmentbasicdata',
        'createShipmentsResponse' => 'DHLClient\\Model\\createShipmentsResponse',
        'ReturnItemToPrint' => 'DHLClient\\Model\\ReturnItemToPrint',
        'ArrayOfReturnitemtoprint' => 'DHLClient\\Model\\ArrayOfReturnitemtoprint',
        'getReturnByWaybill' => 'DHLClient\\Model\\getReturnByWaybill',
        'Label' => 'DHLClient\\Model\\Label',
        'CreateShipmentResponse' => 'DHLClient\\Model\\Response\\CreateShipmentResult',
        'ArrayOfCreateshipmentresponse' => 'DHLClient\\Model\\ArrayOfCreateshipmentresponse',
        'getReturnByWaybillResponse' => 'DHLClient\\Model\\getReturnByWaybillResponse',
        'Billing' => 'DHLClient\\Model\\Billing',
        'ReturnService' => 'DHLClient\\Model\\ReturnService',
        'ArrayOfReturnservice' => 'DHLClient\\Model\\ArrayOfReturnservice',
        'ReturnShipmentTime' => 'DHLClient\\Model\\ReturnShipmentTime',
        'ReturnShipmentInfo' => 'DHLClient\\Model\\ReturnShipmentInfo',
        'PreavisoContact' => 'DHLClient\\Model\\PreavisoContact',
        'ShipperAddress' => 'DHLClient\\Model\\ShipperAddress',
        'ReturnAddressat' => 'DHLClient\\Model\\ReturnAddressat',
        'ReturnShip' => 'DHLClient\\Model\\ReturnShip',
        'ReturnPackage' => 'DHLClient\\Model\\ReturnPackage',
        'ArrayOfReturnpackage' => 'DHLClient\\Model\\ArrayOfReturnpackage',
        'CreateReturnShipmentRequest' => 'DHLClient\\Model\\CreateReturnShipmentRequest',
        'createShipmentReturn' => 'DHLClient\\Model\\createShipmentReturn',
        'CreateReturnShipmentResponse' => 'DHLClient\\Model\\CreateReturnShipmentResponse',
        'ArrayOfCreatereturnshipmentresponse' => 'DHLClient\\Model\\ArrayOfCreatereturnshipmentresponse',
        'createShipmentReturnResponse' => 'DHLClient\\Model\\createShipmentReturnResponse',
        'ArrayOfString' => 'DHLClient\\Model\\ArrayOfString',
        'deleteShipments' => 'DHLClient\\Model\\deleteShipments',
        'DeleteNotification' => 'DHLClient\\Model\\DeleteNotification',
        'ArrayOfDeletenotification' => 'DHLClient\\Model\\ArrayOfDeletenotification',
        'deleteShipmentsResponse' => 'DHLClient\\Model\\deleteShipmentsResponse',
        'getMyShipments' => 'DHLClient\\Model\\getMyShipments',
        'getMyShipmentsResponse' => 'DHLClient\\Model\\getMyShipmentsResponse',
        'getMyShipmentsCount' => 'DHLClient\\Model\\getMyShipmentsCount',
        'getMyShipmentsCountResponse' => 'DHLClient\\Model\\getMyShipmentsCountResponse',
        'getPostalCodeServices' => 'DHLClient\\Model\\getPostalCodeServices',
        'PostalCodeServicesResponse' => 'DHLClient\\Model\\PostalCodeServicesResponse',
        'getPostalCodeServicesResponse' => 'DHLClient\\Model\\getPostalCodeServicesResponse',
        'getTrackAndTraceInfo' => 'DHLClient\\Model\\getTrackAndTraceInfo',
        'TrackAndTraceEvent' => 'DHLClient\\Model\\TrackAndTraceEvent',
        'ArrayOfTrackandtraceevent' => 'DHLClient\\Model\\ArrayOfTrackandtraceevent',
        'TrackAndTraceResponse' => 'DHLClient\\Model\\TrackAndTraceResponse',
        'getTrackAndTraceInfoResponse' => 'DHLClient\\Model\\getTrackAndTraceInfoResponse',
        'ShipmentOrderInfo' => 'DHLClient\\Model\\ShipmentOrderInfo',
        'bookCourier' => 'DHLClient\\Model\\bookCourier',
        'bookCourierResponse' => 'DHLClient\\Model\\bookCourierResponse',
        'cancelCourierBooking' => 'DHLClient\\Model\\cancelCourierBooking',
        'cancelCourierBookingResponse' => 'DHLClient\\Model\\cancelCourierBookingResponse',
        'ItemToPrint' => 'DHLClient\\Model\\ItemToPrint',
        'ArrayOfItemtoprint' => 'DHLClient\\Model\\ArrayOfItemtoprint',
        'getLabels' => 'DHLClient\\Model\\getLabels',
        'ItemToPrintResponse' => 'DHLClient\\Model\\ItemToPrintResponse',
        'ArrayOfItemtoprintresponse' => 'DHLClient\\Model\\ArrayOfItemtoprintresponse',
        'getLabelsResponse' => 'DHLClient\\Model\\getLabelsResponse',
        'PnpRequest' => 'DHLClient\\Model\\PnpRequest',
        'getPnp' => 'DHLClient\\Model\\getPnp',
        'PnpResponse' => 'DHLClient\\Model\\PnpResponse',
        'getPnpResponse' => 'DHLClient\\Model\\getPnpResponse',
        'getShipmentScan' => 'DHLClient\\Model\\getShipmentScan',
        'ScanToPrintResponse' => 'DHLClient\\Model\\ScanToPrintResponse',
        'getShipmentScanResponse' => 'DHLClient\\Model\\getShipmentScanResponse',
        'Service' => 'DHLClient\\Model\\Service',
        'ArrayOfService' => 'DHLClient\\Model\\ArrayOfService',
        'ShipmentTime' => 'DHLClient\\Model\\ShipmentTime',
        'ShipmentInfo' => 'DHLClient\\Model\\ShipmentInfo',
        'Address' => 'DHLClient\\Model\\Address',
        'Addressat' => 'DHLClient\\Model\\Addressat',
        'ReceiverAddress' => 'DHLClient\\Model\\ReceiverAddress',
        'ReceiverAddressat' => 'DHLClient\\Model\\ReceiverAddressat',
        'Ship' => 'DHLClient\\Model\\Ship',
        'Package' => 'DHLClient\\Model\\Package',
        'ArrayOfPackage' => 'DHLClient\\Model\\ArrayOfPackage',
        'CreateShipmentRequest' => 'DHLClient\\Model\\CreateShipmentRequest',
        'createShipment' => 'DHLClient\\Model\\createShipment',
        'createShipmentResponse' => 'DHLClient\\Model\\CreateShipmentResponse',
        'DeleteShipmentRequest' => 'DHLClient\\Model\\DeleteShipmentRequest',
        'deleteShipment' => 'DHLClient\\Model\\deleteShipment',
        'DeleteShipmentResponse' => 'DHLClient\\Model\\Response\\DeleteShipmentResult',
        'deleteShipmentResponse' => 'DHLClient\\Model\\DeleteShipmentResponse',
        'GetNearestServicepointsRequest' => 'DHLClient\\Model\\GetNearestServicepointsRequest',
        'getNearestServicepoints' => 'DHLClient\\Model\\getNearestServicepoints',
        'SearchAddress' => 'DHLClient\\Model\\SearchAddress',
        'Point' => 'DHLClient\\Model\\Point',
        'ArrayOfPoint' => 'DHLClient\\Model\\ArrayOfPoint',
        'GetNearestServicepointsResponse' => 'DHLClient\\Model\\GetNearestServicepointsResponse',
        'getNearestServicepointsResponse' => 'DHLClient\\Model\\getNearestServicepointsResponse',
        'getInternationalParams' => 'DHLClient\\Model\\getInternationalParams',
        'InternationalParam' => 'DHLClient\\Model\\InternationalParam',
        'ArrayOfInternationalparam' => 'DHLClient\\Model\\ArrayOfInternationalparam',
        'GetInternationalParamsResponse' => 'DHLClient\\Model\\GetInternationalParamsResponse',
        'getInternationalParamsResponse' => 'DHLClient\\Model\\getInternationalParamsResponse',
        'getReturnParams' => 'DHLClient\\Model\\getReturnParams',
        'ReturnParam' => 'DHLClient\\Model\\ReturnParam',
        'ArrayOfReturnparam' => 'DHLClient\\Model\\ArrayOfReturnparam',
        'GetReturnParamsResponse' => 'DHLClient\\Model\\GetReturnParamsResponse',
        'getReturnParamsResponse' => 'DHLClient\\Model\\getReturnParamsResponse',
        'ItemToLabelData' => 'DHLClient\\Model\\ItemToLabelData',
        'ArrayOfItemtolabeldata' => 'DHLClient\\Model\\ArrayOfItemtolabeldata',
        'getLabelsData' => 'DHLClient\\Model\\getLabelsData',
        'ShipmentTimeLabelData' => 'DHLClient\\Model\\ShipmentTimeLabelData',
        'Routing' => 'DHLClient\\Model\\Routing',
        'ShipperAddressLabelData' => 'DHLClient\\Model\\ShipperAddressLabelData',
        'ReceiverAddressLabelData' => 'DHLClient\\Model\\ReceiverAddressLabelData',
        'ServicePoint' => 'DHLClient\\Model\\ServicePoint',
        'LabelDataServiceDefinition' => 'DHLClient\\Model\\LabelDataServiceDefinition',
        'PieceDefinitionLabelData' => 'DHLClient\\Model\\PieceDefinitionLabelData',
        'ArrayOfPiecedefinitionlabeldata' => 'DHLClient\\Model\\ArrayOfPiecedefinitionlabeldata',
        'ItemToLabelDataResponse' => 'DHLClient\\Model\\ItemToLabelDataResponse',
        'ArrayOfItemtolabeldataresponse' => 'DHLClient\\Model\\ArrayOfItemtolabeldataresponse',
        'getLabelsDataResponse' => 'DHLClient\\Model\\getLabelsDataResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
        foreach (self::$classmap as $key => $value) {
            if (!isset($options['classmap'][$key])) {
                $options['classmap'][$key] = $value;
            }
        }
        $options = array_merge(
            array(
                'features' => 1,
            ),
            $options
        );
        if (!$wsdl) {
            $wsdl = 'https://dhl24.com.pl/webapi2.html';
        }
        parent::__construct($wsdl, $options);
    }

    /**
     * Sprawdzenie wersji webapi.
     *
     * @param getVersion $parameters
     * @return getVersionResponse
     */
    public function getVersion(getVersion $parameters)
    {
        return $this->__soapCall('getVersion', array($parameters));
    }

    /**
     * Definiowanie przesyłek w systemie DHL
     *
     * @param createShipments $parameters
     * @return createShipmentsResponse
     */
    public function createShipments(createShipments $parameters)
    {
        return $this->__soapCall('createShipments', array($parameters));
    }

    /**
     * Zwrot danych
     *
     * @param getReturnByWaybill $parameters
     * @return getReturnByWaybillResponse
     */
    public function getReturnByWaybill(getReturnByWaybill $parameters)
    {
        return $this->__soapCall('getReturnByWaybill', array($parameters));
    }

    /**
     * Stwórz przesyłkę zwrotną
     *
     * @param createShipmentReturn $parameters
     * @return createShipmentReturnResponse
     */
    public function createShipmentReturn(createShipmentReturn $parameters)
    {
        return $this->__soapCall('createShipmentReturn', array($parameters));
    }

    /**
     * Usuwanie przesyłek w systemie DHL
     *
     * @param deleteShipments $parameters
     * @return deleteShipmentsResponse
     */
    public function deleteShipments(deleteShipments $parameters)
    {
        return $this->__soapCall('deleteShipments', array($parameters));
    }

    /**
     * Pobieranie podstawowych danych o przesyłkach
     * Maksymalny zakres dat to 90 dni. Zwracane jest maksimum 100 przesyłek, jeśli jest ich więcej należy korzystać z offsetu.
     *
     * @param getMyShipments $parameters
     * @return getMyShipmentsResponse
     */
    public function getMyShipments(getMyShipments $parameters)
    {
        return $this->__soapCall('getMyShipments', array($parameters));
    }

    /**
     * Pobieranie podstawowych danych o ilości przesyłek
     * Maksymalny zakres dat to 90 dni.
     *
     * @param getMyShipmentsCount $parameters
     * @return getMyShipmentsCountResponse
     */
    public function getMyShipmentsCount(getMyShipmentsCount $parameters)
    {
        return $this->__soapCall('getMyShipmentsCount', array($parameters));
    }

    /**
     * Weryfikacja poprawności kodu pocztowego oraz pobranie dostępnych
     * w danej chwili usług przewozowych.
     * Odpowiedź metody jest funkcją godziny, w jakiej przychodzi żądanie (usługi terminowe
     * są dostępne do ustalonych godzin).
     *
     * @param getPostalCodeServices $parameters
     * @return getPostalCodeServicesResponse
     */
    public function getPostalCodeServices(getPostalCodeServices $parameters)
    {
        return $this->__soapCall('getPostalCodeServices', array($parameters));
    }

    /**
     * Pobranie danych na temat zdarzeń związanych z przesyłką o przekazanym identyfikatorze.
     *
     * @param getTrackAndTraceInfo $parameters
     * @return getTrackAndTraceInfoResponse
     */
    public function getTrackAndTraceInfo(getTrackAndTraceInfo $parameters)
    {
        return $this->__soapCall('getTrackAndTraceInfo', array($parameters));
    }

    /**
     * Zamawianie kuriera
     *
     * @param bookCourier $parameters
     * @return bookCourierResponse
     */
    public function bookCourier(bookCourier $parameters)
    {
        return $this->__soapCall('bookCourier', array($parameters));
    }

    /**
     * Anulowanie zamówionego kuriera
     *
     * @param cancelCourierBooking $parameters
     * @return cancelCourierBookingResponse
     */
    public function cancelCourierBooking(cancelCourierBooking $parameters)
    {
        return $this->__soapCall('cancelCourierBooking', array($parameters));
    }

    /**
     * Pobranie różnego rodzaju etykiet związanych z przesyłkami.
     * Za jednym wywołaniem można pobrać maksymalnie 3 etykiety
     *
     * @param getLabels $parameters
     * @return getLabelsResponse
     */
    public function getLabels(getLabels $parameters)
    {
        return $this->__soapCall('getLabels', array($parameters));
    }

    /**
     * Pobranie raportu Potwierdzenie Nadanych Przesyłek (PNP)
     *
     * @param getPnp $parameters
     * @return getPnpResponse
     */
    public function getPnp(getPnp $parameters)
    {
        return $this->__soapCall('getPnp', array($parameters));
    }

    /**
     * Pobieranie skanów LP w systemie DHL
     *
     * @param getShipmentScan $parameters
     * @return getShipmentScanResponse
     */
    public function getShipmentScan(getShipmentScan $parameters)
    {
        return $this->__soapCall('getShipmentScan', array($parameters));
    }

    /**
     * Definiowanie przesyłki w systemie DHL - metoda agregująca
     *
     * @param createShipment $parameters
     * @return CreateShipmentResponse
     */
    public function createShipment(createShipment $parameters)
    {
        return $this->__soapCall('createShipment', array($parameters));
    }

    /**
     * Usuwanie przesyłki w systemie DHL - metoda agregująca
     *
     * @param deleteShipment $parameters
     * @return DeleteShipmentResponse
     */
    public function deleteShipment(deleteShipment $parameters)
    {
        return $this->__soapCall('deleteShipment', array($parameters));
    }

    /**
     * Pobieranie najbliższych punktów serwisowych typu Last Mile bez COD
     *
     * @param getNearestServicepoints $parameters
     * @return GetNearestServicepointsResponse
     */
    public function getNearestServicepoints(getNearestServicepoints $parameters)
    {
        return $this->__soapCall('getNearestServicepoints', array($parameters));
    }

    /**
     * Pobieranie informacji o możliwościach przesyłek międzynarodowych
     *
     * @param getInternationalParams $parameters
     * @return GetInternationalParamsResponse
     */
    public function getInternationalParams(getInternationalParams $parameters)
    {
        return $this->__soapCall('getInternationalParams', array($parameters));
    }

    /**
     * Pobieranie informacji o możliwościach przesyłek międzynarodowych
     *
     * @param getReturnParams $parameters
     * @return GetReturnParamsResponse
     */
    public function getReturnParams(getReturnParams $parameters)
    {
        return $this->__soapCall('getReturnParams', array($parameters));
    }

    /**
     * Pobieranie informacji o przesyłkach
     *
     * @param getLabelsData $parameters
     * @return getLabelsDataResponse
     */
    public function getLabelsData(getLabelsData $parameters)
    {
        return $this->__soapCall('getLabelsData', array($parameters));
    }

}
