<?php
use Phalcon\Mvc\Controller;
use Phalcon\Http\Response;
/**
* 
*/
class ControllerBase extends Controller
{
	/**
	* 返回的是Response 对象
	*/
	protected function returnJson($json_data)
	{
		$this->view->disable();
		$response = new Response();
		if (is_array($json_data)) {
			$response->setJsonContent($json_data);
		}
		else if (is_string($json_data)) {
			$response->setContentType('application/json', 'UTF-8');
			$response->setContent($json_data);
		}
		
		return $response;
	}
		
}