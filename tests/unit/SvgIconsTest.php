<?php


use PHPUnit\Framework\TestCase;
use function Shaggyrec\SvgIcons\icon;
use function Shaggyrec\SvgIcons\icons;

class SvgIconsTest extends TestCase
{
    public function testGetsOneIcon(): void
    {
        $this->assertStringContainsString('<svg', icon('logo-twitter'));
    }

    public function testGetIconsWithParams(): void
    {
        $icon = icon('logo-twitter', '#e5e5e5', 24, 30);
        $this->assertStringContainsString('width="24"', $icon);
        $this->assertStringContainsString('height="30"', $icon);
        $this->assertStringContainsString('fill="#e5e5e5"', $icon);
    }

    public function testGetAllIcons(): void
    {
        $this->assertStringContainsString(
            '<svg',
            icons()[0]
        );
    }

    public function testGetAllIconsWidthParams(): void
    {
        $icons = icons('twi', '#e5e5e5', 24, 30);
        $this->assertCount(2, $icons);
        $this->assertStringContainsString(
            '',
            $icons[0]
        );
        $this->assertStringContainsString('width="24"', $icons[0]);
        $this->assertStringContainsString('height="30"', $icons[0]);
        $this->assertStringContainsString('fill="#e5e5e5"', $icons[1]);
    }
}
