<?php

/**
 * @package    php-leaflet
 * @author     David Molineus <david.molineus@netzmacht.de>
 * @copyright  2015 netzmacht creative David Molineus
 * @license    LGPL 3.0
 * @filesource
 *
 */

namespace Netzmacht\LeafletPHP\Plugins\Omnivore;

/**
 * Class Kml creates the kml file loading request.
 *
 * @package Netzmacht\LeafletPHP\Plugins\Omnivore
 */
class Wkt extends OmnivoreLayer
{
    /**
     * {@inheritdoc}
     */
    public static function getType()
    {
        return 'Omnivore.Wkt';
    }
}
