<?php 
namespace App\data;

class Bar
{
    private Foo $foo;

    public function __construct(Foo $foo)
    {
        $$this->foo = $foo;
    }

    public function bar(:string)
    {
        return $$this->foo->foo() . 'and Bar';
    }
}



?>