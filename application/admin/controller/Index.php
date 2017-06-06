<?php
namespace app\admin\controller;

use think\Controller;
class Index extends Controller
{
	public function Index()
	{
		//return 'this is admin index/Index/index';
		//var_dump(config());
		
		
		//return $this->display('index');
		$this->assign('name','jason');
		$this->assign('hobby','sing a song');
		return $this->fetch('index');
		//return view('index',['name'=>'jason']);
	}
	
	
}