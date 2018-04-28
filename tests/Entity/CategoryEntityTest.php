<?php
namespace App\Entity;
use PHPUnit\Framework\TestCase;

class CategoryEntityTest extends TestCase
{
    public function testCanSetName()
    {
        $category = new CategoryEntity();
        $category->setName('Popularne');
        $this->assertEquals('Popularne',$category->getName());
    }
}
