<?php

namespace Rohit2\Tate2\Plugin;

class Product
{
    public function afterGetName(\Magento\Catalog\Model\Product $subject, $result)
    {
        if ($subject->getFinalPrice() < 60) {
            $result .= ' On Sale!';
        }
        return $result;
    }
}
