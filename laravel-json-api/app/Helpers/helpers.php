<?php

/**
 * Parse headers to collapse internal arrays
 *
 * @param array $headers
 * @return array
 */
function parseHeaders(array $headers): array
{
    return collect($headers)->map(function ($item) {
        return $item[0];
    })->toArray();
}
