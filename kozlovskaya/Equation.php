<?php namespace kozlovskaya;

Class Equation{
	public function solve($a, $b){
			
			if($a == 0){
                throw new kozlovskayaException("Ошибка: уравнения не существует.");
			}
			return $this->X=array(-($b/$a));
	}
	
	protected $X;
}

?>