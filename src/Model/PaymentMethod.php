<?php

declare(strict_types=1);

namespace DHLClient\Model;

use DHLClient\Exception\InvalidArgumentException;

final class PaymentMethod
{
    private const CASH = 'CASH';
    private const BANK_TRANSFER = 'BANK_TRANSFER';

    private string $value;

    public function __construct(string $value)
    {
        if (!in_array($value, [
            self::CASH,
            self::BANK_TRANSFER,
        ])) {
            throw new InvalidArgumentException();
        }

        $this->value = $value;
    }

    public function __toString()
    {
        return $this->value;
    }

    public static function cash() : self
    {
        return new self(self::CASH);
    }

    public static function bankTransfer() : self
    {
        return new self(self::BANK_TRANSFER);
    }
}
