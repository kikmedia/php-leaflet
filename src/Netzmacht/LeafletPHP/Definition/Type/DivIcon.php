<?php

/**
 * @package    php-leaflet
 * @author     David Molineus <david.molineus@netzmacht.de>
 * @copyright  2015 netzmacht creative David Molineus
 * @license    LGPL 3.0
 * @filesource
 *
 */

namespace Netzmacht\LeafletPHP\Definition\Type;

/**
 * Class DivIcon represents an div based icon.
 *
 * @see     http://leafletjs.com/reference.html#divicon
 * @package Netzmacht\LeafletPHP\Definition\Type
 */
class DivIcon extends AbstractIcon
{
    /**
     * Default class name.
     *
     * @var string
     */
    protected static $defaultClassName = 'leaflet-div-icon';

    /**
     * {@inheritdoc}
     */
    public static function getType()
    {
        return 'DivIcon';
    }

    /**
     * Set icon html.
     *
     * @param string $html The icon html.
     *
     * @return $this
     */
    public function setHtml($html)
    {
        return $this->setOption('html', $html);
    }

    /**
     * Get icon html.
     *
     * @return string
     */
    public function getHtml()
    {
        return $this->getOption('html', '');
    }
}
