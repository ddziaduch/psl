<?php

declare(strict_types=1);

namespace Psl\Str;

/**
 * Returns the string with all alphabetic characters converted to uppercase.
 *
 * @psalm-pure
 */
function uppercase(string $string): string
{
    return \mb_strtoupper($string, encoding($string));
}
