<?php

declare(strict_types=1);

namespace DHLClient\Model;

use DHLClient\Exception\InvalidArgumentException;

final class PackageType
{
    private const ENVELOPE = 'ENVELOPE';
    private const PACKAGE = 'PACKAGE';
    private const PALLET = 'PALLET';

    private string $value;

    public function __construct(
        string $value
    ) {
        if (!in_array($value, [
            self::ENVELOPE,
            self::PACKAGE,
            self::PALLET,
        ], true)) {
            throw new InvalidArgumentException();
        }

        $this->value = $value;
    }

    public function __toString()
    {
        return $this->value;
    }

    public static function envelope() : self
    {
        return new self(self::ENVELOPE);
    }
}
