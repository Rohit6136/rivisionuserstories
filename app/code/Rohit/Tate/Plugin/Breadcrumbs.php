<?php

namespace Rohit\Tate\Plugin;

class Breadcrumbs
{
    public function beforeAddCrumb(\Magento\Theme\Block\Html\Breadcrumbs $subject, $crumbName, $crumbInfo)
    {
        $crumbInfo['label'] = 'Hummingbird ' . $crumbInfo['label'];
        
        return [$crumbName, $crumbInfo];
    }
}


