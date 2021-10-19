<?php

declare(strict_types=1);

namespace DHLClient\Model;

use DHLClient\Exception\InvalidArgumentException;
use function in_array;

final class DropOffType
{
    /**
     * The pickup location is already served by a regular courier and an additional pickup does
     * not need to be considered for this service.
     */
    private const REGULAR_PICKUP  = 'REGULAR_PICKUP';

    /**
     * The rating response returns products for which the pickup capability is given, based on ShipmentTimeStamp.
     */
    private const REQUEST_COURIER = 'REQUEST_COURIER';
    private const COURIER_ONLY = 'COURIER_ONLY';

    private string $value;

    public function __construct(string $value = self::REGULAR_PICKUP)
    {
        if (!in_array($value, [
            self::REGULAR_PICKUP, self::REQUEST_COURIER, self::COURIER_ONLY, ], true)) {
            throw new InvalidArgumentException('Argument must be either "REGULAR_PICKUP" or "REQUEST_COURIER" or "COURIER_ONLY"');
        }

        $this->value = $value;
    }

    public function __toString()
    {
        return $this->value;
    }

    public static function regularPickup() : self
    {
        return new self(self::REGULAR_PICKUP);
    }
}
