<?php

/**
 * @package    dev
 * @author     David Molineus <david.molineus@netzmacht.de>
 * @copyright  2014 netzmacht creative David Molineus
 * @license    LGPL 3.0
 * @filesource
 *
 */

namespace Netzmacht\LeafletPHP\Definition\Vector;

use Netzmacht\LeafletPHP\Definition\GeoJson\ConvertsToGeoJsonFeature;
use Netzmacht\LeafletPHP\Definition\GeoJson\FeatureTrait;
use Netzmacht\LeafletPHP\Definition\HasEvents;
use Netzmacht\LeafletPHP\Definition\EventsTrait;
use Netzmacht\LeafletPHP\Definition\HasPopup;
use Netzmacht\LeafletPHP\Definition\MapObject;
use Netzmacht\LeafletPHP\Definition\MapObjectTrait;
use Netzmacht\LeafletPHP\Definition\PopupTrait;

/**
 * Abstract class Path for path based elements.
 *
 * @package Netzmacht\LeafletPHP\Definition\Vector
 */
abstract class Path extends AbstractLayer implements HasEvents, MapObject, HasPopup, ConvertsToGeoJsonFeature
{
    use EventsTrait;
    use MapObjectTrait;
    use PathOptionsTrait;
    use PopupTrait;
    use FeatureTrait;

    /**
     * The click event.
     *
     * @see http://leafletjs.com/reference.html#path-click
     */
    const EVENT_CLICK = 'click';

    /**
     * The dblclick event.
     *
     * @see http://leafletjs.com/reference.html#path-dblclick
     */
    const EVENT_DOUBLE_CLICK = 'dblclick';

    /**
     * The mousedown event.
     *
     * @see http://leafletjs.com/reference.html#path-mousedown
     */
    const EVENT_MOUSE_DOWM = 'mousedown';

    /**
     * The mouseover event.
     *
     * @see http://leafletjs.com/reference.html#path-mouseover
     */
    const EVENT_MOUSE_OVER = 'mouseover';

    /**
     * The mouseout event.
     *
     * @see http://leafletjs.com/reference.html#path-mouseout
     */
    const EVENT_MOUSE_OUT = 'mouseout';

    /**
     * The contextmenu event.
     *
     * @see http://leafletjs.com/reference.html#path-contextmenu
     */
    const EVENT_CONTEXT_MENU = 'contextmenu';

    /**
     * The add event.
     *
     * @see http://leafletjs.com/reference.html#path-add
     */
    const EVENT_ADD = 'add';

    /**
     * The remove event.
     *
     * @see http://leafletjs.com/reference.html#path-remove
     */
    const EVENT_REMOVE = 'remove';

    /**
     * The popupopen event.
     *
     * @see http://leafletjs.com/reference.html#path-popupopen
     */
    const EVENT_POPUP_OPEN = 'popupopen';

    /**
     * The popupclose event.
     *
     * @see http://leafletjs.com/reference.html#path-popupclose
     */
    const EVENT_POPUP_CLOSE = 'popupclose';

    /**
     * Get the type of the definition.
     *
     * @return string
     */
    public static function getType()
    {
        return 'Path';
    }

    /**
     * Bring path to the front.
     *
     * @return $this
     * @see    http://leafletjs.com/reference.html#path-bringtofront
     */
    public function bringToFront()
    {
        return $this->addMethod('bringToFront');
    }

    /**
     * Bring path to the back.
     *
     * @return $this
     * @see    http://leafletjs.com/reference.html#path-bringtoback
     */
    public function bringToBack()
    {
        return $this->addMethod('bringToBack');
    }

    /**
     * Redraw the path.
     *
     * @return $this
     * @see    http://leafletjs.com/reference.html#path-redraw
     */
    public function redraw()
    {
        return $this->addMethod('redraw');
    }

    /**
     * {@inheritdoc}
     */
    public function convertsFullyToGeoJson()
    {
        return true;
    }
}
