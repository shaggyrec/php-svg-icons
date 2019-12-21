<?php

namespace Shaggyrec\SvgIcons\functions;

/**
 * @param \DOMNodeList $elements
 * @param string $color
 */
function setColor(\DOMNodeList $elements, string $color): void
{
    foreach ($elements as $element) {
        $element->setAttribute('fill', $color);
    }
}

/**
 * @return string
 */
function iconsDir(): string
{
    return __DIR__ . '/../icons/';
}
