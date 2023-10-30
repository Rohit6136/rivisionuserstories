<?php
namespace Rohit\Tate\Plugin;

class ModifyProductDescription
{
    public function afterToHtml(\Magento\Catalog\Block\Product\View\Description $subject, $result)
    {
        // Modify the product description
        return 'Modified Product Description: '. $result;
    }
}
