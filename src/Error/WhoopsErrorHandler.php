<?php
namespace WhoopsCakephp\Error;

use Cake\Core\Configure;
use Cake\Error\BaseErrorHandler;
use Whoops\Handler\PrettyPageHandler;
use Whoops\Run;

class WhoopsErrorHandler extends BaseErrorHandler {

	protected function _displayError($error, $debug) {
		$Whoops = new Run();
		$Whoops->pushHandler(new PrettyPageHandler());
		return $Whoops->handleError(Configure::read('Error.errorLevel'), $error);
	}

	protected function _displayException($exception) {
		$Whoops = new Run();
		$Whoops->pushHandler(new PrettyPageHandler());
		return $Whoops->handleException($exception);
	}

}
