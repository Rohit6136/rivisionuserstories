<?php

namespace Rohit\Tate\Plugin;

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
