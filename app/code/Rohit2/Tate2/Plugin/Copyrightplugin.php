<?php

namespace Rohit2\Tate2\Plugin;

class Copyrightplugin
{
    public function afterGetCopyright(\Magento\Theme\Block\Html\Footer $subject, $result)
    {
        return 'New rohit copyright text';
    }
}
