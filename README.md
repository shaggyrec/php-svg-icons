# PHP SVG ICONS

[![Build Status](https://travis-ci.org/shaggyrec/php-svg-icons.svg?branch=master)](https://travis-ci.org/shaggyrec/php-svg-icons)

### The library for providing svg icons to the php

## Install
    
    composer require shaggyrec/php-svg-icons
    
## Usage
 
#### Get one icon:
    echo Shaggyrec\SvgIcons\icon('twitter');

#### Get all icons:
    echo Shaggyrec\SvgIcons\icons();
    
#### Find icons by name:
    echo Shaggyrec\SvgIcons\icons('twi');

#### Customize icons

    echo Shaggyrec\SvgIcons\icon('twitter', '#fff', 24, 24);
    echo Shaggyrec\SvgIcons\icons('twi', '#fff', 24, 24);


# Documentation

## icon

- params
    - [0] name (string, mandatory) - icon name
    - [1] color (string, optional) - set color
    - [2] width (int, optional) - set width
    - [3] height (int, optional) - set height
- returns the svg icon as string

## icons

- params
    - [0] searchString (string, optional) - search string for icon name
    - [1] color (string, optional) - set color
    - [2] width (int, optional) - set width
    - [3] height (int, optional) - set height
- returns the array of
    ['name' => 'icon-name', 'value' => '<svg.....']
    
You can see all awailable icons in the `./icons` direcory
