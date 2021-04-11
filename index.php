<?php

class A
{
}

class B extends A
{
	public function __construct ($b)
	{
		$this->b = $b;
	}

	protected $b;
}

class C extends B
{
    public function __construct ($a, $b, $c)
    {
        $this->c = $c;
        $this->a = $a;
        parent::__construct($b);
    }

    protected $c;
    protected $a;
}

$a1 = new A();
$a2 = new A();
$a3 = new A();
$b4 = new B($a2);
$c5 = new C($a1, $a3, $b4);

var_dump ($c5);

?> 