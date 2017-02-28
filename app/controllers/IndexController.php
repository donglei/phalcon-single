<?php

use Phalcon\Mvc\Controller;
/**
* 
*/
class IndexController extends ControllerBase
{
	
	public function indexAction()
	{
		$this->view->disable();
		$this->returnJson(['error_code'=>0]);

	}
}