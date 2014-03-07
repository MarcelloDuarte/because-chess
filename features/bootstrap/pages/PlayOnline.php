<?php

use SensioLabs\Behat\PageObjectExtension\PageObject\Page;

class PlayOnline extends Page
{
    protected $path = '/';

    public function fillRating($rating)
    {
        if (!$el = $this->find('css', '#rating')) {
            throw \RuntimeException('Field player rating not found');
        }
        $el->setValue($rating);
    }
}