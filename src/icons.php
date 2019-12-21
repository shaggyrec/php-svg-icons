<?php

namespace Shaggyrec\SvgIcons;

use function Shaggyrec\SvgIcons\functions\iconsDir;
use function Shaggyrec\SvgIcons\functions\setColor;

/**
 * @param string $name
 * @param string|null $color
 * @param int|null $width
 * @param int|null $height
 * @return string
 */
function icon(string $name, ?string $color = null, ?int $width = null, ?int $height = null): string
{
    $doc = new \DOMDocument();
    $doc->loadXML(file_get_contents(iconsDir() . $name . '.svg'));
    $svg = $doc->getElementsByTagName('svg');
    if ($width !== null) {
        $svg[0]->setAttribute('width', $width);
    }
    if ($height !== null) {
        $svg[0]->setAttribute('height', $height);
    }
    if ($color !== null) {
        setColor($doc->getElementsByTagName('path'), $color);
    }

    return $doc->C14N();
}

/**
 * @param string|null $searchString
 * @param string|null $color
 * @param int|null $width
 * @param int|null $height
 * @return array
 */
function icons(?string $searchString = null, ?string $color = null, ?int $width = null, ?int $height = null): array
{
    return array_map(
        static function ($icon) use ($color, $width, $height) {
            $iconName = str_replace('.svg', '', $icon);
            return [
                'name' => $iconName,
                'value' => icon(
                    $iconName,
                    $color,
                    $width,
                    $height
                )
            ];
        },
        array_values(array_filter(
            scandir(iconsDir()),
            static function ($file) use ($searchString) {
                if ($searchString !== null) {
                    return strpos($file, $searchString) !== false;
                }
                return is_file(iconsDir() . $file);
            }
        ))
    );
}
