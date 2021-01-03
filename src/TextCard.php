<?php

namespace Ericlagarda\NovaTextCard;

use Illuminate\Support\Str;
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
     * Center contents.
     *
     * @param  bool  $boolean
     *
     * @return $this
     */
    public function center($boolean = true)
    {
        return $this->withMeta(['center' => $boolean]);
    }

    /**
     * Set the heading contents.
     *
     * @param  string  $text
     *
     * @return $this
     */
    public function heading($text)
    {
        return $this->withMeta(['heading' => $text]);
    }

    /**
     * Render heading contents as HTML.
     *
     * @return $this
     */
    public function headingAsHtml()
    {
        return $this->withMeta(['headingRaw' => true]);
    }

    /**
     * Set the text contents.
     *
     * @param  string  $text
     *
     * @return $this
     */
    public function text($text)
    {
        return $this->withMeta(['text' => $text]);
    }

    /**
     * Render text contents as HTML.
     *
     * @return $this
     */
    public function textAsHtml()
    {
        return $this->withMeta(['textRaw' => true]);
    }

    /**
     * Set the height of the card.
     *
     * @param  string  $height
     *
     * @return $this
     */
    public function height($height = 'auto')
    {
        return $this->withMeta(['height' => $height]);
    }

    /**
     * Force the full width of the card.
     *
     * @return $this
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
            'name'  => Str::random(16),
            'width' => $this->width,
        ], parent::jsonSerialize());
    }
}
