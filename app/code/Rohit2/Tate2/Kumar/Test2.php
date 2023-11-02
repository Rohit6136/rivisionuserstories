<?php
namespace Rohit2\Tate2\Kumar;

use Magento\Catalog\Api\Data\CategoryInterface;

class Test2{
    protected $categoryinterface;
    protected $array;
    protected $string;
    public function __construct(CategoryInterface $categoryinterface,array $array=[3,4,5,6],string $string="rohit2"){
        $this->categoryinterface = $categoryinterface;
        $this->array = $array;
        $this->string = $string;
    }
    public function displayParams(){
        echo "string". $this->string;
        echo "array";
        print_r($this->array);
    }
}
?>