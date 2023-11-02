<?php
namespace Rohit\Tate\Plugin;

class ModifyProductDescription
{
    protected $vari = false;
    public function afterGetProduct(\Magento\Catalog\Block\Product\View\Description $subject, $result)
    {
        // var_dump($result);

        if(!$this->vari){
            $curr=$result->getData('description');
            $newdis =$curr . "<br><p>custom rohit description</p>";
            $result->setDescription($newdis);
            $this->vari =true;
        }
    }
}
