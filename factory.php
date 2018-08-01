<?php
//简单工厂模式
abstract class User
{
	public function __construct($name){
		$this->name=$name;
	}

	public function getName(){
		return $this->name;
	}

	public function addPermission(){
		return true;
	}

	public function modPermission(){
		return false;
	}

	public function delPermission(){
		return false;
	}

	public function elsePermission(){
		return true;
	}

	protected $name=null;
}

class NormalUser extends User{}

class AdminUser extends User
{
	public function addPermission(){
		return true;
	}

	public function delPermission(){
		return true;
	}

	public function elsePermission(){
		return false;
	}
}

class GustUser extends User
{
	public function modPermission(){
		return true;
	}

}

class UserFactory
{
	private static $users=array('lisa'=>'guest','tom'=>'admin','marry'=>'normal');
	static function createUsers($name){
		
		switch (self::$users[$name]){
			case 'guset':return new GustUser($name);
			case 'admin':return new AdminUser($name);
			case 'normal':return new NormalUser($name);
			default:return error;
		}

	}

}

function boolToStr($b)
{

	if($b==true){
		return 'yes<br/>';
	}else{
		return 'error<br/>';
	}
}

function displayPermission($obj)
{
	print $obj->getName()."'s permissions:<br/>";
	print 'add:'.boolToStr($obj->addPermission());
	print 'mod:'.boolToStr($obj->modPermission());
	print 'del:'.boolToStr($obj->delPermission());
	//print 'else:'.boolToStr($obj->elsePermission());
}

function displayRequirements($obj)
{
	if($obj->elsePermission()){
		print $obj->getName()."'s elsePermission:<br/>elsePermission:true";
	}
}

//$array = array('marry','tom');
$name ='marry';

displayPermission(UserFactory::createUsers($name));
displayRequirements(UserFactory::createUsers($name));





