<?php

declare(strict_types=1);

namespace DHLClient\Model;

use DHLClient\Exception\InvalidArgumentException;

/**
 * Based on https://sandbox.dhl24.com.pl/webapi2/doc/info.html?id=itemToPrint
 *
 * LP - list przewozowy
 * BLP - etykieta BLP
 * LBLP - etykieta BLP w formacie PDF A4
 * ZBLP - etykieta BLP w formacie dla drukarek Zebra
 */
final class LabelType
{
    private const LP = 'LP';
    private const BLP = 'BLP';
    private const LBLP = 'LBLP';
    private const ZBLP = 'ZBLP';
    private string $value;

    public function __construct(string $value)
    {
        if (!in_array($value, [
            self::LP,
            self::BLP,
            self::LBLP,
            self::ZBLP,
        ])) {
            throw new InvalidArgumentException();
        }

        $this->value = $value;
    }

    public function __toString()
    {
        return $this->value;
    }

    public static function lblp() : self
    {
        return new self(self::LBLP);
    }
}
