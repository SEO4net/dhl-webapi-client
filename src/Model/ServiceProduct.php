<?php

declare(strict_types=1);

namespace DHLClient\Model;

use DHLClient\Exception\InvalidArgumentException;

/**
 * Based on https://sandbox.dhl24.com.pl/webapi2/doc/info.html?id=serviceDefinition
 *
 * AH - krajowa
 * PR - premium
 * 09 - domestic 09
 * 12 - domestic 12
 * EK - Connect
 * PI - International
 */
final class ServiceProduct
{
    private const AH = 'AH';
    private const PR = 'PR';
    private const _09 = '09';
    private const _12 = '12';
    private const EK = 'EK';
    private const PI = 'PI';

    private string $value;

    public function __construct(string $value)
    {
        if (!in_array($value, [
            self::AH,
            self::PR,
            self::_09,
            self::_12,
            self::EK,
            self::PI,
        ])) {
            throw new InvalidArgumentException();
        }

        $this->value = $value;
    }

    public function __toString()
    {
        return $this->value;
    }

    public static function ah() : self
    {
        return new self(self::AH);
    }
}
