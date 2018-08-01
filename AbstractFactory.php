<?php 
//生产引擎的标准
interface engineNorms{
	function engine();
}
 
class carEngine implements engineNorms{
 
	public function engine(){
		return '汽车引擎';
	}
 
}
 
class busEngine implements engineNorms{
	
	public function engine(){
		return '巴士车引擎';
	}
	
}
 
//生产车身的标准
interface bodyNorms{
	function body();
}
 
class carBody implements bodyNorms{
 
	public function body(){
		return '汽车车身';
	}
 
}
 
class busBody implements bodyNorms{
	
	public function body(){
		return '巴士车车身';
	}
	
}
 
//生产车轮的标准
interface whellNorms{
	function whell();
}
 
class carWhell implements whellNorms{
 
	public function whell(){
		return '汽车轮子';
	}
 
}
 
class busWhell implements whellNorms{
	
	public function whell(){
		return '巴士车轮子';
	}
	
}
 
//工厂标准
interface factory{
	static public function getInstance($type);
}
 
//汽车工厂
class carFactory implements factory{
	
	static public function getInstance($type){
		$instance='';
		switch($type){
			case 'engine':
				$instance=new carEngine();
				break;
			case 'body':
				$instance=new carBody();
				break;
			case 'whell':
				$instance=new carWhell();
				break;	
			default:
				throw new Exception('汽车工厂无法生产这种产品');
		}
		return $instance;
	}
	
}
 
//巴士车工厂
class busFactory implements factory{
	
	static public function getInstance($type){
		$instance='';
		switch($type){
			case 'engine':
				$instance=new busEngine();
				break;
			case 'body':
				$instance=new busBody();
				break;
			case 'whell':
				$instance=new busWhell();
				break;
			default:
				throw new Exception('巴士车工厂无法生产这种产品');
		}
		return $instance;
	}
	
}
 
$car['engine']=carFactory::getInstance('engine')->engine();
$car['body']=carFactory::getInstance('body')->body();
$car['whell']=carFactory::getInstance('whell')->whell();
print_r($car);
 
$bus['engine']=busFactory::getInstance('engine')->engine();
$bus['body']=busFactory::getInstance('body')->body();
$bus['whell']=busFactory::getInstance('whell')->whell();
print_r($bus);