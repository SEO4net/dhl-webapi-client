<?php

namespace DHLClient\Model;

class ItemToPrint
{
    private ?string $shipmentId;
    private ?LabelType $labelType;

    public function __construct(
        ?string $shipmentId,
        ?LabelType $labelType
    ) {
        $this->shipmentId = $shipmentId;
        $this->labelType = $labelType;
    }

    public function getShipmentId(): ?string
    {
        return $this->shipmentId;
    }

    public function getLabelType(): ?LabelType
    {
        return $this->labelType;
    }
}
