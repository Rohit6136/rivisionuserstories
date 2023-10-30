<?php

namespace Rohit\Tate\Block;

use Magento\Catalog\Api\Data\CategoryInterface;

class Test
{
 protected $categoryInterface;
 protected $array;
 protected $string;
 public function __construct(
 CategoryInterface $categoryInterface,
 array $array = [3, 4, 5, 7],
 string $string = "rohit"
 ) {
 $this->categoryInterface = $categoryInterface;
 $this->array = $array;
 $this->string = $string;
 }

 public function displayParams()
 {
 echo "Array: ";
 print_r($this->array);
 echo "String: " . $this->string;
 }
}