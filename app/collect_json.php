<?php

declare(strict_types=1);

require_once __DIR__ . '/autoload.php';

$source = require __DIR__ . '/../source/actions.php';

function merge(array $source, array $target = []): array
{
    foreach ($source as $value) {
        if (is_array($value)) {
            $target = merge($value, $target);

            continue;
        }

        $target[$value] = $value;
    }

    return $target;
}

$target = merge($source);

ksort($target);

$content = json_encode($target, JSON_PRETTY_PRINT ^ JSON_UNESCAPED_SLASHES ^ JSON_UNESCAPED_UNICODE);

file_put_contents(__DIR__ . '/../source/actions.json', $content);
