<?php

class A
{
	function slo($a, $b)
	{
		if($a==0)
		{
			return null;
		}
	return $this->x==-$b/$a;
	}
	protected $x;
}

class B extends A
{
	function long($a, $b, $c)
	{
		if ($a==0) return parent::line ($b,$c);
		$d=$this->discriminant ($a, $b, $c);

		if($d==0)
		{
			return $this->x=array ((-$b)/(2*$a));
		}

		if($d>0)
		{
			return $this->x=array ((-$b)/(2*$a),(-$b)/(2*$a));
		}
		return null;
	}
	protected function discriminant ($a, $b, $c)
	{
		return(($b*$b)-4*$a*$c);
	}

}

$a1 = new A();
$b2 = new B();
$a1->slo (45, -32);
$b2->long (28, 15, -34);

var_dump ($a1);
var_dump ($b2);


?> 