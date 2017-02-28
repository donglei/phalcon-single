<?php

use Phalcon\Mvc\Controller;
/**
* 
*/
class IndexController extends ControllerBase
{
	
	public function indexAction()
	{
		return $this->returnJson(['error_code'=>0]);
		//return $this->returnJson('{"error_code":10}');
	}
}