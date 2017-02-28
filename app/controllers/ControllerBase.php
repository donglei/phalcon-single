<?php
use Phalcon\Mvc\Controller;
use Phalcon\Http\Response;
/**
* 
*/
class ControllerBase extends Controller
{
	protected function returnJson($json_data)
	{
		$response = new Response();
		$response->setJsonContent($json_data);
		$response->send();
	}
		
}