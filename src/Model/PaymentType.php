<?php

declare(strict_types=1);

namespace DHLClient\Model;

use DHLClient\Exception\InvalidArgumentException;

final class PaymentType
{
    private const SHIPPER = 'SHIPPER';

    private string $value;

    public function __construct(string $value)
    {
        if (!in_array($value, [
            self::SHIPPER,
        ])) {
            throw new InvalidArgumentException();
        }

        $this->value = $value;
    }

    public function __toString()
    {
        return $this->value;
    }

    public static function shipper() : self
    {
        return new self(self::SHIPPER);
    }
}
