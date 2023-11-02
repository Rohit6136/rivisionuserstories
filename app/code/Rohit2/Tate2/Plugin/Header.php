<?php

namespace Rohit2\Tate2\Plugin;

class Header
{
    public function afterGetWelcome(\Magento\Theme\Block\Html\Header $subject, $result)
    {
        return 'New rohit welcome message';
    }
}
