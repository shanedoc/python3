<?php  
//适配器模式
interface ITarget
{
	public function operation1();
	public function operation2();
}

interface IAdaptee
{
	function operation1();
}

class Adaptee implements IAdaptee
{
	public function operation1(){
		print('1111');
	}
}

class Adapter extends Adaptee implements ITarget,IAdaptee
{
	public function operation2(){
		print('2222');
	}
}



$adpater=new Adapter();
$adpater->operation1(); //原方法
$adpater->operation2(); //适配器方法









?>
