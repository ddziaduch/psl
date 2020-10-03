<?php

declare(strict_types=1);

namespace Psl\Str\Grapheme;

use function grapheme_strlen;

/**
 * Returns the length of the given string in grapheme units
 *
 * @psalm-pure
 */
function length(string $string): int
{
    return (int) grapheme_strlen($string);
}
