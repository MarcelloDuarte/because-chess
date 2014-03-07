<?php

use SensioLabs\Behat\PageObjectExtension\PageObject\Page;

class PlayOnline extends Page
{
    protected $path = '/';

    public function fillRating($rating)
    {
        if (!$el = $this->find('css', '#rating')) {
            throw new \RuntimeException('Field rating not found');
        }
        $el->setValue($rating);
    }

    public function fillThreshold($threshold)
    {
        if (!$el = $this->find('css', '#threshold')) {
            throw new \RuntimeException('Field threshold not found');
        }
        $el->setValue($threshold);
    }
}