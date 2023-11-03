<?php

namespace Rohit2\Tate2\Block;

use Magento\Framework\View\Element\Template;

class MessageBlock extends Template
{
    public function getMessage()
    {
        return "This is displayed on all pages.";
    }
}