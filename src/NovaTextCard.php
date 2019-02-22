<?php

namespace Ericlagarda\NovaTextCard;

use Laravel\Nova\Card;

class TextCard extends Card
{

    /**
     * @param $component
     */
    public function __construct($component = null)
    {
        $this->withMeta([
            'center'         => true,
            'height'         => 'default',
            'heading'        => false,
            'text'           => false,
            'headingRaw'     => false,
            'textRaw'        => false,
            'forceFullWidth' => false,
        ]);
    }

    /**
     * The width of the card (1/3, 1/2, or full).
     *
     * @var string
     */
    public $width = '1/3';

    /**
     * Get the component name for the element.
     *
     * @return string
     */
    public function component()
    {
        return 'text-card';
    }

    /**
     * Set the text link
     *
     * @param  array  $text
     *
     * @return array
     */
    public function center($boolean = true)
    {
        return $this->withMeta(['center' => $boolean]);
    }

    /**
     * Set the text link
     *
     * @param  array  $text
     *
     * @return array
     */
    public function heading($text)
    {
        return $this->withMeta(['heading' => $text]);
    }

    /**
     * Set the height of card
     *
     * @param  array  $text
     *
     * @return array
     */
    public function headingAsHtml()
    {
        return $this->withMeta(['headingRaw' => true]);
    }

    /**
     * Set the text link
     *
     * @param  array  $text
     *
     * @return array
     */
    public function text($text)
    {
        return $this->withMeta(['text' => $text]);
    }

    /**
     * Set the height of card
     *
     * @param  array  $text
     *
     * @return array
     */
    public function textAsHtml()
    {
        return $this->withMeta(['textRaw' => true]);
    }

    /**
     * Set the height of card
     *
     * @param  array  $text
     *
     * @return array
     */
    public function height($height = 'auto')
    {
        return $this->withMeta(['height' => $height]);
    }

    /**
     * Set the height of card
     *
     * @param  array  $text
     *
     * @return array
     */
    public function forceFullWidth()
    {
        return $this->withMeta(['forceFullWidth' => true, 'width' => '5/6']);
    }

    /**
     * Prepare the element for JSON serialization.
     *
     * @return array
     */
    public function jsonSerialize()
    {
        return array_merge([
            'name'  => str_random(16),
            'width' => $this->width,
        ], parent::jsonSerialize());
    }
}
