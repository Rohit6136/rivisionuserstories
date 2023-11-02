<?php

namespace Rohit2\Tate2\Plugin;

class Breadcrumbs2
{
    public function beforeAddCrumb(\Magento\Theme\Block\Html\Breadcrumbs $subject, $crumbName, $crumbInfo)
    {
        // var_dump($crumbInfo);
        $crumbInfo['label'] = 'Hummingbird ' . $crumbInfo['label'];   
        return [$crumbName, $crumbInfo];
    }
}


