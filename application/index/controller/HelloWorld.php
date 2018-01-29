<?php  
namespace app\index\controller;

class HelloWorld
{
	public function index($name='World56')
	{return 'Hello,'. $name. '今天真高兴!';}
}
