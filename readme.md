# Nova Text Card

A custom card for Laravel Nova to show Text in cards with some good options.

![preview](https://user-images.githubusercontent.com/74367/53241396-dd2f2600-36a1-11e9-8ee8-7341fbc58172.png)

## Installation

You can install the package in to a Laravel app that uses [Nova](https://nova.laravel.com) via composer:


```bash
composer require ericlagarda/nova-text-card
```

Then, register your new link in the `cards` method of the `NovaServiceProvider` or your `ResourceTool` class.

```php

public function cards()
{
    return [
        // ...
        // Examples from the preview image
 
        (new TextCard())
            ->forceFullWidth()
            ->heading('My custom awesome heading')
            ->text('Congue platea augue fames nullam morbi vehicula egestas lobortis lacus adipiscing eleifend'),

        (new TextCard())
            ->width('1/2')
            ->height(100)
            ->center(false)
            ->heading('Custom card no centered')
            ->text('Congue platea augue fames nullam morbi'),

        (new TextCard())
            ->width('1/2')
            ->height()
            ->text('<h4 class="font-light">This is a custom card with text and no heading. Height is set to auto.</h4>')
            ->textAsHtml(),

        (new TextCard())
            ->forceFullWidth()
            ->height(90)
            ->heading('<h1 class="text-3xl text-80 font-light">Just a heading text with a smile <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path class="fill-current" d="M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10-10-4.486-10-10 4.486-10 10-10zm0-2c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm6 14h-12c.331 1.465 2.827 4 6.001 4 3.134 0 5.666-2.521 5.999-4zm0-3.998l-.755.506s-.503-.948-1.746-.948c-1.207 0-1.745.948-1.745.948l-.754-.506c.281-.748 1.205-2.002 2.499-2.002 1.295 0 2.218 1.254 2.501 2.002zm-7 0l-.755.506s-.503-.948-1.746-.948c-1.207 0-1.745.948-1.745.948l-.754-.506c.281-.748 1.205-2.002 2.499-2.002 1.295 0 2.218 1.254 2.501 2.002z"/></svg></h1>')
            ->headingAsHtml(),
    ];
}
```

## Card options

* `->width('string')`: Width of the card.
* `->forceFullWidth()`: Force the card to be full width. A fix for nova cards order.
* `->height('string or number'):`Height of the Card. If is called without options height will be auto. Default to nova card height.
* `->center(boolean)`: If you want the text centered or not. Default to true
* `->heading('string or html')`: Heading text or custom html. Default to false. No heading text is shown.
* `->text('string or html')`: Text of the card or custom html. Default to false. No text is shown.
* `->headingAsHtml()`: If you want to print the heading as HTML
* `->textAsHtml()`: If you want to print the text as HTML




